// Convert static Radix combobox exports into native selects (global)
(function() {
  function runWhenReady(fn) {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', fn);
      return;
    }
    fn();
  }

  function optionListFor(labelText, fieldName) {
    var label = (labelText || '').toLowerCase();
    var name = (fieldName || '').toLowerCase();

    if (label.indexOf('german level') !== -1 || name.indexOf('german') !== -1) {
      return [
        { value: '', label: 'German Level *' },
        { value: 'none', label: 'No German yet' },
        { value: 'a1', label: 'A1' },
        { value: 'a2', label: 'A2' },
        { value: 'b1', label: 'B1' },
        { value: 'b2_or_higher', label: 'B2 or higher' }
      ];
    }

    if (label.indexOf('field of interest') !== -1 || label.indexOf('field *') !== -1 || name.indexOf('field') !== -1) {
      return [
        { value: '', label: 'Field of Interest *' },
        { value: 'healthcare_nursing', label: 'Healthcare & Nursing' },
        { value: 'it_technology', label: 'IT & Technology' },
        { value: 'engineering', label: 'Engineering' },
        { value: 'retail_sales', label: 'Retail & Sales' },
        { value: 'hospitality', label: 'Hospitality' },
        { value: 'logistics', label: 'Logistics' }
      ];
    }

    if (label.indexOf('current country') !== -1 || label.indexOf('country *') !== -1 || name.indexOf('country') !== -1) {
      return [
        { value: '', label: 'Current Country *' },
        { value: 'morocco', label: 'Morocco' },
        { value: 'spain', label: 'Spain' },
        { value: 'italy', label: 'Italy' },
        { value: 'germany', label: 'Germany' },
        { value: 'france', label: 'France' },
        { value: 'egypt', label: 'Egypt' },
        { value: 'algeria', label: 'Algeria' },
        { value: 'other', label: 'Other' }
      ];
    }

    return [];
  }

  function inferredName(labelText, currentName) {
    if (currentName) return currentName;
    var label = (labelText || '').toLowerCase();
    if (label.indexOf('german level') !== -1) return 'german_level';
    if (label.indexOf('field') !== -1) return 'field_of_interest';
    if (label.indexOf('country') !== -1) return 'current_country';
    return '';
  }

  runWhenReady(function() {
    var comboboxButtons = document.querySelectorAll('main form button[role="combobox"][aria-controls]');

    comboboxButtons.forEach(function(button) {
      var select = button.nextElementSibling;
      if (!select || select.tagName !== 'SELECT') return;

      var hiddenSelect = select.getAttribute('aria-hidden') === 'true' || select.tabIndex === -1;
      if (!hiddenSelect) return;

      var labelNode = button.querySelector('span');
      var labelText = labelNode ? labelNode.textContent.trim() : button.textContent.trim();
      var options = optionListFor(labelText, select.getAttribute('name'));
      if (!options.length) return;

      select.innerHTML = '';
      options.forEach(function(item) {
        var option = document.createElement('option');
        option.value = item.value;
        option.textContent = item.label;
        select.appendChild(option);
      });

      select.className = button.className;
      var resolvedName = inferredName(labelText, select.getAttribute('name'));
      if (resolvedName) select.setAttribute('name', resolvedName);
      if (button.getAttribute('aria-required') === 'true' || button.hasAttribute('required')) {
        select.setAttribute('required', '');
      }
      select.removeAttribute('aria-hidden');
      select.removeAttribute('tabindex');
      select.style.position = '';
      select.style.border = '';
      select.style.width = '';
      select.style.height = '';
      select.style.padding = '';
      select.style.margin = '';
      select.style.overflow = '';
      select.style.clip = '';
      select.style.whiteSpace = '';
      select.style.wordWrap = '';

      button.style.display = 'none';
    });
  });
})();

// Custom dropdown UI for all selects (global)
(function() {
  function runWhenReady(fn) {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', fn);
      return;
    }
    fn();
  }

  function isLeadSelect(select) {
    var name = (select.getAttribute('name') || '').toLowerCase();
    var knownNames = ['german_level', 'field_of_interest', 'field', 'current_country', 'country'];
    return knownNames.indexOf(name) !== -1;
  }

  function getSelectTargets() {
    function isCustomizableSelect(select) {
      if (!select || select.tagName !== 'SELECT') return false;
      if (select.multiple || select.hasAttribute('multiple')) return false;

      var size = parseInt(select.getAttribute('size') || '1', 10);
      if (!isNaN(size) && size > 1) return false;

      // Skip hidden selects (Radix combobox fallbacks)
      if (select.getAttribute('aria-hidden') === 'true') return false;
      if (select.tabIndex === -1) return false;

      // Skip phone country selects (inline within input groups)
      var name = (select.getAttribute('name') || '').toLowerCase();
      if (name === 'phonecountry' || name === 'phone_country') return false;

      // Skip selects styled as inline parts of other components
      var className = (select.className || '').toLowerCase();
      if (className.indexOf('rounded-l-lg') !== -1) return false;

      // Must have at least one option
      if (!select.options || !select.options.length) return false;

      return true;
    }

    return Array.prototype.filter.call(
      document.querySelectorAll('main select'),
      function(select) {
        if (select.dataset.gaCustomIgnore === '1') return false;
        if (select.dataset.gaCustomSelect === '1') return false;
        return isCustomizableSelect(select);
      }
    );
  }

  function closeAllDropdowns(exceptNode) {
    document.querySelectorAll('.azubi-ga-custom-select.open').forEach(function(node) {
      if (exceptNode && node === exceptNode) return;
      if (typeof node._gaCloseDropdown === 'function') {
        node._gaCloseDropdown();
        return;
      }
      node.classList.remove('open');
    });
  }

  function hasSmallHeight(select) {
    var className = select.className || '';
    return className.indexOf('h-9') !== -1;
  }

  function hasTallHeight(select) {
    var className = select.className || '';
    return className.indexOf('h-12') !== -1 || className.indexOf('h-11') !== -1;
  }

  function hasOptgroups(select) {
    return select.querySelectorAll('optgroup').length > 0;
  }

  function setOptions(select, list) {
    var oldValue = select.value;
    var oldSelected = select.options[select.selectedIndex];
    var oldText = oldSelected ? oldSelected.textContent.trim().toLowerCase() : '';

    select.innerHTML = '';
    list.forEach(function(item) {
      var option = document.createElement('option');
      option.value = item.value;
      option.textContent = item.label;
      select.appendChild(option);
    });

    var mappedValue = oldValue;
    if (oldValue === 'none') mappedValue = '';
    if (oldValue === 'b2_or_higher' || oldValue === 'b2+') mappedValue = 'b2';
    if (oldValue === 'it_technology') mappedValue = 'it_tech';
    if (oldValue === 'healthcare_nursing') mappedValue = 'healthcare';
    if (oldValue === 'retail_sales' || oldValue === 'sales') mappedValue = 'other';

    if (!mappedValue && oldText === 'a1') mappedValue = 'a1';
    if (!mappedValue && oldText === 'a2') mappedValue = 'a2';
    if (!mappedValue && oldText === 'b1') mappedValue = 'b1';
    if (!mappedValue && (oldText === 'b2' || oldText === 'b2+')) mappedValue = 'b2';
    if (!mappedValue && oldText === 'c1') mappedValue = 'c1';
    if (!mappedValue && oldText === 'c2') mappedValue = 'c2';
    if (!mappedValue && oldText === 'native') mappedValue = 'native';

    select.value = mappedValue;
    if (select.selectedIndex < 0) select.selectedIndex = 0;
  }

  function normalizeLeadSelect(select) {
    var name = (select.getAttribute('name') || '').toLowerCase();

    if (name === 'german_level') {
      setOptions(select, [
        { value: '', label: 'German Level *' },
        { value: 'a1', label: 'A1' },
        { value: 'a2', label: 'A2' },
        { value: 'b1', label: 'B1' },
        { value: 'b2', label: 'B2' },
        { value: 'c1', label: 'C1' },
        { value: 'c2', label: 'C2' },
        { value: 'native', label: 'Native' }
      ]);
      return;
    }

    if (name === 'field' || name === 'field_of_interest') {
      setOptions(select, [
        { value: '', label: 'Field *' },
        { value: 'engineering', label: 'Engineering' },
        { value: 'healthcare', label: 'Healthcare' },
        { value: 'it_tech', label: 'IT & Tech' },
        { value: 'hospitality', label: 'Hospitality' },
        { value: 'logistics', label: 'Logistics' },
        { value: 'other', label: 'Other' }
      ]);
      return;
    }

    if (name === 'country' || name === 'current_country') {
      if (select.options.length) {
        select.options[0].textContent = 'Country *';
      }
    }
  }

  function displayLabel(rawText) {
    var text = rawText || '';
    if (text === 'Field of Interest *') return 'Field *';
    if (text === 'Current Country *') return 'Country *';
    return text;
  }

  function buildCustomSelect(select) {
    if (!select || select.dataset.gaCustomSelect === '1') return;
    if (select.multiple) return;
    if (!select.options || !select.options.length) return;

    // Only normalize options for lead form selects
    if (isLeadSelect(select)) {
      normalizeLeadSelect(select);
    }

    var wrapper = document.createElement('div');
    wrapper.className = 'azubi-ga-custom-select';
    if (hasSmallHeight(select)) wrapper.classList.add('azubi-ga-custom-select--sm');
    if (hasTallHeight(select)) wrapper.classList.add('azubi-ga-custom-select--lg');
    var selectName = (select.getAttribute('name') || '').toLowerCase();
    var isWideSelect = selectName === 'field' || selectName === 'field_of_interest';
    if (isWideSelect) wrapper.classList.add('azubi-ga-custom-select--wide');

    select.parentNode.insertBefore(wrapper, select);
    wrapper.appendChild(select);

    select.classList.add('azubi-ga-custom-select-native');
    select.dataset.gaCustomSelect = '1';

    var trigger = document.createElement('button');
    trigger.type = 'button';
    trigger.className = 'azubi-ga-custom-select-trigger';
    trigger.setAttribute('aria-haspopup', 'listbox');
    trigger.setAttribute('aria-expanded', 'false');

    var label = document.createElement('span');
    label.className = 'azubi-ga-custom-select-label';

    var chevron = document.createElement('span');
    chevron.className = 'azubi-ga-custom-select-chevron';
    chevron.innerHTML = '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>';

    trigger.appendChild(label);
    trigger.appendChild(chevron);

    var menu = document.createElement('div');
    menu.className = 'azubi-ga-custom-select-menu';
    menu.setAttribute('role', 'listbox');

    wrapper.appendChild(trigger);
    wrapper.appendChild(menu);

    function getAnchorRect() {
      if (isWideSelect) {
        var form = trigger.closest('form');
        if (form) return form.getBoundingClientRect();
      }
      return trigger.getBoundingClientRect();
    }

    function attachMenuToBody() {
      if (menu.parentElement === document.body) return;
      document.body.appendChild(menu);
      menu.classList.add('azubi-ga-custom-select-menu--portal');
    }

    function restoreMenuToWrapper() {
      if (menu.parentElement !== wrapper) {
        wrapper.appendChild(menu);
      }
      menu.classList.remove('azubi-ga-custom-select-menu--portal');
      menu.style.left = '';
      menu.style.top = '';
      menu.style.width = '';
      menu.style.maxHeight = '';
    }

    function refreshLabel() {
      var selectedOption = select.options[select.selectedIndex];
      var selectedText = selectedOption ? selectedOption.textContent.trim() : '';
      var isPlaceholder = selectedOption && selectedOption.value === '';

      label.textContent = displayLabel(selectedText || 'Select an option');
      label.classList.toggle('is-placeholder', !!isPlaceholder);
    }

    function refreshSelectedState() {
      menu.querySelectorAll('.azubi-ga-custom-select-option').forEach(function(item) {
        var isSelected = item.getAttribute('data-value') === select.value;
        item.classList.toggle('is-selected', isSelected);
        item.setAttribute('aria-selected', isSelected ? 'true' : 'false');
      });
    }

    function buildOptionButton(option, index) {
      var item = document.createElement('button');
      item.type = 'button';
      item.className = 'azubi-ga-custom-select-option';
      item.setAttribute('role', 'option');
      item.setAttribute('data-value', option.value);
      item.textContent = option.textContent.trim();

      if (option.disabled) {
        item.disabled = true;
        item.classList.add('is-disabled');
      }

      if (index === select.selectedIndex) {
        item.classList.add('is-selected');
        item.setAttribute('aria-selected', 'true');
      } else {
        item.setAttribute('aria-selected', 'false');
      }

      item.addEventListener('click', function() {
        if (option.disabled) return;

        select.value = option.value;
        select.dispatchEvent(new Event('change', { bubbles: true }));
        select.dispatchEvent(new Event('input', { bubbles: true }));

        refreshLabel();
        refreshSelectedState();
        closeAllDropdowns();
      });

      return item;
    }

    function rebuildMenu() {
      menu.innerHTML = '';

      if (hasOptgroups(select)) {
        // Handle selects with optgroups
        var children = select.children;
        for (var c = 0; c < children.length; c++) {
          var child = children[c];
          if (child.tagName === 'OPTGROUP') {
            var groupHeader = document.createElement('div');
            groupHeader.className = 'azubi-ga-custom-select-group-label';
            groupHeader.textContent = child.label || '';
            menu.appendChild(groupHeader);

            var groupOptions = child.querySelectorAll('option');
            for (var g = 0; g < groupOptions.length; g++) {
              var optIndex = Array.prototype.indexOf.call(select.options, groupOptions[g]);
              menu.appendChild(buildOptionButton(groupOptions[g], optIndex));
            }
          } else if (child.tagName === 'OPTION') {
            var optIdx = Array.prototype.indexOf.call(select.options, child);
            menu.appendChild(buildOptionButton(child, optIdx));
          }
        }
      } else {
        // Simple flat options
        Array.prototype.slice.call(select.options).forEach(function(option, index) {
          menu.appendChild(buildOptionButton(option, index));
        });
      }
    }

    function positionFloatingMenu() {
      wrapper.classList.remove('drop-up');
      menu.classList.remove('drop-up');
      var rect = getAnchorRect();
      var viewportHeight = window.innerHeight || document.documentElement.clientHeight || 0;
      var viewportWidth = window.innerWidth || document.documentElement.clientWidth || 0;

      var spaceBelow = viewportHeight - rect.bottom - 10;
      var maxHeight = Math.max(160, Math.min(560, spaceBelow));
      var width = Math.min(rect.width, viewportWidth - 24);
      var left = Math.max(12, Math.min(rect.left, viewportWidth - width - 12));
      var top = Math.max(12, rect.bottom + 8);

      menu.style.width = Math.round(width) + 'px';
      menu.style.left = Math.round(left) + 'px';
      menu.style.top = Math.round(top) + 'px';
      menu.style.maxHeight = Math.round(maxHeight) + 'px';
    }

    function closeDropdown() {
      wrapper.classList.remove('open');
      wrapper.classList.remove('drop-up');
      menu.classList.remove('open');
      menu.classList.remove('drop-up');
      trigger.setAttribute('aria-expanded', 'false');
      restoreMenuToWrapper();
    }

    wrapper._gaCloseDropdown = closeDropdown;
    wrapper._gaPositionDropdown = positionFloatingMenu;

    trigger.addEventListener('click', function(event) {
      event.preventDefault();
      var isOpen = wrapper.classList.contains('open');

      if (isOpen) {
        closeDropdown();
        return;
      }

      closeAllDropdowns(wrapper);
      attachMenuToBody();
      positionFloatingMenu();
      wrapper.classList.add('open');
      menu.classList.add('open');
      trigger.setAttribute('aria-expanded', 'true');
    });

    select.addEventListener('change', function() {
      refreshLabel();
      refreshSelectedState();
    });

    rebuildMenu();
    refreshLabel();
    refreshSelectedState();
  }

  runWhenReady(function() {
    getSelectTargets().forEach(buildCustomSelect);

    document.addEventListener('click', function(event) {
      if (!event.target.closest('.azubi-ga-custom-select') && !event.target.closest('.azubi-ga-custom-select-menu--portal')) {
        closeAllDropdowns();
      }
    });

    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        closeAllDropdowns();
      }
    });

    window.addEventListener('resize', function() {
      closeAllDropdowns();
    });

    window.addEventListener('scroll', function() {
      closeAllDropdowns();
    }, true);
  });
})();

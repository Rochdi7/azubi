// FAQ accordion toggle (global)
(function() {
  var faqButtons = Array.prototype.filter.call(
    document.querySelectorAll('main button[aria-expanded]'),
    function(button) {
      // Skip buttons inside [data-faq-container] — handled by faq-interactive.js
      if (button.closest('[data-faq-container]')) return false;

      var content = button.nextElementSibling;
      if (!content || content.tagName !== 'DIV') return false;

      var className = content.className || '';
      return className.indexOf('transition-all') !== -1 &&
        (className.indexOf('max-h-0') !== -1 || className.indexOf('max-h-96') !== -1 || className.indexOf('max-h-[1000px]') !== -1);
    }
  );

  if (!faqButtons.length) return;

  function getContent(button) {
    return button.nextElementSibling;
  }

  function getChevron(button) {
    return button.querySelector('.lucide-chevron-down');
  }

  function getGroup(button) {
    return button.closest('.space-y-2, .space-y-3, .space-y-4, .space-y-6') || document;
  }

  function setExpanded(button, expanded) {
    var content = getContent(button);
    if (!content) return;

    button.setAttribute('aria-expanded', expanded ? 'true' : 'false');

    // Inline styles override static classes generated from the exported markup.
    content.style.overflow = 'hidden';
    content.style.maxHeight = expanded ? (content.scrollHeight + 'px') : '0px';
    content.style.opacity = expanded ? '1' : '0';

    var chevron = getChevron(button);
    if (chevron) {
      chevron.style.transform = expanded ? 'rotate(180deg)' : 'rotate(0deg)';
    }
  }

  faqButtons.forEach(function(button) {
    var isExpanded = button.getAttribute('aria-expanded') === 'true';
    setExpanded(button, isExpanded);

    button.addEventListener('click', function() {
      var shouldExpand = button.getAttribute('aria-expanded') !== 'true';
      var group = getGroup(button);

      if (shouldExpand) {
        faqButtons.forEach(function(otherButton) {
          if (otherButton !== button && getGroup(otherButton) === group) {
            setExpanded(otherButton, false);
          }
        });
      }

      setExpanded(button, shouldExpand);
    });
  });

  window.addEventListener('resize', function() {
    faqButtons.forEach(function(button) {
      if (button.getAttribute('aria-expanded') === 'true') {
        setExpanded(button, true);
      }
    });
  });
})();

// Radix-exported accordion fallback (e.g. Learn/Visa page)
(function() {
  var radixButtons = Array.prototype.filter.call(
    document.querySelectorAll('main button[aria-controls][aria-expanded]'),
    function(button) {
      return button.hasAttribute('data-radix-collection-item');
    }
  );

  if (!radixButtons.length) return;

  function getPanel(button) {
    var panelId = button.getAttribute('aria-controls');
    if (!panelId) return null;
    return document.getElementById(panelId);
  }

  function getItem(button) {
    return button.closest('[data-orientation="vertical"][data-state]');
  }

  function setRadixState(button, expanded) {
    var panel = getPanel(button);
    if (!panel) return;

    var state = expanded ? 'open' : 'closed';
    button.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    button.setAttribute('data-state', state);

    var heading = button.closest('h3[data-state]');
    if (heading) heading.setAttribute('data-state', state);

    var item = getItem(button);
    if (item) item.setAttribute('data-state', state);

    panel.setAttribute('data-state', state);
    panel.style.overflow = 'hidden';

    if (expanded) {
      panel.removeAttribute('hidden');
      panel.style.maxHeight = panel.scrollHeight + 'px';
      panel.style.opacity = '1';
    } else {
      panel.style.maxHeight = '0px';
      panel.style.opacity = '0';
      panel.setAttribute('hidden', '');
    }

    var chevron = button.querySelector('.lucide-chevron-down');
    if (chevron) {
      chevron.style.transform = expanded ? 'rotate(180deg)' : 'rotate(0deg)';
    }
  }

  radixButtons.forEach(function(button) {
    setRadixState(button, button.getAttribute('aria-expanded') === 'true');

    button.addEventListener('click', function() {
      var shouldExpand = button.getAttribute('aria-expanded') !== 'true';
      var item = getItem(button);
      var accordionRoot = item ? item.parentElement : null;

      if (accordionRoot) {
        accordionRoot.querySelectorAll('button[aria-controls][aria-expanded]').forEach(function(otherButton) {
          if (otherButton !== button) setRadixState(otherButton, false);
        });
      }

      setRadixState(button, shouldExpand);
    });
  });

  window.addEventListener('resize', function() {
    radixButtons.forEach(function(button) {
      if (button.getAttribute('aria-expanded') === 'true') {
        var panel = getPanel(button);
        if (panel) panel.style.maxHeight = panel.scrollHeight + 'px';
      }
    });
  });
})();

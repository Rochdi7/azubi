/*!
 * Azubi — FAQ Interactive Features
 *
 * Copyright (c) 2026 Azubi. All rights reserved.
 * Proprietary and confidential. Unauthorised copying, modification or
 * distribution of this file, via any medium, is strictly prohibited.
 */

/**
 * FAQ Interactive Features
 * - Search filtering (real-time text search across questions + answers)
 * - Category filter dropdown
 * - Independent accordion toggle (multiple can be open)
 * - Question count updates
 * - "No results" empty state
 */
(function () {
  var container = document.getElementById('faq-items');
  if (!container) return;

  var searchInput = document.getElementById('faq-search');
  var filterBtn = document.getElementById('faq-filter-btn');
  var countEl = document.getElementById('faq-count');
  var items = Array.prototype.slice.call(container.querySelectorAll('[data-category]'));
  var totalCount = items.length;

  // Current filter state
  var currentSearch = '';
  var currentCategory = 'all';

  // --- Category data ---
  var categories = [
    { slug: 'basics', name: 'Ausbildung Basics' },
    { slug: 'application', name: 'Application Process' },
    { slug: 'requirements', name: 'Requirements' },
    { slug: 'visa', name: 'Visa & Immigration' },
    { slug: 'language', name: 'Language' },
    { slug: 'finances', name: 'Finances & Costs' },
    { slug: 'career', name: 'Career & Sectors' },
    { slug: 'daily-life', name: 'Daily Life' }
  ];

  // Count questions per category
  var categoryCounts = {};
  categories.forEach(function (cat) { categoryCounts[cat.slug] = 0; });
  items.forEach(function (item) {
    var cat = item.getAttribute('data-category');
    if (categoryCounts[cat] !== undefined) categoryCounts[cat]++;
  });

  // --- Precompute searchable text per item ---
  var itemData = items.map(function (item) {
    var questionEl = item.querySelector('h3');
    var answerEl = item.querySelector('.text-muted-foreground.leading-relaxed');
    var question = (questionEl ? questionEl.textContent : '').toLowerCase();
    var answer = (answerEl ? answerEl.textContent : '').toLowerCase();
    return { el: item, question: question, answer: answer, category: item.getAttribute('data-category') };
  });

  // --- Override global accordion for FAQ items (allow multiple open) ---
  function initAccordions() {
    items.forEach(function (item) {
      var btn = item.querySelector('button[aria-expanded]');
      if (!btn) return;

      // Remove any existing click listeners from global JS by cloning
      var newBtn = btn.cloneNode(true);
      btn.parentNode.replaceChild(newBtn, btn);

      var content = newBtn.nextElementSibling;
      if (!content) return;

      // Set initial state
      var expanded = newBtn.getAttribute('aria-expanded') === 'true';
      setAccordionState(newBtn, content, expanded);

      newBtn.addEventListener('click', function () {
        var isExpanded = newBtn.getAttribute('aria-expanded') === 'true';
        setAccordionState(newBtn, content, !isExpanded);
      });
    });
  }

  function setAccordionState(btn, content, expanded) {
    btn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    content.style.overflow = 'hidden';
    content.style.transition = 'max-height 0.2s ease-in-out, opacity 0.2s ease-in-out';
    content.style.maxHeight = expanded ? content.scrollHeight + 'px' : '0px';
    content.style.opacity = expanded ? '1' : '0';

    var chevron = btn.querySelector('.lucide-chevron-down');
    if (chevron) {
      chevron.style.transition = 'transform 0.2s';
      chevron.style.transform = expanded ? 'rotate(180deg)' : 'rotate(0deg)';
    }
  }

  // --- Filter logic ---
  function applyFilters() {
    var search = currentSearch.toLowerCase().trim();
    var visibleCount = 0;

    itemData.forEach(function (data) {
      var matchCategory = currentCategory === 'all' || data.category === currentCategory;
      var matchSearch = !search || data.question.indexOf(search) !== -1 || data.answer.indexOf(search) !== -1;
      var visible = matchCategory && matchSearch;

      data.el.style.display = visible ? '' : 'none';
      if (visible) visibleCount++;
    });

    // Update count text
    if (countEl) {
      if (search || currentCategory !== 'all') {
        countEl.textContent = 'Found ' + visibleCount + ' question' + (visibleCount !== 1 ? 's' : '');
      } else {
        countEl.textContent = totalCount + ' frequently asked questions';
      }
    }

    // Show/hide no results state
    var noResults = document.getElementById('faq-no-results');
    if (visibleCount === 0) {
      if (!noResults) {
        noResults = document.createElement('div');
        noResults.id = 'faq-no-results';
        noResults.className = 'text-center py-12';
        noResults.innerHTML =
          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help h-12 w-12 text-muted-foreground mx-auto mb-4"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>' +
          '<p class="text-lg text-muted-foreground">No questions found matching your search.</p>' +
          '<button id="faq-clear-filters" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-4 py-2 mt-4 text-sm">Clear Filters</button>';
        container.appendChild(noResults);
        document.getElementById('faq-clear-filters').addEventListener('click', clearFilters);
      }
      noResults.style.display = '';
    } else if (noResults) {
      noResults.style.display = 'none';
    }

    // Update filter button active state
    updateFilterBtnState();
  }

  function clearFilters() {
    currentSearch = '';
    currentCategory = 'all';
    if (searchInput) searchInput.value = '';
    applyFilters();
    closePopover();
  }

  // --- Search input ---
  if (searchInput) {
    searchInput.addEventListener('input', function () {
      currentSearch = searchInput.value;
      applyFilters();
    });
  }

  // --- Category filter popover ---
  var popover = null;

  function updateFilterBtnState() {
    if (!filterBtn) return;
    var hasFilter = currentCategory !== 'all';

    // Remove old badge
    var oldBadge = filterBtn.querySelector('.azubi-faq-filter-badge');
    if (oldBadge) oldBadge.remove();

    if (hasFilter) {
      filterBtn.classList.add('bg-primary/10', 'text-primary');
      var badge = document.createElement('span');
      badge.className = 'azubi-faq-filter-badge ml-1.5 h-5 min-w-[20px] p-0 bg-primary text-primary-foreground text-xs flex items-center justify-center rounded-full';
      badge.textContent = '1';
      filterBtn.appendChild(badge);
    } else {
      filterBtn.classList.remove('bg-primary/10', 'text-primary');
    }
  }

  function createPopover() {
    if (popover) return popover;

    popover = document.createElement('div');
    popover.id = 'faq-filter-popover';
    popover.className = 'absolute right-0 top-full mt-2 z-50 w-[calc(100vw-2rem)] max-w-sm sm:w-80 p-4 bg-card border border-primary/20 rounded-xl shadow-lg';
    popover.style.display = 'none';

    var header = document.createElement('div');
    header.className = 'flex items-center gap-2 text-foreground font-semibold text-sm mb-2';
    header.innerHTML =
      '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sliders-horizontal h-4 w-4"><line x1="21" x2="14" y1="4" y2="4"></line><line x1="10" x2="3" y1="4" y2="4"></line><line x1="21" x2="12" y1="12" y2="12"></line><line x1="8" x2="3" y1="12" y2="12"></line><line x1="21" x2="16" y1="20" y2="20"></line><line x1="12" x2="3" y1="20" y2="20"></line><line x1="14" x2="14" y1="2" y2="6"></line><line x1="8" x2="8" y1="10" y2="14"></line><line x1="16" x2="16" y1="18" y2="22"></line></svg>' +
      'Filter by Category';
    popover.appendChild(header);

    var sep = document.createElement('div');
    sep.className = 'border-t border-border mb-3';
    popover.appendChild(sep);

    var list = document.createElement('div');
    list.className = 'space-y-1';

    // "All" button
    var allBtn = createCategoryButton('all', 'All Categories (' + totalCount + ')');
    list.appendChild(allBtn);

    // Category buttons
    categories.forEach(function (cat) {
      var btn = createCategoryButton(cat.slug, cat.name + ' (' + (categoryCounts[cat.slug] || 0) + ')');
      list.appendChild(btn);
    });

    popover.appendChild(list);

    // Clear filters button (shown when filter active)
    var clearDiv = document.createElement('div');
    clearDiv.id = 'faq-popover-clear';
    clearDiv.className = 'pt-3 mt-3 border-t border-border';
    clearDiv.style.display = currentCategory !== 'all' ? '' : 'none';
    var clearBtn = document.createElement('button');
    clearBtn.className = 'w-full inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-4 py-2 text-sm';
    clearBtn.textContent = 'Clear Filters';
    clearBtn.addEventListener('click', function () {
      clearFilters();
    });
    clearDiv.appendChild(clearBtn);
    popover.appendChild(clearDiv);

    // Insert popover relative to filter button
    filterBtn.parentElement.style.position = 'relative';
    filterBtn.parentElement.appendChild(popover);

    return popover;
  }

  function createCategoryButton(slug, label) {
    var btn = document.createElement('button');
    btn.setAttribute('data-filter-slug', slug);
    btn.className = 'w-full text-left px-3 py-2 rounded-lg transition-colors text-sm ' +
      (currentCategory === slug
        ? 'bg-primary/10 text-primary font-medium'
        : 'hover:bg-muted text-foreground');
    btn.textContent = label;
    btn.addEventListener('click', function () {
      currentCategory = slug;
      applyFilters();
      updatePopoverButtons();
      var clearDiv = document.getElementById('faq-popover-clear');
      if (clearDiv) clearDiv.style.display = currentCategory !== 'all' ? '' : 'none';
      closePopover();
    });
    return btn;
  }

  function updatePopoverButtons() {
    if (!popover) return;
    var btns = popover.querySelectorAll('[data-filter-slug]');
    for (var i = 0; i < btns.length; i++) {
      var slug = btns[i].getAttribute('data-filter-slug');
      if (slug === currentCategory) {
        btns[i].className = 'w-full text-left px-3 py-2 rounded-lg transition-colors text-sm bg-primary/10 text-primary font-medium';
      } else {
        btns[i].className = 'w-full text-left px-3 py-2 rounded-lg transition-colors text-sm hover:bg-muted text-foreground';
      }
    }
  }

  function openPopover() {
    var p = createPopover();
    updatePopoverButtons();
    p.style.display = '';
    filterBtn.setAttribute('aria-expanded', 'true');
  }

  function closePopover() {
    if (popover) popover.style.display = 'none';
    if (filterBtn) filterBtn.setAttribute('aria-expanded', 'false');
  }

  function togglePopover() {
    if (popover && popover.style.display !== 'none') {
      closePopover();
    } else {
      openPopover();
    }
  }

  if (filterBtn) {
    filterBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      togglePopover();
    });
  }

  // Close popover on outside click
  document.addEventListener('click', function (e) {
    if (popover && popover.style.display !== 'none') {
      if (!popover.contains(e.target) && e.target !== filterBtn && !filterBtn.contains(e.target)) {
        closePopover();
      }
    }
  });

  // Close popover on Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closePopover();
  });

  // --- Init ---
  initAccordions();
  updateFilterBtnState();
})();

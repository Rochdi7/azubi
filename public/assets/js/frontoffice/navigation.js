// Mobile Menu Toggle
(function() {
  var toggle = document.getElementById('mobile-menu-toggle');
  var overlay = document.getElementById('mobile-menu-overlay');
  if (!toggle || !overlay) return;

  function openMenu() {
    overlay.style.display = 'block';
    requestAnimationFrame(function() { overlay.style.opacity = '1'; });
  }
  function closeMenu() {
    overlay.style.opacity = '0';
    setTimeout(function() { overlay.style.display = 'none'; }, 300);
  }

  toggle.addEventListener('click', openMenu);
  overlay.addEventListener('click', function(e) {
    if (e.target === overlay) closeMenu();
  });
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && overlay.style.display === 'block') closeMenu();
  });

  // Mobile accordion
  overlay.querySelectorAll('.azubi-mobile-accordion-trigger').forEach(function(trigger) {
    trigger.addEventListener('click', function(e) {
      e.preventDefault();
      var accordion = trigger.closest('.azubi-mobile-accordion');
      var content = accordion.querySelector('.azubi-mobile-accordion-content');
      if (!content) return;
      var isOpen = content.style.display === 'flex';
      overlay.querySelectorAll('.azubi-mobile-accordion-content').forEach(function(c) { c.style.display = 'none'; });
      overlay.querySelectorAll('.azubi-mobile-accordion-trigger .lucide-chevron-right').forEach(function(ch) { ch.style.transform = ''; });
      if (!isOpen) {
        content.style.display = 'flex';
        trigger.querySelector('.lucide-chevron-right').style.transform = 'rotate(90deg)';
      }
    });
  });

  // Close on menu link click
  overlay.querySelectorAll('.azubi-mobile-menu-link, .azubi-mobile-sub-link').forEach(function(link) {
    link.addEventListener('click', closeMenu);
  });
})();

// Desktop dropdown toggle
(function() {
  var dropdowns = document.querySelectorAll('header .azubi-nav-has-dropdown');
  dropdowns.forEach(function(item) {
    var panel = item.querySelector('.azubi-nav-dropdown-panel');
    var trigger = item.querySelector('.azubi-nav-dropdown-trigger');
    if (!panel || !trigger) return;

    var closeTimer = null;
    function open() {
      clearTimeout(closeTimer);
      dropdowns.forEach(function(other) {
        var p = other.querySelector('.azubi-nav-dropdown-panel');
        if (p && p !== panel) { p.style.display = 'none'; p.style.opacity = '0'; }
      });
      panel.style.display = 'block';
      requestAnimationFrame(function() { panel.style.opacity = '1'; panel.style.visibility = 'visible'; });
    }
    function close() {
      panel.style.opacity = '0';
      panel.style.visibility = 'hidden';
      setTimeout(function() { if (panel.style.opacity === '0') panel.style.display = 'none'; }, 200);
    }

    item.addEventListener('mouseenter', function() { clearTimeout(closeTimer); open(); });
    item.addEventListener('mouseleave', function() { closeTimer = setTimeout(close, 100); });
    trigger.addEventListener('click', function(e) {
      e.preventDefault();
      if (panel.style.display === 'block') close(); else open();
    });
  });

  document.addEventListener('click', function(e) {
    if (!e.target.closest('.azubi-nav-has-dropdown')) {
      dropdowns.forEach(function(item) {
        var p = item.querySelector('.azubi-nav-dropdown-panel');
        if (p) { p.style.display = 'none'; p.style.opacity = '0'; p.style.visibility = 'hidden'; }
      });
    }
  });
})();

(function() {
  var tabs = document.querySelectorAll('[role="tab"]');
  var panels = document.querySelectorAll('[role="tabpanel"]');
  if (!tabs.length || !panels.length) return;

  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      var targetId = tab.getAttribute('aria-controls');

      // Deactivate all tabs
      tabs.forEach(function(t) {
        t.setAttribute('aria-selected', 'false');
        t.setAttribute('data-state', 'inactive');
        t.setAttribute('tabindex', '-1');
      });

      // Hide all panels
      panels.forEach(function(p) {
        p.setAttribute('data-state', 'inactive');
        p.setAttribute('hidden', '');
      });

      // Activate clicked tab
      tab.setAttribute('aria-selected', 'true');
      tab.setAttribute('data-state', 'active');
      tab.setAttribute('tabindex', '0');

      // Show target panel
      var panel = document.getElementById(targetId);
      if (panel) {
        panel.setAttribute('data-state', 'active');
        panel.removeAttribute('hidden');
      }
    });
  });
})();

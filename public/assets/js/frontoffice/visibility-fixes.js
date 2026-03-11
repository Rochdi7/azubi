    // Reveal exported animation placeholders (global)
    (function() {
      function runWhenReady(fn) {
        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', fn);
          return;
        }
        fn();
      }

      function isCollapsibleOrIntentionallyHidden(el, styleText) {
        if (el.hasAttribute('hidden')) return true;
        if (el.getAttribute('aria-hidden') === 'true') return true;
        if (el.getAttribute('role') === 'region') return true;
        if (el.getAttribute('data-state') === 'closed') return true;

        if (styleText.indexOf('display: none') !== -1) return true;
        if (styleText.indexOf('visibility: hidden') !== -1) return true;
        if (styleText.indexOf('height: 0') !== -1) return true;
        if (styleText.indexOf('max-height: 0') !== -1) return true;

        // Keep known nav/accordion panels controlled by dedicated JS.
        if (el.closest('header')) return true;
        if (el.closest('[data-orientation="vertical"]')) return true;

        return false;
      }

      runWhenReady(function() {
        var nodes = document.querySelectorAll('main [style*="opacity"]');
        nodes.forEach(function(el) {
          var styleAttr = (el.getAttribute('style') || '').toLowerCase();
          if (!styleAttr) return;
          if (!/(^|[;\s])opacity:\s*0(?:[;\s]|$)/.test(styleAttr)) return;
          if (isCollapsibleOrIntentionallyHidden(el, styleAttr)) return;

          el.style.opacity = '1';

          // Exported pages often pin blocks off-screen until framer-motion runs.
          if (styleAttr.indexOf('transform') !== -1) {
            el.style.transform = 'none';
          }
        });
      });
    })();

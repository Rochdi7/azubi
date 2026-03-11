<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'GoAusbildung')</title>
    @yield('meta')
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="GoAusbildung">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/081a0afca5a9bd20.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/d9109d77acd75b7b.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/e2c84361ea1dce8b.css') }}">
    @stack('styles')
    <style>
        :root { --font-inter: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; }
    </style>
</head>

<body class="min-h-screen bg-background font-sans antialiased overflow-x-hidden">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden max-w-full">

        @include('frontoffice.partials.header')

        <main class="flex-1 max-w-full">
            @yield('content')
        </main>

        @include('frontoffice.partials.footer')

    </div>

    @stack('scripts')

    <script>
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
      overlay.querySelectorAll('.mobile-accordion-trigger').forEach(function(trigger) {
        trigger.addEventListener('click', function(e) {
          e.preventDefault();
          var accordion = trigger.closest('.mobile-accordion');
          var content = accordion.querySelector('.mobile-accordion-content');
          if (!content) return;
          var isOpen = content.style.display === 'flex';
          overlay.querySelectorAll('.mobile-accordion-content').forEach(function(c) { c.style.display = 'none'; });
          overlay.querySelectorAll('.mobile-accordion-trigger .lucide-chevron-right').forEach(function(ch) { ch.style.transform = ''; });
          if (!isOpen) {
            content.style.display = 'flex';
            trigger.querySelector('.lucide-chevron-right').style.transform = 'rotate(90deg)';
          }
        });
      });

      // Close on menu link click
      overlay.querySelectorAll('.mobile-menu-link, .mobile-sub-link').forEach(function(link) {
        link.addEventListener('click', closeMenu);
      });
    })();

    // Desktop dropdown toggle
    (function() {
      var dropdowns = document.querySelectorAll('header .nav-has-dropdown');
      dropdowns.forEach(function(item) {
        var panel = item.querySelector('.nav-dropdown-panel');
        var trigger = item.querySelector('.nav-dropdown-trigger');
        if (!panel || !trigger) return;

        var closeTimer = null;
        function open() {
          clearTimeout(closeTimer);
          dropdowns.forEach(function(other) {
            var p = other.querySelector('.nav-dropdown-panel');
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
        if (!e.target.closest('.nav-has-dropdown')) {
          dropdowns.forEach(function(item) {
            var p = item.querySelector('.nav-dropdown-panel');
            if (p) { p.style.display = 'none'; p.style.opacity = '0'; p.style.visibility = 'hidden'; }
          });
        }
      });
    })();
    </script>
</body>

</html>

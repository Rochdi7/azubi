/* ============================================
   Azubi - Script
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  // ---- Mobile Menu Toggle ----
  const menuToggle = document.getElementById('mobile-menu-toggle');
  const menuOverlay = document.getElementById('mobile-menu-overlay');
  const menuClose = document.getElementById('mobile-menu-close');
  let scrollPosition = 0;

  if (menuToggle && menuOverlay && menuClose) {
    const openMenu = () => {
      scrollPosition = window.pageYOffset;
      document.body.classList.add('azubi-menu-open');
      document.body.style.top = `-${scrollPosition}px`;
      menuOverlay.classList.add('active');
    };

    const closeMenu = () => {
      menuOverlay.classList.remove('active');
      document.body.classList.remove('azubi-menu-open');
      document.body.style.top = '';
      window.scrollTo(0, scrollPosition);
    };

    menuToggle.addEventListener('click', openMenu);
    menuClose.addEventListener('click', closeMenu);
    menuOverlay.addEventListener('click', (e) => {
      if (e.target === menuOverlay) closeMenu();
    });

    // Close on link click (but not accordion triggers)
    menuOverlay.querySelectorAll('.azubi-mobile-menu-link').forEach(link => {
      if (!link.classList.contains('azubi-mobile-accordion-trigger')) {
        link.addEventListener('click', closeMenu);
      }
    });
    menuOverlay.querySelectorAll('.azubi-mobile-sub-link').forEach(link => {
      link.addEventListener('click', closeMenu);
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && menuOverlay.classList.contains('active')) {
        closeMenu();
      }
    });
  }

  // ---- Navbar Scroll Effect ----
  const desktopNav = document.getElementById('desktop-nav');

  if (desktopNav) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        desktopNav.classList.add('scrolled');
      } else {
        desktopNav.classList.remove('scrolled');
      }
    }, { passive: true });
  }

  // ---- Desktop Dropdown Hover (with open/close delay) ----
  const OPEN_DELAY = 100;
  const CLOSE_DELAY = 50;
  const dropdownItems = document.querySelectorAll('.azubi-nav-has-dropdown');

  dropdownItems.forEach(item => {
    let openTimer = null;
    let closeTimer = null;

    const openDropdown = () => {
      clearTimeout(closeTimer);
      closeTimer = null;
      // Close other dropdowns
      dropdownItems.forEach(other => {
        if (other !== item) other.classList.remove('open');
      });
      item.classList.add('open');
    };

    const closeDropdown = () => {
      clearTimeout(openTimer);
      openTimer = null;
      item.classList.remove('open');
    };

    item.addEventListener('mouseenter', () => {
      clearTimeout(closeTimer);
      openTimer = setTimeout(openDropdown, OPEN_DELAY);
    });

    item.addEventListener('mouseleave', () => {
      clearTimeout(openTimer);
      closeTimer = setTimeout(closeDropdown, CLOSE_DELAY);
    });

    // Keep open when hovering on panel
    const panel = item.querySelector('.azubi-nav-dropdown-panel');
    if (panel) {
      panel.addEventListener('mouseenter', () => {
        clearTimeout(closeTimer);
      });
      panel.addEventListener('mouseleave', () => {
        closeTimer = setTimeout(closeDropdown, CLOSE_DELAY);
      });
    }

    // Also support click/touch for the trigger button
    const trigger = item.querySelector('.azubi-nav-dropdown-trigger');
    if (trigger) {
      trigger.addEventListener('click', (e) => {
        e.preventDefault();
        const isOpen = item.classList.contains('open');
        dropdownItems.forEach(other => other.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
      });
    }
  });

  // ---- More Button Dropdown ----
  const moreBtn = document.querySelector('.azubi-nav-more-btn');
  const moreDropdown = document.querySelector('.azubi-nav-more-dropdown');

  if (moreBtn && moreDropdown) {
    let moreCloseTimer = null;
    const moreItem = moreBtn.closest('.azubi-nav-item');

    moreBtn.addEventListener('click', (e) => {
      e.preventDefault();
      moreDropdown.classList.toggle('open');
    });

    if (moreItem) {
      moreItem.addEventListener('mouseenter', () => {
        clearTimeout(moreCloseTimer);
        moreDropdown.classList.add('open');
      });
      moreItem.addEventListener('mouseleave', () => {
        moreCloseTimer = setTimeout(() => {
          moreDropdown.classList.remove('open');
        }, CLOSE_DELAY);
      });
    }
  }

  // ---- Close Dropdowns on Outside Click ----
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.azubi-nav-has-dropdown')) {
      dropdownItems.forEach(item => item.classList.remove('open'));
    }
    if (moreDropdown && !e.target.closest('.azubi-nav-item-more')) {
      moreDropdown.classList.remove('open');
    }
  });

  // ---- Close Dropdowns on Escape ----
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      dropdownItems.forEach(item => item.classList.remove('open'));
      if (moreDropdown) moreDropdown.classList.remove('open');
    }
  });

  // ---- Mobile Accordion Submenus ----
  const mobileAccordions = document.querySelectorAll('.azubi-mobile-accordion');

  mobileAccordions.forEach(accordion => {
    const trigger = accordion.querySelector('.azubi-mobile-accordion-trigger');
    if (!trigger) return;

    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const isOpen = accordion.classList.contains('open');

      // Close all mobile accordions
      mobileAccordions.forEach(other => other.classList.remove('open'));

      // Toggle clicked
      if (!isOpen) {
        accordion.classList.add('open');
      }
    });
  });

  // ---- Scroll Animations (Intersection Observer) ----
  const animatedElements = document.querySelectorAll('.azubi-animate-on-scroll');

  if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('azubi-visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    animatedElements.forEach(el => observer.observe(el));
  } else {
    // Fallback: show everything
    animatedElements.forEach(el => el.classList.add('azubi-visible'));
  }

  // ---- FAQ Accordion ----
  const faqItems = document.querySelectorAll('.azubi-faq-item');

  faqItems.forEach(item => {
    const btn = item.querySelector('.azubi-faq-question');
    if (!btn) return;

    btn.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Close all
      faqItems.forEach(other => {
        other.classList.remove('active');
        const otherBtn = other.querySelector('.azubi-faq-question');
        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
      });

      // Open clicked (if it wasn't already open)
      if (!isActive) {
        item.classList.add('active');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // ---- Smooth Scroll for Anchor Links ----
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const targetId = anchor.getAttribute('href');
      if (targetId === '#') return;

      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        const navHeight = 100;
        const targetPos = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
        window.scrollTo({ top: targetPos, behavior: 'smooth' });
      }
    });
  });

  // ---- Success Stories Marquee (clone tracks for seamless loop) ----
  document.querySelectorAll('.azubi-stories-marquee-track').forEach(track => {
    const clone = track.innerHTML;
    track.innerHTML += clone;
  });

  // ---- Sectors Horizontal Scroll (Drag) ----
  const sectorsScroll = document.getElementById('sectors-scroll');

  if (sectorsScroll) {
    let isDown = false;
    let startX;
    let scrollLeft;

    sectorsScroll.addEventListener('mousedown', (e) => {
      isDown = true;
      sectorsScroll.style.cursor = 'grabbing';
      startX = e.pageX - sectorsScroll.offsetLeft;
      scrollLeft = sectorsScroll.scrollLeft;
    });

    sectorsScroll.addEventListener('mouseleave', () => {
      isDown = false;
      sectorsScroll.style.cursor = '';
    });

    sectorsScroll.addEventListener('mouseup', () => {
      isDown = false;
      sectorsScroll.style.cursor = '';
    });

    sectorsScroll.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - sectorsScroll.offsetLeft;
      const walk = (x - startX) * 2;
      sectorsScroll.scrollLeft = scrollLeft - walk;
    });
  }

});

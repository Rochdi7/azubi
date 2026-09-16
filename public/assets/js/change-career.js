/*!
 * Azubi — Change Career Page
 *
 * Copyright (c) 2026 Azubi. All rights reserved.
 * Proprietary and confidential. Unauthorised copying, modification or
 * distribution of this file, via any medium, is strictly prohibited.
 */

document.addEventListener('DOMContentLoaded', function() {
  // FAQ accordion
  var faqContainer = document.getElementById('changeCareerFaq');
  if (faqContainer) {
    faqContainer.querySelectorAll('.azubi-faq-trigger').forEach(function(trigger) {
      trigger.addEventListener('click', function() {
        var item = trigger.closest('.azubi-faq-item');
        var content = item.querySelector('.azubi-faq-content');
        var isOpen = trigger.getAttribute('aria-expanded') === 'true';
        var chevron = trigger.querySelector('svg');

        if (isOpen) {
          content.style.maxHeight = '0';
          content.style.paddingBottom = '0';
          trigger.setAttribute('aria-expanded', 'false');
          trigger.classList.remove('text-primary');
          item.classList.remove('bg-muted/30');
          if (chevron) chevron.style.transform = 'rotate(0deg)';
        } else {
          content.style.maxHeight = content.scrollHeight + 'px';
          content.style.paddingBottom = '16px';
          trigger.setAttribute('aria-expanded', 'true');
          trigger.classList.add('text-primary');
          item.classList.add('bg-muted/30');
          if (chevron) chevron.style.transform = 'rotate(180deg)';
        }
      });
    });
  }

  // Multi-step wizard
  var form = document.getElementById('switchWizardForm');
  if (!form) return;

  var steps = form.querySelectorAll('.azubi-wizard-step[data-wizard-step]');
  var indicators = document.querySelectorAll('[data-wizard-indicator]');
  var backBtn = form.querySelector('.azubi-wizard-back-btn');
  var nextBtn = form.querySelector('.azubi-wizard-next-btn');
  var nextText = form.querySelector('.azubi-wizard-next-text');
  var wizardNav = document.getElementById('wizardNav');
  var currentStep = 0;
  var totalSteps = 4;

  var checkSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>';

  var stepIcons = [
    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect width="20" height="14" x="2" y="6" rx="2"></rect></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>'
  ];

  function showStep(index) {
    steps.forEach(function(step) {
      var stepIndex = step.getAttribute('data-wizard-step');
      if (stepIndex === String(index) || stepIndex === index) {
        step.classList.remove('hidden');
        setTimeout(function() {
          step.style.opacity = '1';
          step.style.transform = 'none';
        }, 50);
      } else {
        step.style.opacity = '0';
        step.style.transform = 'translateX(20px)';
        setTimeout(function() { step.classList.add('hidden'); }, 300);
      }
    });

    // Update indicators
    indicators.forEach(function(ind) {
      var i = parseInt(ind.getAttribute('data-wizard-indicator'));
      var circle = ind.querySelector('.azubi-wizard-step-circle');
      var label = ind.querySelector('.azubi-wizard-step-label');
      var line = ind.querySelector('.azubi-wizard-step-line');

      if (i < index) {
        circle.className = 'azubi-wizard-step-circle w-10 h-10 rounded-full flex items-center justify-center text-sm font-medium mb-2 transition-colors bg-primary text-primary-foreground';
        circle.innerHTML = checkSvg;
        label.className = 'azubi-wizard-step-label font-medium text-xs sm:text-sm whitespace-nowrap text-primary';
        if (line) line.className = 'azubi-wizard-step-line absolute h-0.5 top-5 left-[calc(100%+0.25rem)] w-8 sm:w-12 bg-primary';
      } else if (i === index) {
        circle.className = 'azubi-wizard-step-circle w-10 h-10 rounded-full flex items-center justify-center text-sm font-medium mb-2 transition-colors bg-primary text-primary-foreground';
        circle.innerHTML = stepIcons[i];
        label.className = 'azubi-wizard-step-label font-medium text-xs sm:text-sm whitespace-nowrap text-primary';
        if (line) line.className = 'azubi-wizard-step-line absolute h-0.5 top-5 left-[calc(100%+0.25rem)] w-8 sm:w-12 azubi-bg-beige';
      } else {
        circle.className = 'azubi-wizard-step-circle w-10 h-10 rounded-full flex items-center justify-center text-sm font-medium mb-2 transition-colors azubi-bg-beige text-muted-foreground';
        circle.innerHTML = stepIcons[i];
        label.className = 'azubi-wizard-step-label font-medium text-xs sm:text-sm whitespace-nowrap text-muted-foreground';
        if (line) line.className = 'azubi-wizard-step-line absolute h-0.5 top-5 left-[calc(100%+0.25rem)] w-8 sm:w-12 azubi-bg-beige';
      }
    });

    // Update buttons
    if (index === 0) {
      backBtn.classList.add('hidden');
      backBtn.classList.remove('flex');
    } else {
      backBtn.classList.remove('hidden');
      backBtn.classList.add('flex');
    }

    if (index === totalSteps - 1) {
      nextText.textContent = 'Submit Application';
      nextBtn.classList.remove('bg-gradient-to-r', 'from-primary', 'to-primary/80', 'hover:from-primary/90', 'hover:to-primary/70', 'shadow-primary/20', 'hover:shadow-primary/30');
      nextBtn.classList.add('bg-gradient-to-r', 'from-emerald-500', 'to-green-500', 'hover:from-emerald-600', 'hover:to-green-600', 'shadow-emerald-500/20', 'hover:shadow-emerald-500/30');
    } else {
      nextText.textContent = 'Continue';
      nextBtn.classList.remove('from-emerald-500', 'to-green-500', 'hover:from-emerald-600', 'hover:to-green-600', 'shadow-emerald-500/20', 'hover:shadow-emerald-500/30');
      nextBtn.classList.add('from-primary', 'to-primary/80', 'hover:from-primary/90', 'hover:to-primary/70', 'shadow-primary/20', 'hover:shadow-primary/30');
    }

    currentStep = index;
  }

  function validateStep(index) {
    var stepEl = form.querySelector('[data-wizard-step="' + index + '"]');
    var inputs = stepEl.querySelectorAll('input[required], select[required], textarea[required]');
    var valid = true;
    inputs.forEach(function(input) {
      if (!input.value.trim()) {
        input.classList.add('border-destructive');
        valid = false;
        input.addEventListener('input', function() {
          input.classList.remove('border-destructive');
        }, { once: true });
        input.addEventListener('change', function() {
          input.classList.remove('border-destructive');
        }, { once: true });
      }
    });
    return valid;
  }

  nextBtn.addEventListener('click', function() {
    if (!validateStep(currentStep)) return;

    if (currentStep < totalSteps - 1) {
      showStep(currentStep + 1);
    } else {
      // Submit
      var honeypot = form.querySelector('#website');
      if (honeypot && honeypot.value) return;

      nextBtn.disabled = true;
      nextText.textContent = 'Submitting...';

      // Simulate submission (replace with real API call when backend is ready)
      setTimeout(function() {
        wizardNav.classList.add('hidden');
        showStep('success');
      }, 1000);
    }
  });

  backBtn.addEventListener('click', function() {
    if (currentStep > 0) {
      showStep(currentStep - 1);
    }
  });

  // Quick suggestion pills
  form.querySelectorAll('.azubi-wizard-suggestion').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var textarea = form.querySelector('#reasonForSwitch');
      var text = btn.textContent.trim();
      if (textarea.value && !textarea.value.endsWith(' ')) {
        textarea.value += ', ';
      }
      textarea.value += text;
      btn.classList.add('bg-primary/10', 'border-primary/50');
    });
  });

  // Initialize step 0
  showStep(0);
});

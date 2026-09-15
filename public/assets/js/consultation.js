(function() {
    function ready(fn) {
        if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', fn);
        else fn();
    }

    /* === How It Works hover === */
    ready(function() {
        var stepsContainer = document.getElementById('how-it-works-steps');
        if (!stepsContainer) return;
        var steps = stepsContainer.querySelectorAll('.azubi-hiw-step');
        var cards = document.querySelectorAll('.azubi-hiw-card');
        if (!steps.length) return;

        function setHIW(n) {
            steps.forEach(function(c) {
                c.classList.toggle('azubi-hiw-step--active', c.getAttribute('data-step') === String(
                    n));
            });
            cards.forEach(function(c) {
                var match = c.getAttribute('data-hiw-card') === String(n);
                c.classList.toggle('azubi-hiw-card--visible', match);
                c.classList.toggle('azubi-hiw-card--hidden', !match);
            });
        }
        cards.forEach(function(c) {
            c.classList.add(c.getAttribute('data-hiw-card') === '1' ? 'azubi-hiw-card--visible' :
                'azubi-hiw-card--hidden');
        });
        steps.forEach(function(c) {
            c.addEventListener('mouseenter', function() {
                setHIW(c.getAttribute('data-step'));
            });
        });
    });

    /* === Dashboard hover === */
    ready(function() {
        var section = document.querySelector('[data-dash-section]');
        if (!section) return;
        var cards = section.querySelectorAll('.azubi-dash-card');
        var visuals = section.querySelectorAll('.azubi-dash-visual');

        function setDash(n) {
            cards.forEach(function(c) {
                c.classList.toggle('azubi-dash-card--active', c.getAttribute('data-dash') === String(
                    n));
            });
            visuals.forEach(function(v) {
                var match = v.getAttribute('data-dash-visual') === String(n);
                v.classList.toggle('azubi-dash-visual--visible', match);
                v.classList.toggle('azubi-dash-visual--hidden', !match);
            });
        }
        setDash(1);
        cards.forEach(function(c) {
            c.addEventListener('mouseenter', function() {
                setDash(c.getAttribute('data-dash'));
            });
        });
    });

    /* === FAQ accordion === */
    ready(function() {
        var faqSection = document.getElementById('consultation-faq');
        if (!faqSection) return;
        var articles = faqSection.querySelectorAll('article');

        articles.forEach(function(article) {
            var btn = article.querySelector('button');
            var content = article.querySelector('.azubi-faq-content');
            if (!btn || !content) return;

            btn.addEventListener('click', function() {
                var isOpen = btn.getAttribute('aria-expanded') === 'true';

                // Close all
                articles.forEach(function(a) {
                    var b = a.querySelector('button');
                    var c = a.querySelector('.azubi-faq-content');
                    var chevron = a.querySelector('.azubi-faq-chevron');
                    if (b) b.setAttribute('aria-expanded', 'false');
                    if (c) {
                        c.style.height = '0px';
                        c.style.opacity = '0';
                    }
                    a.classList.remove('border-[#5D5DE9]/50', 'bg-[#5D5DE9]/5');
                    a.classList.add('border-[#EEF0F4]', 'bg-white');
                    if (chevron) {
                        chevron.classList.remove('rotate-180', 'bg-[#5D5DE9]');
                        chevron.classList.add('bg-[#F7F8FA]');
                        var svg = chevron.querySelector('svg');
                        if (svg) {
                            svg.classList.remove('text-white');
                            svg.classList.add('text-[#2C3340]');
                        }
                    }
                });

                // Open clicked if was closed
                if (!isOpen) {
                    btn.setAttribute('aria-expanded', 'true');
                    content.style.height = content.scrollHeight + 'px';
                    content.style.opacity = '1';
                    article.classList.add('border-[#5D5DE9]/50', 'bg-[#5D5DE9]/5');
                    article.classList.remove('border-[#EEF0F4]', 'bg-white');
                    var chevron = article.querySelector('.azubi-faq-chevron');
                    if (chevron) {
                        chevron.classList.add('rotate-180', 'bg-[#5D5DE9]');
                        chevron.classList.remove('bg-[#F7F8FA]');
                        var svg = chevron.querySelector('svg');
                        if (svg) {
                            svg.classList.add('text-white');
                            svg.classList.remove('text-[#2C3340]');
                        }
                    }
                }
            });
        });
    });

    /* === Testimonials carousel === */
    ready(function() {
        var container = document.getElementById('testimonials-carousel');
        if (!container) return;
        var track = container.querySelector('.azubi-carousel-track');
        var prevBtn = container.closest('section').querySelector(
        '[aria-label="Previous testimonials"]');
        var nextBtn = container.closest('section').querySelector('[aria-label="Next testimonials"]');
        var dots = container.closest('section').querySelectorAll('.azubi-carousel-dot');
        var currentPage = 0;
        var totalPages = 2;

        function goToPage(page) {
            currentPage = page;
            track.style.transform = 'translateX(-' + (page * 100) + '%)';
            dots.forEach(function(d, i) {
                if (i === page) {
                    d.classList.add('w-6', 'bg-[#5D5DE9]');
                    d.classList.remove('w-2', 'bg-[#EEF0F4]');
                } else {
                    d.classList.remove('w-6', 'bg-[#5D5DE9]');
                    d.classList.add('w-2', 'bg-[#EEF0F4]');
                }
            });
        }

        if (prevBtn) prevBtn.addEventListener('click', function() {
            goToPage(currentPage > 0 ? currentPage - 1 : totalPages - 1);
        });
        if (nextBtn) nextBtn.addEventListener('click', function() {
            goToPage(currentPage < totalPages - 1 ? currentPage + 1 : 0);
        });
        dots.forEach(function(d, i) {
            d.addEventListener('click', function() {
                goToPage(i);
            });
        });
        goToPage(0);
    });
})();

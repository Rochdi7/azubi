/*!
 * Azubi — Contact FAQ
 *
 * Copyright (c) 2026 Azubi. All rights reserved.
 * Proprietary and confidential. Unauthorised copying, modification or
 * distribution of this file, via any medium, is strictly prohibited.
 */

document.querySelectorAll('.azubi-faq-btn-tw').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var item = btn.closest('.azubi-faq-item-tw');
        var content = item.querySelector('.azubi-faq-content-tw');
        var chev = btn.querySelector('.azubi-faq-chev-tw');
        var isOpen = content.style.display !== 'none';
        // Close all
        document.querySelectorAll('.azubi-faq-item-tw').forEach(function(el) {
            el.querySelector('.azubi-faq-content-tw').style.display = 'none';
            el.querySelector('.azubi-faq-chev-tw').style.transform = '';
            el.querySelector('.azubi-faq-btn-tw').setAttribute('aria-expanded', 'false');
        });
        // Toggle current
        if (!isOpen) {
            content.style.display = 'block';
            chev.style.transform = 'rotate(180deg)';
            btn.setAttribute('aria-expanded', 'true');
        }
    });
});

document.querySelectorAll('.faq-btn-tw').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var item = btn.closest('.faq-item-tw');
        var content = item.querySelector('.faq-content-tw');
        var chev = btn.querySelector('.faq-chev-tw');
        var isOpen = content.style.display !== 'none';
        // Close all
        document.querySelectorAll('.faq-item-tw').forEach(function(el) {
            el.querySelector('.faq-content-tw').style.display = 'none';
            el.querySelector('.faq-chev-tw').style.transform = '';
            el.querySelector('.faq-btn-tw').setAttribute('aria-expanded', 'false');
        });
        // Toggle current
        if (!isOpen) {
            content.style.display = 'block';
            chev.style.transform = 'rotate(180deg)';
            btn.setAttribute('aria-expanded', 'true');
        }
    });
});

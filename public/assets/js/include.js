// Load header and footer partials, then initialize scripts
document.addEventListener('DOMContentLoaded', function () {
    var headerEl = document.getElementById('header-placeholder');
    var footerEl = document.getElementById('footer-placeholder');

    var headerDone = !headerEl;
    var footerDone = !footerEl;

    function checkAllLoaded() {
        if (headerDone && footerDone) {
            // Load script.js after header/footer are in the DOM
            var s = document.createElement('script');
            s.src = 'js/script.js';
            document.body.appendChild(s);
        }
    }

    if (headerEl) {
        fetch('header.html')
            .then(function (r) { return r.text(); })
            .then(function (html) {
                headerEl.outerHTML = html;
                headerDone = true;
                checkAllLoaded();
            });
    }

    if (footerEl) {
        fetch('footer.html')
            .then(function (r) { return r.text(); })
            .then(function (html) {
                footerEl.outerHTML = html;
                footerDone = true;
                checkAllLoaded();
            });
    }
});

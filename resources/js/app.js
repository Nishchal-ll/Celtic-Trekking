/* ============================================
   CELTIC TREKKING - MAIN JAVASCRIPT
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {

    // ===== Mobile Menu Toggle =====
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileNav = document.getElementById('mobile-nav');

    if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileNav.classList.toggle('open');
            document.body.style.overflow = mobileNav.classList.contains('open') ? 'hidden' : '';
        });

        // Close mobile menu on link click
        const mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                mobileNav.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    }

    // ===== Sticky Header =====
    const header = document.getElementById('header-outer');
    let lastScroll = 0;

    if (header) {
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.classList.add('scrolled');
                header.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.15)';
            } else {
                header.classList.remove('scrolled');
                header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            }

            lastScroll = currentScroll;
        });
    }

    // ===== Cookie Banner =====
    const cookieNotice = document.getElementById('cookie-notice');
    const cookieAccept = document.getElementById('cookie-accept');

    if (cookieNotice && cookieAccept) {
        // Check if cookie already accepted
        if (!localStorage.getItem('cookie_accepted')) {
            cookieNotice.style.display = 'block';
        }

        cookieAccept.addEventListener('click', function() {
            localStorage.setItem('cookie_accepted', 'true');
            cookieNotice.style.display = 'none';
        });
    }

    // ===== Smooth Scroll for Anchor Links =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const headerHeight = document.getElementById('header-outer')?.offsetHeight || 80;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                window.scrollTo({ top: targetPosition, behavior: 'smooth' });
            }
        });
    });

    // ===== Image Lazy Loading =====
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    }

});

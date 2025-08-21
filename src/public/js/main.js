/**
 * Main JavaScript for Ryokan Website
 * Handles responsive navigation and cross-browser compatibility
 */

(function() {
    'use strict';

    // Mobile Navigation Toggle
    function initMobileNavigation() {
        const header = document.querySelector('.site-header');
        const navContainer = document.querySelector('.nav-container');
        const navMenu = document.querySelector('.nav-menu');

        // Create mobile menu toggle button
        const mobileToggle = document.createElement('button');
        mobileToggle.className = 'mobile-nav-toggle';
        mobileToggle.setAttribute('aria-label', 'メニューを開く');
        mobileToggle.setAttribute('aria-expanded', 'false');
        mobileToggle.innerHTML = `
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        `;

        // Insert toggle button after logo
        const navLogo = document.querySelector('.nav-logo');
        navLogo.parentNode.insertBefore(mobileToggle, navLogo.nextSibling);

        // Toggle mobile menu
        mobileToggle.addEventListener('click', function() {
            const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';

            mobileToggle.setAttribute('aria-expanded', !isExpanded);
            mobileToggle.setAttribute('aria-label', isExpanded ? 'メニューを開く' : 'メニューを閉じる');

            navMenu.classList.toggle('nav-menu-open');
            mobileToggle.classList.toggle('mobile-nav-toggle-active');

            // Prevent body scroll when menu is open
            document.body.classList.toggle('nav-open', !isExpanded);
        });

        // Close menu when clicking on menu links
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('nav-menu-open');
                mobileToggle.classList.remove('mobile-nav-toggle-active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileToggle.setAttribute('aria-label', 'メニューを開く');
                document.body.classList.remove('nav-open');
            });
        });

        // Close menu on window resize if desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                navMenu.classList.remove('nav-menu-open');
                mobileToggle.classList.remove('mobile-nav-toggle-active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileToggle.setAttribute('aria-label', 'メニューを開く');
                document.body.classList.remove('nav-open');
            }
        });
    }

    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    e.preventDefault();

                    const headerHeight = document.querySelector('.site-header').offsetHeight;
                    const targetPosition = targetElement.offsetTop - headerHeight - 20;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Intersection Observer for animations
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe facility items and sections
        const animateElements = document.querySelectorAll('.facility-item, .access-content > div');
        animateElements.forEach(el => {
            el.classList.add('animate-element');
            observer.observe(el);
        });
    }

    // Header scroll behavior
    function initHeaderScroll() {
        let lastScrollTop = 0;
        const header = document.querySelector('.site-header');

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down
                header.classList.add('header-hidden');
            } else {
                // Scrolling up
                header.classList.remove('header-hidden');
            }

            lastScrollTop = scrollTop;
        });
    }

    // Image lazy loading fallback for older browsers
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            imageObserver.unobserve(img);
                        }
                    }
                });
            });

            const lazyImages = document.querySelectorAll('img[data-src]');
            lazyImages.forEach(img => imageObserver.observe(img));
        }
    }

    // Cross-browser compatibility fixes
    function initCompatibilityFixes() {
        // CSS Grid fallback for older browsers
        if (!CSS.supports('display', 'grid')) {
            const gridElements = document.querySelectorAll('.facilities-grid, .access-content, .footer-content');
            gridElements.forEach(grid => {
                grid.classList.add('no-grid-support');
            });
        }

        // Flexbox gap fallback
        if (!CSS.supports('gap', '1rem')) {
            const flexElements = document.querySelectorAll('.nav-menu, .footer-links ul');
            flexElements.forEach(flex => {
                flex.classList.add('no-gap-support');
            });
        }
    }

    // Initialize all functionality when DOM is ready
    function init() {
        initMobileNavigation();
        initSmoothScrolling();
        initScrollAnimations();
        initHeaderScroll();
        initLazyLoading();
        initCompatibilityFixes();

        // Add loaded class to body for CSS transitions
        document.body.classList.add('js-loaded');
    }

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
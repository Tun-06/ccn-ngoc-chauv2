// ===========================
// SLIDER FUNCTIONALITY
// ===========================
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('slider-prev');
    const nextBtn = document.getElementById('slider-next');
    let currentSlide = 0;
    let slideInterval;
    const SLIDE_DURATION = 5000; // 5 seconds

    function goToSlide(index) {
        // Remove active from current
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');

        // Update index
        currentSlide = (index + slides.length) % slides.length;

        // Add active to new
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');

        // Toggle hero overlay text visibility
        const heroOverlay = document.querySelector('.hero-overlay');
        if (heroOverlay) {
            if (currentSlide === 0) {
                heroOverlay.classList.remove('hide-text');
            } else {
                heroOverlay.classList.add('hide-text');
            }
        }
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function prevSlide() {
        goToSlide(currentSlide - 1);
    }

    function startAutoPlay() {
        slideInterval = setInterval(nextSlide, SLIDE_DURATION);
    }

    function stopAutoPlay() {
        clearInterval(slideInterval);
    }

    // Event Listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            stopAutoPlay();
            nextSlide();
            startAutoPlay();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            stopAutoPlay();
            prevSlide();
            startAutoPlay();
        });
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoPlay();
            goToSlide(index);
            startAutoPlay();
        });
    });

    // Touch/Swipe Support
    let touchStartX = 0;
    let touchEndX = 0;
    const heroSlider = document.getElementById('hero-slider');

    if (heroSlider) {
        heroSlider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        heroSlider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            const diff = touchStartX - touchEndX;
            if (Math.abs(diff) > 50) {
                stopAutoPlay();
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
                startAutoPlay();
            }
        }, { passive: true });
    }

    // Start auto-play
    startAutoPlay();

    // ===========================
    // HEADER SCROLL EFFECT
    // ===========================
    const header = document.getElementById('header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // ===========================
    // MOBILE MENU
    // ===========================
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const nav = document.getElementById('main-nav');

    if (mobileMenuBtn && nav) {
        mobileMenuBtn.addEventListener('click', () => {
            nav.classList.toggle('open');
            mobileMenuBtn.classList.toggle('active');
        });

        // Close menu when clicking a link
        const navLinks = nav.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('open');
                mobileMenuBtn.classList.remove('active');
            });
        });
    }

    // ===========================
    // COUNTER ANIMATION
    // ===========================
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const startTime = performance.now();
        const suffix = element.querySelector('span');
        const suffixText = suffix ? suffix.textContent : '';

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // Easing function: easeOutExpo
            const easeProgress = 1 - Math.pow(1 - progress, 4);
            const current = Math.floor(easeProgress * target);

            if (suffix) {
                element.innerHTML = current + '<span>' + suffixText + '</span>';
            } else {
                element.textContent = current;
            }

            if (progress < 1) {
                requestAnimationFrame(update);
            }
        }

        requestAnimationFrame(update);
    }

    // Intersection Observer for counter animation
    const statNumbers = document.querySelectorAll('.stat-number[data-target]');
    let countersAnimated = false;

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !countersAnimated) {
                countersAnimated = true;
                statNumbers.forEach(num => {
                    const target = parseInt(num.getAttribute('data-target'));
                    animateCounter(num, target, 2500);
                });
            }
        });
    }, { threshold: 0.3 });

    const statsSection = document.getElementById('stats-section');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // ===========================
    // SCROLL REVEAL ANIMATION
    // ===========================
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

    // ===========================
    // SEARCH MODAL (placeholder)
    // ===========================
    const searchBtn = document.getElementById('search-btn');
    if (searchBtn) {
        searchBtn.addEventListener('click', () => {
            // Placeholder for search functionality
            console.log('Search button clicked');
        });
    }

    // ===========================
    // KEYBOARD NAVIGATION
    // ===========================
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            stopAutoPlay();
            prevSlide();
            startAutoPlay();
        } else if (e.key === 'ArrowRight') {
            stopAutoPlay();
            nextSlide();
            startAutoPlay();
        }
    });

    // ===========================
    // BACK TO TOP BUTTON
    // ===========================
    const backToTopBtn = document.getElementById('back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});

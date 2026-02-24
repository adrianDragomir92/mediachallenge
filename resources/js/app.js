import './bootstrap';

const initRevealAnimations = () => {
    const elements = document.querySelectorAll('[data-reveal]');
    if (!elements.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        elements.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.18,
            rootMargin: '0px 0px -5% 0px',
        },
    );

    elements.forEach((element) => {
        const delay = Number(element.dataset.revealDelay);
        if (!Number.isNaN(delay) && delay > 0) {
            element.style.setProperty('--reveal-delay', `${delay}ms`);
        }
        observer.observe(element);
    });
};

const initMobileNav = () => {
    const overlay = document.querySelector('[data-mobile-nav]');
    const openBtn = document.querySelector('[data-mobile-nav-toggle]');
    if (!overlay || !openBtn) {
        return;
    }

    const panel = overlay.querySelector('[data-mobile-nav-panel]');
    const closeBtn = overlay.querySelector('[data-mobile-nav-close]');

    const openNav = () => {
        overlay.classList.add('is-open');
        document.body.classList.add('overflow-hidden');
    };

    const closeNav = () => {
        overlay.classList.remove('is-open');
        document.body.classList.remove('overflow-hidden');
    };

    openBtn.addEventListener('click', () => {
        const isOpen = overlay.classList.contains('is-open');
        if (isOpen) {
            closeNav();
        } else {
            openNav();
        }
    });

    closeBtn?.addEventListener('click', closeNav);

    overlay.addEventListener('click', (event) => {
        if (!panel || panel.contains(event.target)) {
            return;
        }
        closeNav();
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && overlay.classList.contains('is-open')) {
            closeNav();
        }
    });

    overlay.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeNav);
    });
};

const initSite = () => {
    initRevealAnimations();
    initMobileNav();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSite);
} else {
    initSite();
}

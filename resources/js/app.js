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

const initSite = () => {
    initRevealAnimations();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSite);
} else {
    initSite();
}

import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const themeToggle = document.querySelector('[data-theme-toggle]');

const applyTheme = (theme) => {
    const isDark = theme === 'dark';

    document.documentElement.classList.toggle('dark', isDark);

    if (themeToggle) {
        const sunIcon = themeToggle.querySelector('[data-icon-sun]');
        const moonIcon = themeToggle.querySelector('[data-icon-moon]');

        themeToggle.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');

        if (sunIcon && moonIcon) {
            sunIcon.classList.toggle('hidden', isDark);
            moonIcon.classList.toggle('hidden', !isDark);
        }
    }
};

const getPreferredTheme = () => {
    if (localStorage.getItem('theme')) {
        return localStorage.getItem('theme');
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
};

applyTheme(getPreferredTheme());

if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        const nextTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';

        localStorage.setItem('theme', nextTheme);
        applyTheme(nextTheme);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const navLinks = Array.from(document.querySelectorAll('[data-nav-link]'));
    const setActiveLink = (targetId) => {
        navLinks.forEach((link) => {
            const isActive = link.dataset.navTarget === targetId;

            link.classList.toggle('nav-link-active', isActive);
        });
    };

    const sections = navLinks
        .map((link) => document.getElementById(link.dataset.navTarget))
        .filter(Boolean);

    if (sections.length === 0) {
        return;
    }

    const updateActiveFromScroll = () => {
        const offset = 120;
        let activeSection = sections[0];

        sections.forEach((section) => {
            if (section.offsetTop - offset <= window.scrollY) {
                activeSection = section;
            }
        });

        setActiveLink(activeSection.id);
    };

    navLinks.forEach((link) => {
        link.addEventListener('click', () => {
            setActiveLink(link.dataset.navTarget);
        });
    });

    window.addEventListener('hashchange', () => {
        const hashTarget = window.location.hash.replace('#', '');

        if (hashTarget) {
            setActiveLink(hashTarget);
        }
    });

    window.addEventListener('scroll', updateActiveFromScroll, { passive: true });
    updateActiveFromScroll();
});

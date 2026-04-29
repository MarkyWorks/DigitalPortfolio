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

    const activitiesMonths = document.getElementById('activities-months');
    const activitiesList = document.getElementById('activities-list');
    const activitiesData = window.activitiesData ?? [];

    if (!activitiesMonths || !activitiesList || activitiesData.length === 0) {
        return;
    }

    const renderActivities = (activeMonth) => {
        const weekDetails = activeMonth.weeks ?? [];

        const isFewWeeks = weekDetails.length <= 2;

        activitiesList.className = `mt-6 grid gap-4 md:grid-cols-2${isFewWeeks ? ' md:place-items-center' : ''}`;

        activitiesList.innerHTML = weekDetails
            .map((weekItem) => `
                <div class="w-full max-w-md rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="grid grid-cols-2 gap-3">
                        <img class="h-50 w-full rounded-xl object-cover" src="${weekItem.img ?? activeMonth.img}" alt="${activeMonth.month} activity ${weekItem.week} image 1" />
                        <img class="h-50 w-full rounded-xl object-cover" src="${weekItem.img2 ?? activeMonth.img}" alt="${activeMonth.month} activity ${weekItem.week} image 2" />
                    </div>
                    <div class="mt-4 flex flex-wrap items-center gap-3 text-xs uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">
                        <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 px-3 py-1 dark:border-slate-700">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                <path d="M4 7h16"></path>
                                <path d="M4 7v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7"></path>
                                <path d="M8 4v3"></path>
                                <path d="M16 4v3"></path>
                            </svg>
                            ${weekItem.week}
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 px-3 py-1 dark:border-slate-700">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                <path d="M8 2v4"></path>
                                <path d="M16 2v4"></path>
                                <path d="M3 10h18"></path>
                                <path d="M5 6h14a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"></path>
                            </svg>
                            ${weekItem.date}
                        </span>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                        ${weekItem.description ?? activeMonth.description}
                    </p>
                </div>
            `)
            .join('');
    };

    const monthButtonBase =
        'rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-slate-600 transition hover:border-slate-300 hover:text-slate-900 dark:border-slate-800 dark:text-slate-300 dark:hover:border-slate-600 dark:hover:text-white';
    const monthButtonActive =
        'bg-slate-900 text-white hover:text-white dark:bg-white dark:text-slate-950';

    const setActiveButton = (activeMonth) => {
        const buttons = activitiesMonths.querySelectorAll('[data-activity-month]');

        buttons.forEach((button) => {
            const isActive = button.dataset.activityMonth === activeMonth.month;

            button.className = `${monthButtonBase}${isActive ? ` ${monthButtonActive}` : ''}`;
        });
    };

    activitiesMonths.innerHTML = activitiesData
        .map((month) => `<button type="button" data-activity-month="${month.month}">${month.month}</button>`)
        .join('');

    const firstMonth = activitiesData[0];

    activitiesMonths.addEventListener('click', (event) => {
        const button = event.target.closest('[data-activity-month]');

        if (!button) {
            return;
        }

        const selectedMonth = activitiesData.find((month) => month.month === button.dataset.activityMonth);

        if (!selectedMonth) {
            return;
        }

        setActiveButton(selectedMonth);
        renderActivities(selectedMonth);
    });

    setActiveButton(firstMonth);
    renderActivities(firstMonth);
});

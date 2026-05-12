<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital Journal</title>
        <link rel="icon" href="{{ asset('images/cvisnetlogo.png') }}" style="filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.85));">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
    x-data="{ mobileNavOpen:false, companySubOpen:false }"
    class="bg-white text-slate-900 dark:bg-slate-950 dark:text-slate-100 antialiased scroll-smooth overflow-x-hidden"
>

    <!-- ================= HEADER ================= -->

    <header
        class="sticky top-0 z-40 border-b border-slate-200/60 bg-white/90 backdrop-blur dark:border-slate-800/80 dark:bg-slate-950/80"
    >

        <nav class="mx-auto flex w-full max-w-6xl items-center justify-between gap-6 px-6 py-4">

            <!-- LOGO -->
            <div class="flex items-center gap-3 rounded-2xl bg-white px-3 py-2">
                <img
                    src="{{ asset('images/markyworkslogo1.png') }}"
                    alt="MarkyWorks logo"
                    class="h-11 w-auto dark:brightness-110 dark:drop-shadow-[0_0_100px_rgba(255,255,255,1)]"
                />
            </div>

            <!-- DESKTOP NAV -->
            <div class="hidden items-center gap-6 text-sm font-medium text-slate-700 lg:flex dark:text-slate-200">

                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#home" data-nav-link data-nav-target="home">Home</a>
                <div class="relative group">
                    <a class="nav-link inline-flex items-center gap-2 rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#company" data-nav-link data-nav-target="company">
                        Company
                        <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="absolute left-0 top-full hidden w-64 rounded-2xl border border-slate-200 bg-white p-2 text-sm shadow-lg group-hover:block dark:border-slate-800 dark:bg-slate-950">
                        <a class="block rounded-xl px-3 py-2 text-slate-700 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-200 dark:hover:bg-slate-900" href="#company-about">About</a>
                        <a class="block rounded-xl px-3 py-2 text-slate-700 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-200 dark:hover:bg-slate-900" href="#company-partners">Partners</a>
                        <a class="block rounded-xl px-3 py-2 text-slate-700 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-200 dark:hover:bg-slate-900" href="#company-history">History</a>
                        <a class="block rounded-xl px-3 py-2 text-slate-700 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-200 dark:hover:bg-slate-900" href="#company-org">Organizational Chart</a>
                        <a class="block rounded-xl px-3 py-2 text-slate-700 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-200 dark:hover:bg-slate-900" href="#company-nature">Nature of Business</a>
                        <a class="block rounded-xl px-3 py-2 text-slate-700 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-200 dark:hover:bg-slate-900" href="#company-milestone">Milestone Strategy</a>
                        <a class="block rounded-xl px-3 py-2 text-slate-700 transition hover:bg-slate-100 hover:text-slate-900 dark:text-slate-200 dark:hover:bg-slate-900" href="#company-services">Services</a>
                    </div>
                </div>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#activities" data-nav-link data-nav-target="activities">Activities</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#skills" data-nav-link data-nav-target="skills">Skills</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#reflection" data-nav-link data-nav-target="reflection">Reflection</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#recommendations" data-nav-link data-nav-target="recommendations">Recommendations</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#appendices" data-nav-link data-nav-target="appendices">Appendices</a>


            </div>

            <!-- RIGHT CONTROLS -->
            <div class="flex items-center gap-3">

                <!-- HAMBURGER -->
                <button
                    class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-700 lg:hidden dark:border-slate-800 dark:bg-slate-900 dark:text-slate-200"
                    @click="mobileNavOpen=true"
                >
                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path d="M4 6h16"></path>
                        <path d="M4 12h16"></path>
                        <path d="M4 18h16"></path>
                    </svg>
                </button>

                <!-- DARK MODE -->
                <button
                    class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900"
                    data-theme-toggle
                    aria-label="Toggle dark mode"
                >
                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >

                        <g data-icon-sun>
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2.5v2.5"></path>
                            <path d="M12 19v2.5"></path>
                            <path d="M4.4 4.4l1.8 1.8"></path>
                            <path d="M17.8 17.8l1.8 1.8"></path>
                            <path d="M2.5 12h2.5"></path>
                            <path d="M19 12h2.5"></path>
                            <path d="M4.4 19.6l1.8-1.8"></path>
                            <path d="M17.8 6.2l1.8-1.8"></path>
                        </g>

                        <g data-icon-moon class="hidden">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </g>

                    </svg>
                </button>

            </div>

        </nav>

    </header>


    <!-- ================= MOBILE OVERLAY ================= -->

    <div
        x-show="mobileNavOpen"
        x-transition.opacity
        @click="mobileNavOpen=false"
        class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm lg:hidden"
    ></div>


    <!-- ================= MOBILE SIDEBAR ================= -->

    <div
        class="fixed top-0 right-0 z-50 h-full w-64 overflow-y-auto bg-white shadow-2xl dark:bg-slate-950 lg:hidden"
        x-show="mobileNavOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        @click.outside="mobileNavOpen=false"
    >

        <div class="p-6">

            <div class="flex items-center justify-between">

                <h2 class="text-sm font-semibold tracking-wide">Menu</h2>

                <button
                    class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-200 dark:border-slate-800"
                    @click="mobileNavOpen=false"
                >
                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path d="M6 6l12 12"></path>
                        <path d="M18 6l-12 12"></path>
                    </svg>
                </button>

            </div>


            <nav class="mt-6 flex flex-col gap-4 text-base font-medium">

                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#home" data-nav-link data-nav-target="home" @click="mobileNavOpen=false">Home</a>
                <button
                    class="flex items-center justify-between rounded-full px-3 py-2 text-left text-slate-700 dark:text-slate-200"
                    @click="companySubOpen = !companySubOpen"
                    type="button"
                >
                    <span>Company</span>
                    <svg class="h-4 w-4 transition" :class="companySubOpen ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="flex flex-col gap-2 pl-3" x-show="companySubOpen" x-transition>
                    <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#company-about" @click="mobileNavOpen=false; companySubOpen=false">About</a>
                    <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#company-partners" @click="mobileNavOpen=false; companySubOpen=false">Partners</a>
                    <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#company-history" @click="mobileNavOpen=false; companySubOpen=false">History</a>
                    <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#company-org" @click="mobileNavOpen=false; companySubOpen=false">Organizational Chart</a>
                    <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#company-nature" @click="mobileNavOpen=false; companySubOpen=false">Nature of Business</a>
                    <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#company-milestone" @click="mobileNavOpen=false; companySubOpen=false">Milestone Strategy</a>
                    <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#company-services" @click="mobileNavOpen=false; companySubOpen=false">Services</a>
                </div>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#activities" data-nav-link data-nav-target="activities" @click="mobileNavOpen=false">Activities</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#skills" data-nav-link data-nav-target="skills" @click="mobileNavOpen=false">Skills</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#reflection" data-nav-link data-nav-target="reflection" @click="mobileNavOpen=false">Reflection</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#recommendations" data-nav-link data-nav-target="recommendations" @click="mobileNavOpen=false">Recommendations</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#appendices" data-nav-link data-nav-target="appendices" @click="mobileNavOpen=false">Appendices</a>

            </nav>

        </div>

    </div>

        <main class="mx-auto w-full max-w-6xl px-6 pb-20 pt-10">
            <section id="home" class="scroll-mt-24 relative left-1/2 right-1/2 w-screen -mx-[50vw] min-h-screen overflow-hidden bg-slate-900 text-white">
                <div class="absolute inset-0 bg-[url('/images/hero-placeholder.jpg')] bg-cover bg-center"></div>
                <div class="absolute inset-0 bg-slate-950/55"></div>
                <div class="relative min-h-screen px-6 py-16 md:px-16">
                    <div class="absolute left-8 top-40 hidden flex-col gap-3 lg:flex">
                        <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://github.com/MarkyWorks" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2C6.48 2 2 6.58 2 12.26c0 4.52 2.87 8.36 6.84 9.72.5.09.68-.22.68-.49 0-.24-.01-.87-.01-1.7-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.49-1.11-1.49-.9-.64.07-.63.07-.63 1 .07 1.52 1.05 1.52 1.05.89 1.55 2.34 1.1 2.91.84.09-.66.35-1.1.64-1.35-2.22-.26-4.56-1.14-4.56-5.05 0-1.11.39-2.02 1.03-2.73-.1-.26-.45-1.3.1-2.71 0 0 .84-.27 2.75 1.05A9.23 9.23 0 0 1 12 7.3c.85 0 1.71.12 2.5.34 1.91-1.32 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.71 1.03 1.62 1.03 2.73 0 3.92-2.35 4.79-4.58 5.04.36.32.69.94.69 1.9 0 1.37-.01 2.47-.01 2.8 0 .27.18.59.69.49A10.05 10.05 0 0 0 22 12.26C22 6.58 17.52 2 12 2z"></path>
                            </svg>
                        </a>
                        <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://www.facebook.com/Calbang05/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M22 12.06C22 6.52 17.52 2 11.94 2S2 6.52 2 12.06c0 5 3.66 9.13 8.44 9.94v-7.03H7.9v-2.9h2.54V9.86c0-2.52 1.49-3.91 3.77-3.91 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.62.77-1.62 1.56v1.87h2.76l-.44 2.9h-2.32V22c4.78-.81 8.44-4.94 8.44-9.94z"></path>
                            </svg>
                        </a>
                        <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white"
                            href="mailto:markcleocalbang05@gmail.com"
                            aria-label="Email">

                                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M2 4h20a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm0 2v.01L12 13 22 6.01V6H2zm20 2.24l-9.4 6.58a1 1 0 0 1-1.2 0L2 8.24V18h20V8.24z"/>
                                </svg>

                        </a>
                        <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="tel:+09553745730" aria-label="Telephone">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24 11.7 11.7 0 0 0 3.67.59 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C11.3 21 3 12.7 3 2a1 1 0 0 1 1-1h3.47a1 1 0 0 1 1 1c0 1.27.2 2.5.59 3.67a1 1 0 0 1-.24 1.01l-2.2 2.11z"></path>
                            </svg>
                        </a>
                    </div>

                    <section class="mt-8 grid flex-1 items-center gap-8 md:gap-10 grid-cols-1 md:grid-cols-[1fr,1fr]">
                        <div class="uppercase text-center lg:pl-4 lg:text-left">
                            <div class="mb-6 flex items-center justify-center gap-3 lg:hidden">
                                <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M12 2C6.48 2 2 6.58 2 12.26c0 4.52 2.87 8.36 6.84 9.72.5.09.68-.22.68-.49 0-.24-.01-.87-.01-1.7-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.49-1.11-1.49-.9-.64.07-.63.07-.63 1 .07 1.52 1.05 1.52 1.05.89 1.55 2.34 1.1 2.91.84.09-.66.35-1.1.64-1.35-2.22-.26-4.56-1.14-4.56-5.05 0-1.11.39-2.02 1.03-2.73-.1-.26-.45-1.3.1-2.71 0 0 .84-.27 2.75 1.05A9.23 9.23 0 0 1 12 7.3c.85 0 1.71.12 2.5.34 1.91-1.32 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.71 1.03 1.62 1.03 2.73 0 3.92-2.35 4.79-4.58 5.04.36.32.69.94.69 1.9 0 1.37-.01 2.47-.01 2.8 0 .27.18.59.69.49A10.05 10.05 0 0 0 22 12.26C22 6.58 17.52 2 12 2z"></path>
                                    </svg>
                                </a>
                                <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M22 12.06C22 6.52 17.52 2 11.94 2S2 6.52 2 12.06c0 5 3.66 9.13 8.44 9.94v-7.03H7.9v-2.9h2.54V9.86c0-2.52 1.49-3.91 3.77-3.91 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.62.77-1.62 1.56v1.87h2.76l-.44 2.9h-2.32V22c4.78-.81 8.44-4.94 8.44-9.94z"></path>
                                    </svg>
                                </a>
                                <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.3a4.7 4.7 0 1 1 0 9.4 4.7 4.7 0 0 1 0-9.4zm0 2a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4zm5.45-2.35a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2z"></path>
                                    </svg>
                                </a>
                                <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="tel:+09553745730" aria-label="Telephone">
                                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24 11.7 11.7 0 0 0 3.67.59 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C11.3 21 3 12.7 3 2a1 1 0 0 1 1-1h3.47a1 1 0 0 1 1 1c0 1.27.2 2.5.59 3.67a1 1 0 0 1-.24 1.01l-2.2 2.11z"></path>
                                    </svg>
                                </a>
                            </div>
                                <div class="font-['Bebas_Neue'] text-xl sm:text-2xl lg:text-3xl tracking-[0.2em] leading-tight">
                                    Digital Portfolio
                                </div>
                                <div class="mt-1 font-['Bebas_Neue'] text-lg sm:text-xl lg:text-2xl tracking-[0.25em] text-white/80">
                                    MARK CLEO J. CALBANG
                                </div>
                                <div class="mt-2 text-[10px] sm:text-xs tracking-[0.15em] text-white/60">
                                    BSIT Student Trainee
                                </div>
                          </div>

                        <div class="relative flex items-center justify-center md:justify-end">
                            <div class="absolute -left-8 top-6 h-32 w-32 rounded-full bg-slate-200/20 blur-3xl sm:h-36 sm:w-36"></div>
                            <div class="absolute -right-12 bottom-8 h-44 w-44 rounded-full bg-white/10 blur-3xl sm:h-48 sm:w-48"></div>
                            <div class="relative h-[300px] w-[300px] overflow-hidden rounded-full bg-gray-600/60 shadow-[0_20px_40px_rgba(0,0,0,0.55)] sm:h-[340px] sm:w-[340px] lg:h-[380px] lg:w-[380px]">
                                <img
                                    class="h-full w-full object-cover"
                                    src="{{ asset('images/markypogi.png') }}"
                                    alt="Portrait"
                                />
                            </div>

                        </div>
                        <div class="absolute bottom-5 right-9 hidden flex-col items-center gap-2 text-[10px] uppercase tracking-widest text-white/55 sm:flex">
                                <span>Scroll Down</span>
                                <span class="text-lg text-white animate-bounce">↓</span>
                            </div>
                    </section>
                </div>
            </section>

            <section id="company" class="scroll-mt-24 mt-20 space-y-12">
                <div id="company-about" class="scroll-mt-24">
                    <p class="text-center text-lg uppercase tracking-[0.45em] font-semibold text-slate-500 dark:text-slate-400">Company</p>
                    <h2 class="mt-4 text-center text-3xl font-semibold">
                        Central Visayas Information Sharing Network (CVISNET) Foundation, Inc.
                    </h2>
                    <div class="w-full md:-ml-3">
                        <p class="mt-4 w-full max-w-none text-justify text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            The Central Visayas Information Sharing Network Foundation, Inc. (CVISNET) is an initiative by the government and private sectors to utilize Information and Communication Technology (ICT) for productivity and business enhancement solutions.
                        </p>
                        <p class="mt-4 w-full max-w-none text-justify text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            Over the past 25 years, CVISNET has provided ICT services to the public and private sectors, including basic web presence, internet connection, disaster communications, and e-governance for local government units. Our efforts have been internationally recognized and awarded by the United Nations - International Telecommunications Union, the Asia Pacific Economic Cooperation Digital Opportunity Center, and our partners, Nippon Telegraph and Telephone Corporation of Japan.
                        </p>

                    </div>
                </div>

                <div id="company-partners" class="scroll-mt-24 space-y-6">
                    <h3 class="text-center text-xl font-semibold md:text-left">Partners</h3>
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-8">
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://www.atr.jp/index_e.html" target= "_blank" aria-label="Partner 1">
                            <img class="h-12 w-30 object-contain" src="{{ asset('images/partners/logo-atr.png') }}" alt="Partner 1 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://apnic.foundation/" target= "_blank" aria-label="Partner 2">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-apnic.png') }}" alt="Partner 2 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://unconnected.org/" target= "_blank" aria-label="Partner 3">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/unconnected.webp') }}" alt="Partner 3 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://www.usaid.gov/"  target= "_blank" aria-label="Partner 4">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-usaid.png') }}" alt="Partner 4 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://www.wisflux.com/" target= "_blank" aria-label="Partner 5">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-wisflux.png') }}" alt="Partner 5 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://hapins.net/" target= "_blank" aria-label="Partner 6">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-hapins.png') }}" alt="Partner 6 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://www.global.ntt/" target= "_blank" aria-label="Partner 7">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-ntt.png') }}" alt="Partner 7 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://www.educatingnepal.org/" target= "_blank" aria-label="Partner 8">
                            <img class="h-12 w-30 object-contain" src="{{ asset('images/partners/logo-educatingnepal.png') }}" alt="Partner 8 logo" />
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://region7.dost.gov.ph/" target= "_blank" aria-label="Partner 9">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-dost.png') }}" alt="Partner 9 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://www.facebook.com/ramesesinc/" target= "_blank" aria-label="Partner 10">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-rameses.png') }}" alt="Partner 10 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://cloudesk.co/" target= "_blank" aria-label="Partner 11">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-cloudesk.png') }}" alt="Partner 11 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://asti.dost.gov.ph/asticon2024/" target= "_blank"  aria-label="Partner 12">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-dostasti.png') }}" alt="Partner 12 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://dict.gov.ph/" target= "_blank" aria-label="Partner 13">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-dict.png') }}" alt="Partner 13 logo" />
                        </a>
                        <a class="flex h-20 items-center justify-center rounded-2xl border border-slate-200 bg-white p-3 transition hover:shadow-sm dark:border-slate-800 dark:bg-white" href="https://www.diffsigma.com/" target= "_blank" aria-label="Partner 14">
                            <img class="h-12 w-20 object-contain" src="{{ asset('images/partners/logo-diffsigma.png') }}" alt="Partner 14 logo" />
                        </a>
                    </div>
                </div>

                <div id="company-history" class="scroll-mt-24 grid gap-10 md:grid-cols-2">
                    <div class="space-y-4">
                        <h3 class="text-center text-xl font-semibold md:text-left">History</h3>
                        <h4 class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Beginnings</h4>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            The Central Visayas Information Sharing Network (CVISNET) Foundation, Inc. started in 1997 as an e-government initiative funded by the Department of Science and Technology Region 7 and jointly collaborated with the Regional Development Council Region 7, Government Organization for Information Technology Region VII (GO-IT 7) and the Confederation of Scientific and Professional Organization (COSPO-7).
                        </p>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            The project was established in support of Administrative Order 332 "Directing all government agencies and instrumentalities including local government units to undertake electronic interconnection through the Internet to be known as the Philippine Web (PWEB). On May 9, 2000, the CVISNET evolved into a non-stock, non-profit foundation registered by the Securities and Exchange Commission under SEC Registration No. C200000454.
                        </p>
                    </div>
                    <div class="grid min-h-[260px] grid-cols-2 gap-4 rounded-2xl border border-dashed border-slate-300 p-4 text-sm text-slate-400 dark:border-slate-700">
                        <div class="flex items-center justify-center rounded-xl border border-dashed border-slate-300 dark:border-slate-700">
                            <img class="h-full w-full rounded-xl object-cover" src="https://ik.imagekit.io/cvisnet/cvisnet-website/foundation/mhtwf2qstbfnudnzazem.webp?updatedAt=1741658184183" alt="CVISNET history photo 1" />
                        </div>
                        <div class="flex items-center justify-center rounded-xl border border-dashed border-slate-300 dark:border-slate-700">
                            <img class="h-full w-full rounded-xl object-cover" src="https://ik.imagekit.io/cvisnet/cvisnet-website/foundation/20250212_095026.webp?updatedAt=1741658032314" alt="CVISNET history photo 2" />
                        </div>
                        <div class="flex items-center justify-center rounded-xl border border-dashed border-slate-300 dark:border-slate-700">
                            <img class="h-full w-full rounded-xl object-cover" src="https://ik.imagekit.io/cvisnet/cvisnet-website/foundation/20250213_153324.webp?updatedAt=1741672872127" alt="CVISNET history photo 3" />
                        </div>
                        <div class="flex items-center justify-center rounded-xl border border-dashed border-slate-300 dark:border-slate-700">
                            <img class="h-full w-full rounded-xl object-cover" src="https://ik.imagekit.io/cvisnet/cvisnet-website/homepage/homepage_02.webp?updatedAt=1741674811493" alt="CVISNET history photo 3" />
                        </div>
                    </div>
                </div>

                <div id="company-org" class="scroll-mt-24 space-y-4">
                    <h3 class="text-center text-xl font-semibold md:text-left">Organizational Chart</h3>
                    <div class="rounded-2xl border border-dashed border-slate-300 p-4 shadow-lg shadow-slate-900/10 dark:border-slate-700 dark:shadow-black/40">
                        <img class="mx-auto h-auto w-full max-w-3xl rounded-xl object-contain" src="{{ asset('images/cvisnetorg.png') }}" alt="CVISNET organizational chart" />
                    </div>
                </div>

                <div class="grid gap-6 md:grid-cols-2">
                    <div id="company-nature" class="scroll-mt-24 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-center text-lg font-semibold">Nature of Business</h3>
                        <h4 class="text-center text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Objectives</h4>
                        <p class="mt-3 text-justify text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            To create a comprehensive One-Stop-Shop Information and Internet Portal that empowers the Central Visayas region through ICT solutions and capability building, serving government, non-government agencies, and business organizations alike.
                        </p>
                        <h4 class="text-center text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Goals</h4>
                        <p class="mt-3 text-justify text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            CVISNET’s goal is to share the benefits we have implemented for current members and expand the solutions for future members. This means scaling practical ICT services that strengthen governance, education, and local business operations. Through sustained partnerships and continuous innovation, CVISNET keeps services responsive to emerging needs and opportunities.
                        </p>
                    </div>
                    <div id="company-milestone" class="scroll-mt-24 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-center text-lg font-semibold">Milestone Strategy</h3>
                        <ol class="mt-3 space-y-2 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            <li>1. Enhance information literacy among government employees and in schools.</li>
                            <li>2. Facilitate the interconnection of government agencies across the region via the internet.</li>
                            <li>3. Promote the integration of ICT into government operations.</li>
                            <li>4. Spearhead the incubation of emerging ICT technologies.</li>
                            <li>5. Ensure the continuous upgrading of our systems.</li>
                            <li>6. Develop and implement standards for government data management.</li>
                            <li>7. Empower the community through targeted grant projects that support information literacy, technological innovation, and infrastructure development.</li>
                        </ol>
                    </div>
                </div>
                <div id="company-services" class="scroll-mt-24 space-y-6">
                    <div class="flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
                        <div>
                            <h3 class="text-center text-xl font-semibold md:text-left">Services</h3>
                            <p class="mt-2 max-w-2xl text-center text-sm leading-relaxed text-slate-600 md:text-left dark:text-slate-300">
                                CVISNET delivers practical digital services that help organizations communicate clearly, operate efficiently, and stay connected.
                            </p>
                        </div>
                    </div>
                    <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                        <article class="group relative overflow-hidden rounded-[1.75rem] border border-slate-200/80 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-sky-300 hover:shadow-2xl hover:shadow-sky-100/70 dark:border-slate-800 dark:bg-slate-900 dark:hover:border-sky-500/40 dark:hover:shadow-sky-950/40">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-sky-400 via-cyan-400 to-emerald-400 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                            <div class="flex items-start gap-4">
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 ring-8 ring-sky-50 transition duration-300 group-hover:scale-110 group-hover:bg-sky-600 group-hover:text-white group-hover:ring-sky-100 dark:bg-sky-950/70 dark:text-sky-300 dark:ring-sky-950/60 dark:group-hover:bg-sky-500 dark:group-hover:text-slate-950">
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M4 5h16v10H4z"></path>
                                        <path d="M8 19h8"></path>
                                        <path d="M10 15v4"></path>
                                        <path d="M14 15v4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500 transition duration-300 group-hover:text-sky-600 dark:text-slate-400 dark:group-hover:text-sky-300">Web Projects</h4>
                                    <p class="mt-3 text-sm leading-relaxed text-slate-600 transition duration-300 group-hover:text-slate-700 dark:text-slate-300 dark:group-hover:text-slate-200">
                                        They build purpose-driven websites for government units, NGOs, and local enterprises. Each project focuses on accessibility, clear information flow, and long-term maintainability.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="group relative overflow-hidden rounded-[1.75rem] border border-slate-200/80 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-fuchsia-300 hover:shadow-2xl hover:shadow-fuchsia-100/70 dark:border-slate-800 dark:bg-slate-900 dark:hover:border-fuchsia-500/40 dark:hover:shadow-fuchsia-950/40">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-fuchsia-400 via-rose-400 to-orange-300 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                            <div class="flex items-start gap-4">
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-fuchsia-100 text-fuchsia-700 ring-8 ring-fuchsia-50 transition duration-300 group-hover:scale-110 group-hover:bg-fuchsia-600 group-hover:text-white group-hover:ring-fuchsia-100 dark:bg-fuchsia-950/70 dark:text-fuchsia-300 dark:ring-fuchsia-950/60 dark:group-hover:bg-fuchsia-500 dark:group-hover:text-slate-950">
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <rect x="4" y="5" width="16" height="12" rx="2"></rect>
                                        <path d="M8 9h8"></path>
                                        <path d="M8 13h5"></path>
                                        <path d="M17 18l2 2"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500 transition duration-300 group-hover:text-fuchsia-600 dark:text-slate-400 dark:group-hover:text-fuchsia-300">Multimedia Projects</h4>
                                    <p class="mt-3 text-sm leading-relaxed text-slate-600 transition duration-300 group-hover:text-slate-700 dark:text-slate-300 dark:group-hover:text-slate-200">
                                        They produce digital content that communicates programs, services, and community initiatives. This includes videos, graphics, and presentation assets tailored to each audience.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="group relative overflow-hidden rounded-[1.75rem] border border-slate-200/80 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-emerald-300 hover:shadow-2xl hover:shadow-emerald-100/70 dark:border-slate-800 dark:bg-slate-900 dark:hover:border-emerald-500/40 dark:hover:shadow-emerald-950/40">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-300 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                            <div class="flex items-start gap-4">
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 ring-8 ring-emerald-50 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white group-hover:ring-emerald-100 dark:bg-emerald-950/70 dark:text-emerald-300 dark:ring-emerald-950/60 dark:group-hover:bg-emerald-500 dark:group-hover:text-slate-950">
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M5 7h14"></path>
                                        <path d="M7 11h10"></path>
                                        <path d="M9 15h6"></path>
                                        <path d="M4 4h16v16H4z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500 transition duration-300 group-hover:text-emerald-600 dark:text-slate-400 dark:group-hover:text-emerald-300">Web Hosting</h4>
                                    <p class="mt-3 text-sm leading-relaxed text-slate-600 transition duration-300 group-hover:text-slate-700 dark:text-slate-300 dark:group-hover:text-slate-200">
                                        They provide reliable hosting and domain support to keep websites secure and online. Regular monitoring and updates help ensure performance and uptime.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="group relative overflow-hidden rounded-[1.75rem] border border-slate-200/80 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-amber-300 hover:shadow-2xl hover:shadow-amber-100/70 dark:border-slate-800 dark:bg-slate-900 dark:hover:border-amber-500/40 dark:hover:shadow-amber-950/40">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-amber-400 via-orange-400 to-rose-300 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                            <div class="flex items-start gap-4">
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700 ring-8 ring-amber-50 transition duration-300 group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white group-hover:ring-amber-100 dark:bg-amber-950/70 dark:text-amber-300 dark:ring-amber-950/60 dark:group-hover:bg-amber-400 dark:group-hover:text-slate-950">
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M4 19h16"></path>
                                        <path d="M7 16V8l5-3 5 3v8"></path>
                                        <path d="M10 11h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500 transition duration-300 group-hover:text-amber-600 dark:text-slate-400 dark:group-hover:text-amber-300">Corporate Designs</h4>
                                    <p class="mt-3 text-sm leading-relaxed text-slate-600 transition duration-300 group-hover:text-slate-700 dark:text-slate-300 dark:group-hover:text-slate-200">
                                        They develop branding assets such as logos, templates, and identity guides. These help organizations present a consistent and professional image across platforms.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="group relative overflow-hidden rounded-[1.75rem] border border-slate-200/80 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-violet-300 hover:shadow-2xl hover:shadow-violet-100/70 dark:border-slate-800 dark:bg-slate-900 dark:hover:border-violet-500/40 dark:hover:shadow-violet-950/40">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-violet-400 via-indigo-400 to-sky-300 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                            <div class="flex items-start gap-4">
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-violet-100 text-violet-700 ring-8 ring-violet-50 transition duration-300 group-hover:scale-110 group-hover:bg-violet-600 group-hover:text-white group-hover:ring-violet-100 dark:bg-violet-950/70 dark:text-violet-300 dark:ring-violet-950/60 dark:group-hover:bg-violet-400 dark:group-hover:text-slate-950">
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M6 6h12v12H6z"></path>
                                        <path d="M10 10h4v4h-4z"></path>
                                        <path d="M9 2v2"></path>
                                        <path d="M15 20v2"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500 transition duration-300 group-hover:text-violet-600 dark:text-slate-400 dark:group-hover:text-violet-300">Management System</h4>
                                    <p class="mt-3 text-sm leading-relaxed text-slate-600 transition duration-300 group-hover:text-slate-700 dark:text-slate-300 dark:group-hover:text-slate-200">
                                        They design custom systems to streamline workflows and improve data management. Solutions are built to fit each organization's processes and reporting needs.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="group relative overflow-hidden rounded-[1.75rem] border border-slate-200/80 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-rose-300 hover:shadow-2xl hover:shadow-rose-100/70 dark:border-slate-800 dark:bg-slate-900 dark:hover:border-rose-500/40 dark:hover:shadow-rose-950/40">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-rose-400 via-pink-400 to-fuchsia-300 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                            <div class="flex items-start gap-4">
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-rose-100 text-rose-700 ring-8 ring-rose-50 transition duration-300 group-hover:scale-110 group-hover:bg-rose-600 group-hover:text-white group-hover:ring-rose-100 dark:bg-rose-950/70 dark:text-rose-300 dark:ring-rose-950/60 dark:group-hover:bg-rose-400 dark:group-hover:text-slate-950">
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path d="M12 5v14"></path>
                                        <path d="M5 12h14"></path>
                                        <path d="M7 7l10 10"></path>
                                        <path d="M17 7L7 17"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500 transition duration-300 group-hover:text-rose-600 dark:text-slate-400 dark:group-hover:text-rose-300">ICT Training</h4>
                                    <p class="mt-3 text-sm leading-relaxed text-slate-600 transition duration-300 group-hover:text-slate-700 dark:text-slate-300 dark:group-hover:text-slate-200">
                                        They provide hands-on training and capacity building for government staff, educators, and community leaders. Sessions focus on practical digital skills, tools, and best practices that support daily operations.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section id="activities" class="scroll-mt-24 mt-20">
                <p class="text-center text-lg uppercase tracking-[0.45em] font-semibold text-slate-500 dark:text-slate-400">Activities</p>
                <div class="mt-6 flex flex-wrap justify-center gap-3" id="activities-months"></div>
                <div class="mt-6 grid gap-4 md:grid-cols-2" id="activities-list"></div>
            </section>

            <div
                id="activity-lightbox"
                class="pointer-events-none fixed inset-0 z-[70] flex items-center justify-center bg-slate-950/80 px-4 py-6 opacity-0 transition duration-300"
                aria-hidden="true"
            >
                <div class="absolute inset-0" data-lightbox-close></div>
                <div class="relative z-10 w-full max-w-6xl scale-95 overflow-hidden rounded-[2rem] border border-white/10 bg-white shadow-2xl transition duration-300 dark:bg-slate-950">
                    <button
                        type="button"
                        class="absolute right-4 top-4 z-20 flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white/90 text-slate-700 shadow-lg transition hover:scale-105 hover:text-slate-950 dark:border-slate-700 dark:bg-slate-900/90 dark:text-slate-200 dark:hover:text-white"
                        data-lightbox-close
                        aria-label="Close activity preview"
                    >
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M6 6l12 12"></path>
                            <path d="M18 6l-12 12"></path>
                        </svg>
                    </button>

                    <div class="grid max-h-[90vh] overflow-y-auto lg:grid-cols-[1.2fr,0.8fr]">
                        <div class="grid gap-3 bg-slate-100 p-4 dark:bg-slate-900 md:grid-cols-2" id="activity-lightbox-images"></div>
                        <div class="flex flex-col gap-5 p-6 md:p-8">
                            <div class="space-y-3">
                                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400" id="activity-lightbox-month"></p>
                                <h3 class="text-2xl font-semibold text-slate-900 dark:text-white" id="activity-lightbox-week"></h3>
                                <p class="inline-flex w-fit items-center rounded-full border border-slate-200 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-slate-500 dark:border-slate-700 dark:text-slate-300" id="activity-lightbox-date"></p>
                            </div>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300" id="activity-lightbox-description"></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                window.activitiesData = [
                    {
                        month: 'January',
                        year: 2026,
                        img: "{{ asset('images/activities/january.png') }}",
                        description: 'Default January description.',
                        weeks: [
                            {
                                img: "{{ asset('images/Activities/janweek1.png') }}",
                                img2: "{{ asset('images/Activities/janweek1_1.png') }}",
                                week: 'Week 1',
                                date: 'Jan 26-30, 2026',
                                description: ' &nbspDuring the first week, we had an orientation at CVISNet Foundation Inc. where we learned about the organization’s mission, goals, and the projects they handle, which helped us understand how the foundation works and what is expected from interns. We were also introduced to fellow interns from different universities, allowing us to build connections, practice teamwork, and prepare for future collaboration. After that, we began our Linux journey, where we learned basic Linux commands, commandline navigation, file management, and essential system commands, which strengthened our technical foundation and confidence in using the terminal. We then applied this knowledge through OverTheWire SSH tasks, which enhanced our analytical thinking and problem-solving skills by using Linux commands in real scenarios. Lastly, I was introduced to the Laravel framework, learning its basics and purpose in web development, which prepared us for the larger project that will be developed in the coming weeks. ',
                            },
                        ],
                    },
                    {
                        month: 'February',
                        year: 2026,
                        img: "{{ asset('images/activities/february.png') }}",
                        description: 'Default February description.',
                        weeks: [
                            {
                                img: "{{ asset('images/Activities/febweek1.png') }}",
                                img2: "{{ asset('images/Activities/febweek1_1.png') }}",
                                week: 'Week 1',
                                date: 'Feb 2–6, 2026',
                                description: ' During the second week, I focused on learning the Laravel framework in more detail, including how it works with databases. I was introduced to important concepts such as models, controllers, routes, and database migrations. As part of our task, I created a simple CRUD (Create, Read, Update, Delete) application using Laravel. This activity helped me understand how data flows from the database to the system and how Laravel makes development more organized and efficient. ',
                            },
                             {
                                img: "{{ asset('images/Activities/febweek2_1.png') }}",
                                img2: "{{ asset('images/Activities/febweek2_2.png') }}",
                                week: 'Week 2',
                                date: 'Feb 9–13, 2026',
                                description: '  This week, I worked on a mini project called Konek, a contact management system, where my supervisor assigned me several tasks that improved my technical and web development skills. I developed a feature for CRUD (Create, Read, Update, Delete) User Management system that handled two roles: admin, who has full control, and normal users, who have limited access. I also implemented user seeding in Laravel to create default users for testing and development. In addition, I added contact restrictions based on ownership, ensuring that users could only view and manage their own contacts, which enhanced the system’s security and protected data privacy.',
                            },
                            {
                                img: "{{ asset('images/Activities/febweek3_1.png') }}",
                                img2: "{{ asset('images/Activities/febweek3_2.png') }}",
                                week: 'Week 3',
                                date: 'Feb 16–20, 2026',
                                description: '  This week, my supervisor assigned me a task to implement the importing and exporting of contacts in different file formats, including CSV, XLSX, and XLS. After completing the main task, he reviewed my work and gave me a subtask for improvement. I then worked on fixing and refining the system based on the feedback provided to ensure the feature functioned correctly and efficiently. ',
                            },
                            {
                                img: "{{ asset('images/Activities/feb4_1.png') }}",
                                img2: "{{ asset('images/activities/feb4_2.png') }}",
                                week: 'Week 4',
                                date: 'Feb 23–27, 2026',
                                description: '    This week, I had the opportunity to attend a seminar in Medellin, Cebu, about ISLET Connect by Starlink, where I learned how it works, how to connect, and about related tools and the BEST Barangay e-System. I also participated in data collection, profiling residents in a selected barangay to gather accurate information directly from the community. In addition, my supervisor assigned me a task for the mini project Konek, where I worked on designing the system’s homepage.',
                            },
                        ],
                    },
                    {
                        month: 'March',
                        year: 2026,
                        img: "{{ asset('images/activities/march.png') }}",
                        description: 'Default March description.',
                        weeks: [
                            {
                                img: "{{ asset('images/Activities/marchweek1.png') }}",
                                img2: "{{ asset('images/Activities/marchweek1_1.png') }}",
                                week: 'Week 1',
                                date: 'Mar 3–6, 2026',
                                description: '   I worked on creating the current homepage for the mini project, the Konek Management System, while coordinating with our supervisor for design checking and feedback. This involved refining the layout, improving the visual structure, and ensuring that the interface met the required standards. After completing these tasks, I shifted my focus to learning about Docker, exploring its basic concepts, functions, and how it can be used to manage and deploy applications efficiently. ',
                            },
                            {
                                img: "{{ asset('images/Activities/marchweek2_1.png') }}",
                                img2: "{{ asset('images/Activities/marchweek2_2.png') }}",
                                week: 'Week 2',
                                date: 'Mar 9–13, 2026',
                                description: '  I set up WSL with AlmaLinux 9 and installed the necessary dependencies for Laravel development within the environment. After completing the setup, I was assigned to implement a Laravel Typesense feature using the WSL-based development setup, which involved configuring and integrating search functionality. I then proceeded to work on another Laravel task that utilized Laravel as the backend, React.js as the frontend, and Inertia to connect both sides, allowing for a more seamless and dynamic application flow.',
                            },
                            {
                                img: "{{ asset('images/Activities/marchweek3_1.png') }}",
                                img2: "{{ asset('images/Activities/marchweek3_2.png') }}",
                                week: 'Week 3',
                                date: 'Mar 16–20, 2026',
                                description: '  I applied what I learned in Laravel, React, and Inertia.js by implementing a user management system, focusing on creating CRUD functionalities for a school management system. After completing the initial implementation, I received feedback from my supervisor, which helped refine and improve the system. I then proceeded to implement additional features, specifically the import and export of users based on their roles within the school. ',
                            },
                            {
                                img: "{{ asset('images/Activities/marchweek4_1.png') }}",
                                img2: "{{ asset('images/Activities/marchweek4_2.png') }}",
                                week: 'Week 4',
                                date: 'Mar 23–27, 2026',
                                description: ' During this period, I learned the basics of n8n and applied my knowledge by developing an automation task for DTR using a webhook, which automatically distributed data to Notion, Excel, and email notifications. I also assisted in the installation of Starlink to improve connectivity in the barangays and at the school in Caputatan Sur and Canhabagat, where I helped handle fiber optic cables and RJ45 connections. In addition, I attended a seminar on ISLET Connect and disaster risk reduction held at Medellin Central School. After these activities, I continued working in the office to further enhance and complete my n8n automation task.',
                            },
                            {
                                img: "{{ asset('images/Activities/spillovermarchandapril.png') }}",
                                img2: "{{ asset('images/Activities/spillovermarchandapril1.png') }}",
                                week: 'Spillover Days',
                                date: 'Mar 30 – April 03, 2026',
                                description: '   During this period, I focused on studying and learning Coolify.io, exploring its features, setup process, and how it can be used as a self-hosted platform for deploying and managing applications. ',
                            },
                        ],
                    },
                    {
                        month: 'April',
                        year: 2026,
                        img: "{{ asset('images/activities/april.png') }}",
                        description: 'Default April description.',
                        weeks: [
                            {
                                img: "{{ asset('images/Activities/aprilweek1.png') }}",
                                img2: "{{ asset('images/Activities/aprilweek1_2.png') }}",
                                week: 'Week 1',
                                date: 'Apr 6–10, 2026',
                                description: 'I worked on inputting residence profiling data, ensuring accurate and organized information entry. I also spent time learning Expo in React Native, focusing on its basic concepts and how it is used for mobile app development. In addition, I proposed a system titled “CVISNET Help Desk” to my supervisor and began the initial development of the proposed system',
                            },
                            {
                                img: "{{ asset('images/Activities/aprilweek2.png') }}",
                                img2: "{{ asset('images/Activities/aprilweek2_1.png') }}",
                                week: 'Week 2',
                                date: 'Apr 13–17, 2025',
                                description: 'I continued the development of the proposed system, focusing on improving its features and functionality. I also conducted resident data collection in Medellin, specifically in Gibitngil Island, ensuring accurate gathering of information. In addition, I assisted in the installation of Starlink and performed hands-on UTP cabling in Bantayan Island to support network connectivity.',
                            },
                            {
                                img: "{{ asset('images/Activities/aprilweek3.png') }}",
                                img2: "{{ asset('images/Activities/aprilweek3_1.png') }}",
                                week: 'Week 3',
                                date: 'Apr 20–24, 2025',
                                description: 'I presented the results of the resident data collection conducted in Gibitngil Island, explaining the gathered information and its relevance. After the presentation, I worked on deploying a Laravel application using Coolify in a self-hosted environment, focusing on setting up, configuring, and ensuring the application runs properly online.',
                            },
                            {
                                img: "{{ asset('images/Activities/aprilweek4_1.png') }}",
                                img2: "{{ asset('images/Activities/aprilweek4_2.png') }}",
                                week: 'Week 4 / Spilloverdays',
                                date: 'Apr 27 – May 1, 2025',
                                description: 'I worked on the socio-economic and community profile of Medellin, Cebu, covering all 19 barangays by gathering and organizing relevant data. I then presented my work, focusing on clearly explaining the socio-economic information and its significance. After the presentation, I continued the development of the CVISNET Help Desk system, improving its features and overall functionality.',
                            },

                        ],
                    },
                    {
                        month: 'May',
                        year: 2026,
                        img: "{{ asset('images/activities/may.png') }}",
                        description: 'Default May description.',
                        weeks: [
                            {
                                img: "{{ asset('images/Activities/mayweek1_1.png') }}",
                                img2: "{{ asset('images/Activities/mayweek1_2.png') }}",
                                week: 'Week 1',
                                date: 'May 4–8, 2026',
                                description: ' I assisted in setting up the Starlink internet connection at San Remigio Beach Club to ensure stable and reliable connectivity. After the installation, I participated in hands-on training and pilot testing activities conducted for all barangays in Medellin, Cebu, which were also held at San Remigio Beach Club. These activities involved assisting participants, observing system processes, and supporting the overall implementation of the training sessions.',
                            },
                            {
                                img: "{{ asset('images/Activities/mayweek2_1.png') }}",
                                img2: "{{ asset('images/Activities/mayweek2_2.png') }}",
                                week: 'Week 2',
                                date: 'May 11–15, 2026',
                                description: 'I worked on creating a WordPress portfolio website, focusing on designing and organizing the content to showcase my projects, skills, and experiences effectively. After completing the portfolio setup, I continued the development of the CVISNET Help Desk system by improving its features and functionality.',
                            },
                            {
                                img: "{{ asset('images/Activities/mayweek3_1.png') }}",
                                img2: "{{ asset('images/Activities/mayweek3_2.png') }}",
                                week: 'Week 3',
                                date: 'May 18–22, 2026',
                                description: 'I continued the development of the CVISNET Help Desk system by adding more functionalities and conducting testing to ensure that the features worked properly and efficiently. This also involved improving the system’s performance, fixing issues, and refining the overall user experience.',
                            },
                        ],
                    },
                ];
            </script>

            <section id="skills" class="scroll-mt-24 mt-16">
                <p class="text-center text-lg font-semibold uppercase tracking-[0.45em] text-slate-500 dark:text-slate-400">Skills</p>
                <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-sky-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-sky-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 ring-8 ring-sky-50 transition duration-300 group-hover:scale-110 group-hover:bg-sky-600 group-hover:text-white group-hover:ring-sky-100 dark:bg-sky-950/70 dark:text-sky-300 dark:ring-sky-950/60 dark:group-hover:bg-sky-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M8 9l-4 3 4 3"></path>
                                    <path d="M16 9l4 3-4 3"></path>
                                    <path d="M14 5l-4 14"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Web Development</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            Developed responsive and user-friendly web interfaces using Laravel Blade, Tailwind CSS, and structured layouts. This strengthened my ability to build pages that are both functional and visually organized across different screen sizes.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-fuchsia-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-fuchsia-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-fuchsia-100 text-fuchsia-700 ring-8 ring-fuchsia-50 transition duration-300 group-hover:scale-110 group-hover:bg-fuchsia-600 group-hover:text-white group-hover:ring-fuchsia-100 dark:bg-fuchsia-950/70 dark:text-fuchsia-300 dark:ring-fuchsia-950/60 dark:group-hover:bg-fuchsia-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M12 3l7 4v10l-7 4-7-4V7l7-4z"></path>
                                    <path d="M9 12l2 2 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Creative Design</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            Applied design thinking to improve layout, visual balance, and presentation quality in digital projects. This helped me create cleaner interfaces and more engaging materials for users and stakeholders.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-emerald-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 ring-8 ring-emerald-50 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white group-hover:ring-emerald-100 dark:bg-emerald-950/70 dark:text-emerald-300 dark:ring-emerald-950/60 dark:group-hover:bg-emerald-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M10 14L21 3"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M14 10l-4 4"></path>
                                    <path d="M8.5 8.5l-5 5a2.12 2.12 0 0 0 3 3l5-5"></path>
                                    <path d="M13 13l5 5"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Automation &amp; Tools</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            Explored and used tools such as Linux, Docker, and workflow automation platforms to simplify repetitive tasks and improve efficiency. This expanded my understanding of how tools can support development and daily operations.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-amber-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-amber-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700 ring-8 ring-amber-50 transition duration-300 group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white group-hover:ring-amber-100 dark:bg-amber-950/70 dark:text-amber-300 dark:ring-amber-950/60 dark:group-hover:bg-amber-400 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M9.5 9a2.5 2.5 0 1 1 5 0c0 1.5-1 2.1-1.8 2.8-.7.6-1.2 1.1-1.2 2.2"></path>
                                    <path d="M12 17h.01"></path>
                                    <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Problem Solving</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            Improved my ability to analyze issues, debug errors, and refine features based on testing and feedback. Each task required careful thinking, practical adjustments, and a solution-focused approach.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-violet-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-violet-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-violet-100 text-violet-700 ring-8 ring-violet-50 transition duration-300 group-hover:scale-110 group-hover:bg-violet-600 group-hover:text-white group-hover:ring-violet-100 dark:bg-violet-950/70 dark:text-violet-300 dark:ring-violet-950/60 dark:group-hover:bg-violet-400 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M6 18h12"></path>
                                    <path d="M7 14h10"></path>
                                    <path d="M9 10h6"></path>
                                    <path d="M12 6h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Networking</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            Gained exposure to networking concepts through hands-on activities involving connectivity setup, cabling, and communication infrastructure support. This gave me a stronger appreciation of how networks enable reliable digital services.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-rose-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-rose-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-rose-100 text-rose-700 ring-8 ring-rose-50 transition duration-300 group-hover:scale-110 group-hover:bg-rose-600 group-hover:text-white group-hover:ring-rose-100 dark:bg-rose-950/70 dark:text-rose-300 dark:ring-rose-950/60 dark:group-hover:bg-rose-400 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9.5" cy="7" r="3"></circle>
                                    <path d="M21 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 4.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Team Collaboration</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            Worked closely with supervisors and fellow interns by sharing ideas, receiving feedback, and contributing to common goals. This strengthened my communication, adaptability, and ability to work effectively within a team environment.
                        </p>
                    </article>
                </div>
            </section>

            <section id="reflection" class="scroll-mt-24 mt-16">
                <p class="text-center text-lg font-semibold uppercase tracking-[0.45em] text-slate-500 dark:text-slate-400">Reflection</p>
                <div class="mt-8 grid gap-5 md:grid-cols-2">
                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-sky-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-sky-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 ring-8 ring-sky-50 transition duration-300 group-hover:scale-110 group-hover:bg-sky-600 group-hover:text-white group-hover:ring-sky-100 dark:bg-sky-950/70 dark:text-sky-300 dark:ring-sky-950/60 dark:group-hover:bg-sky-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M12 3v18"></path>
                                    <path d="M5 10l7-7 7 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Expectation</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            My expectation of this OJT was to learn different technologies and improve my knowledge in various tech stacks. However, throughout my internship and training experience, I learned far more than I expected by gaining hands-on experience in development, networking, deployment, automation, and real-world technical tasks.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-fuchsia-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-fuchsia-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-fuchsia-100 text-fuchsia-700 ring-8 ring-fuchsia-50 transition duration-300 group-hover:scale-110 group-hover:bg-fuchsia-600 group-hover:text-white group-hover:ring-fuchsia-100 dark:bg-fuchsia-950/70 dark:text-fuchsia-300 dark:ring-fuchsia-950/60 dark:group-hover:bg-fuchsia-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M4 6h16"></path>
                                    <path d="M4 12h16"></path>
                                    <path d="M4 18h10"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Experiences</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                           Throughout my activities, I experienced working on different technical and community-based tasks such as developing systems using Laravel, React, and Inertia.js, creating CRUD functionalities, implementing automation workflows using n8n, and deploying applications using Coolify and Laravel Cloud. I also experienced hands-on networking activities, including Starlink installation, UTP cabling, and assisting in connectivity projects. In addition, I participated in data collection, presentations, pilot testing, and system proposal development, which improved both my technical and communication skills.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-amber-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-amber-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700 ring-8 ring-amber-50 transition duration-300 group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white group-hover:ring-amber-100 dark:bg-amber-950/70 dark:text-amber-300 dark:ring-amber-950/60 dark:group-hover:bg-amber-400 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M12 8v5"></path>
                                    <path d="M12 17h.01"></path>
                                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Challenges</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                           I encountered different challenges while learning new technologies, handling deployments, debugging systems, and adjusting to real-world technical environments. Some tasks were difficult at first, especially when dealing with unfamiliar tools and troubleshooting issues. However, with the guidance of my supervisor, continuous practice, and the help of AI tools, I was able to overcome these challenges and continue improving my skills and knowledge.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-emerald-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 ring-8 ring-emerald-50 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white group-hover:ring-emerald-100 dark:bg-emerald-950/70 dark:text-emerald-300 dark:ring-emerald-950/60 dark:group-hover:bg-emerald-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M5 12l5 5L20 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Output</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            Through these experiences, I developed skills in Laravel with Blade, Laravel deployment using Laravel Cloud and Coolify, Laravel with React and Inertia.js, workflow automation using n8n, frontend and backend development, networking, and system implementation. I also improved my problem-solving, adaptability, and technical understanding through the different learning activities and real-world tasks I performed.
                        </p>
                    </article>
                </div>
            </section>

            <section id="recommendations" class="scroll-mt-24 mt-16">
                <p class="text-center text-lg font-semibold uppercase tracking-[0.45em] text-slate-500 dark:text-slate-400">Recommendations</p>
                <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-sky-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-sky-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 ring-8 ring-sky-50 transition duration-300 group-hover:scale-110 group-hover:bg-sky-600 group-hover:text-white group-hover:ring-sky-100 dark:bg-sky-950/70 dark:text-sky-300 dark:ring-sky-950/60 dark:group-hover:bg-sky-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Hands-On Training</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            I recommend that the company continue providing hands-on training and real-world technical tasks for interns and trainees because these activities greatly help in improving practical skills and industry knowledge.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-fuchsia-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-fuchsia-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-fuchsia-100 text-fuchsia-700 ring-8 ring-fuchsia-50 transition duration-300 group-hover:scale-110 group-hover:bg-fuchsia-600 group-hover:text-white group-hover:ring-fuchsia-100 dark:bg-fuchsia-950/70 dark:text-fuchsia-300 dark:ring-fuchsia-950/60 dark:group-hover:bg-fuchsia-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M4 7h16"></path>
                                    <path d="M4 12h16"></path>
                                    <path d="M4 17h10"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">More Opportunities</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            It would also be beneficial to provide more internship slots and create designated working areas or spaces for trainees to ensure a more comfortable, organized, and productive learning environment.
                        </p>
                    </article>

                    <article class="group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-emerald-500/40">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 ring-8 ring-emerald-50 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white group-hover:ring-emerald-100 dark:bg-emerald-950/70 dark:text-emerald-300 dark:ring-emerald-950/60 dark:group-hover:bg-emerald-500 dark:group-hover:text-slate-950">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M12 14v7"></path>
                                    <path d="M5 10a7 7 0 1 1 14 0c0 3-2 4.5-3.5 5.5-.8.5-1.5 1.1-1.5 2.5h-4c0-1.4-.7-2-1.5-2.5C7 14.5 5 13 5 10z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Mentorship</h3>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-justify text-slate-600 dark:text-slate-300">
                            In addition, continuing mentorship and guidance from supervisors can further help trainees improve their technical abilities, confidence, and professional growth.
                        </p>
                    </article>
                </div>
            </section>

            <section id="appendices" class="scroll-mt-24 mt-16">
                <p class="text-center text-lg font-semibold uppercase tracking-[0.45em] text-slate-500 dark:text-slate-400">Appendices</p>
                <p class="mx-auto mt-3 max-w-2xl text-center text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                    Click any document card to open a full-screen preview.
                </p>

                @php
                    $appendixCards = [
                         [
                            'title' => 'Resume',
                            'image' => asset('images/appendices/Resume.png'),
                        ],
                        [
                            'title' => 'Application Letter',
                            'image' => asset('images/appendices/Applicationletter.png'),
                        ],
                        [
                            'title' => 'Personal Data Sheet of OJT',
                            'image' => asset('images/appendices/personal Data sheet.jpg'),
                        ],
                        [
                            'title' => 'Parents Consent and Waiver',
                            'image' => asset('images/appendices/waiver.jpg'),
                        ],
                        [
                            'title' => 'OJT Memorandum of Agreement',
                            'image' => asset('images/appendices/MOA.png'),
                        ],
                        [
                            'title' => 'Endorsement Letter',
                            'image' => asset('images/appendices/EndorsementLetter1.jpg'),

                        ],
                        [
                            'title' => 'Barangay Clearance',
                            'image' => asset('images/appendices/barangay clearance.jpg'),
                        ],
                        [
                            'title' => 'Medical Certificate',
                            'image' => asset('images/appendices/medical Certificate.jpg'),
                        ],
                        [
                            'title' => 'Police Clearance',
                            'image' => asset('images/appendices/Police clearance.jpg'),
                        ],
                        [
                            'title' => 'Registrar Certification',
                            'image' => asset('images/appendices/COR.jpg'),
                        ],
                    ];
                @endphp

                <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                    @foreach ($appendixCards as $appendixCard)
                        <button
                            type="button"
                            class="group text-left"
                            data-appendix-card
                            data-appendix-title="{{ $appendixCard['title'] }}"
                            data-appendix-image="{{ $appendixCard['image'] }}"
                        >
                            <article class="overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-sm transition duration-300 group-hover:-translate-y-1 group-hover:border-sky-300 group-hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:group-hover:border-sky-500/40">
                                <div class="flex aspect-[4/5] items-center justify-center overflow-hidden rounded-[1.5rem] bg-gradient-to-br from-slate-100 via-white to-slate-200 p-4 dark:from-slate-800 dark:via-slate-900 dark:to-slate-800">
                                    <img
                                        src="{{ $appendixCard['image'] }}"
                                        alt="{{ $appendixCard['title'] }}"
                                        class="h-full w-full rounded-[1.2rem] object-cover shadow-lg transition duration-300 group-hover:scale-[1.03]"
                                    />
                                </div>
                                <div class="mt-4 flex items-center justify-between gap-3">
                                    <h3 class="text-base font-semibold leading-snug text-slate-900 dark:text-white">{{ $appendixCard['title'] }}</h3>
                                    <span class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 transition duration-300 group-hover:bg-sky-600 group-hover:text-white dark:bg-sky-950/60 dark:text-sky-300 dark:group-hover:bg-sky-500 dark:group-hover:text-slate-950">
                                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                            <path d="M7 17L17 7"></path>
                                            <path d="M9 7h8v8"></path>
                                        </svg>
                                    </span>
                                </div>
                            </article>
                        </button>
                    @endforeach
                </div>
            </section>

            <div
                id="appendix-lightbox"
                class="pointer-events-none fixed inset-0 z-[80] flex items-center justify-center bg-slate-950/90 px-4 py-6 opacity-0 transition duration-300"
                aria-hidden="true"
            >
                <div class="absolute inset-0" data-appendix-close></div>
                <div class="relative z-10 flex w-full max-w-5xl scale-95 flex-col overflow-hidden rounded-[2rem] border border-white/10 bg-white shadow-2xl transition duration-300 dark:bg-slate-950">
                    <button
                        type="button"
                        class="absolute right-4 top-4 z-20 flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white/90 text-slate-700 shadow-lg transition hover:scale-105 hover:text-slate-950 dark:border-slate-700 dark:bg-slate-900/90 dark:text-slate-200 dark:hover:text-white"
                        data-appendix-close
                        aria-label="Close appendix preview"
                    >
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M6 6l12 12"></path>
                            <path d="M18 6l-12 12"></path>
                        </svg>
                    </button>

                    <div class="overflow-auto p-4 md:p-6">
                        <div class="flex justify-center overflow-hidden rounded-[1.5rem] bg-slate-100 p-4 dark:bg-slate-900">
                            <img
                                id="appendix-lightbox-image"
                                src=""
                                alt=""
                                class="h-auto max-h-[70vh] w-full max-w-[50%] object-contain"
                            />
                        </div>
                        <h3 id="appendix-lightbox-title" class="mt-5 text-center text-xl font-semibold text-slate-900 dark:text-white"></h3>
                    </div>
                </div>
            </div>
        </main>

        <footer class="relative mt-20 overflow-hidden border-t border-slate-200/70 bg-slate-950 text-slate-200 dark:border-slate-800">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(56,189,248,0.18),_transparent_30%),radial-gradient(circle_at_bottom_right,_rgba(217,70,239,0.16),_transparent_30%)]"></div>
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/30 to-transparent"></div>

            <div class="relative mx-auto max-w-6xl px-6 py-14">
                <div class="grid gap-10 lg:grid-cols-[1.2fr,0.8fr,0.8fr]">
                    <div>
                        <div class="flex items-center gap-4">

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-sky-300">Digital Journal</p>
                                <h3 class="mt-1 text-2xl font-semibold text-white">Mark Cleo Calbang</h3>
                            </div>
                        </div>
                        <p class="mt-5 max-w-xl text-sm leading-relaxed text-slate-300">
                            A portfolio-style internship journal that highlights my training, technical growth, outputs, and experiences at Central Visayas Information Sharing Network Foundation, Inc.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-200 transition hover:-translate-y-0.5 hover:border-sky-300/50 hover:bg-sky-400/10 hover:text-white" href="mailto:markcleocalbang05@gmail.com">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M2 4h20a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm0 2v.01L12 13 22 6.01V6H2zm20 2.24l-9.4 6.58a1 1 0 0 1-1.2 0L2 8.24V18h20V8.24z" />
                                </svg>
                                Email Me
                            </a>
                            <a class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-200 transition hover:-translate-y-0.5 hover:border-fuchsia-300/50 hover:bg-fuchsia-400/10 hover:text-white" href="https://github.com/MarkyWorks" target="_blank" rel="noopener noreferrer">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M12 2C6.48 2 2 6.58 2 12.26c0 4.52 2.87 8.36 6.84 9.72.5.09.68-.22.68-.49 0-.24-.01-.87-.01-1.7-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.49-1.11-1.49-.9-.64.07-.63.07-.63 1 .07 1.52 1.05 1.52 1.05.89 1.55 2.34 1.1 2.91.84.09-.66.35-1.1.64-1.35-2.22-.26-4.56-1.14-4.56-5.05 0-1.11.39-2.02 1.03-2.73-.1-.26-.45-1.3.1-2.71 0 0 .84-.27 2.75 1.05A9.23 9.23 0 0 1 12 7.3c.85 0 1.71.12 2.5.34 1.91-1.32 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.71 1.03 1.62 1.03 2.73 0 3.92-2.35 4.79-4.58 5.04.36.32.69.94.69 1.9 0 1.37-.01 2.47-.01 2.8 0 .27.18.59.69.49A10.05 10.05 0 0 0 22 12.26C22 6.58 17.52 2 12 2z"></path>
                                </svg>
                                GitHub
                            </a>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold uppercase tracking-[0.28em] text-slate-400">Quick Links</h4>
                        <div class="mt-5 grid grid-cols-2 gap-3 text-sm">
                            <a class="rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-sky-300/40 hover:bg-white/10 hover:text-white" href="#home">Home</a>
                            <a class="rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-sky-300/40 hover:bg-white/10 hover:text-white" href="#company-about">About</a>
                            <a class="rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-sky-300/40 hover:bg-white/10 hover:text-white" href="#activities">Activities</a>
                            <a class="rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-sky-300/40 hover:bg-white/10 hover:text-white" href="#skills">Skills</a>
                            <a class="rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-sky-300/40 hover:bg-white/10 hover:text-white" href="#reflection">Reflection</a>
                            <a class="rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-sky-300/40 hover:bg-white/10 hover:text-white" href="#recommendations">Recommendations</a>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold uppercase tracking-[0.28em] text-slate-400">Contact</h4>
                        <div class="mt-5 space-y-3">
                            <a class="flex items-start gap-3 rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-emerald-300/40 hover:bg-white/10" href="mailto:markcleocalbang05@gmail.com">
                                <span class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-full bg-emerald-400/10 text-emerald-300">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M2 4h20a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm0 2v.01L12 13 22 6.01V6H2zm20 2.24l-9.4 6.58a1 1 0 0 1-1.2 0L2 8.24V18h20V8.24z" />
                                    </svg>
                                </span>
                                <span class="text-sm leading-relaxed text-slate-300">markcleocalbang05@gmail.com</span>
                            </a>
                            <a class="flex items-start gap-3 rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-amber-300/40 hover:bg-white/10" href="tel:+639553745730">
                                <span class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-full bg-amber-400/10 text-amber-300">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24 11.7 11.7 0 0 0 3.67.59 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C11.3 21 3 12.7 3 2a1 1 0 0 1 1-1h3.47a1 1 0 0 1 1 1c0 1.27.2 2.5.59 3.67a1 1 0 0 1-.24 1.01l-2.2 2.11z"></path>
                                    </svg>
                                </span>
                                <span class="text-sm leading-relaxed text-slate-300">+63 955 374 5730</span>
                            </a>
                            <a class="flex items-start gap-3 rounded-2xl border border-white/8 bg-white/5 px-4 py-3 transition hover:border-fuchsia-300/40 hover:bg-white/10" href="https://www.facebook.com/Calbang05/" target="_blank" rel="noopener noreferrer">
                                <span class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-full bg-fuchsia-400/10 text-fuchsia-300">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M22 12.06C22 6.52 17.52 2 11.94 2S2 6.52 2 12.06c0 5 3.66 9.13 8.44 9.94v-7.03H7.9v-2.9h2.54V9.86c0-2.52 1.49-3.91 3.77-3.91 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.62.77-1.62 1.56v1.87h2.76l-.44 2.9h-2.32V22c4.78-.81 8.44-4.94 8.44-9.94z"></path>
                                    </svg>
                                </span>
                                <span class="text-sm leading-relaxed text-slate-300">facebook.com/Calbang05</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex flex-col gap-3 border-t border-white/10 pt-6 text-sm text-slate-400 md:flex-row md:items-center md:justify-between">
                    <p>Built with Laravel, Blade, Tailwind CSS, and a lot of learning in progress.</p>
                    <p>&copy; {{ now()->year }} Mark Cleo Calbang. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </body>
</html>

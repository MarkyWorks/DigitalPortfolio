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
            <div class="flex items-center gap-3">
                <img
                    src="{{ asset('images/cvisnetlogo.png') }}"
                    alt="CVISNET logo"
                    class="h-9 w-auto dark:brightness-110 dark:drop-shadow-[0_0_15px_rgba(255,255,255,1)]"
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
                    <h3 class="text-center text-xl font-semibold md:text-left">Services</h3>
                    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="text-center text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Web Projects</h4>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                                They build purpose-driven websites for government units, NGOs, and local enterprises. Each project focuses on accessibility, clear information flow, and long-term maintainability.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="text-center text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Multimedia Projects</h4>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                                They produce digital content that communicates programs, services, and community initiatives. This includes videos, graphics, and presentation assets tailored to each audience.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="text-center text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Web Hosting</h4>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                                They provide reliable hosting and domain support to keep websites secure and online. Regular monitoring and updates help ensure performance and uptime.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="text-center text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Corporate Designs</h4>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                                They develop branding assets such as logos, templates, and identity guides. These help organizations present a consistent and professional image across platforms.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="text-center text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Management System</h4>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                                They design custom systems to streamline workflows and improve data management. Solutions are built to fit each organization’s processes and reporting needs.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="text-center text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">ICT Training</h4>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                                They provide hands-on training and capacity building for government staff, educators, and community leaders. Sessions focus on practical digital skills, tools, and best practices that support daily operations.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="activities" class="scroll-mt-24 mt-20">
                <p class="text-center text-lg uppercase tracking-[0.45em] font-semibold text-slate-500 dark:text-slate-400">Activities</p>
                <div class="mt-6 flex flex-wrap justify-center gap-3" id="activities-months"></div>
                <div class="mt-6 grid gap-4 md:grid-cols-2" id="activities-list"></div>
            </section>
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
                                img: "{{ asset('images/activities/febweek1.png') }}",
                                img2: "{{ asset('images/Activities/febweek1_1.png') }}",
                                week: 'Week 1',
                                date: 'Feb 2–6, 2025',
                                description: ' During the second week, I focused on learning the Laravel framework in more detail, including how it works with databases. I was introduced to important concepts such as models, controllers, routes, and database migrations. As part of our task, I created a simple CRUD (Create, Read, Update, Delete) application using Laravel. This activity helped me understand how data flows from the database to the system and how Laravel makes development more organized and efficient. ',
                            },
                             {
                                img: "{{ asset('images/activities/february-week-1.png') }}",
                                week: 'Week 2',
                                date: 'Feb 9–13, 2025',
                                description: '  This week, I worked on a mini project called Konek, a contact management system, where my supervisor assigned me several tasks that improved my technical and web development skills. I developed a feature for CRUD (Create, Read, Update, Delete) User Management system that handled two roles: admin, who has full control, and normal users, who have limited access. I also implemented user seeding in Laravel to create default users for testing and development. In addition, I added contact restrictions based on ownership, ensuring that users could only view and manage their own contacts, which enhanced the system’s security and protected data privacy.',
                            },
                            {
                                img: "{{ asset('images/activities/february-week-1.png') }}",
                                week: 'Week 3',
                                date: 'Feb 16–20, 2025',
                                description: '  This week, my supervisor assigned me a task to implement the importing and exporting of contacts in different file formats, including CSV, XLSX, and XLS. After completing the main task, he reviewed my work and gave me a subtask for improvement. I then worked on fixing and refining the system based on the feedback provided to ensure the feature functioned correctly and efficiently. ',
                            },
                            {
                                img: "{{ asset('images/activities/february-week-1.png') }}",
                                week: 'Week 4',
                                date: 'Feb 23–27, 2025',
                                description: '    This week, I had the opportunity to attend a seminar in Medellin, Cebu, about ISLET Connect by Starlink, where I learned how it works, how to connect, and about related tools and the BEST Barangay e-System. I also participated in data collection, profiling residents in a selected barangay to gather accurate information directly from the community. In addition, my supervisor assigned me a task for the mini project Konek, where I worked on designing the system’s homepage.',
                            },
                        ],
                    },
                    {
                        month: 'March',
                        year: 2025,
                        img: "{{ asset('images/activities/march.png') }}",
                        description: 'Default March description.',
                        weeks: [
                            {
                                img: "{{ asset('images/activities/march-week-1.png') }}",
                                week: 'Week 1',
                                date: 'Mar 3–7, 2025',
                                description: 'Add your March week 1 description here.',
                            },
                        ],
                    },
                    {
                        month: 'April',
                        year: 2025,
                        img: "{{ asset('images/activities/april.png') }}",
                        description: 'Default April description.',
                        weeks: [
                            {
                                img: "{{ asset('images/activities/april-week-1.png') }}",
                                week: 'Week 1',
                                date: 'Apr 1–5, 2025',
                                description: 'Add your April week 1 description here.',
                            },
                        ],
                    },
                    {
                        month: 'May',
                        year: 2025,
                        img: "{{ asset('images/activities/may.png') }}",
                        description: 'Default May description.',
                        weeks: [
                            {
                                img: "{{ asset('images/activities/may-week-1.png') }}",
                                week: 'Week 1',
                                date: 'May 5–9, 2025',
                                description: 'Add your May week 1 description here.',
                            },
                        ],
                    },
                ];
            </script>

            <section id="skills" class="scroll-mt-24 mt-16">
                <p class="text-center text-lg uppercase tracking-[0.45em] font-semibold text-slate-500 dark:text-slate-400">Skills</p>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add skills content here.</p>
            </section>

            <section id="reflection" class="scroll-mt-24 mt-16">
               <p class="text-center text-lg uppercase tracking-[0.45em] font-semibold text-slate-500 dark:text-slate-400">Reflection</p>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add reflection content here.</p>
            </section>

            <section id="recommendations" class="scroll-mt-24 mt-16">
                <p class="text-center text-lg uppercase tracking-[0.45em] font-semibold text-slate-500 dark:text-slate-400">Recommendations</p>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add recommendations content here.</p>
            </section>

            <section id="appendices" class="scroll-mt-24 mt-16">
                <p class="text-center text-lg uppercase tracking-[0.45em] font-semibold text-slate-500 dark:text-slate-400">Appendices</p>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add appendices content here.</p>
            </section>


        </main>

    </body>
</html>

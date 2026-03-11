<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Digital Portfolio') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
    x-data="{ mobileNavOpen:false }"
    class="bg-white text-slate-900 dark:bg-slate-950 dark:text-slate-100 antialiased scroll-smooth"
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
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#company" data-nav-link data-nav-target="company">Company</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#activities" data-nav-link data-nav-target="activities">Activities</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#skills" data-nav-link data-nav-target="skills">Skills</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#reflection" data-nav-link data-nav-target="reflection">Reflection</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#recommendations" data-nav-link data-nav-target="recommendations">Recommendations</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#appendices" data-nav-link data-nav-target="appendices">Appendices</a>
                <a class="nav-link rounded-full px-3 py-1.5 text-slate-700 transition hover:text-slate-950 lg:rounded-none lg:bg-transparent lg:px-0 lg:py-0 dark:text-slate-200 dark:hover:text-white" href="#about" data-nav-link data-nav-target="about">About</a>

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
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#company" data-nav-link data-nav-target="company" @click="mobileNavOpen=false">Company</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#activities" data-nav-link data-nav-target="activities" @click="mobileNavOpen=false">Activities</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#skills" data-nav-link data-nav-target="skills" @click="mobileNavOpen=false">Skills</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#reflection" data-nav-link data-nav-target="reflection" @click="mobileNavOpen=false">Reflection</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#recommendations" data-nav-link data-nav-target="recommendations" @click="mobileNavOpen=false">Recommendations</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#appendices" data-nav-link data-nav-target="appendices" @click="mobileNavOpen=false">Appendices</a>
                <a class="nav-link nav-link-mobile rounded-full px-3 py-2 text-slate-700 dark:text-slate-200" href="#about" data-nav-link data-nav-target="about" @click="mobileNavOpen=false">About</a>

            </nav>

        </div>

    </div>

        <main class="mx-auto w-full max-w-6xl px-6 pb-20 pt-10">
            <section id="home" class="relative overflow-hidden rounded-3xl bg-slate-900 text-white">
                <div class="absolute inset-0 bg-[url('/images/hero-placeholder.jpg')] bg-cover bg-center"></div>
                <div class="absolute inset-0 bg-slate-950/55"></div>
                <div class="relative flex min-h-[70vh] items-center px-6 py-16 md:px-16">
                    <div class="space-y-4">
                        <p class="text-sm uppercase tracking-[0.3em] text-slate-200">Digital Portfolio</p>
                        <h1 class="text-4xl font-semibold leading-tight md:text-5xl">
                            MARK CLEO CALBANG
                        </h1>
                        <p class="text-lg text-slate-200 md:text-xl">
                            BSIT - Internship Trainee
                        </p>
                    </div>
                </div>
            </section>

            <section id="company" class="mt-20 space-y-12">
                <div class="text-center">
                    <p class="text-xs uppercase tracking-[0.35em] text-slate-500 dark:text-slate-400">Company</p>
                    <h2 class="mt-4 text-3xl font-semibold">
                        Central Visayas Information Sharing Network (CVISNET) Foundation, Inc.
                    </h2>
                </div>

                <div class="space-y-6">
                    <h3 class="text-xl font-semibold">Partners</h3>
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-5">
                        <div class="flex h-20 items-center justify-center rounded-2xl border border-dashed border-slate-300 text-xs text-slate-400 dark:border-slate-700">Logo 1</div>
                        <div class="flex h-20 items-center justify-center rounded-2xl border border-dashed border-slate-300 text-xs text-slate-400 dark:border-slate-700">Logo 2</div>
                        <div class="flex h-20 items-center justify-center rounded-2xl border border-dashed border-slate-300 text-xs text-slate-400 dark:border-slate-700">Logo 3</div>
                        <div class="flex h-20 items-center justify-center rounded-2xl border border-dashed border-slate-300 text-xs text-slate-400 dark:border-slate-700">Logo 4</div>
                        <div class="flex h-20 items-center justify-center rounded-2xl border border-dashed border-slate-300 text-xs text-slate-400 dark:border-slate-700">Logo 5</div>
                    </div>
                </div>

                <div class="grid gap-10 md:grid-cols-2">
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold">History</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            Add the CVISNET history narrative here. This block is reserved for the full text describing the origin, milestones, and impact of the organization.
                        </p>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            You can expand this section with more paragraphs or key highlights when ready.
                        </p>
                    </div>
                    <div class="flex min-h-[260px] items-center justify-center rounded-2xl border border-dashed border-slate-300 text-sm text-slate-400 dark:border-slate-700">
                        History Image Placeholder
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="text-xl font-semibold">Organizational Chart</h3>
                    <div class="flex min-h-[220px] items-center justify-center rounded-2xl border border-dashed border-slate-300 text-sm text-slate-400 dark:border-slate-700">
                        Organizational chart placeholder
                    </div>
                </div>

                <div class="grid gap-6 md:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-lg font-semibold">Nature of Business / Products</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            Summarize the organization�s core services, offerings, and mission-aligned products here.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-lg font-semibold">Processes Involved</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                            Provide a short overview of the workflow before listing the detailed steps below.
                        </p>
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 text-center text-sm font-medium dark:border-slate-800 dark:bg-slate-900">
                        Step A

                       <p>ddsadsa</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 text-center text-sm font-medium dark:border-slate-800 dark:bg-slate-900">
                        Step B
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 text-center text-sm font-medium dark:border-slate-800 dark:bg-slate-900">
                        Step C
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 text-center text-sm font-medium dark:border-slate-800 dark:bg-slate-900">
                        Step D
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 text-center text-sm font-medium dark:border-slate-800 dark:bg-slate-900">
                        Step E
                    </div>
                </div>
            </section>

            <section id="activities" class="mt-20">
                <h2 class="text-2xl font-semibold">Activities</h2>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add activities content here.</p>
            </section>

            <section id="skills" class="mt-16">
                <h2 class="text-2xl font-semibold">Skills</h2>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add skills content here.</p>
            </section>

            <section id="reflection" class="mt-16">
                <h2 class="text-2xl font-semibold">Reflection</h2>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add reflection content here.</p>
            </section>

            <section id="recommendations" class="mt-16">
                <h2 class="text-2xl font-semibold">Recommendations</h2>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add recommendations content here.</p>
            </section>

            <section id="appendices" class="mt-16">
                <h2 class="text-2xl font-semibold">Appendices</h2>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add appendices content here.</p>
            </section>

            <section id="about" class="mt-16">
                <h2 class="text-2xl font-semibold">About</h2>
                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">Add about content here.</p>
            </section>
        </main>

    </body>
</html>

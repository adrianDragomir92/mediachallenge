<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>@yield('title', 'Media Challenge | Social Media și Site-uri')</title>
        <meta
            name="description"
            content="@yield('meta_description', 'Echipă din România care combină social media, conținut și dezvoltare web pentru branduri ce vor mai mulți clienți.')"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('head')
    </head>
    <body class="bg-midnight text-white tracking-tight">
        <div class="relative min-h-screen overflow-hidden">
            @yield('background')

            <header class="relative z-50 max-w-6xl mx-auto px-6 py-8 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="h-10 w-10 rounded-2xl bg-white/10 flex items-center justify-center shadow-glow">
                        <span class="text-lg font-semibold">MA</span>
                    </div>
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-white/60">Media Challenge</p>
                        <p class="text-white font-semibold text-lg">Strategie. Conținut. Tech.</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <x-nav-menu />
                    <button class="hidden md:inline-flex px-5 py-2 rounded-full border border-white/30 text-sm font-medium hover:border-white hover:text-white">
                        Cere ofertă
                    </button>
                </div>
            </header>

            <main class="relative z-10">
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
        @stack('scripts')
    </body>
</html>

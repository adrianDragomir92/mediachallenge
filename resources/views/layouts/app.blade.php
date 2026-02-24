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
                <div class="hidden md:flex items-center gap-4">
                    <x-nav-menu />
                    <a href="{{ route('contact') }}" class="px-5 py-2 rounded-full border border-white/30 text-sm font-medium hover:border-white hover:text-white">Cere ofertă</a>
                </div>
                <button
                    type="button"
                    class="md:hidden inline-flex items-center justify-center h-11 w-11 rounded-2xl border border-white/20 text-white"
                    data-mobile-nav-toggle
                    aria-label="Deschide meniul"
                >
                    <span class="sr-only">Deschide meniul</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </button>
            </header>

            <div
                class="fixed inset-0 z-60 bg-black/90 backdrop-blur-sm opacity-0 pointer-events-none transition"
                data-mobile-nav
            >
                <div data-mobile-nav-panel class="absolute inset-0 bg-midnight px-6 py-10 flex flex-col gap-10">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 rounded-2xl bg-white/10 flex items-center justify-center shadow-glow">
                                <span class="text-lg font-semibold">MA</span>
                            </div>
                            <p class="text-white font-semibold">Media Challenge</p>
                        </div>
                        <button type="button" class="h-11 w-11 rounded-2xl border border-white/20 text-white flex items-center justify-center" data-mobile-nav-close aria-label="Închide meniul">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path d="M6 6l12 12M6 18L18 6" />
                            </svg>
                        </button>
                    </div>
                    <nav class="flex flex-col gap-6 text-white text-lg">
                        <a href="{{ url('/') }}" class="hover:text-neon">Acasă</a>
                        <div class="space-y-3">
                            <p class="text-xs uppercase tracking-[0.4em] text-white/50">Servicii</p>
                            <div class="flex flex-col gap-2 text-white/80">
                                <a href="{{ route('services.social') }}" class="hover:text-white">Social Media</a>
                                <a href="{{ route('services.sites') }}" class="hover:text-white">Creare site-uri</a>
                                <a href="{{ route('services.seo') }}" class="hover:text-white">SEO</a>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="hover:text-neon">Despre noi</a>
                        <a href="{{ route('contact') }}" class="hover:text-neon">Contact</a>
                        <div class="pt-4 border-t border-white/10 flex flex-col gap-3 text-sm text-white/60">
                            <a href="{{ route('legal.terms') }}" class="hover:text-white">Termeni și condiții</a>
                            <a href="{{ route('legal.privacy') }}" class="hover:text-white">Politica de confidențialitate</a>
                            <a href="{{ route('legal.cookies') }}" class="hover:text-white">Politica de cookie</a>
                        </div>
                    </nav>
                    <a href="{{ route('contact') }}" class="mt-auto px-5 py-3 rounded-2xl bg-neon text-black font-semibold text-center">Cere ofertă</a>
                </div>
            </div>

            <main class="relative z-10">
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
        @stack('scripts')
    </body>
</html>

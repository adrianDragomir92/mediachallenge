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

        <meta property="og:title" content="@yield('title', 'Media Challenge | Social Media și Site-uri')">
        <meta property="og:description" content="@yield('meta_description', 'Echipă din România care combină social media, conținut și dezvoltare web pentru branduri ce vor mai mulți clienți.')">
        <meta property="og:image" content="{{ url('images/logo.png') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">

        <link rel="canonical" href="{{ url()->current() }}">

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness",
                "name": "Media Challenge",
                "image": "https://mediachallenge.ro/images/logo.png",
                "url": "https://mediachallenge.ro",
                "telephone": "+40 723 000 111",
                "email": "contact@mediachallenge.ro",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Strada Profesor Nicolae Radian nr. 2, bl. O2, ap. 10",
                    "addressLocality": "Târgoviște",
                    "addressRegion": "Dâmbovița",
                    "postalCode": "130024",
                    "addressCountry": "RO"
                },
                "description": "Media Challenge oferă servicii de social media, conținut și dezvoltare web pentru branduri din Târgoviște, Dâmbovița și din România.",
                "areaServed": ["Târgoviște", "Dâmbovița", "România"],
                "serviceType": ["Social Media", "Dezvoltare site-uri", "SEO"]
            }
        </script>
        @stack('head')
    </head>
    <body class="bg-midnight text-white tracking-tight">
        <div class="relative min-h-screen overflow-hidden">
            @yield('background')

            <header class="relative z-50 max-w-6xl mx-auto px-6 py-8 flex items-center justify-between">
                <a href="/" class="flex items-center gap-3">
                    {{-- <div class="h-12 w-12 rounded-2xl bg-white/5 flex items-center justify-center shadow-glow">
                        <x-app-logo class="h-10 w-10" />
                    </div> --}}
                    <div>
                        <svg width="250" height="50" viewBox="0 0 250 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="mcGrad" x1="6" y1="8" x2="36" y2="42" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#67E8F9"/>
                                <stop offset="0.55" stop-color="#60A5FA"/>
                                <stop offset="1" stop-color="#A855F7"/>
                                </linearGradient>
                                <filter id="softGlow" x="0" y="0" width="50" height="50" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feGaussianBlur stdDeviation="2.5" result="blur"/>
                                <feMerge>
                                    <feMergeNode in="blur"/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                                    </filter>
                                </defs>

                                <g filter="url(#softGlow)">
                                    <path d="M8 38L15.5 12H20.2L25 26.5L29.8 12H34.5L42 38H36.8L32.1 20.2L26.7 36H23L17.9 20.2L13.2 38H8Z" fill="url(#mcGrad)"/>
                                    <circle cx="39" cy="14" r="2.6" fill="#8B5CF6"/>
                                </g>

                                <text x="54" y="22" fill="#F8FAFC" font-family="Inter, Manrope, Arial, sans-serif" font-size="13" font-weight="700" letter-spacing="0.08em">MEDIA</text>
                                <text x="54" y="38" fill="#C4B5FD" font-family="Inter, Manrope, Arial, sans-serif" font-size="15" font-weight="800" letter-spacing="0.02em">CHALLENGE</text>
                                </svg>

                        {{-- <p class="text-sm uppercase tracking-[0.3em] text-white/60">Media Challenge</p>
                        <p class="text-white font-semibold text-lg">Strategie. Conținut. Rezultate.</p> --}}
                    </div>
                </a>
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
                    <x-icon-hamburger class="w-6 h-6" />
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
                            <x-app-logo class="h-8 w-8" />
                        </div>
                        <p class="text-white font-semibold">Media Challenge</p>
                    </div>
                        <button type="button" class="h-11 w-11 rounded-2xl border border-white/20 text-white flex items-center justify-center" data-mobile-nav-close aria-label="Închide meniul">
                            <x-icon-close class="w-6 h-6" />
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

@extends('layouts.app')

@section('title', 'Media Challenge | Strategie, Conținut și Tehnologie Custom')
@section('meta_description', 'Echipă din România care face social media, conținut și site-uri simple pentru branduri care vor mai mulți clienți.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-40 right-1/2 h-96 w-96 rounded-full bg-[#312967] blur-[160px] opacity-70 animate-float-slow"></div>
    <div class="absolute top-20 -right-10 h-96 w-96 rounded-full bg-[#3c4ad8] blur-[200px] opacity-60 animate-float-medium"></div>
@endsection

@section('content')
    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-6 pb-24 pt-12 lg:pt-24">
        <div class="grid gap-16 lg:grid-cols-[1.1fr_0.9fr] items-center">
            <div>
                <p data-reveal class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 text-white/70 text-sm mb-6">
                    <span class="h-2 w-2 rounded-full bg-neon animate-pulse"></span>
                    Echipă social media + web
                </p>
                <h1 data-reveal data-reveal-delay="120" class="text-4xl lg:text-6xl font-semibold leading-tight max-w-2xl">
                    Creăm prezențe puternice pe Facebook, Instagram și TikTok
                </h1>
                <p data-reveal data-reveal-delay="200" class="mt-6 text-lg text-white/70 max-w-2xl">
                    Scriem planuri simple, filmăm conținut scurt, administrăm paginile zilnic și legăm totul de un site care primește cererile venite din social media.
                </p>
                <div data-reveal data-reveal-delay="280" class="mt-10 flex flex-col sm:flex-row gap-4">
                    <button class="px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow glow-pulse hover-cta">
                        Cere o propunere
                    </button>
                    <button class="px-8 py-4 rounded-2xl border border-white/30 text-white font-semibold text-lg hover:border-white/60 hover-cta">
                        Vezi proiecte
                    </button>
                </div>
                <div data-reveal data-reveal-delay="360" class="mt-12 grid grid-cols-2 gap-6 text-sm text-white/70">
                    <div class="transition duration-700">
                        <p class="text-3xl font-semibold text-white">120+</p>
                        <p>campanii sociale livrate cap-coadă</p>
                    </div>
                    <div class="transition duration-700">
                        <p class="text-3xl font-semibold text-white">40+</p>
                        <p>serii foto-video făcute în teren</p>
                    </div>
                </div>
            </div>
            <div class="relative" data-reveal="right" data-reveal-delay="220">
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-white/5 rounded-3xl blur-3xl animate-float-medium"></div>
                <div class="rounded-[32px] border border-white/10 bg-white/5 backdrop-blur-xl p-6 shadow-glow relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 bg-gradient-to-tr from-white to-transparent"></div>
                    <div class="relative">
                        <p class="text-sm uppercase tracking-[0.3em] text-white/60">Panou social live</p>
                        <h3 class="mt-2 text-2xl font-semibold">Reacții, mesaje și vânzări din social</h3>
                        <p class="mt-2 text-white/70 text-sm">Vedem pe loc câte reacții primim, câte mesaje intră și câte rezervări vin din campaniile tale.</p>
                        <div class="mt-8 grid grid-cols-2 gap-4">
                            <div class="rounded-2xl border border-white/10 bg-white/10 p-4">
                                <p class="text-sm text-white/60">ROAS media plătită</p>
                                <p class="text-3xl font-semibold">4.8x</p>
                                <span class="text-emerald-300 text-xs">+32% lună / lună</span>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/10 p-4">
                                <p class="text-sm text-white/60">Ore salvate prin automatizare</p>
                                <p class="text-3xl font-semibold">312</p>
                                <span class="text-emerald-300 text-xs">fluxuri noi</span>
                            </div>
                        </div>
                        <div class="mt-6 rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-white/0 p-4">
                            <div class="flex items-center justify-between text-sm">
                                <p class="text-white/70">Campanie clinică</p>
                                <span class="text-white">+72% programări din mesaje</span>
                            </div>
                            <div class="mt-3 h-2 rounded-full bg-white/10">
                                <div class="h-2 rounded-full bg-neon" style="width: 72%"></div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-3 text-sm text-white/60">
                            <span class="h-10 w-10 rounded-full bg-white/20 flex items-center justify-center">AI</span>
                            <p>Mesaje automate care răspund politicos și adună datele de contact.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicii -->
    <section id="servicii" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6" data-reveal>
            <div>
                <p class="text-sm uppercase tracking-[0.4em] text-white/50">Capabilități</p>
                <h2 class="text-3xl lg:text-4xl font-semibold mt-3">Social-first marketing, producție și software într-o singură echipă.</h2>
            </div>
            <p class="text-white/70 max-w-xl">
                Strategii, copywriteri și producători de conținut lucrează împreună cu dezvoltatorii noștri web pentru a face calendare clare, instrumente simple și mesaje automate care aduc clienți.
            </p>
        </div>
        <div class="mt-14 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <article data-reveal class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-neon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="12" cy="12" r="8" />
                        <path d="M12 6v6l4 2" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">Strategie Social Media</h3>
                <p class="mt-3 text-white/70">Stabilim pilonii de conținut, tonul și tipurile de postări pentru fiecare rețea.</p>
            </article>
            <article data-reveal data-reveal-delay="120" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-neon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8 10h8" />
                        <path d="M6 14h5" />
                        <path d="M4 6h16v12H4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">Operare Facebook & Instagram</h3>
                <p class="mt-3 text-white/70">Scriem textele, programăm postările, răspundem la comentarii și trimitem un raport simplu.</p>
            </article>
            <article data-reveal data-reveal-delay="180" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-neon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="M12 5l7 7-7 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">Reclame pe Facebook & Instagram</h3>
                <p class="mt-3 text-white/70">Împărțim bugetele pe campanii clare și optimizăm zilnic pentru mesaje și vânzări.</p>
            </article>
            <article data-reveal data-reveal-delay="240" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-neon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 8h16v10H4z" />
                        <path d="M9 6h6v2H9z" />
                        <circle cx="12" cy="13" r="3" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">Studio Conținut</h3>
                <p class="mt-3 text-white/70">Venim cu echipă foto-video, filmăm Reels, testimoniale și cadre pentru reclame.</p>
            </article>
            <article data-reveal data-reveal-delay="300" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-neon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="4" y="6" width="16" height="12" rx="2" />
                        <path d="M8 10h8" />
                        <path d="M8 14h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">Pagini Web pentru campanii</h3>
                <p class="mt-3 text-white/70">Construim pagini rapide care preiau cererile venite din social media și le trimit către echipa ta.</p>
            </article>
            <article data-reveal data-reveal-delay="360" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-neon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="4" y="4" width="7" height="7" rx="2" />
                        <rect x="13" y="4" width="7" height="7" rx="2" />
                        <rect x="4" y="13" width="7" height="7" rx="2" />
                        <rect x="13" y="13" width="7" height="7" rx="2" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">Fluxuri și automatizări</h3>
                <p class="mt-3 text-white/70">Automatizăm aprobările, calendarele și mesajele astfel încât echipa ta să câștige timp.</p>
            </article>
        </div>
    </section>

    <!-- Diferențiatori -->
    <section class="max-w-6xl mx-auto px-6 py-20 flex flex-col lg:flex-row gap-16 items-center">
        <div class="flex-1" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">De ce noi</p>
            <h2 class="text-4xl font-semibold mt-4">Agențiile postează. Noi coordonăm social media cap-coadă.</h2>
            <p class="mt-4 text-white/70">
                Folosim o platformă construită de noi pentru brief-uri, calendare și aprobări, astfel încât postările, reclamele și site-ul tău să lucreze împreună fără haos.
            </p>
            <ul class="mt-8 space-y-4 text-white/80">
                <li class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-neon"></span>
                    Plan clar de conținut + producție
                </li>
                <li class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-neon"></span>
                    Facebook, Instagram și TikTok aliniate
                </li>
                <li class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-neon"></span>
                    Mesaje automate + legături cu baza ta de date
                </li>
                <li class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-neon"></span>
                    Panouri simple, actualizate în timp real
                </li>
            </ul>
        </div>
        <div class="flex-1 w-full" data-reveal="right" data-reveal-delay="160">
            <div class="rounded-[32px] border border-white/10 bg-charcoal/80 p-6 backdrop-blur-2xl relative overflow-hidden soft-grid animate-float-slow">
                <div class="absolute inset-0 opacity-10"></div>
                <div class="relative grid gap-4">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <div class="flex items-center justify-between text-sm text-white/60">
                            <span>Calendar social + automatizări</span>
                            <span>Live</span>
                        </div>
                        <div class="mt-3 space-y-3 text-white">
                            <div class="flex items-center justify-between">
                                <p>Carusel clinică</p>
                                <span class="text-emerald-300 text-xs">+3,2% click</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p>Mesaje automate</p>
                                <span class="text-emerald-300 text-xs">-37% timp de răspuns</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p>Actualizare stoc promo</p>
                                <span class="text-emerald-300 text-xs">12 conexiuni</span>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-white/0 p-4">
                        <p class="text-sm text-white/60">Scor experiență</p>
                        <p class="text-4xl font-semibold mt-2">96 / 100</p>
                        <p class="text-white/60 text-sm mt-2">Engagement, retenție, execuție creativă, automatizare</p>
                        <div class="mt-4 h-2 rounded-full bg-white/10">
                            <div class="h-2 rounded-full bg-neon" style="width: 96%"></div>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4 flex items-center gap-4">
                        <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center">∞</div>
                        <div>
                            <p class="text-white font-semibold">Stack social + engineering</p>
                            <p class="text-white/60 text-sm">Content studio, media buying și dev în același tablou de bord live.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Site-uri web -->
    <section id="web" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="grid gap-12 lg:grid-cols-[1.1fr_0.9fr] items-center">
            <div data-reveal>
                <p class="text-sm uppercase tracking-[0.4em] text-white/50">Site-uri pentru social media</p>
                <h2 class="text-3xl lg:text-4xl font-semibold mt-3">Construim site-uri care preiau rapid cererile venite din rețele.</h2>
                <p class="mt-4 text-white/70">
                    Facem pagini clare pentru oferte, meniuri, booking sau vânzare de produse. Design-ul este gândit să arate premium pe desktop și mobil, iar formularele trimit direct către mail, WhatsApp sau CRM-ul tău.
                </p>
                <div class="mt-8 grid gap-6 md:grid-cols-2 text-white/70">
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 hover-lift-sm" data-reveal>
                        <h3 class="text-xl font-semibold text-white">Pagini de campanie</h3>
                        <p class="mt-3">Pentru promoții rapide, lansări sau lead magnets. Se încarcă repede și se actualizează ușor.</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 hover-lift-sm" data-reveal data-reveal-delay="120">
                        <h3 class="text-xl font-semibold text-white">Site-uri complete</h3>
                        <p class="mt-3">Structură cu homepage, servicii, portofoliu și blog, plus integrare cu programări sau coș de cumpărături.</p>
                    </div>
                </div>
                <div class="mt-8 flex flex-wrap gap-4" data-reveal data-reveal-delay="200">
                    <div class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80">Design modern cu accente premium</div>
                    <div class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80">Optimizare pentru mobil și SEO local</div>
                    <div class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80">Formulare conectate la social & email</div>
                </div>
                <button class="mt-10 px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow glow-pulse hover-cta" data-reveal data-reveal-delay="260">
                    Cere ofertă pentru site
                </button>
            </div>
            <div class="relative" data-reveal="right" data-reveal-delay="180">
                <div class="absolute -top-10 -left-6 w-32 h-32 bg-white/10 rounded-3xl blur-3xl animate-float-medium"></div>
                <div class="rounded-[32px] border border-white/10 bg-white/5 backdrop-blur-xl p-6 shadow-glow relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 bg-gradient-to-b from-white/10 to-transparent"></div>
                    <div class="relative space-y-6">
                        <div>
                            <p class="text-sm text-white/60">Pagină ofertă restaurant</p>
                            <p class="text-2xl font-semibold">Nord Bistro</p>
                            <p class="text-white/70 text-sm mt-2">Link din Instagram bio → meniu, galerie, rezervare în 3 pași.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/10 p-4">
                            <div class="flex items-center justify-between text-sm text-white/60">
                                <span>Formular rapid</span>
                                <span>24 mesaje/zi</span>
                            </div>
                            <p class="text-white text-lg mt-3">“Salut! Vrem masa pentru 4 persoane.”</p>
                            <p class="text-neon text-sm mt-2">Trimitem direct în WhatsApp.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-sm text-white/70">
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p>Meniu digital</p>
                                <p class="text-2xl text-white mt-1">+58%</p>
                                <span class="text-white/50 text-xs">vizualizări</span>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p>Rezervări online</p>
                                <p class="text-2xl text-white mt-1">32 / zi</p>
                                <span class="text-white/50 text-xs">din social</span>
                            </div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/10 to-transparent p-4">
                            <p class="text-sm text-white/60">Integrare</p>
                            <p class="text-white text-lg mt-2">Website + Facebook + Instagram + Google Reviews</p>
                            <p class="text-white/50 text-sm mt-2">Actualizăm doar o dată, se schimbă peste tot.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portofoliu -->
    <section id="portofoliu" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="flex flex-col gap-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Portofoliu social-first</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">Campanii Facebook + Instagram care generează rezervări și comenzi.</h2>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <article data-reveal class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl bg-gradient-to-br from-[#1d1f3a] to-[#2d2a75] overflow-hidden hover-zoom">
                    <div class="absolute inset-0 bg-white/10 mix-blend-overlay"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        Platformă clinică
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">Aestique Medical</h3>
                    <p class="mt-2 text-white/70 text-sm">Postări zilnice + reclame, 42 clipuri scurte și o pagină dedicată → +72% consultații.</p>
                    <button class="mt-4 text-neon font-semibold text-sm">Vezi studiul de caz →</button>
                </div>
            </article>
            <article data-reveal data-reveal-delay="140" class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl bg-gradient-to-br from-[#1a1a1a] via-[#2d263d] to-[#3f3770] overflow-hidden hover-zoom">
                    <div class="absolute inset-0 bg-white/10"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        Hospitality
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">Northwind Dining Group</h3>
                    <p class="mt-2 text-white/70 text-sm">Reels săptămânale, povești live și rezervări automate din mesaje și WhatsApp.</p>
                    <button class="mt-4 text-neon font-semibold text-sm">Vezi studiul de caz →</button>
                </div>
            </article>
            <article data-reveal data-reveal-delay="220" class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl bg-gradient-to-br from-[#12263f] to-[#5a189a] overflow-hidden hover-zoom">
                    <div class="absolute inset-0 bg-white/10"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        SaaS Build
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">ShiftOps Logistics</h3>
                    <p class="mt-2 text-white/70 text-sm">Campanii LinkedIn și Instagram cu un mini-site care ajută 16 depozite să vadă comenzile în timp real.</p>
                    <button class="mt-4 text-neon font-semibold text-sm">Vezi studiul de caz →</button>
                </div>
            </article>
        </div>
    </section>

    <!-- Proces -->
    <section id="proces" class="max-w-6xl mx-auto px-6 py-20">
        <div class="flex flex-col gap-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Proces</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">De la audit social la producție zilnică și optimizare continuă.</h2>
        </div>
        <div class="mt-12 grid gap-6 md:grid-cols-4">
            <div data-reveal class="rounded-3xl border border-white/5 bg-white/5 p-6 hover-lift-sm">
                <p class="text-sm text-white/50">Pas 1</p>
                <h3 class="text-2xl font-semibold mt-2">Strategie</h3>
                <p class="mt-3 text-white/70 text-sm">Audit profiluri, mapping audience, obiective pe platforme și KPI social commerce.</p>
            </div>
            <div data-reveal data-reveal-delay="120" class="rounded-3xl border border-white/5 bg-white/5 p-6 hover-lift-sm">
                <p class="text-sm text-white/50">Pas 2</p>
                <h3 class="text-2xl font-semibold mt-2">Producție</h3>
                <p class="mt-3 text-white/70 text-sm">Calendar editorial, scenarii pentru Reels, filmări și pachete de materiale pentru fiecare canal.</p>
            </div>
            <div data-reveal data-reveal-delay="200" class="rounded-3xl border border-white/5 bg-white/5 p-6 hover-lift-sm">
                <p class="text-sm text-white/50">Pas 3</p>
                <h3 class="text-2xl font-semibold mt-2">Dezvoltare</h3>
                <p class="mt-3 text-white/70 text-sm">Aplicații interne pentru aprobare rapidă, pagini simple și legături cu CRM sau WhatsApp.</p>
            </div>
            <div data-reveal data-reveal-delay="280" class="rounded-3xl border border-white/5 bg-white/5 p-6 hover-lift-sm">
                <p class="text-sm text-white/50">Pas 4</p>
                <h3 class="text-2xl font-semibold mt-2">Growth</h3>
                <p class="mt-3 text-white/70 text-sm">Analizăm săptămânal rezultatele sociale, scalăm ads-urile și lansăm experimente creative.</p>
            </div>
        </div>
    </section>

    <!-- Testimoniale -->
    <section id="testimoniale" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="flex flex-col gap-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Testimoniale</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">Fondatorii ne aleg pentru claritate și viteză.</h2>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-2">
            <article data-reveal class="rounded-[32px] border border-white/5 bg-white/5 p-8 backdrop-blur-xl hover-glow-card">
                <p class="text-white/80 text-lg">
                    “Media Challenge ne conduce acum Facebook-ul și Instagram-ul: calendar editorial, shooting-uri, ads și landing dedicat. Rezervările vin din social mai repede ca oricând.”
                </p>
                <div class="mt-6">
                    <p class="font-semibold">Dr. Lena Matsu</p>
                    <p class="text-white/60 text-sm">Fondator, Ember Clinics</p>
                </div>
            </article>
            <article data-reveal data-reveal-delay="160" class="rounded-[32px] border border-white/5 bg-white/5 p-8 backdrop-blur-xl hover-glow-card">
                <p class="text-white/80 text-lg">
                    “Postările nu ne mai reprezentau. Echipa lor a preluat tot workflow-ul social media, a livrat Reels săptămânale și un hub de raportare care arată clar ce converteste.”
                </p>
                <div class="mt-6">
                    <p class="font-semibold">Caleb Ortiz</p>
                    <p class="text-white/60 text-sm">COO, Northwind Hospitality</p>
                </div>
            </article>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-4xl mx-auto px-6 py-24 text-center">
        <p class="text-sm uppercase tracking-[0.4em] text-white/50">Următorul pas</p>
        <h2 class="text-4xl lg:text-5xl font-semibold mt-4">
            Gata să transformi social media în motorul tău principal?
        </h2>
        <p class="mt-4 text-white/70">
            Programează o sesiune cu echipa noastră social-first și primești o foaie de parcurs pentru conținut, ads și automatizări dedicate brandului tău.
        </p>
        <button class="mt-10 px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow glow-pulse">
            Plan social personalizat
        </button>
    </section>

    <!-- Concept mobil -->
    <section class="max-w-6xl mx-auto px-6 pb-24">
        <div class="rounded-[40px] border border-white/10 bg-white/5 p-10 flex flex-col lg:flex-row gap-10 items-center">
            <div class="flex-1" data-reveal>
                <p class="text-sm uppercase tracking-[0.4em] text-white/50">Concept mobil</p>
                <h2 class="text-3xl font-semibold mt-3">Social media la îndemână.</h2>
                <p class="mt-4 text-white/70">
                    Experiența mobilă scoate în față pilonii de conținut, rezultatele din Reels și CTA-ul “Cere ofertă”. Cardurile devin panouri swipeable astfel încât administratorii să urmărească rapid performanța socială.
                </p>
            </div>
            <div class="flex-1 flex justify-center" data-reveal="right" data-reveal-delay="200">
                <div class="w-72 rounded-[40px] border border-white/10 bg-black/80 p-5 relative shadow-[0_20px_60px_rgba(0,0,0,0.6)] animate-float-slow">
                    <div class="absolute top-3 left-1/2 -translate-x-1/2 w-16 h-1 rounded-full bg-white/20"></div>
                    <div class="mt-8 space-y-6">
                        <div class="space-y-3">
                            <p class="text-xs text-white/60 uppercase tracking-[0.4em]">Media Challenge</p>
                            <h3 class="text-2xl font-semibold">Social media crescută cu strategie + tech custom.</h3>
                            <button class="w-full mt-4 px-5 py-3 rounded-2xl bg-neon text-black font-semibold hover-cta">Cere ofertă</button>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <p class="text-sm text-white/60">Postări programate</p>
                            <p class="text-2xl font-semibold">48</p>
                            <div class="mt-2 h-1.5 rounded-full bg-white/10">
                                <div class="h-1.5 rounded-full bg-neon" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <p class="text-sm text-white/60 uppercase tracking-[0.4em]">Servicii</p>
                            <ul class="mt-3 space-y-2 text-sm">
                                <li class="flex items-center justify-between">
                                    Strategie Socială <span class="text-white/50">›</span>
                                </li>
                                <li class="flex items-center justify-between">
                                    Conținut Instagram <span class="text-white/50">›</span>
                                </li>
                                <li class="flex items-center justify-between">
                                    Automatizări DM <span class="text-white/50">›</span>
                                </li>
                            </ul>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/10 to-transparent p-4">
                            <p class="text-xs text-white/50 uppercase tracking-[0.3em]">Testimonial</p>
                            <p class="text-sm text-white/80 mt-2">“Am trecut de la marketing sporadic la un motor complet de performance + platformă.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

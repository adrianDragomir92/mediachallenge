@extends('layouts.app')

@section('title', 'Media Challenge Târgoviște | Strategie Social Media & Web Dâmbovița')
@section('meta_description', 'Media Challenge din Târgoviște, Dâmbovița dezvoltă strategii social media, conținut și site-uri custom care aduc rezervări și comenzi brandurilor locale și naționale.')

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
                    Scriem planuri simple, filmăm conținut scurt, administrăm paginile zilnic și legăm totul de un site care primește cererile venite din social media. Suntem localizați în Târgoviște și colaborăm cu branduri din județul Dâmbovița și din restul țării.
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
                <div class="grid gap-6">
                    <div class="rounded-[32px] border border-white/10 bg-white/5 backdrop-blur-xl p-6 shadow-glow relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-gradient-to-tr from-white to-transparent"></div>
                        <div class="relative">
                            <p class="text-sm uppercase tracking-[0.3em] text-white/60">Panou Social Live</p>
                            <h3 class="mt-2 text-2xl font-semibold">Reacții, DM-uri și rezervări</h3>
                            <p class="mt-2 text-white/70 text-sm">Monitorizăm într-un singur tab tot ce vine din Instagram, Facebook și TikTok: aprecieri, salvări, mesaje și formularul de rezervare.</p>
                       
                            <div class="mt-6 rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-white/0 p-4">
                                <div class="flex items-center justify-between text-sm">
                                    <p class="text-white/70">Campanie Instagram clinică</p>
                                    <span class="text-white">+72% programări din DM</span>
                                </div>
                                <div class="mt-3 h-2 rounded-full bg-white/10">
                                    <div class="h-2 rounded-full bg-neon" style="width: 72%"></div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center gap-3 text-sm text-white/60">
                                <x-icon-chat class="w-10 h-10 text-neon" />
                                <p>Răspunsuri automate și aprobări rapide pentru comentarii, mesaje și WhatsApp, explicate în limbaj simplu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-[32px] border border-white/10 bg-white/5 overflow-hidden shadow-glow">
                        <img
                            src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=900&q=80"
                            alt="Echipă Media Challenge lucrând la conținut video"
                            class="h-64 w-full object-cover"
                        />
                        <div class="p-5">
                            <p class="text-sm uppercase tracking-[0.4em] text-white/60">Behind the scenes</p>
                            <p class="text-white/75 text-sm mt-2">Filmări și producție de conținut pentru campaniile sociale.</p>
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
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-strategy class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Strategie Social Media</h3>
                <p class="mt-3 text-white/70">Stabilim pilonii de conținut, tonul și tipurile de postări pentru fiecare rețea.</p>
            </article>
            <article data-reveal data-reveal-delay="120" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-devices class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Operare Facebook & Instagram</h3>
                <p class="mt-3 text-white/70">Scriem textele, programăm postările, răspundem la comentarii și trimitem un raport simplu.</p>
            </article>
            <article data-reveal data-reveal-delay="180" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-bolt class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Reclame pe Facebook & Instagram</h3>
                <p class="mt-3 text-white/70">Împărțim bugetele pe campanii clare și optimizăm zilnic pentru mesaje și vânzări.</p>
            </article>
            <article data-reveal data-reveal-delay="240" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-camera class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Studio Conținut</h3>
                <p class="mt-3 text-white/70">Venim cu echipă foto-video, filmăm Reels, testimoniale și cadre pentru reclame.</p>
            </article>
            <article data-reveal data-reveal-delay="300" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-monitor class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Pagini Web pentru campanii</h3>
                <p class="mt-3 text-white/70">Construim pagini rapide care preiau cererile venite din social media și le trimit către echipa ta.</p>
            </article>
            <article data-reveal data-reveal-delay="360" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-grid class="w-6 h-6" />
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

    <!-- Clienți -->
    <section class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center space-y-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Clienți și parteneri</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">Branduri care ne-au ales pentru social media + tech.</h2>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <a href="https://www.elidadent.ro" target="_blank" rel="noopener" class="group rounded-2xl border border-white/10 bg-white/5 p-6 flex flex-col items-center gap-3 transition hover:-translate-y-1 hover:bg-white/10">
                <span class="text-xs uppercase tracking-[0.4em] text-white/50">Social Media & Ads</span>
                <img src="{{ asset('images/logo.png') }}" alt="Elida Dent" class="max-h-12 invert" />
                <p class="text-white/60 text-xs">Conținut zilnic + Meta Ads</p>
            </a>
            <a href="https://www.elidadentforkids.ro" target="_blank" rel="noopener" class="group rounded-2xl border border-white/10 bg-white/5 p-6 flex flex-col items-center gap-3 transition hover:-translate-y-1 hover:bg-white/10">
                <span class="text-xs uppercase tracking-[0.4em] text-white/50">Campanii video</span>
                <img src="{{ asset('images/logo-f.png') }}" alt="Elida Dent For Kids" class="max-h-12" />
                <p class="text-white/60 text-xs">Reels & stories pentru părinți</p>
            </a>
            <a href="https://www.softambient.ro" target="_blank" rel="noopener" class="group rounded-2xl border border-white/10 bg-white/5 p-6 flex flex-col items-center gap-3 transition hover:-translate-y-1 hover:bg-white/10">
                <span class="text-xs uppercase tracking-[0.4em] text-white/50">PPC + conținut</span>
                <img src="{{ asset('images/Logo_Softambient.svg') }}" alt="Softambient" class="max-h-12 invert" />
                <p class="text-white/60 text-xs">Facebook Ads + email nurturing</p>
            </a>
        </div>
    </section>

    <!-- Site-uri web -->
    <section id="web" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="grid gap-12 lg:grid-cols-[1.1fr_0.9fr] items-center">
            <div data-reveal>
                <p class="text-sm uppercase tracking-[0.4em] text-white/50">Site-uri pentru social media</p>
                <h2 class="text-3xl lg:text-4xl font-semibold mt-3">Construim site-uri care preiau rapid cererile venite din rețele.</h2>
                <p class="mt-4 text-white/70">
                    Livrăm site-uri de prezentare, magazine online, platforme cu automatizări și aplicații custom care arată impecabil pe mobil și desktop. Ne ocupăm de arhitectură, conținut și formulare conectate la CRM, WhatsApp sau alte fluxuri interne pentru branduri din Târgoviște, Dâmbovița și colaboratori naționali.
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
                <div class="mt-6 rounded-2xl border border-white/10 bg-white/5 p-5" data-reveal data-reveal-delay="320">
                    <p class="text-sm uppercase tracking-[0.4em] text-white/60">Creare site web în Târgoviște</p>
                    <p class="text-white/75 text-sm mt-2">
                        Ne ocupăm de creare site web pentru branduri din Târgoviște, Dâmbovița și din alte orașe, cu focus pe conversii și integrare cu campaniile sociale. De la arhitectură, UX și copy până la lansare și monitorizare, totul rămâne într-o singură echipă.
                    </p>
                </div>
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
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Clienți & rezultate</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">Social media și campanii digitale pentru branduri din Târgoviște, Dâmbovița și nu numai.</h2>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <article data-reveal class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl overflow-hidden hover-zoom">
                    <img
                        src="https://images.unsplash.com/photo-1516528387618-afa90b13e000?auto=format&fit=crop&w=900&q=80"
                        alt="Clinic digital"
                        class="h-full w-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        Platformă clinică
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">Strategie medicală</h3>
                    <p class="mt-2 text-white/70 text-sm">Conținut educațional, Meta Ads și mini-site pentru clinici care vor să-și crească rezervările.</p>
                    <ul class="text-white/50 text-xs space-y-1 mt-3">
                        <li>42 clipuri video + Reels</li>
                        <li>Landing page conectat la CRM</li>
                        <li>+72% consultații într-un sezon</li>
                    </ul>
                </div>
            </article>
            <article data-reveal data-reveal-delay="140" class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl overflow-hidden hover-zoom">
                    <img
                        src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=900&q=80"
                        alt="Restaurant elegant"
                        class="h-full w-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        Hospitality
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">HoReCa locală</h3>
                    <p class="mt-2 text-white/70 text-sm">Reels, stories și campanii DM/WhatsApp care transformă interesul în rezervări și comenzi.</p>
                    <ul class="text-white/50 text-xs space-y-1 mt-3">
                        <li>Plan editorial + shooting lunar</li>
                        <li>Automatizări pentru rezervări rapide</li>
                        <li>Creștere constantă a vizitelor</li>
                    </ul>
                </div>
            </article>
            <article data-reveal data-reveal-delay="220" class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl overflow-hidden hover-zoom">
                    <img
                        src="https://images.unsplash.com/photo-1545239351-1141bd82e8a6?auto=format&fit=crop&w=900&q=80"
                        alt="Board digital și echipă logistică"
                        class="h-full w-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        SaaS Build
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">B2B & logistică</h3>
                    <p class="mt-2 text-white/70 text-sm">LinkedIn Ads, email nurturing și rapoarte live pentru echipele care vând către companii.</p>
                    <ul class="text-white/50 text-xs space-y-1 mt-3">
                        <li>Campanii LinkedIn + studii video</li>
                        <li>Dashboard-uri live pentru parteneri</li>
                        <li>Automatizări pentru lead management</li>
                    </ul>
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
            <div class="flex-1 w-full" data-reveal>
                <div class="rounded-3xl border border-white/10 overflow-hidden shadow-glow mb-6">
                    <img
                        src="https://images.unsplash.com/photo-1510557880182-3d4d3cba35a5?auto=format&fit=crop&w=1000&q=80"
                        alt="Telefon mobil cu feed social"
                        class="h-64 w-full object-cover"
                    />
                </div>
                <p class="text-sm uppercase tracking-[0.4em] text-white/50">Concept mobil</p>
                <h2 class="text-3xl font-semibold mt-3">Social media la îndemână.</h2>
                <p class="mt-4 text-white/70">
                    Experiența mobilă scoate în față pilonii de conținut, rezultatele din Reels și CTA-ul “Cere ofertă”. Cardurile devin panouri swipeable astfel încât administratorii să urmărească rapid performanța socială.
                </p>
            </div>
            <div class="flex-1 flex justify-center" data-reveal="right" data-reveal-delay="200">
                <div class="w-72 rounded-[42px] border-4 border-white/20 bg-black/90 p-5 relative shadow-[0_20px_60px_rgba(0,0,0,0.6)] animate-float-slow">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

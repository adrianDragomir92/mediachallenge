@extends('layouts.app')

@section('title', 'Social Media Târgoviște & Dâmbovița | Media Challenge')
@section('meta_description', 'Servicii social media complete în Târgoviște și județul Dâmbovița: strategie, conținut, Meta Ads, TikTok și raportare clară oferite de Media Challenge.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-32 left-10 h-96 w-96 rounded-full bg-[#372f7c] blur-[180px] opacity-80"></div>
    <div class="absolute top-10 right-0 h-80 w-80 rounded-full bg-[#2648d1] blur-[180px] opacity-60"></div>
@endsection

@section('content')
    <section class="max-w-6xl mx-auto px-6 pt-12 pb-12 grid gap-10 lg:grid-cols-[1.1fr_0.9fr] items-center">
        <div class="text-center lg:text-left">
            <p class="text-sm uppercase tracking-[0.4em] text-white/60">Social Media</p>
            <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Preluăm complet Facebook, Instagram și TikTok pentru brandul tău.</h1>
            <p class="text-white/70 mt-6 text-lg">
                Planuri lunare, copy clar, conținut video, răspunsuri rapide la mesaje și rapoarte pe înțelesul tuturor. Lucrați cu o echipă locală din Târgoviște, activă în Dâmbovița și în restul țării, care construiește setup-uri ce aduc rezervări, programări sau comenzi direct din social media.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="#pachete" class="px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Vezi pachetele</a>
                <a href="/" class="px-8 py-4 rounded-2xl border border-white/30 text-white font-semibold text-lg hover:border-white/60 hover-cta">Înapoi la homepage</a>
            </div>
        </div>
        <div class="rounded-[32px] border border-white/10 bg-white/5 overflow-hidden shadow-glow" data-reveal="right">
            <img
                src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1000&q=80"
                alt="Echipă filmând conținut social media"
                class="h-72 w-full object-cover"
            />
            <div class="p-5">
                <p class="text-sm uppercase tracking-[0.3em] text-white/60">Studio on set</p>
                <p class="text-white/75 text-sm mt-2">Planificăm și filmăm campanii într-o singură echipă integrată.</p>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12 grid gap-6 md:grid-cols-3" id="pachete">
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-glow-card">
            <p class="text-sm text-white/60">Administrare & Reclame</p>
            <h3 class="text-2xl font-semibold mt-2">250 EUR / lună</h3>
            <ul class="mt-4 space-y-2 text-white/70 text-sm">
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Postări constante pe Facebook & Instagram</li>
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Gestionare reclame (Ads) pentru clienți noi</li>
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Răspunsuri la mesaje și comentarii</li>
            </ul>
        </article>
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-glow-card border-neon/30">
            <p class="text-sm text-neon font-medium">Cel mai căutat</p>
            <h3 class="text-2xl font-semibold mt-2">600 EUR / lună</h3>
            <p class="text-white/60 text-xs mt-1">Include filmare profesionistă</p>
            <ul class="mt-4 space-y-2 text-white/70 text-sm">
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Venim la tine și filmăm Reels & TikTok</li>
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Editare video profesională inclusă</li>
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Strategie completă de creștere</li>
            </ul>
        </article>
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-glow-card">
            <p class="text-sm text-white/60">Pachet Full</p>
            <h3 class="text-2xl font-semibold mt-2">Cerere Ofertă</h3>
            <ul class="mt-4 space-y-2 text-white/70 text-sm">
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Tot ce e mai sus + Automatizări WhatsApp</li>
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Integrare sistem rezervări / CRM</li>
                <li class="flex items-start gap-3"><span class="h-1.5 w-1.5 rounded-full bg-neon mt-1.5"></span>Consultant dedicat afacerii tale</li>
            </ul>
        </article>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12 space-y-8" id="preturi">
        <div class="text-center" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/60">Detalii Prețuri</p>
            <h2 class="text-3xl lg:text-4xl font-semibold mt-3">Investiția ta în social media.</h2>
            <p class="text-white/70 mt-4">Prețurile de mai jos sunt transparente și acoperă tot ce ai nevoie pentru o prezență solidă.</p>
        </div>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="rounded-[28px] border border-white/10 bg-white/5 p-6 space-y-4" data-reveal>
                <div>
                    <p class="text-sm text-white/60">Administrare</p>
                    <h3 class="text-2xl font-semibold">Social Media Basic</h3>
                    <p class="text-white/70 text-sm mt-2">Ideal pentru branduri care vor prezență constantă.</p>
                </div>
                <p class="text-3xl font-semibold text-white">250 EUR / lună</p>
                <ul class="space-y-2 text-white/70 text-sm">
                    <li>Gestionare Facebook & Instagram</li>
                    <li>Administrare campanii de reclame</li>
                    <li>Răspunsuri la mesaje & comentarii</li>
                </ul>
            </article>
            <article class="rounded-[28px] border border-white/10 bg-white/5 p-6 space-y-4 border-neon/30" data-reveal data-reveal-delay="120">
                <div>
                    <p class="text-sm text-neon font-medium">Recomandat</p>
                    <h3 class="text-2xl font-semibold">Full Video & Reels</h3>
                    <p class="text-white/70 text-sm mt-2">Venim periodic la tine să filmăm materiale noi.</p>
                </div>
                <p class="text-3xl font-semibold text-white">600 EUR / lună</p>
                <ul class="space-y-2 text-white/70 text-sm">
                    <li>Filmare profesionistă (venim local)</li>
                    <li>Editare video & Scenarii Reels</li>
                    <li>Postare zilnică + Administrare reclame</li>
                </ul>
            </article>
            <article class="rounded-[28px] border border-white/10 bg-white/5 p-6 space-y-4" data-reveal data-reveal-delay="200">
                <div>
                    <p class="text-sm text-white/60">Strategie Custom</p>
                    <h3 class="text-2xl font-semibold">Pachet Full</h3>
                    <p class="text-white/70 text-sm mt-2">Soluții avansate pentru afaceri și rețele mari.</p>
                </div>

                <ul class="space-y-3 text-white/80 text-sm">
                    <li><span class="text-white">+200 EUR</span> · Automatizări WhatsApp</li>
                    <li><span class="text-white">+150 EUR</span> · Raportare detaliată lunară</li>
                    <li><span class="text-white">Custom</span> · Shooting-uri foto dedicate</li>
                </ul>
                <a href="{{ route('contact') }}" class="mt-4 block text-center py-3 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition">Cere Ofertă</a>
            </article>
        </div>
        <p class="text-center text-white/70 text-sm" data-reveal>Bugetul pentru reclame se stabilește împreună și se plătește direct către platforme.</p>
    </section>


    <section class="max-w-6xl mx-auto px-6 py-12 grid gap-10 lg:grid-cols-2">
        <div class="space-y-6">
            <h2 class="text-3xl font-semibold">Cum lucrăm</h2>
            <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
                <h3 class="text-xl font-semibold">1. Audit + plan</h3>
                <p class="text-white/70 mt-3">Analizăm conturile tale, concurența și publicul. Construim împreună pilonii de conținut și tonul brandului.</p>
            </div>
            <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
                <h3 class="text-xl font-semibold">2. Producție</h3>
                <p class="text-white/70 mt-3">Scriem copy, pregătim vizualuri/Reels și te ținem în buclă printr-un calendar simplu pentru aprobare.</p>
            </div>
            <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
                <h3 class="text-xl font-semibold">3. Publicare + rapoarte</h3>
                <p class="text-white/70 mt-3">Programăm postările, administrăm reclamele și trimitem rapoarte clare cu mesaje, rezervări și vânzări.</p>
            </div>
        </div>
        <div class="rounded-[32px] border border-white/10 bg-white/5 backdrop-blur-xl p-6 shadow-glow space-y-6">
            <div>
                <p class="text-sm text-white/60 uppercase tracking-[0.4em]">Rezultate Reale</p>
                <h3 class="text-2xl font-semibold mt-2">Elidadent Târgoviște</h3>
                <p class="text-white/70 mt-2">Administrare completă social media + filmări Reels săptămânale.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 text-sm text-white/70">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-3xl text-white">+72%</p>
                    <p class="mt-1">Programări din mesaje</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-3xl text-white">4.2x</p>
                    <p class="mt-1">ROAS campanii Facebook</p>
                </div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/10 to-transparent p-4">
                <p class="text-white text-lg">“Echipa Media Challenge ne-a eliberat de grija postărilor. Vin, filmează tot ce trebuie, iar noi vedem rezultatele direct în numărul de pacienți.”</p>
                <p class="text-white/60 text-sm mt-3">— Dr. Elida Carpiuc, Fondator Elidadent</p>
            </div>
        </div>

    </section>

    <section class="max-w-4xl mx-auto px-6 py-16 text-center">
        <h2 class="text-3xl lg:text-4xl font-semibold">Hai să lucrăm împreună.</h2>
        <p class="text-white/70 mt-4">Trimite-ne un mesaj cu obiectivele tale pe rețele sociale și îți pregătim un plan adaptat industriei tale.</p>
        <a href="mailto:contact@mediachallenge.ro" class="mt-8 inline-flex px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Scrie-ne</a>
    </section>
@endsection

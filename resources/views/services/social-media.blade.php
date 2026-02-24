@extends('layouts.app')

@section('title', 'Servicii Social Media | Media Challenge')
@section('meta_description', 'Preluăm complet paginile tale de Facebook, Instagram și TikTok: strategie, conținut, reclame și raportare clară.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-32 left-10 h-96 w-96 rounded-full bg-[#372f7c] blur-[180px] opacity-80"></div>
    <div class="absolute top-10 right-0 h-80 w-80 rounded-full bg-[#2648d1] blur-[180px] opacity-60"></div>
@endsection

@section('content')
    <section class="max-w-5xl mx-auto px-6 pt-12 pb-12 text-center">
        <p class="text-sm uppercase tracking-[0.4em] text-white/60">Social Media</p>
        <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Preluăm complet Facebook, Instagram și TikTok pentru brandul tău.</h1>
        <p class="text-white/70 mt-6 text-lg">
            Planuri lunare, copy clar, conținut video, răspunsuri rapide la mesaje și rapoarte pe înțelesul tuturor. Totul este gândit să aducă rezervări, programări sau comenzi direct din social media.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#pachete" class="px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Vezi pachetele</a>
            <a href="/" class="px-8 py-4 rounded-2xl border border-white/30 text-white font-semibold text-lg hover:border-white/60 hover-cta">Înapoi la homepage</a>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12 grid gap-6 md:grid-cols-3" id="pachete">
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-lift-sm">
            <p class="text-sm text-white/60">Plan Start</p>
            <h3 class="text-2xl font-semibold mt-2">Prezență constantă</h3>
            <ul class="mt-4 space-y-2 text-white/70 text-sm">
                <li>Calendar și copy pentru 3 postări / săptămână</li>
                <li>Șabloane grafice incluse</li>
                <li>Raport lunar simplu</li>
            </ul>
        </article>
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-lift-sm">
            <p class="text-sm text-white/60">Plan Growth</p>
            <h3 class="text-2xl font-semibold mt-2">Content + Ads</h3>
            <ul class="mt-4 space-y-2 text-white/70 text-sm">
                <li>Postări zilnice + Reels</li>
                <li>Administrare reclame Meta</li>
                <li>Răspuns la comentarii & mesaje</li>
            </ul>
        </article>
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-lift-sm">
            <p class="text-sm text-white/60">Plan Premium</p>
            <h3 class="text-2xl font-semibold mt-2">Studio complet</h3>
            <ul class="mt-4 space-y-2 text-white/70 text-sm">
                <li>Shooting lunar foto-video</li>
                <li>Automatizări WhatsApp/CRM</li>
                <li>Raport săptămânal + consultanță</li>
            </ul>
        </article>
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
                <p class="text-sm text-white/60 uppercase tracking-[0.4em]">Rezultate recente</p>
                <h3 class="text-2xl font-semibold mt-2">Clinicile Eterna</h3>
                <p class="text-white/70 mt-2">Campanie cu Reels educaționale + reclame pentru programări gratuite.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 text-sm text-white/70">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-3xl text-white">+72%</p>
                    <p class="mt-1">Programări din mesaje</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-3xl text-white">4.1x</p>
                    <p class="mt-1">ROAS campanii Meta</p>
                </div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/10 to-transparent p-4">
                <p class="text-white text-lg">“Echipa lor ne ține conturile active fără stres. Vin cu idei, filmează și ne trimit raportul pe românește.”</p>
                <p class="text-white/60 text-sm mt-3">— Dr. Ana Marinescu</p>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 py-16 text-center">
        <h2 class="text-3xl lg:text-4xl font-semibold">Hai să lucrăm împreună.</h2>
        <p class="text-white/70 mt-4">Trimite-ne un mesaj cu obiectivele tale pe rețele sociale și îți pregătim un plan adaptat industriei tale.</p>
        <a href="mailto:hello@mediaalliance.com" class="mt-8 inline-flex px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Scrie-ne</a>
    </section>
@endsection

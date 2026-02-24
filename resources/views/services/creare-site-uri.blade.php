@extends('layouts.app')

@section('title', 'Creare Site-uri | Media Challenge')
@section('meta_description', 'Construim site-uri moderne și pagini de campanie care transformă traficul din social media în cereri concrete.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-24 right-0 h-96 w-96 rounded-full bg-[#3340a1] blur-[200px] opacity-70"></div>
    <div class="absolute bottom-0 left-0 h-80 w-80 rounded-full bg-[#512c84] blur-[200px] opacity-60"></div>
@endsection

@section('content')
    <section class="max-w-5xl mx-auto px-6 pt-12 pb-12 text-center">
        <p class="text-sm uppercase tracking-[0.4em] text-white/60">Creare site-uri</p>
        <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Site-uri rapide, elegante și pregătite pentru traficul din social media.</h1>
        <p class="text-white/70 mt-6 text-lg">
            De la pagini pentru oferte până la site-uri complete cu meniu, portofoliu și rezervări online. Construim în Laravel + Tailwind pentru performanță și ușurință la editare.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#tipuri" class="px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Ce includem</a>
            <a href="mailto:hello@mediaalliance.com" class="px-8 py-4 rounded-2xl border border-white/30 text-white font-semibold text-lg hover:border-white/60 hover-cta">Scrie-ne</a>
        </div>
    </section>

    <section id="tipuri" class="max-w-6xl mx-auto px-6 py-12 grid gap-8 lg:grid-cols-2">
        <article class="rounded-[32px] border border-white/10 bg-white/5 p-8 hover-lift-sm">
            <p class="text-sm text-white/60">Landing Pages</p>
            <h3 class="text-3xl font-semibold mt-3">Pagini pentru campanii punctuale</h3>
            <ul class="mt-5 space-y-2 text-white/70 text-sm">
                <li>Design premium adaptat brandului</li>
                <li>Formular conectat la email / WhatsApp</li>
                <li>Timer-uri, pachete și testimoniale</li>
            </ul>
        </article>
        <article class="rounded-[32px] border border-white/10 bg-white/5 p-8 hover-lift-sm">
            <p class="text-sm text-white/60">Site-uri complete</p>
            <h3 class="text-3xl font-semibold mt-3">Prezentare modernă + blog + booking</h3>
            <ul class="mt-5 space-y-2 text-white/70 text-sm">
                <li>Structură clară: acasă, servicii, portofoliu, blog</li>
                <li>Conectare la sistem de rezervări sau shop</li>
                <li>Optimizare SEO local și încărcare rapidă</li>
            </ul>
        </article>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12 grid gap-6 md:grid-cols-3">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <p class="text-sm text-white/60">01</p>
            <h3 class="text-xl font-semibold mt-2">Structură clară</h3>
            <p class="text-white/70 mt-2">Mapăm obiectivele și transformăm fiecare secțiune într-un pas logic spre formular.</p>
        </div>
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <p class="text-sm text-white/60">02</p>
            <h3 class="text-xl font-semibold mt-2">Design + conținut</h3>
            <p class="text-white/70 mt-2">Aplicăm estetica premium din social media și scriem texte scurte, clare, care țin atenția.</p>
        </div>
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <p class="text-sm text-white/60">03</p>
            <h3 class="text-xl font-semibold mt-2">Dezvoltare & integrare</h3>
            <p class="text-white/70 mt-2">Codăm în Laravel/Tailwind, optimizăm pentru mobil și conectăm formularele la CRM/WhatsApp.</p>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-16 text-center">
        <h2 class="text-3xl lg:text-4xl font-semibold">Ai nevoie de un site nou?</h2>
        <p class="text-white/70 mt-4">Trimite-ne link-urile actuale și câteva obiective. Îți răspundem cu o propunere și timeline clar.</p>
        <a href="mailto:hello@mediaalliance.com" class="mt-8 inline-flex px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Trimite brief</a>
    </section>
@endsection

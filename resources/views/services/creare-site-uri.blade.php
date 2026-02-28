@extends('layouts.app')

@section('title', 'Creare Site-uri Târgoviște & Dâmbovița | Media Challenge')
@section('meta_description', 'Media Challenge dezvoltă site-uri și aplicații web pentru branduri din Târgoviște, Dâmbovița și din țară: prezentare, e-commerce, platforme custom integrate cu campaniile sociale.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-24 right-0 h-96 w-96 rounded-full bg-[#3340a1] blur-[200px] opacity-70"></div>
    <div class="absolute bottom-0 left-0 h-80 w-80 rounded-full bg-[#512c84] blur-[200px] opacity-60"></div>
@endsection

@section('content')
    <section class="max-w-6xl mx-auto px-6 pt-12 pb-12 grid gap-10 lg:grid-cols-[1.1fr_0.9fr] items-center">
        <div class="text-center lg:text-left">
            <p class="text-sm uppercase tracking-[0.4em] text-white/60">Creare site-uri</p>
            <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Site-uri rapide, elegante și pregătite pentru traficul din social media.</h1>
            <p class="text-white/70 mt-6 text-lg">
                Livrăm site-uri de prezentare, magazine online, platforme cu automatizări și aplicații web custom. Fiecare proiect este optimizat pentru conversii, ușor de administrat și se conectează natural cu campaniile și fluxurile tale interne, indiferent dacă ești în Târgoviște, Dâmbovița sau într-un alt oraș.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="#tipuri" class="px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Ce includem</a>
                <a href="mailto:contact@mediachallenge.ro" class="px-8 py-4 rounded-2xl border border-white/30 text-white font-semibold text-lg hover:border-white/60 hover-cta">Scrie-ne</a>
            </div>
        </div>
        <div class="rounded-[32px] border border-white/10 bg-white/5 overflow-hidden shadow-glow" data-reveal="right">
            <img
                src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1100&q=80"
                alt="Dashboard tehnic cu cod și diagrame"
                class="h-72 w-full object-cover"
            />
            <div class="p-5">
                <p class="text-sm uppercase tracking-[0.3em] text-white/60">Stack tehnic</p>
                <p class="text-white/75 text-sm mt-2">Folosim Laravel + Tailwind și legăm formularele de CRM sau procesatori de plăți. Simplu, scalabil și pregătit pentru orice campanie.</p>
            </div>
        </div>
    </section>

    <section id="tipuri" class="max-w-6xl mx-auto px-6 py-12 grid gap-8 lg:grid-cols-2">
        <article class="rounded-[32px] border border-white/10 bg-white/5 p-8 hover-lift-sm">
            <p class="text-sm text-white/60">Landing Pages</p>
            <h3 class="text-3xl font-semibold mt-3">Pagini pentru campanii punctuale</h3>
            <ul class="mt-5 space-y-2 text-white/70 text-sm">
                <li>Design premium adaptat brandului</li>
                <li>Formulare conectate la email, WhatsApp sau CRM</li>
                <li>Secțiuni pentru pachete, bonusuri și testimoniale</li>
                <li>Deadline vizibil (timer, reminder) pentru a urgenta conversia</li>
            </ul>
        </article>
        <article class="rounded-[32px] border border-white/10 bg-white/5 p-8 hover-lift-sm">
            <p class="text-sm text-white/60">Site-uri complete</p>
            <h3 class="text-3xl font-semibold mt-3">Prezentare modernă + blog + booking</h3>
            <ul class="mt-5 space-y-2 text-white/70 text-sm">
                <li>Structură clară: acasă, servicii, portofoliu, blog, contact</li>
                <li>Integrare cu module de rezervări, e-commerce sau abonamente</li>
                <li>Optimizare SEO local și încărcare rapidă</li>
                <li>Module pentru articole, studii de caz și lead magnets</li>
            </ul>
        </article>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12 grid gap-6 md:grid-cols-3">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <p class="text-sm text-white/60">01</p>
            <h3 class="text-xl font-semibold mt-2">Structură clară</h3>
            <p class="text-white/70 mt-2">Analizăm obiectivele și construim traseul utilizatorului astfel încât fiecare secțiune să conducă natural spre conversie.</p>
        </div>
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <p class="text-sm text-white/60">02</p>
            <h3 class="text-xl font-semibold mt-2">Design + conținut</h3>
            <p class="text-white/70 mt-2">Îmbinăm estetica premium inspirată din social media cu mesaje concise, ușor de scanat și adaptate fiecărui tip de pagină.</p>
        </div>
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <p class="text-sm text-white/60">03</p>
            <h3 class="text-xl font-semibold mt-2">Dezvoltare & integrare</h3>
            <p class="text-white/70 mt-2">Implementăm custom front-end/back-end, optimizăm pentru mobil și conectăm formularele la CRM, automatizări și rapoarte live.</p>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 pb-12">
        <h2 class="text-3xl font-semibold">Creare site web în Târgoviște și Dâmbovița</h2>
        <p class="text-white/70 mt-4">
            Cererea pentru creare site web vine frecvent din Târgoviște, Dâmbovița. Pentru fiecare brand local sau național, pregătim un audit, recomandăm structura potrivită și livrăm pagini rapide care se conectează cu campaniile Meta, Google sau TikTok. Dacă ai nevoie de un site nou sau de un refresh, suntem la o distanță de un mesaj.
        </p>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-16 text-center">
        <h2 class="text-3xl lg:text-4xl font-semibold">Ai nevoie de un site nou?</h2>
        <p class="text-white/70 mt-4">Trimite-ne link-urile actuale și câteva obiective. Îți răspundem cu o propunere și timeline clar.</p>
        <a href="mailto:contact@mediachallenge.ro" class="mt-8 inline-flex px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Trimite brief</a>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'SEO Local Târgoviște & Dâmbovița | Media Challenge')
@section('meta_description', 'Optimizare SEO locală și națională pentru afaceri din Târgoviște și județul Dâmbovița: Google Business Profile, conținut, link-building și rapoarte clare.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-32 right-20 h-96 w-96 rounded-full bg-[#267674] blur-[200px] opacity-70"></div>
    <div class="absolute bottom-10 left-0 h-80 w-80 rounded-full bg-[#53318f] blur-[200px] opacity-60"></div>
@endsection

@section('content')
    <section class="max-w-6xl mx-auto px-6 pt-12 pb-12 grid gap-10 lg:grid-cols-[1.1fr_0.9fr] items-center">
        <div class="text-center lg:text-left">
            <p class="text-sm uppercase tracking-[0.4em] text-white/60">SEO local & național</p>
            <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Te găsesc rapid clienții pe Google și pe hărți.</h1>
            <p class="text-white/70 mt-6 text-lg">
                Optimizăm site-ul, listele Google Business Profile și conținutul astfel încât brandul tău să apară primul când oamenii caută servicii ca ale tale, în Târgoviște, în județul Dâmbovița sau oriunde ai clienți.
            </p>
        </div>
        <div class="rounded-[32px] border border-white/10 bg-white/5 overflow-hidden shadow-glow" data-reveal="right">
            <img
                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1000&q=80"
                alt="Specialist SEO analizând grafice"
                class="h-72 w-full object-cover"
            />
            <div class="p-5">
                <p class="text-sm uppercase tracking-[0.3em] text-white/60">Audit & Search</p>
                <p class="text-white/75 text-sm mt-2">Monitorizăm pozițiile și optimizăm constant pentru căutări locale.</p>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12 grid gap-8 lg:grid-cols-3">
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-lift-sm">
            <p class="text-sm text-white/60">Audit complet</p>
            <h3 class="text-2xl font-semibold mt-2">Ce avem + ce lipsește</h3>
            <p class="text-white/70 mt-3">Analizăm tehnic site-ul, cuvintele cheie, concurenții și listările existente.</p>
        </article>
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-lift-sm">
            <p class="text-sm text-white/60">Optimizare tehnică</p>
            <h3 class="text-2xl font-semibold mt-2">Viteză și structură</h3>
            <p class="text-white/70 mt-3">Corectăm titlurile, meta-urile, link-urile interne și viteza de încărcare.</p>
        </article>
        <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover-lift-sm">
            <p class="text-sm text-white/60">Conținut & autoritate</p>
            <h3 class="text-2xl font-semibold mt-2">Articole, ghiduri, recenzii</h3>
            <p class="text-white/70 mt-3">Scriem articole utile și ghidăm echipa să obțină recenzii reale pe Google.</p>
        </article>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-16">
        <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 grid gap-8 lg:grid-cols-2">
            <div>
                <p class="text-sm text-white/60">Focus local</p>
                <h2 class="text-3xl font-semibold mt-3">Optimizare pentru clinici, restaurante și servicii locale.</h2>
                <p class="text-white/70 mt-4">Ne ocupăm de profilele Google, menționări pe site-uri relevante și ghiduri SEO în limba română. Raportăm lunar pozițiile și telefoanele venite din căutări.</p>
            </div>
            <div class="space-y-4 text-sm text-white/70">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-white text-lg">+38% trafic organic</p>
                    <p class="text-white/50 mt-1">Campanie pentru rețele de clinici</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-white text-lg">Top 3 pe “restaurant cu livrare + oraș”</p>
                    <p class="text-white/50 mt-1">Optimziare pentru lanțuri HoReCa</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-white text-lg">+45% apeluri din Google Business</p>
                    <p class="text-white/50 mt-1">Servicii locale (beauty, wellness, servicii auto)</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 pb-20 text-center">
        <h2 class="text-3xl lg:text-4xl font-semibold">Vrei să urci în Google?</h2>
        <p class="text-white/70 mt-4">Trimite-ne site-ul și principalele servicii. Îți pregătim un audit gratuit și o ordine de priorități.</p>
        <a href="mailto:contact@mediachallenge.ro" class="mt-8 inline-flex px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Cere audit</a>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Despre Media Challenge Târgoviște | Social Media & Web Dâmbovița')
@section('meta_description', 'Cunoaște echipa Media Challenge din Târgoviște, Dâmbovița – specialiști în social media și dezvoltare web pentru branduri locale și naționale.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#090c17] via-midnight to-midnight"></div>
    <div class="absolute -top-20 right-0 h-96 w-96 rounded-full bg-[#2e2e7d] blur-[200px] opacity-70"></div>
    <div class="absolute bottom-0 left-0 h-80 w-80 rounded-full bg-[#0f3d5b] blur-[200px] opacity-60"></div>
@endsection

@section('content')
    <section class="max-w-4xl mx-auto px-6 pt-12 pb-8 text-center">
        <p class="text-sm uppercase tracking-[0.4em] text-white/60">Despre noi</p>
        <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Suntem o echipă mică, motivată și aproape de clienți.</h1>
        <p class="text-white/70 mt-4">
            Media Challenge este formată din două persoane care combină creativitatea din social media cu experiența tehnică din dezvoltare web.
            Lucrați direct cu fondatorii, fără intermediari și fără limbaj complicat. Suntem localizați în Târgoviște, Dâmbovița și colaborăm cu branduri din toată țara.
        </p>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-16 grid gap-8 lg:grid-cols-2">
        <article class="rounded-[32px] border border-white/10 bg-white/5 p-8 backdrop-blur-xl shadow-glow" data-reveal>
            <p class="text-sm text-white/60 uppercase tracking-[0.4em]">Strategie & social media</p>
            <h2 class="text-2xl font-semibold mt-3">Mădălina Olteanu</h2>
            <p class="text-white/70 mt-4">
                Strateg social media și producător de conținut. Se ocupă de calendare, direcție creativă, copy și optimizări pentru Facebook, Instagram și TikTok,
                astfel încât brandurile să aibă o prezență coerentă și constantă.
            </p>
            <ul class="mt-6 space-y-2 text-sm text-white/70">
                <li>10+ ani în marketing digital</li>
                <li>Experiență hands-on cu clinici, restaurante și retail</li>
                <li>Focus pe mesaje clare și rezultate măsurabile</li>
            </ul>
        </article>

        <article class="rounded-[32px] border border-white/10 bg-white/5 p-8 backdrop-blur-xl shadow-glow" data-reveal data-reveal-delay="160">
            <p class="text-sm text-white/60 uppercase tracking-[0.4em]">Dezvoltare & automatizări</p>
            <h2 class="text-2xl font-semibold mt-3">Adrian Dragomir</h2>
            <p class="text-white/70 mt-4">
                Dezvoltator Laravel și arhitect IT. Construiește site-uri rapide, landing-uri și integrări cu CRM/WhatsApp astfel încât lead-urile din social media să
                ajungă direct în procesele tale interne.
            </p>
            <ul class="mt-6 space-y-2 text-sm text-white/70">
                <li>8+ ani în dezvoltare full-stack</li>
                <li>Automatizări și dashboard-uri personalizate</li>
                <li>Optimizează fluxurile echipelor cu tool-uri custom</li>
            </ul>
        </article>
    </section>

    <section class="max-w-5xl mx-auto px-6 pb-12 text-center" data-reveal>
        <h2 class="text-3xl lg:text-4xl font-semibold">Lucrăm ca un studio integrat.</h2>
        <p class="text-white/70 mt-4">
            Mădălina gestionează strategia și conținutul, iar Adrian rezolvă partea tehnică. Comunicăm transparent, avem întâlniri săptămânale cu fiecare client și
            livrăm rapoarte adaptate pentru decizii rapide.
        </p>
        <div class="mt-8 inline-flex flex-wrap gap-4">
            <div class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80">Social media + web</div>
            <div class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80">Discuții directe, fără account managers</div>
            <div class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80">Procese simple, rezultate clare</div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 pb-20 text-center" data-reveal>
        <p class="text-sm uppercase tracking-[0.4em] text-white/50">Vrei să lucrăm împreună?</p>
        <h2 class="text-3xl lg:text-4xl font-semibold mt-3">Scrie-ne și planificăm următorii pași.</h2>
        <a href="{{ route('contact') }}" class="mt-8 inline-flex px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Contactează-ne</a>
    </section>
@endsection

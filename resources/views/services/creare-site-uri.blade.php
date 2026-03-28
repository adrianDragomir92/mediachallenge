@extends('layouts.app')

@section('title', 'Creare Site-uri Târgoviște & Dâmbovița | Media Challenge')
@section('meta_description', 'Media Challenge dezvoltă site-uri și aplicații web pentru branduri din Târgoviște, Dâmbovița și din țară: prezentare, e-commerce, platforme custom integrate cu campaniile sociale.')

@push('head')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Web Development",
    "provider": {
        "@type": "LocalBusiness",
        "name": "Media Challenge"
    },
    "areaServed": {
        "@type": "City",
        "name": "Târgoviște"
    },
    "description": "Creare site-uri de prezentare, magazine online și platforme web personalizate."
}
</script>
@endpush

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-24 right-0 h-96 w-96 rounded-full bg-[#3340a1] blur-[200px] opacity-70"></div>
    <div class="absolute bottom-0 left-0 h-80 w-80 rounded-full bg-[#512c84] blur-[200px] opacity-60"></div>
@endsection

@section('content')
    <section class="max-w-6xl mx-auto px-6 pt-12 pb-12 grid gap-10 lg:grid-cols-[1.1fr_0.9fr] items-center">
        <div class="text-center lg:text-left">
            <p class="text-sm uppercase tracking-[0.4em] text-white/60">Creare site-uri</p>
            <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Site-uri moderne care îți aduc clienți noi din prima zi</h1>
            <p class="text-white/70 mt-6 text-lg">
                Construim site-uri rapide, optimizate pentru mobil și gata de publicitate pe Facebook sau Google. Lucrăm cu firme din Târgoviște și din toată țara pentru a transforma vizitatorii în clienți reali prin design premium și viteză de top.
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
                <p class="text-sm uppercase tracking-[0.3em] text-white/60">Tehnologie modernă și performanță</p>
                <p class="text-white/75 text-sm mt-2">   Construim site-uri rapide și sigure folosind tehnologii moderne. Formularele sunt conectate direct la email, WhatsApp sau CRM, astfel încât să primești cererile fără întârzieri.</p>
            </div>
        </div>
    </section>

    <section id="tipuri" class="max-w-6xl mx-auto px-6 py-12 grid gap-8 lg:grid-cols-2">
        <article class="rounded-[32px] border border-white/10 bg-white/5 p-8 hover-lift-sm">
            <p class="text-sm text-white/60">Site-uri de Prezentare</p>
            <h3 class="text-3xl font-semibold mt-3">Landing Page / Site Rapid</h3>
            <ul class="mt-5 space-y-2 text-white/70 text-sm">
                <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Gata de folosit în câteva zile pentru campanii de marketing</li>
                <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Formular de contact legat direct la WhatsApp-ul tău</li>
                <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Secțiuni clare pentru servicii și dovezi de la clienți (testimoniale)</li>
                <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Viteză de încărcare ultra-rapidă, optimizat 100% pentru mobil</li>
            </ul>
        </article>
        <article class="rounded-[32px] border border-white/10 bg-white/5 p-8 hover-lift-sm">
            <p class="text-sm text-white/60">Site-uri complete</p>
            <h3 class="text-3xl font-semibold mt-3">Site Business Complet</h3>
            <ul class="mt-5 space-y-2 text-white/70 text-sm">
                <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Toate paginile necesare (Acasă, Servicii, Despre, Blog, Contact)</li>
                <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Integrare module de rezervări online sau programări prin calendar</li>
                <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Sistem de chat live și butoane de apel rapid de pe telefon</li>
                <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Panou de administrare simplu ca să poți adăuga singur noutăți</li>
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
            <p class="text-white/70 mt-2">Realizăm funcționalități adaptate business-ului tău, optimizăm experiența pe mobil și conectăm site-ul cu instrumentele tale de marketing și gestionare a clienților.</p>
        </div>
    </section>

        <section class="max-w-6xl mx-auto px-6 py-12 space-y-8" id="preturi">
        <div class="text-center" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/60">Listă prețuri</p>
            <h2 class="text-3xl lg:text-4xl font-semibold mt-3">Creare site – Media Challenge</h2>
            <p class="text-white/70 mt-4">Fie că vrei o site simplu sau o platformă completă, mai jos găsești prețurile de pornire și implementările incluse în fiecare etapă.</p>
        </div>
        <div class="grid gap-6 md:grid-cols-3">
            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-4" data-reveal>
                <div>
                    <p class="text-sm text-white/60">Landing page</p>
                    <h3 class="text-2xl font-semibold">Site de prezentare simplu, pe o singură pagină</h3>
                </div>
                <p class="text-3xl font-semibold text-white">de la 250 €</p>
                <ul class="space-y-2 text-white/70 text-sm">
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>O pagină de prezentare, servicii și contact</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Design modern, adaptat pentru telefon</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Formular de contact + integrare WhatsApp</li>
                </ul>
            </article>
            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-4" data-reveal data-reveal-delay="80">
                <div>
                    <p class="text-sm text-white/60">Site prezentare</p>
                    <h3 class="text-2xl font-semibold">Site complet pentru prezentarea afacerii tale</h3>
                </div>
                <p class="text-3xl font-semibold text-white">de la 350 €</p>
                <ul class="space-y-2 text-white/70 text-sm">
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Pagini esențiale: acasă, servicii, despre, contact</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Design personalizat și optimizat pentru mobil</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Formulare contact și structură orientată spre conversii</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Formulare contact și structură orientată spre conversii</li>
                </ul>
            </article>
            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-4" data-reveal data-reveal-delay="160">
                <div>
                    <p class="text-sm text-white/60">Site administrabil</p>
                    <h3 class="text-2xl font-semibold">Panou de administrare custom, rapid și sigur</h3>
                </div>
                <p class="text-3xl font-semibold text-white">de la 600 €</p>
                <ul class="space-y-2 text-white/70 text-sm">
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Panou de administrare creat special pentru site-ul tău</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Modifici singur textele și imaginile, simplu și rapid</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Fără limitările și problemele platformelor standard</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Performanță ridicată, securitate și flexibilitate maximă</li>
                </ul>
            </article>
           
            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-4" data-reveal data-reveal-delay="80">
                <div>
                    <p class="text-sm text-white/60">Magazin online</p>
                    <h3 class="text-2xl font-semibold">Magazin online complet, gata pentru vânzări</h3>
                </div>
                <p class="text-3xl font-semibold text-white">de la 1.000 €</p>
                <ul class="space-y-2 text-white/70 text-sm">
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Catalog produse, coș de cumpărături și plăți online</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Panou de administrare custom pentru produse și comenzi</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Integrare cu firme de curierat și facturare</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Performanță ridicată, securitate și flexibilitate maximă</li>


                </ul>
            </article>
            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-4" data-reveal data-reveal-delay="160">
                <div>
                    <p class="text-sm text-white/60">Platforme custom</p>
                    <h3 class="text-2xl font-semibold">Aplicații web dezvoltate special pentru afacerea ta</h3>
                </div>
                <p class="text-3xl font-semibold text-white">de la 2.400 €</p>
                <ul class="space-y-2 text-white/70 text-sm">
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Aplicație web personalizată complet</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Panou de administrare și control total</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Automatizări și integrări cu sistemele existente</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Scalabil și pregătit pentru dezvoltări viitoare</li>
                </ul>
            </article>
            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-4" data-reveal>
                <div>
                    <p class="text-sm text-white/60">Servicii lunare</p>
                    <h3 class="text-2xl font-semibold">Mentenanță, suport și îmbunătățiri</h3>
                </div>

                <ul class="space-y-2 text-white/70 text-sm">
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Mentenanță de la 50 € / lună pentru actualizări, backup</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Modificări și îmbunătățiri de la 15 € / oră, la cerere</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Adăugare pagini noi, secțiuni sau funcționalități</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Actualizare texte, imagini și conținut existent</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Optimizare viteză și performanță</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Integrare servicii externe (plăți, CRM, newsletter etc.)</li>
                    <li class="flex items-start gap-3"><span class="h-2 w-2 rounded-full bg-neon mt-2"></span>Suport tehnic și intervenții rapide când este nevoie</li>
                </ul>
            </article>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 pb-12">
        <h2 class="text-3xl font-semibold">Exemplu Real: EdmanTravel</h2>
        <p class="text-white/70 mt-4">
            Pentru agenția de turism EdmanTravel din Târgoviște am construit un site creat integral, cu viteză de încărcare sub 1 secundă și preluare automată a cererilor de vacanță. Acest sistem le permite să răspundă instant clienților și să centralizeze toate solicitările într-un singur loc, demonstrând cum tehnologia modernă eficientizează munca de zi cu zi.
        </p>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-16 text-center">
        <h2 class="text-3xl lg:text-4xl font-semibold">Ai nevoie de un site nou?</h2>
        <p class="text-white/70 mt-4">Trimite-ne link-urile actuale și câteva obiective. Îți răspundem cu o propunere și timeline clar.</p>
        <a href="mailto:contact@mediachallenge.ro" class="mt-8 inline-flex px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">Vreau o ofertă</a>
    </section>
@endsection

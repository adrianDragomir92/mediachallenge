@extends('layouts.app')

@section('title', 'Politica de Cookie | Media Challenge')
@section('meta_description', 'Detalii despre cookie-urile folosite pe site-ul Media Challenge.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#090c17] via-midnight to-midnight"></div>
@endsection

@section('content')
    <section class="max-w-5xl mx-auto px-6 py-16 space-y-8">
        <header>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Legal</p>
            <h1 class="text-4xl font-semibold mt-3">Politica de cookie</h1>
            <p class="text-white/70 mt-3">Această pagină explică ce cookie-uri folosește site-ul Media Challenge și cum poți controla setările.</p>
        </header>

        <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 space-y-6 text-white/80 text-sm leading-relaxed">
            <section>
                <h2 class="text-white text-lg font-semibold">1. Ce este un cookie?</h2>
                <p>Un fișier mic salvat în browserul tău care reține preferințe sau ne ajută să înțelegem modul în care utilizezi site-ul.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">2. Tipuri de cookie folosite</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Necesare</strong> – mențin sesiunile și rețin acceptul bannerului cookie.</li>
                    <li><strong>Analitice</strong> – (Google Analytics / Matomo) pentru statistici agregate. Datele sunt anonime.</li>
                </ul>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">3. Controlul utilizatorului</h2>
                <p>Poți accepta/refuza cookie-urile opționale din banner sau poți șterge manual cookie-urile din browser. Instrucțiuni detaliate găsești în secțiunea Help a browserului tău.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">4. Terți</h2>
                <p>Unele pagini pot integra conținut embeddable (ex. YouTube, Google Maps). Aceste servicii pot plasa cookie-uri proprii; politicile lor se aplică în plus față de a noastră.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">5. Actualizări</h2>
                <p>Vom actualiza această pagină când adăugăm servicii noi sau modificăm instrumentele analitice. Revizuiește această secțiune periodic.</p>
            </section>
        </div>

        <p class="text-white/50 text-sm">Ultima actualizare: {{ date('F Y') }}</p>
    </section>
@endsection

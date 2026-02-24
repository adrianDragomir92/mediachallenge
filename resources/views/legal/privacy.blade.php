@extends('layouts.app')

@section('title', 'Politica de Confidențialitate | Media Challenge')
@section('meta_description', 'Află cum colectăm și folosim datele tale în cadrul Media Challenge.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0e1c] via-midnight to-midnight"></div>
@endsection

@section('content')
    <section class="max-w-5xl mx-auto px-6 py-16 space-y-8">
        <header>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Legal</p>
            <h1 class="text-4xl font-semibold mt-3">Politica de confidențialitate</h1>
            <p class="text-white/70 mt-3">Protejăm datele personale și le folosim doar în scopurile pentru care au fost transmise.</p>
        </header>

        <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 space-y-6 text-white/80 text-sm leading-relaxed">
            <section>
                <h2 class="text-white text-lg font-semibold">Date colectate</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li>Date de identificare: nume, companie, funcție.</li>
                    <li>Date de contact: email, telefon.</li>
                    <li>Informații despre proiect: obiective, bugete, linkuri către conturi online.</li>
                </ul>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">Scopuri</h2>
                <p>Folosim datele pentru a răspunde solicitărilor, a formula oferte, a livra serviciile contractate și a îndeplini obligațiile legale (emitere facturi, arhivare).</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">Temei legal</h2>
                <p>Prelucrarea se bazează pe interesul legitim de a comunica cu potențialii clienți, pe executarea contractului și pe consimțământ (de ex. când trimiți formularul).</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">Stocare & securitate</h2>
                <p>Datele sunt păstrate în aplicații cloud (e-mail, CRM) protejate prin parole și autentificare multi-factor. Nu transferăm date în afara UE fără garanții adecvate.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">Partajare</h2>
                <p>Transmiterea către terți are loc doar când este necesar proiectului (de ex. furnizor hosting) și în baza unor acorduri de confidențialitate. Nu vindem date către companii de marketing.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">Drepturile tale</h2>
                <p>Conform GDPR ai dreptul la informare, acces, rectificare, ștergere, restricționare, portabilitate și opoziție. Pentru exercitarea acestor drepturi, scrie-ne la <a href="mailto:hello@mediachallenge.ro" class="text-white">hello@mediachallenge.ro</a>.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">Perioada de păstrare</h2>
                <p>Informațiile de ofertare sunt păstrate maximum 12 luni de la ultima comunicare, iar documentele contractuale conform legislației fiscale (10 ani).</p>
            </section>
        </div>

        <p class="text-white/50 text-sm">Ultima actualizare: {{ date('F Y') }}</p>
    </section>
@endsection

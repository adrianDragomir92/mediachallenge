@extends('layouts.app')

@section('title', 'Termeni și Condiții | Media Challenge')
@section('meta_description', 'Termenii și condițiile de utilizare pentru site-ul Media Challenge și serviciile oferite.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#090c17] via-midnight to-midnight"></div>
@endsection

@section('content')
    <section class="max-w-5xl mx-auto px-6 py-16 space-y-8">
        <header>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Legal</p>
            <h1 class="text-4xl font-semibold mt-3">Termeni și condiții</h1>
            <p class="text-white/70 mt-3">
                Documentul de față stabilește regulile de utilizare a site-ului mediachallenge.ro și cadrul contractual dintre Media Challenge și clienți.
            </p>
        </header>

        <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 space-y-6 text-white/80 text-sm leading-relaxed">
            <section>
                <h2 class="text-white text-lg font-semibold">1. Identificare</h2>
                <p>Media Challenge este un studio compus din Mădălina Olteanu și Adrian Dragomir. Adresa de corespondență: București, România. Contact: <a href="mailto:hello@mediachallenge.ro" class="text-white">hello@mediachallenge.ro</a>.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">2. Utilizarea site-ului</h2>
                <p>Conținutul site-ului este protejat de drepturi de autor și poate fi folosit doar pentru informare personală. Copierea sau distribuirea materialelor fără acord scris este interzisă.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">3. Servicii și contracte</h2>
                <p>Fiecare proiect este detaliat într-o ofertă și într-un contract sau comandă de lucru. Livrările se realizează doar după acceptarea în scris a propunerii și plata avansului convenit.</p>
                <p>Termenele și livrabilele pot fi ajustate dacă apar modificări majore cerute de client.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">4. Obligațiile părților</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li>Media Challenge livrează conform brief-ului agreat și comunică statusul proiectului.</li>
                    <li>Clientul furnizează informații corecte și aprobări la timp.</li>
                    <li>Materialele furnizate de client nu trebuie să încalce drepturile unor terți.</li>
                </ul>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">5. Confidențialitate & date</h2>
                <p>Datele și documentele furnizate de clienți sunt păstrate confidențial. Folosim informațiile doar pentru proiectul respectiv și le protejăm conform politicii de confidențialitate.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">6. Limitarea responsabilității</h2>
                <p>Rezultatele campaniilor depind de mulți factori (buget, piață, produse). Nu garantăm poziționări sau conversii fixe, însă oferim rapoarte transparente și recomandări.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">7. Legea aplicabilă</h2>
                <p>Prezentele condiții sunt guvernate de legislația din România. Orice dispută va fi soluționată pe cale amiabilă sau, în lipsa unei înțelegeri, de instanțele competente din București.</p>
            </section>
            <section>
                <h2 class="text-white text-lg font-semibold">8. Modificări</h2>
                <p>Ne rezervăm dreptul de a actualiza acești termeni. Versiunea curentă este publicată pe această pagină, iar data ultimei revizuiri este menționată mai jos.</p>
            </section>
        </div>

        <p class="text-white/50 text-sm">Ultima actualizare: {{ date('F Y') }}</p>
    </section>
@endsection

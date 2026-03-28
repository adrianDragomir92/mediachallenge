@extends('layouts.app')

@section('title', 'Politica de Cookie | Media Challenge')
@section('meta_description', 'Detalii despre modulele cookie utilizate pe site-ul mediachallenge.ro pentru a-ți oferi o experiență de navigare mai bună.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#090c17] via-midnight to-midnight"></div>
    <div class="absolute top-20 left-1/3 h-96 w-96 rounded-full bg-[#3c4ad8] blur-[180px] opacity-30"></div>
@endsection

@section('content')
    <section class="max-w-4xl mx-auto px-6 py-20 pb-32">
        <header class="text-center mb-20" data-reveal>
            <div class="mx-auto w-16 h-16 rounded-3xl bg-neon/10 flex items-center justify-center mb-6">
                <span class="text-2xl">🍪</span>
            </div>
            <p class="text-sm uppercase tracking-[0.5em] text-white/50">Transparență</p>
            <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Politica de Cookie-uri</h1>
            <p class="text-white/60 mt-6 text-lg max-w-2xl mx-auto">
                Utilizăm tehnologii standard pentru a asigura o experiență optimă de navigare și securitate.
            </p>
        </header>

        <div class="space-y-12 text-white/80 leading-relaxed" data-reveal data-reveal-delay="200">
            
            <article class="p-8 rounded-[36px] bg-white/[0.02] border border-white/10 backdrop-blur-3xl shadow-glow-sm">
                <h2 class="text-2xl font-semibold text-white mb-4">Ce este un „cookie”?</h2>
                <p>
                    Un modul cookie este un fișier text de mici dimensiuni, format din litere și cifre, salvat pe terminalul tău (computer, telefon) la solicitarea unui browser (com Chrome, Safari). Acestea sunt „pasive” – nu conțin software, viruși sau spyware și nu pot accesa datele de pe hard drive-ul tău.
                </p>
            </article>

            <div class="grid gap-8 md:grid-cols-2">
                <section class="space-y-4">
                    <h3 class="text-white font-semibold text-lg flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-neon shadow-[0_0_8px_rgba(20,255,200,0.5)]"></span>
                        Cookie-uri Necesare
                    </h3>
                    <p class="text-sm text-white/60">
                        Esențiale pentru funcționarea site-ului. Mențin sesiunea, permit afișarea corectă a fonturilor și rețin acceptul tău din banner-ul de cookie-uri.
                    </p>
                </section>
                <section class="space-y-4">
                    <h3 class="text-white font-semibold text-lg flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#512c84] shadow-[0_0_8px_rgba(81,44,132,0.5)]"></span>
                        Analiză & Performanță
                    </h3>
                    <p class="text-sm text-white/60">
                        Folosim Google Analytics (în modul anonimizat) pentru a vedea cum ajung utilizatorii la noi și ce pagini sunt cele mai utile. Nu colectăm nume sau adrese exacte.
                    </p>
                </section>
            </div>

            <section class="p-8 rounded-3xl border border-white/5 bg-white/[0.01]">
                <h2 class="text-xl font-semibold text-white mb-6">Controlul setărilor</h2>
                <p class="mb-6">
                    Majoritatea browserelor permit gestionarea fișierelor cookie. Dezactivarea celor necesare poate afecta funcționalitatea site-ului (ex: formularele de contact pot eșua).
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="https://support.google.com/chrome/answer/95647?hl=ro" target="_blank" class="px-5 py-2.5 rounded-xl bg-white/5 border border-white/10 hover:border-neon transition text-xs font-medium">Setări în Chrome</a>
                    <a href="https://support.apple.com/ro-ro/guide/safari/sfri11471/mac" target="_blank" class="px-5 py-2.5 rounded-xl bg-white/5 border border-white/10 hover:border-neon transition text-xs font-medium">Setări în Safari</a>
                </div>
            </section>

            <footer class="pt-12 border-t border-white/5 text-center">
                <p class="text-white/40 text-xs tracking-widest uppercase">Ultima actualizare: {{ date('d.m.Y') }}</p>
                <a href="{{ route('contact') }}" class="mt-6 inline-block text-neon hover:underline font-medium text-sm">Ai o întrebare legată de confidențialitate?</a>
            </footer>
        </div>
    </section>
@endsection

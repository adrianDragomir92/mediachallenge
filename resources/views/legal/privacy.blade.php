@extends('layouts.app')

@section('title', 'Politica de Confidențialitate | Media Challenge')
@section('meta_description', 'Află cum colectăm, folosim și protejăm datele tale personale conform standardelor GDPR la Media Challenge.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0e1c] via-midnight to-midnight"></div>
    <div class="absolute -top-40 right-1/4 h-96 w-96 rounded-full bg-[#3c4ad8] blur-[220px] opacity-30"></div>
    <div class="absolute top-1/2 -left-40 h-[500px] w-[500px] rounded-full bg-[#512c84] blur-[250px] opacity-20"></div>
@endsection

@section('content')
    <section class="max-w-7xl mx-auto px-6 py-20">
        <header class="mb-16" data-reveal>
            <p class="text-sm uppercase tracking-[0.5em] text-neon font-medium">Confidențialitate</p>
            <h1 class="text-5xl lg:text-6xl font-semibold mt-4 text-glow">Protejăm Datele Tale</h1>
            <p class="text-white/60 mt-6 text-lg max-w-2xl leading-relaxed">
                Transparența și integritatea sunt fundamentale pentru noi. Află cum gestionăm informațiile personale conform GDPR.
            </p>
        </header>

        <div class="grid lg:grid-cols-[280px_1fr] gap-16 items-start">
            <!-- Sticky Sidebar -->
            <aside class="hidden lg:block sticky top-32" data-reveal data-reveal-delay="200">
                <nav class="flex flex-col gap-3 border-l border-white/10 pl-6">
                    <a href="#operator" class="text-white/50 hover:text-neon transition text-sm py-1">1. Operator Data</a>
                    <a href="#colectate" class="text-white/50 hover:text-neon transition text-sm py-1">2. Ce Date Colectăm</a>
                    <a href="#scopuri" class="text-white/50 hover:text-neon transition text-sm py-1">3. Scopuri Prelucrare</a>
                    <a href="#temei" class="text-white/50 hover:text-neon transition text-sm py-1">4. Temei Juridic</a>
                    <a href="#stocare" class="text-white/50 hover:text-neon transition text-sm py-1">5. Stocare & Timp</a>
                    <a href="#drepturi" class="text-white/50 hover:text-neon transition text-sm py-1">6. Drepturile tale</a>
                    <a href="#securitate" class="text-white/50 hover:text-neon transition text-sm py-1">7. Securitate</a>
                </nav>
                <div class="pl-6 pt-8">
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-[11px] text-white/50">
                        <p>Ai întrebări? Contactează Ofițerul de Date:</p>
                        <a href="mailto:contact@mediachallenge.ro" class="text-neon mt-1 block font-semibold hover:underline">contact@mediachallenge.ro</a>
                    </div>
                </div>
            </aside>

            <!-- Main Body -->
            <div class="space-y-16 text-white/70 leading-relaxed" data-reveal data-reveal-delay="300">
                
                <section id="operator" class="scroll-mt-32 p-10 rounded-[40px] bg-white/[0.02] border border-white/10 backdrop-blur-3xl shadow-glow-sm">
                    <h2 class="text-3xl font-semibold text-white mb-6">Cine suntem?</h2>
                    <p class="text-lg">
                        Operatorul responsabil pentru prelucrarea datelor tale este:
                    </p>
                    <div class="mt-8 flex flex-col md:flex-row gap-8">
                        <div class="flex-1 p-6 rounded-2xl bg-white/5 border border-white/5 hover:border-neon transition duration-500">
                            <p class="text-white/40 text-[10px] uppercase font-bold tracking-widest mb-2">Companie</p>
                            <p class="text-xl font-bold text-white tracking-tight">MEDIA CHALLENGE SRL</p>
                            <p class="text-sm mt-1">CUI 49319615</p>
                        </div>
                        <div class="flex-1 p-6 rounded-2xl bg-white/5 border border-white/5 hover:border-neon transition duration-500">
                            <p class="text-white/40 text-[10px] uppercase font-bold tracking-widest mb-2">Localizare</p>
                            <p class="text-sm text-white/80">
                                Sat Râncăciov, Com. Dragomirești,<br> Jud. Dâmbovița
                            </p>
                        </div>
                    </div>
                </section>

                <div class="grid gap-12">
                    <section id="colectate" class="scroll-mt-32">
                        <h2 class="text-2xl font-semibold text-white mb-4 flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-neon shadow-[0_0_8px_rgba(20,255,200,0.5)]"></span>
                            Ce date colectăm?
                        </h2>
                        <p>Colectăm informații esențiale oferite voluntar:</p>
                        <ul class="mt-6 space-y-4">
                            <li class="flex items-start gap-4">
                                <div class="mt-1.5 h-1.5 w-1.5 rounded-full bg-white/20"></div>
                                <p><strong class="text-white/90">Contact:</strong> Nume, email, telefon (prin formularul de contact).</p>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="mt-1.5 h-1.5 w-1.5 rounded-full bg-white/20"></div>
                                <p><strong class="text-white/90">Profesional:</strong> Numele firmei, funcția ta în companie.</p>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="mt-1.5 h-1.5 w-1.5 rounded-full bg-white/20"></div>
                                <p><strong class="text-white/90">Tech:</strong> Adresa IP, browserul folosit, sesiunile pe site (anonimizat).</p>
                            </li>
                        </ul>
                    </section>

                    <section id="scopuri" class="scroll-mt-32">
                        <h2 class="text-2xl font-semibold text-white mb-4 flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-neon shadow-[0_0_8px_rgba(20,255,200,0.5)]"></span>
                            De ce colectăm aceste date?
                        </h2>
                        <div class="grid gap-4 md:grid-cols-2">
                            <div class="p-6 rounded-2xl border border-white/5 bg-white/[0.01]">
                                <h4 class="text-white font-medium mb-2 leading-snug">Vânzări & Ofertare</h4>
                                <p class="text-sm">Pentru a-ți răspunde la solicitări și a crea oferte personalizate serviciilor cerute.</p>
                            </div>
                            <div class="p-6 rounded-2xl border border-white/5 bg-white/[0.01]">
                                <h4 class="text-white font-medium mb-2 leading-snug">Administrare Proiect</h4>
                                <p class="text-sm">Pentru comunicare stabilă pe durata contractului și livrarea materialelor digitale.</p>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="p-8 rounded-3xl bg-neon/5 border-l-4 border-neon">
                    <section id="drepturi" class="scroll-mt-32">
                        <h2 class="text-2xl font-semibold text-white mb-6">Drepturile tale conform GDPR</h2>
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="space-y-1">
                                <p class="text-white font-medium">Acces & Rectificare</p>
                                <p class="text-xs">Poți afla oricând ce date avem și să ceri corectarea lor.</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-white font-medium">Dreptul de a fi uitat</p>
                                <p class="text-xs">Poți cere ștergerea datelor dacă nu există obligații legale.</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-white font-medium">Portabilitate</p>
                                <p class="text-xs">Poți cere primirea datelor tale într-un format structurat.</p>
                            </div>
                        </div>
                    </section>
                </div>

                <section id="securitate" class="scroll-mt-32 border-t border-white/10 pt-16">
                    <h2 class="text-2xl font-semibold text-white mb-4">Securitatea Datelor</h2>
                    <p>
                        Implementăm măsuri avansate de securitate, inclusiv criptare SSL, firewall-uri și protocoale stricte de acces. Datele tale nu sunt vândute niciodată către terțe părți în scopuri de marketing. Dacă folosim subcontractori în afara UE, ne asigurăm că aceștia oferă garanții standard de protecție (ex: SCCs).
                    </p>
                    <p class="mt-6 text-white/40 text-sm italic">
                        Ultima actualizare manuală a acestui document: {{ date('F Y') }}.
                    </p>
                </section>
            </div>
        </div>
    </section>
@endsection

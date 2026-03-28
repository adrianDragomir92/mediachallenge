@extends('layouts.app')

@section('title', 'Termeni și Condiții | Media Challenge')
@section('meta_description', 'Termenii și condițiile de utilizare pentru site-ul Media Challenge și serviciile de marketing și web oferite.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#090c17] via-midnight to-midnight"></div>
    <div class="absolute top-0 right-0 h-[500px] w-[500px] rounded-full bg-[#3340a1] blur-[220px] opacity-40"></div>
    <div class="absolute bottom-0 left-0 h-[500px] w-[500px] rounded-full bg-[#512c84] blur-[220px] opacity-30"></div>
@endsection

@section('content')
    <section class="max-w-7xl mx-auto px-6 py-20">
        <header class="mb-16" data-reveal>
            <p class="text-sm uppercase tracking-[0.5em] text-neon font-medium">Politici</p>
            <h1 class="text-5xl lg:text-6xl font-semibold mt-4">Termeni și condiții</h1>
            <p class="text-white/60 mt-6 text-lg max-w-2xl">
                Cadrul legal care guvernează utilizarea platformei mediachallenge.ro și colaborarea cu clienții noștri.
            </p>
        </header>

        <div class="grid lg:grid-cols-[280px_1fr] gap-16 items-start">
            <!-- Sidebar Navigation -->
            <aside class="hidden lg:block sticky top-32 space-y-4" data-reveal data-reveal-delay="200">
                <nav class="flex flex-col gap-2 border-l border-white/10 pl-6">
                    <a href="#identificare" class="text-white/50 hover:text-neon transition text-sm py-1">1. Identificare</a>
                    <a href="#definitii" class="text-white/50 hover:text-neon transition text-sm py-1">2. Definiții</a>
                    <a href="#proprietate" class="text-white/50 hover:text-neon transition text-sm py-1">3. Proprietate Intelectuală</a>
                    <a href="#servicii" class="text-white/50 hover:text-neon transition text-sm py-1">4. Prestarea Serviciilor</a>
                    <a href="#raspunere" class="text-white/50 hover:text-neon transition text-sm py-1">5. Limitarea Răspunderii</a>
                    <a href="#terti" class="text-white/50 hover:text-neon transition text-sm py-1">6. Legături terți</a>
                    <a href="#litigii" class="text-white/50 hover:text-neon transition text-sm py-1">7. Litigii & Lege</a>
                    <a href="#modificari" class="text-white/50 hover:text-neon transition text-sm py-1">8. Modificări</a>
                </nav>
                <p class="text-white/30 text-[10px] uppercase tracking-widest pl-6 pt-4">Ultima actualizare:<br>{{ date('d.m.Y') }}</p>
            </aside>

            <!-- Main Content -->
            <div class="space-y-12 text-white/80 leading-relaxed" data-reveal data-reveal-delay="300">
                
                <section id="identificare" class="scroll-mt-32 space-y-6 p-8 rounded-3xl bg-white/[0.02] border border-white/10 backdrop-blur-xl shadow-glow-sm hover:border-white/20 transition-all duration-500">
                    <div class="flex items-center gap-4">
                        <span class="h-8 w-8 rounded-lg bg-neon/10 text-neon flex items-center justify-center font-bold text-sm">01</span>
                        <h2 class="text-white text-2xl font-semibold">Informații de identificare</h2>
                    </div>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="space-y-1">
                            <p class="text-white/40 text-[10px] uppercase tracking-widest">Entitate Juridică</p>
                            <p class="text-lg font-medium text-white">MEDIA CHALLENGE SRL</p>
                            <p class="text-neon text-xs">CUI: 49319615</p>
                            <p class="text-white/60 text-xs">J15/1706/2023</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-white/40 text-[10px] uppercase tracking-widest">Sediu Social</p>
                            <p class="text-sm">Str. Fântânilor, Nr. 51, Sat Râncăciov</p>
                            <p class="text-sm text-white/60">Com. Dragomirești, Jud. Dâmbovița</p>
                        </div>
                        <div class="space-y-4">
                            <p class="text-white/40 text-[10px] uppercase tracking-widest">Contact Rapid & Program</p>
                            <div class="space-y-3">
                                <a href="mailto:contact@mediachallenge.ro" class="flex items-center gap-3 text-sm hover:text-neon transition group">
                                    <x-icon-mail class="w-4 h-4 text-neon/60 group-hover:text-neon transition" />
                                    <span>contact@mediachallenge.ro</span>
                                </a>
                                <a href="tel:0736854081" class="flex items-center gap-3 text-sm hover:text-neon transition group">
                                    <x-icon-phone class="w-4 h-4 text-neon/60 group-hover:text-neon transition" />
                                    <span>0736 854 081</span>
                                </a>
                                <div class="flex items-center gap-3 text-sm text-white/60 font-mono italic bg-white/5 py-2 px-3 rounded-xl border border-white/5 w-fit">
                                    <x-icon-clock class="w-4 h-4 opacity-50" />
                                    <span>Luni - Vineri: 09:00 - 18:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="definitii" class="scroll-mt-32 space-y-6 p-8 rounded-3xl bg-white/[0.02] border border-white/10 backdrop-blur-xl">
                    <div class="flex items-center gap-4">
                        <span class="h-8 w-8 rounded-lg bg-white/10 text-white flex items-center justify-center font-bold text-sm">02</span>
                        <h2 class="text-white text-2xl font-semibold">Definiții</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="w-1 h-auto bg-neon/30 rounded-full"></div>
                            <p><strong class="text-white">Utilizator:</strong> Orice persoană care accesează site-ul sau interacționează cu materialele acestuia.</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1 h-auto bg-neon/30 rounded-full"></div>
                            <p><strong class="text-white">Client:</strong> Persoană fizică sau juridică ce contractează serviciile Media Challenge prin comandă confirmată.</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1 h-auto bg-neon/30 rounded-full"></div>
                            <p><strong class="text-white">Servicii:</strong> Consiliere marketing, management social media, creație conținut web și optimizare SEO.</p>
                        </div>
                    </div>
                </section>

                <section id="proprietate" class="scroll-mt-32 space-y-6">
                    <h2 class="text-white text-2xl font-semibold flex items-center gap-4">
                        <span class="text-neon text-sm font-bold">#03</span> Proprietate Intelectuală
                    </h2>
                    <p>
                        Întreg conținutul acestui site (texte, imagini, grafică, cod sursă) este proprietatea **Media Challenge** și este protejat de legislația națională și internațională privind drepturile de autor. Orice utilizare, copiere sau reproducere fără acordul nostru scris constitutie o încălcare a legii și va fi tratată ca atare.
                    </p>
                    <div class="p-6 rounded-2xl border border-white/5 bg-white/[0.01] italic text-white/60">
                        Păstrăm drepturile asupra strategiilor, metodologiilor și conceptelor creative dezvoltate de echipă, până la momentul transferului acestora către client (după achitarea integrală a serviciilor).
                    </div>
                </section>

                <section id="servicii" class="scroll-mt-32 space-y-6">
                    <h2 class="text-white text-2xl font-semibold flex items-center gap-4">
                        <span class="text-neon text-sm font-bold">#04</span> Prestarea Serviciilor
                    </h2>
                    <p>
                        Colaborarea dintre Media Challenge și Clienți este guvernată de un contract scris sau de confirmarea scrisă a unei oferte. Termenele de execuție și livrabilele sunt specificate pentru fiecare proiect în parte.
                    </p>
                    <p>
                        Ne rezervăm dreptul de a refuza colaborarea cu entități ale căror valori sau tip de activitate (ex: conținut ilegal, înșelător sau imoral) nu corespund standardelor noastre de etică profesională.
                    </p>
                </section>

                <section id="raspunere" class="scroll-mt-32 space-y-6">
                    <h2 class="text-white text-2xl font-semibold flex items-center gap-4">
                        <span class="text-neon text-sm font-bold">#05</span> Limitarea Răspunderii
                    </h2>
                    <p>
                        Depunem toate eforturile pentru ca informațiile de pe site să fie corecte și actualizate, însă Media Challenge nu poate fi trasă la răspundere pentru eventuale erori tehnice, întreruperi de serviciu sau omisiuni. 
                    </p>
                    <div class="bg-neon/5 border-l-4 border-neon p-6 rounded-r-2xl">
                        <p class="text-white font-medium">Notă privind rezultatele</p>
                        <p class="mt-2 text-white/70">Rezultatele strategiilor de marketing depind de factori externi (algoritmi, piață, bugete publicitare). Nu putem garanta performanțe fixe, ci implementarea riguroasă a celor mai bune practici din domeniu.</p>
                    </div>
                </section>

                <section id="litigii" class="scroll-mt-32 space-y-6">
                    <h2 class="text-white text-2xl font-semibold flex items-center gap-4">
                        <span class="text-neon text-sm font-bold">#07</span> Litigii și Legea Aplicabilă
                    </h2>
                    <p>Orice dispută va fi soluționată pe cale amiabilă. În cazul în care acest lucru nu este posibil, conflictul va fi tranșat de instanțele judecătorești competente din Târgoviște, conform legilor în vigoare din România.</p>
                    
                    <div class="grid gap-4 mt-8">
                        <p class="text-white font-medium">Link-uri utile Protecția Consumatorului:</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="https://anpc.ro/" target="_blank" class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 hover:border-neon hover:bg-neon/5 transition text-xs font-semibold uppercase tracking-widest">Site ANPC</a>
                            <a href="https://anpc.ro/ce-este-sal/" target="_blank" class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 hover:border-neon hover:bg-neon/5 transition text-xs font-semibold uppercase tracking-widest">SAL</a>
                            <a href="https://consumer-redress.ec.europa.eu/index_ro" target="_blank" class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 hover:border-neon hover:bg-neon/5 transition text-xs font-semibold uppercase tracking-widest">SOL</a>
                        </div>
                    </div>
                </section>

                <section id="modificari" class="scroll-mt-32 space-y-6 border-t border-white/5 pt-12">
                    <h2 class="text-white text-2xl font-semibold">Modificări ale termenilor</h2>
                    <p>
                        Media Challenge își rezervă dreptul de a modifica acești termeni în orice moment pentru a reflecta schimbările legislative sau de business. Varianta actualizată va fi publicată pe această pagină.
                    </p>
                </section>
            </div>
        </div>
    </section>
@endsection

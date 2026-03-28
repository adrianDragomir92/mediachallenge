@extends('layouts.app')

@section('title', 'Media Challenge Târgoviște | Strategie Social Media & Web Dâmbovița')
@section('meta_description', 'Media Challenge din Târgoviște, Dâmbovița dezvoltă strategii social media, conținut și site-uri custom care aduc rezervări și comenzi brandurilor locale și naționale.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-40 right-1/2 h-96 w-96 rounded-full bg-[#312967] blur-[160px] opacity-70 animate-float-slow"></div>
    <div class="absolute top-20 -right-10 h-96 w-96 rounded-full bg-[#3c4ad8] blur-[200px] opacity-60 animate-float-medium"></div>
@endsection

@section('content')
    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-6 pb-24 pt-12 lg:pt-24">
        <div class="grid gap-16 lg:grid-cols-[1.1fr_0.9fr] items-center">
            <div>
                <h1 data-reveal data-reveal-delay="120" class="text-4xl lg:text-6xl font-semibold leading-tight max-w-2xl">
                    Creăm prezențe puternice pe Facebook, Instagram și TikTok
                </h1>
                <p data-reveal data-reveal-delay="200" class="mt-6 text-lg text-white/70 max-w-2xl">
                    Gândim strategii clare, filmăm conținut pentru Reels & TikTok, administrăm interacțiunile zilnice și integrăm totul cu un site optimizat să convertească atenția în cereri de ofertă. Suntem localizați în Târgoviște și colaborăm cu branduri din județul Dâmbovița și din restul țării.
                </p>
                <div data-reveal data-reveal-delay="280" class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow glow-pulse hover-cta text-center">
                        Cere o propunere
                    </a>
                    <a href="#portofoliu" class="px-8 py-4 rounded-2xl border border-white/30 text-white font-semibold text-lg hover:border-white/60 hover-cta text-center">
                        Vezi proiecte
                    </a>
                </div>
                <div data-reveal data-reveal-delay="360" class="mt-12 grid grid-cols-2 gap-6 text-sm text-white/70">
                    <div class="transition duration-700">
                        <p class="text-3xl font-semibold text-white" data-counter data-target="120" data-suffix="+">0+</p>
                        <p>campanii sociale livrate cap-coadă</p>
                    </div>
                    <div class="transition duration-700">
                        <p class="text-3xl font-semibold text-white" data-counter data-target="40" data-suffix="+">0+</p>
                        <p>serii foto-video făcute în teren</p>
                    </div>
                </div>

            </div>
            <div class="relative" data-reveal="right" data-reveal-delay="220">
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-white/5 rounded-3xl blur-3xl animate-float-medium"></div>
                <div class="grid gap-6">
                    <div class="rounded-[32px] border border-white/10 bg-white/5 backdrop-blur-xl p-6 shadow-glow relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-gradient-to-tr from-white to-transparent"></div>
                        <div class="relative">
                            <p class="text-sm uppercase tracking-[0.3em] text-white/60">Panou Social Live</p>
                            <h3 class="mt-2 text-2xl font-semibold">Reacții, DM-uri și rezervări</h3>
                            <p class="mt-2 text-white/70 text-sm">Monitorizăm în timp real tot ce contează: de la mesaje în DM și comentarii, până la formularele de rezervare. Nu pierzi nicio oportunitate, indiferent că vine de pe Instagram, Facebook sau TikTok</p>
                       
                            <div class="mt-6 rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-white/0 p-4">
                                <div class="flex items-center justify-between text-sm">
                                    <p class="text-white/70">Campanie Instagram clinică</p>
                                    <span class="text-white">+72% programări din DM</span>
                                </div>
                                <div class="mt-3 h-2 rounded-full bg-white/10">
                                    <div class="h-2 rounded-full bg-neon" style="width: 72%"></div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center gap-3 text-sm text-white/60">
                                <x-icon-chat class="w-10 h-10 text-neon" />
                                <p>Răspunsuri automate și aprobări rapide pentru comentarii, mesaje și WhatsApp, explicate în limbaj simplu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-[32px] border border-white/10 bg-white/5 overflow-hidden shadow-glow">
                        <img
                            src="{{ asset('images/behind-scenes.webp') }}"
                            alt="Echipă Media Challenge lucrând la strategii de social media și conținut video"
                            class="h-64 w-full object-cover"
                            loading="lazy"
                        />
                        <div class="p-5">
                            <p class="text-sm uppercase tracking-[0.4em] text-white/60">Suntem pe teren, nu doar în spatele tastaturii</p>
                            <p class="text-white/75 text-sm mt-2">Venim la sediul tău, filmăm materialele brute și producem conținutul vizual care oprește scroll-ul. Transformăm atmosfera din afacerea ta în campanii care vând.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicii -->
    <section id="servicii" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6" data-reveal>
            <div>
                <p class="text-sm uppercase tracking-[0.4em] text-white/50">Ce facem pentru tine</p>
                <h2 class="text-3xl lg:text-4xl font-semibold mt-3">Echipa ta de marketing, filmări și site — tot ce ai nevoie, într-un singur loc.</h2>
            </div>
            <p class="text-white/70 max-w-xl">
                Nu mai pierzi timpul cu zeci de colaboratori pentru poze, reclame sau site. Lucrăm împreună ca să-ți aducem clienți și să-ți ușurăm munca zilnică prin instrumente digitale moderne.
            </p>
        </div>
        <div class="mt-14 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <article data-reveal class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-grid class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Plan de postări</h3>
                <p class="mt-3 text-white/70">Stabilim exact ce postăm, pe ce platformă și când este momentul cel mai bun, ca să fim siguri că mesajul tău ajunge la clienții care contează.</p>
            </article>
            <article data-reveal data-reveal-delay="120" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-chat class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Administrare Pagini</h3>
                <p class="mt-3 text-white/70">Ne ocupăm de tot: scriem textele, punem pozele și clipurile la orele potrivite și răspundem rapid la toate comentariile primite de la clienți.</p>
            </article>
            <article data-reveal data-reveal-delay="180" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-bolt class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Reclame cu Rezultate</h3>
                <p class="mt-3 text-white/70">Găsim clienții potriviți din zona ta și te ajutăm să vinzi mai mult prin campanii plătite pe care le urmărim și le optimizăm în fiecare zi.</p>
            </article>
            <article data-reveal data-reveal-delay="240" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-camera class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Filmări & Poze</h3>
                <p class="mt-3 text-white/70">Venim direct la tine în locație cu echipă profesionistă să filmăm Reels, testimoniale și cadre de calitate care opresc scroll-ul și atrag atenția.</p>
            </article>
            <article data-reveal data-reveal-delay="300" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-monitor class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Site-uri Rapide</h3>
                <p class="mt-3 text-white/70">Construim pagini moderne și simple de unde clienții te pot contacta sau își pot face o programare imediat, fără să mai piardă timpul prin mesaje.</p>
            </article>
            <article data-reveal data-reveal-delay="360" class="group border border-white/5 rounded-3xl p-6 bg-white/5 hover:bg-white/10 transition backdrop-blur-xl hover-lift">
                <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center mb-6 text-neon">
                    <x-icon-grid class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold">Muncă Automatizată</h3>
                <p class="mt-3 text-white/70">Punem tehnologia să lucreze pentru afacerea ta: de la mesaje automate pe WhatsApp până la rapoartele de vânzări pe care le primești direct pe telefon.</p>
            </article>
        </div>
    </section>


    <!-- Prețuri -->
    <section id="preturi" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="text-center space-y-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Planuri & prețuri</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">Alege serviciul potrivit și primești costurile pe loc.</h2>
            <p class="text-white/70 max-w-3xl mx-auto">
                Pachetele noastre includ tot ce ai nevoie: strategie, postări și rezultate clare. Ne adaptăm pentru fiecare afacere, dar iată bugetele de la care începem colaborările.
            </p>
        </div>
        <div class="mt-10" data-tab-group="pricing">
            <div class="flex flex-wrap gap-4 justify-center">
                <button type="button" class="tab-trigger is-active" data-tab-trigger="social">Social Media</button>
                <button type="button" class="tab-trigger" data-tab-trigger="web">Creare site-uri</button>
                <button type="button" class="tab-trigger" data-tab-trigger="seo">SEO</button>
            </div>
            <div class="mt-10 space-y-6">
                <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 grid gap-8 lg:grid-cols-[1.2fr_0.8fr]" data-tab-panel="social">
                    <div>
                        <p class="text-sm uppercase tracking-[0.4em] text-white/50">Plan lunar</p>
                        <h3 class="text-3xl font-semibold mt-3">Social Media Growth</h3>
                        <p class="text-white/70 mt-4">
                            Ne ocupăm de tot: de la idei și filmări până la postarea zilnică pe Facebook, Instagram și TikTok. Tu doar aprobi conținutul de pe telefon.
                        </p>
                        <ul class="mt-6 space-y-3 text-white/80 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Postări și filmări Reels (venim la sediul tău)
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Administrare reclame și rapoarte pe înțelesul tău
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Răspunsuri automate și conectare cu WhatsApp
                            </li>
                        </ul>
                        <div class="mt-8 flex flex-col gap-3">
                            <p class="text-4xl font-semibold text-white">de la 250 EUR / lună</p>
                            <p class="text-white/60 text-sm">Ideal pentru afaceri locale care vor să crească constant în fiecare lună.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="mt-8 inline-flex px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta w-full sm:w-auto">Programează o discuție</a>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-5">
                        <div>
                            <p class="text-sm text-white/60">Ce obții</p>
                            <p class="text-2xl font-semibold text-white mt-2">Aprobare rapidă de pe telefon</p>
                            <p class="text-white/60 text-sm mt-2">Vezi postările înainte să apară și aprobi totul cu un singur click, de oriunde te-ai afla.</p>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">72% mai multe programări</p>
                            <p class="text-white/60 text-sm">Creștere vizibilă a pacienților și clienților în primele 90 de zile.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">+45% mesaje prin WhatsApp</p>
                            <p class="text-white/60 text-sm">Răspunsuri automate care transformă întrebările în programări cerute.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">Profit din reclame</p>
                            <p class="text-white/60 text-sm">Optimizăm zilnic campaniile ca să ai cele mai mici costuri posibile.</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 grid gap-8 lg:grid-cols-[1.2fr_0.8fr]" data-tab-panel="web" hidden>
                    <div>
                        <p class="text-sm uppercase tracking-[0.4em] text-white/50">Proiect la cheie</p>
                        <h3 class="text-3xl font-semibold mt-3">Creare site & landing pages</h3>
                        <p class="text-white/70 mt-4">
                            Ne ocupăm de tot procesul, de la structură și design până la dezvoltare și lansare. Site-ul este pregătit pentru conversii și conectat la sistemele pe care le folosești.
                        </p>
                        <ul class="mt-6 space-y-3 text-white/80 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Planificare structură, conținut și design pentru fiecare pagină
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Dezvoltare custom + integrare cu procesatori de plăți / CRM
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Optimizare viteză și configurare pentru Google
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Dezvoltare custom, fără teme sau pluginuri standard
                            </li>
                        </ul>
                        <div class="mt-8 flex flex-col gap-3">
                            <p class="text-4xl font-semibold text-white">de la 250EUR / site</p>
                            <p class="text-white/60 text-sm">Termen mediu: 2-3 săptămâni. Include 2 runde de revizie și suport la lansare.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="mt-8 inline-flex px-8 py-4 rounded-2xl border border-white/30 text-white font-semibold text-lg hover:border-white/60 hover-cta w-full sm:w-auto">Cere ofertă web</a>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-5">
                        <div>
                            <p class="text-sm text-white/60">Include</p>
                            <p class="text-2xl font-semibold text-white mt-2">Design premium + integrare</p>
                            <p class="text-white/60 text-sm mt-2">Landing page, site complet sau mini-app conectată la fluxurile tale.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">Scor PageSpeed 90+</p>
                            <p class="text-white/60 text-sm">Optimizat pentru viteză și utilizare pe orice dispozitiv.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">Integrare CRM și automatizări</p>
                            <p class="text-white/60 text-sm">Cererile ajung direct în sistemele tale.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">Scalabil și pregătit pentru viitor</p>
                            <p class="text-white/60 text-sm">Site-ul poate fi extins ușor, pe măsură ce afacerea ta crește.</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 grid gap-8 lg:grid-cols-[1.2fr_0.8fr]" data-tab-panel="seo" hidden>
                    <div>
                        <p class="text-sm uppercase tracking-[0.4em] text-white/50">Analiză & Optimizare</p>
                        <h3 class="text-3xl font-semibold mt-3">Înțelege de ce pierzi clienți din Google</h3>
                        <p class="text-white/70 mt-4">
                            Verificăm tot ce ține de site-ul tău și profilul de business ca să te asigurăm că ești găsit ușor de clienții din zona ta.
                        </p>
                        <ul class="mt-6 space-y-3 text-white/80 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Analiză completă site: viteză, structură, indexare
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Optimizare pagini principale (titluri, descrieri, conținut)
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Optimizare profil Google Business
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Configurare și verificare Google Search Console
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="h-2 w-2 rounded-full bg-neon mt-2"></span>
                                Raport clar cu acțiuni prioritare
                            </li>
                        </ul>
                        <div class="mt-8 flex flex-col gap-3">
                            <p class="text-4xl font-semibold text-white">200 EUR</p>
                            <p class="text-white/60 text-sm">O singură dată sau abonament lunar pentru rezultate constante.</p>
                        </div>

                        <a href="{{ route('contact') }}" class="mt-8 inline-flex px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta w-full sm:w-auto">Solicită audit SEO</a>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 space-y-5">
                        <div>
                            <p class="text-sm text-white/60">Monitorizare</p>
                            <p class="text-2xl font-semibold text-white mt-2">Rapoarte clare + alerte</p>
                            <p class="text-white/60 text-sm mt-2">Vizibilitate pe cuvintele cheie prioritare și apelurile venite din Google.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">+38% trafic organic</p>
                            <p class="text-white/60 text-sm">Rezultate obținute pentru rețele de clinici locale.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">Top 3 pe Google Maps</p>
                            <p class="text-white/60 text-sm">Optimizăm GBP și colectăm recenzii autentice.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-transparent p-4">
                            <p class="text-white text-lg">+55% apeluri organice</p>
                            <p class="text-white/60 text-sm">In doar 4 luni pentru servicii locale din Dâmbovița.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- De ce noi -->
    <section id="why-us" class="max-w-6xl mx-auto px-6 py-20 flex flex-col lg:flex-row gap-12 items-center">
        <div class="flex-1" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">De ce să lucrezi cu noi?</p>
            <h2 class="text-3xl lg:text-4xl font-semibold mt-4">Nu doar postăm, ci ne ocupăm de tot succesul tău online.</h2>
            <p class="mt-4 text-white/70">
                Am creat o metodă simplă prin care tu vezi exact ce postăm, aprobi totul rapid de pe telefon și ai control total. Postările, reclamele și site-ul tău vor lucra împreună, fără să mai pierzi timpul cu zeci de telefoane sau mesaje.
            </p>
            <ul class="mt-8 space-y-4 text-white/80">
                <li class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-neon"></span>
                    Plan clar de postări și filmări
                </li>
                <li class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-neon"></span>
                    Facebook, Instagram și TikTok, toate la zi
                </li>
                <li class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-neon"></span>
                    Răspunsuri automate pentru clienții tăi
                </li>
                <li class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-neon"></span>
                    Vezi rezultatele în timp real, pe telefon
                </li>
            </ul>
        </div>
        <div class="flex-1 w-full" data-reveal="right" data-reveal-delay="160">
            <div class="rounded-[32px] border border-white/10 bg-charcoal/80 p-6 backdrop-blur-2xl relative overflow-hidden soft-grid">
                <div class="absolute inset-0 opacity-10"></div>
                <div class="relative grid gap-4">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                        <div class="flex items-center justify-between text-sm text-white/60">
                            <span>Planul tău social</span>
                            <span>Activ acum</span>
                        </div>
                        <div class="mt-3 space-y-3 text-white">
                            <div class="flex items-center justify-between">
                                <p>Exemplu: Postare Clinică</p>
                                <span class="text-emerald-300 text-xs text-right">Oamenii dau click</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p>Mesaje automate</p>
                                <span class="text-emerald-300 text-xs text-right">Răspunsuri mult mai rapide</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p>Oferte actualizate instant</p>
                                <span class="text-emerald-300 text-xs text-right">Conectat peste tot</span>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/5 to-white/0 p-4">
                        <p class="text-sm text-white/60">Nota noastră de performanță</p>
                        <p class="text-4xl font-semibold mt-2">96 / 100</p>
                        <p class="text-white/60 text-sm mt-2">Aprecieri, clienți noi și design premium</p>
                        <div class="mt-4 h-2 rounded-full bg-white/10">
                            <div class="h-2 rounded-full bg-neon" style="width: 96%"></div>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4 flex items-center gap-4">
                        <div class="h-12 w-12 rounded-2xl bg-white/10 flex items-center justify-center">∞</div>
                        <div>
                            <p class="text-white font-semibold">Totul într-un singur loc</p>
                            <p class="text-white/60 text-sm">Filmări, reclame și site-ul tău, toate sub controlul tău.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Clienți -->
    <section id="clienti" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center space-y-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Clienți și parteneri</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">Branduri care ne-au ales pentru social media + tech.</h2>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <a href="https://www.elidadent.ro" target="_blank" rel="noopener" class="group rounded-2xl border border-white/10 bg-white/5 p-6 flex flex-col items-center gap-3 transition hover:-translate-y-1 hover:bg-white/10">
                <span class="text-xs uppercase tracking-[0.4em] text-white/50">Social Media & Ads</span>
                <img src="{{ asset('images/logo.png') }}" alt="Elidadent" class="max-h-12 invert" />
                <p class="text-white/60 text-xs">Conținut zilnic + Meta Ads</p>
            </a>
            <a href="https://www.elidadentforkids.ro" target="_blank" rel="noopener" class="group rounded-2xl border border-white/10 bg-white/5 p-6 flex flex-col items-center gap-3 transition hover:-translate-y-1 hover:bg-white/10">
                <span class="text-xs uppercase tracking-[0.4em] text-white/50">Campanii video</span>
                <img src="{{ asset('images/logo-f.png') }}" alt="Elidadent For Kids" class="max-h-12" />
                <p class="text-white/60 text-xs">Reels & stories pentru părinți</p>
            </a>
            <a href="#" target="_blank" rel="noopener" class="group rounded-2xl border border-white/10 bg-white/5 p-6 flex flex-col items-center gap-3 transition hover:-translate-y-1 hover:bg-white/10">
                <span class="text-xs uppercase tracking-[0.4em] text-white/50">Web Design</span>
                <div class="h-12 flex items-center justify-center text-white font-bold text-xl uppercase tracking-tighter italic">EdmanTravel</div>
                <p class="text-white/60 text-xs">Creare site agenție turism</p>
            </a>
        </div>
    </section>

    <!-- Site-uri web -->
    <section id="web" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="grid gap-12 lg:grid-cols-[1.1fr_0.9fr] items-center">
            <div data-reveal>
                <p class="text-sm uppercase tracking-[0.4em] text-white/50">Creare site-uri web</p>
                <h2 class="text-3xl lg:text-4xl font-semibold mt-3">Facem site-uri moderne care îți aduc clienți noi din prima zi.</h2>
                <p class="mt-4 text-white/70">
                    Construim site-uri de prezentare, magazine online și pagini pentru oferte care se încarcă rapid și arată perfect pe orice telefon. Integrăm formulare de rezervare online direct pe site-ul tău, ca să primești toate programările rapid și organizat.
                </p>
                <div class="mt-8 grid gap-6 md:grid-cols-2 text-white/70">
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 hover-lift-sm" data-reveal>
                        <h3 class="text-xl font-semibold text-white">Pagini pt. oferte</h3>
                        <p class="mt-3">Perfecte pentru servicii noi sau promoții limitate. Simple, rapide și eficiente.</p>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 hover-lift-sm" data-reveal data-reveal-delay="120">
                        <h3 class="text-xl font-semibold text-white">Site-uri de prezentare</h3>
                        <p class="mt-3">Tot ce are nevoie afacerea ta: servicii, poze, contact și formular online de rezervare.</p>
                    </div>
                </div>
                <div class="mt-8 flex flex-wrap gap-4">
                    <div data-reveal data-reveal-delay="200" class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80 badge-animated">Arată impecabil pe orice telefon</div>
                    <div data-reveal data-reveal-delay="300" class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80 badge-animated">Găsit ușor pe Google (SEO local)</div>
                    <div data-reveal data-reveal-delay="400" class="px-5 py-2 rounded-full border border-white/20 text-sm text-white/80 badge-animated">Formular online de rezervare direct pe site</div>
                </div>
                <button class="mt-10 px-8 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow glow-pulse hover-cta" data-reveal data-reveal-delay="260">
                    Vreau un site nou
                </button>
                <div class="mt-6 rounded-2xl border border-white/10 bg-white/5 p-5" data-reveal data-reveal-delay="320">
                    <p class="text-sm uppercase tracking-[0.4em] text-white/60">Site-uri web în Târgoviște</p>
                    <p class="text-white/75 text-sm mt-2">
                        Ne ocupăm de tot ce înseamnă prezența ta online: de la design și text până la lansare. Facem site-uri care nu doar arată bine, ci sunt construite să transforme vizitatorii în clienți fideli prin sisteme de rezervare simple.
                    </p>
                </div>
            </div>
            <div class="relative" data-reveal="right" data-reveal-delay="180">
                <div class="absolute -top-10 -left-6 w-32 h-32 bg-white/10 rounded-3xl blur-3xl"></div>
                <div class="rounded-[32px] border border-white/10 bg-white/5 backdrop-blur-xl p-6 shadow-glow relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 bg-gradient-to-b from-white/10 to-transparent"></div>
                    <div class="relative space-y-6">
                        <div>
                            <p class="text-sm text-white/60">Meniu și Rezervări</p>
                            <p class="text-2xl font-semibold">Exemplu Restaurant</p>
                            <p class="text-white/70 text-sm mt-2">Link din Instagram bio → clienții văd meniul și completează formularul de rezervare în 10 secunde.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/10 p-4">
                            <div class="flex items-center justify-between text-sm text-white/60">
                                <span>Rezervări prin formular online</span>
                            </div>
                            <p class="text-white text-lg mt-3">“Bună ziua! Vrem o masă pentru 4 persoane diseară.”</p>
                            <p class="text-neon text-sm mt-2">Rezervarea apare direct în sistemul tău.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-sm text-white/70">
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p>Meniu digital</p>
                                <p class="text-2xl text-white mt-1">+58%</p>
                                <span class="text-white/50 text-xs">vizualizări</span>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p>Rezervări prin formular</p>
                                <p class="text-2xl text-white mt-1">Peste 30 / zi</p>
                                <span class="text-white/50 text-xs">din social</span>
                            </div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-white/10 to-transparent p-4">
                            <p class="text-sm text-white/60">Totul integrat</p>
                            <p class="text-white text-lg mt-2">Website + Facebook + Instagram + Google Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Portofoliu -->
    <section id="portofoliu" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="flex flex-col gap-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Clienți & rezultate</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">Proiecte locale și rezultate reale pentru afaceri din Târgoviște și județul Dâmbovița.</h2>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <article data-reveal class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl overflow-hidden hover-zoom">
                    <img
                        src="{{ asset('images/portfolio/elida_dent.png') }}"
                        alt="Elidadent - Clinică Stomatologică"
                        loading="lazy"
                        class="h-full w-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        Social Media & Ads
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">Elidadent - Clinică Stomatologică</h3>
                    <p class="mt-2 text-white/70 text-sm">Gestionăm rețelele sociale și campaniile de marketing. Suntem prezenți zilnic pe Facebook, Instagram și TikTok pentru a aduce pacienți noi.</p>
                    <ul class="text-white/50 text-xs space-y-1 mt-3">
                        <li>Facebook & Instagram Ads</li>
                        <li>Conținut video zilnic</li>
                        <li>Management campanii marketing</li>
                    </ul>
                </div>
            </article>
            <article data-reveal data-reveal-delay="140" class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl overflow-hidden hover-zoom">
                    <img
                        src="{{ asset('images/portfolio/elida_dent_kids.png') }}"
                        alt="Elidadent For Kids - Stomatologie Copii"
                        loading="lazy"
                        class="h-full w-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        Campanii & Evenimente
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">Elidadent For Kids - Stomatologie Copii</h3>
                    <p class="mt-2 text-white/70 text-sm">Promovăm serviciile pentru copii prin campanii video atractive și organizăm evenimente locale de promovare a sănătății dentare.</p>
                    <ul class="text-white/50 text-xs space-y-1 mt-3">
                        <li>Campanii Reels & TikTok</li>
                        <li>Organizare evenimente locale</li>
                        <li>Marketing offline & online</li>
                    </ul>
                </div>
            </article>
            <article data-reveal data-reveal-delay="220" class="group rounded-[28px] border border-white/5 bg-white/5 p-4 overflow-hidden hover-lift">
                <div class="relative h-48 rounded-2xl overflow-hidden hover-zoom">
                    <img
                        src="{{ asset('images/portfolio/edman_travel.png') }}"
                        alt="EdmanTravel - Agenție de Turism"
                        loading="lazy"
                        class="h-full w-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 px-3 py-1 text-xs uppercase tracking-[0.3em] bg-black/40 rounded-full">
                        Site Creat Integral
                    </div>

                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">EdmanTravel - Agenție de Turism</h3>

                    <p class="mt-2 text-white/70 text-sm">Am construit un site modern și rapid pentru agenția de turism, optimizat să preia cererile de vacanță direct în sistem.</p>
                    <ul class="text-white/50 text-xs space-y-1 mt-3">
                        <li>Creare site agenție turism</li>
                        <li>Design modern & rapid</li>
                        <li>Sistem preluare cereri</li>
                    </ul>
                </div>
            </article>
        </div>
    </section>


    <!-- Proces -->
    <section id="proces" class="max-w-6xl mx-auto px-6 py-20">
        <div class="flex flex-col gap-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Proces</p>
            <h2 class="text-3xl lg:text-4xl font-semibold">Cum lucrăm împreună ca să ai rezultate?</h2>


        </div>
        <div class="mt-12 grid gap-6 md:grid-cols-4">
            <div data-reveal class="rounded-3xl border border-white/5 bg-white/5 p-6 hover-lift-sm">
                <p class="text-sm text-white/50">Pas 1</p>
                <h3 class="text-2xl font-semibold mt-2">Planificare</h3>
                <p class="mt-3 text-white/70 text-sm">Ne uităm la paginile tale, vedem cine sunt clienții și stabilim ce vrem să obținem: mesaje, apeluri sau vânzări.</p>
            </div>
            <div data-reveal data-reveal-delay="120" class="rounded-3xl border border-white/5 bg-white/5 p-6 hover-lift-sm">
                <p class="text-sm text-white/50">Pas 2</p>
                <h3 class="text-2xl font-semibold mt-2">Filmări & Postări</h3>
                <p class="mt-3 text-white/70 text-sm">Venim la tine, filmăm clipuri (Reels) și facem poze, apoi pregătim tot planul de postări pentru toată luna.</p>
            </div>
            <div data-reveal data-reveal-delay="200" class="rounded-3xl border border-white/5 bg-white/5 p-6 hover-lift-sm">
                <p class="text-sm text-white/50">Pas 3</p>
                <h3 class="text-2xl font-semibold mt-2">Site & Contact</h3>
                <p class="mt-3 text-white/70 text-sm">Facem site-ul sau paginile de prezentare și le legăm de WhatsApp, ca să primești cererile clienților direct pe telefon.</p>
            </div>
            <div data-reveal data-reveal-delay="280" class="rounded-3xl border border-white/5 bg-white/5 p-6 hover-lift-sm">
                <p class="text-sm text-white/50">Pas 4</p>
                <h3 class="text-2xl font-semibold mt-2">Reclame & Profit</h3>
                <p class="mt-3 text-white/70 text-sm">Pornim reclamele, urmărim zilnic câți oameni au venit și îmbunătățim totul ca să ai costuri cât mai mici.</p>
            </div>
        </div>
    </section>


    <!-- Testimoniale -->
    <section id="testimoniale" class="max-w-6xl mx-auto px-6 py-20 border-t border-white/5">
        <div class="flex flex-col gap-4" data-reveal>
            <p class="text-sm uppercase tracking-[0.4em] text-white/50">Testimoniale</p>
        <h2 class="text-3xl lg:text-4xl font-semibold">Clienții ne aleg pentru claritate și viteză.</h2>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-2">
            <article data-reveal class="rounded-[32px] border border-white/5 bg-white/5 p-8 backdrop-blur-xl hover-glow-card">
                <p class="text-white/80 text-lg">
                    “Media Challenge ne gestionează întreaga prezență online. De la Reels-uri zilnice până la campanii complexe de marketing, rezultatele se văd în numărul tot mai mare de pacienți care ne trec pragul.”
                </p>
                <div class="mt-6">
                    <p class="font-semibold">Dr. Elida Carpiuc</p>
                    <p class="text-white/60 text-sm">Fondator, Elidadent & Elidadent For Kids</p>
                </div>
            </article>
            <article data-reveal data-reveal-delay="160" class="rounded-[32px] border border-white/5 bg-white/5 p-8 backdrop-blur-xl hover-glow-card">
                <p class="text-white/80 text-lg">
                    “Colaborarea pentru noul site al agenției a fost excelentă. Am primit o platformă rapidă, modernă și foarte ușor de folosit de către clienții noștri, exact așa cum ne-am dorit.”
                </p>
                <div class="mt-6">
                    <p class="font-semibold">Nicolae Dragomir</p>
                    <p class="text-white/60 text-sm">Fondator, EdmanTravel</p>
                </div>
            </article>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-4xl mx-auto px-6 py-24 text-center">
        <p class="text-sm uppercase tracking-[0.4em] text-white/50">Următorul pas</p>
        <h2 class="text-4xl lg:text-5xl font-semibold mt-4">
            Gata să transformi social media în motorul tău principal?
        </h2>
        <p class="mt-4 text-white/70">
            Programează o sesiune cu echipa noastră social-first și primești o foaie de parcurs pentru conținut, ads și automatizări dedicate brandului tău.
        </p>
        <a href="{{ route('contact') }}" class="mt-10 inline-flex px-10 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow glow-pulse hover-cta">
            Plan social personalizat
        </a>
    </section>

    <!-- Concept mobil -->
    <section class="max-w-6xl mx-auto px-6 pb-24">
        <div class="rounded-[40px] border border-white/10 bg-white/5 p-10 flex flex-col lg:flex-row gap-10 items-center">
            <div class="flex-1 w-full" data-reveal>
                <div class="rounded-3xl border border-white/10 overflow-hidden shadow-glow mb-6">
                    <img
                        src="{{ asset('images/mobile-concept.webp') }}"
                        alt="Telefon mobil cu feed social"
                        loading="lazy"
                        class="h-64 w-full object-cover"
                    />
                </div>
                <p class="text-sm uppercase tracking-[0.4em] text-white/50">Afacerea ta, direct pe telefon</p>
                <h2 class="text-3xl font-semibold mt-3">Social media, mai simplu.</h2>
                <p class="mt-4 text-white/70">
                    Tot ce postăm pentru tine e ușor de urmărit direct de pe mobil. Vezi imediat câte vizualizări au clipurile tale și primești cererile de ofertă instant.
                </p>
            </div>
            <div class="flex-1 flex justify-center" data-reveal="right" data-reveal-delay="200">
                <div class="w-72 rounded-[42px] border-4 border-white/20 bg-black/90 p-5 relative shadow-[0_20px_60px_rgba(0,0,0,0.6)]">
                    <div class="absolute top-3 left-1/2 -translate-x-1/2 w-16 h-1 rounded-full bg-white/20"></div>
                    <div class="mt-8 space-y-6">
                        <div class="space-y-3">
                            <p class="text-xs text-white/60 uppercase tracking-[0.4em]">Media Challenge</p>
                            <h3 class="text-2xl font-semibold">Creștem afacerea ta cu idei bune și tehnologie modernă.</h3>
                            <button class="w-full mt-4 px-5 py-3 rounded-2xl bg-neon text-black font-semibold hover-cta">Vreau o ofertă</button>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <p class="text-sm text-white/60">Postări pe lună</p>
                            <p class="text-2xl font-semibold">48</p>
                            <div class="mt-2 h-1.5 rounded-full bg-white/10">
                                <div class="h-1.5 rounded-full bg-neon" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <p class="text-sm text-white/60 uppercase tracking-[0.4em]">Servicii</p>
                            <ul class="mt-3 space-y-2 text-sm">
                                <li class="flex items-center justify-between">
                                    Plan de postări <span class="text-white/50">›</span>
                                </li>
                                <li class="flex items-center justify-between">
                                    Poze și Video <span class="text-white/50">›</span>
                                </li>
                                <li class="flex items-center justify-between">
                                    Răspunsuri automate <span class="text-white/50">›</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

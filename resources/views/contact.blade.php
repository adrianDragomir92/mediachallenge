@extends('layouts.app')

@section('title', 'Contact Media Challenge Târgoviște | Social Media & Web Dâmbovița')
@section('meta_description', 'Contactează Media Challenge din Târgoviște, județul Dâmbovița, pentru servicii de social media, site-uri și SEO. Răspundem rapid cu o propunere personalizată.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute -top-40 left-0 h-[500px] w-[500px] rounded-full bg-[#5a3aa0] blur-[180px] opacity-40"></div>
    <div class="absolute top-1/2 -right-40 h-[600px] w-[600px] rounded-full bg-[#243b6b] blur-[220px] opacity-30"></div>
@endsection

@section('content')
    <section class="max-w-7xl mx-auto px-6 pt-16 pb-24">
        <!-- Header -->
        <div class="text-center mx-auto mb-16" data-reveal>
            <p class="text-sm uppercase tracking-[0.5em] text-neon font-medium">Contact</p>
            <h1 class="text-5xl lg:text-7xl font-semibold mt-4 leading-tight">Să dăm viață ideilor tale.</h1>
            <p class="text-white/60 mt-8 text-xl leading-relaxed max-w-3xl mx-auto">
                Fie că vrei un audit SEO, o strategie social media sau un nou site, suntem aici să te ajutăm. Răspundem în maximum 24h.
            </p>
        </div>

        <!-- Main Dashboard Card (Homepage Style) -->
        <div class="rounded-[40px] border border-white/10 bg-white/[0.03] backdrop-blur-3xl p-8 lg:p-12 shadow-glow relative group overflow-hidden" data-reveal data-reveal-delay="200">
            <!-- Background Glows -->
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-neon/10 rounded-full blur-[120px] pointer-events-none"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-blue-500/10 rounded-full blur-[120px] pointer-events-none"></div>
            
            <div class="grid lg:grid-cols-[1.2fr_0.8fr] gap-12 relative z-10">
                <!-- Left: Form -->
                <div>
                    <div class="flex items-center gap-3 mb-10">
                        <div class="h-8 w-8 rounded-lg bg-neon/10 border border-neon/20 flex items-center justify-center text-neon">
                            <x-icon-bolt class="w-4 h-4" />
                        </div>
                        <span class="text-[10px] uppercase tracking-widest text-white/50 font-medium whitespace-nowrap">Solicitare Nouă Proiect</span>
                        <div class="h-[1px] w-full bg-white/5 ml-4"></div>
                    </div>

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-8">
                        @csrf
                        
                        {{-- Honeypot field --}}
                        <div class="hidden">
                             <label for="website_url">Website</label>
                             <input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
                        </div>

                        @if (session('status'))
                            <div class="rounded-2xl border border-emerald-400/30 bg-emerald-400/5 px-6 py-4 text-emerald-200 flex items-center gap-3 mb-8">
                                <span class="text-lg">✓</span>
                                <span class="text-sm font-medium">{{ session('status') }}</span>
                            </div>
                        @endif

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="nume" class="text-[10px] uppercase tracking-widest text-white/30 ml-1">Nume și prenume</label>
                                <input id="nume" name="nume" type="text" value="{{ old('nume') }}" placeholder="Nume complet" 
                                    class="w-full rounded-2xl bg-white/5 border border-white/10 px-6 py-4 text-white placeholder:text-white/10 focus:border-neon focus:bg-white/[0.08] transition-all outline-none" required />
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="text-[10px] uppercase tracking-widest text-white/30 ml-1">Email Business</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="email@asistent.ro" 
                                    class="w-full rounded-2xl bg-white/5 border border-white/10 px-6 py-4 text-white placeholder:text-white/10 focus:border-neon focus:bg-white/[0.08] transition-all outline-none" required />
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="telefon" class="text-[10px] uppercase tracking-widest text-white/30 ml-1">Telefon</label>
                                <input id="telefon" name="telefon" type="tel" value="{{ old('telefon') }}" placeholder="07xx xxx xxx" maxlength="12"
                                    class="w-full rounded-2xl bg-white/5 border border-white/10 px-6 py-4 text-white placeholder:text-white/10 focus:border-neon focus:bg-white/[0.08] transition-all outline-none" />
                            </div>
                            <div class="space-y-2">
                                <label for="servicii" class="text-[10px] uppercase tracking-widest text-white/30 ml-1">Serviciu</label>
                                <div class="relative">
                                    <select id="servicii" name="servicii" class="w-full appearance-none rounded-2xl bg-white/5 border border-white/10 px-6 py-4 text-white focus:border-neon focus:bg-white/[0.08] transition-all outline-none cursor-pointer">
                                        <option value="" class="bg-midnight">Alege Serviciul</option>
                                        <option value="Social Media" @selected(old('servicii') === 'Social Media') class="bg-midnight">Management Social Media</option>
                                        <option value="Creare site-uri" @selected(old('servicii') === 'Creare site-uri') class="bg-midnight">Dezvoltare Web</option>
                                        <option value="SEO" @selected(old('servicii') === 'SEO') class="bg-midnight">Optimizare SEO</option>
                                        <option value="Pachet complet" @selected(old('servicii') === 'Pachet complet') class="bg-midnight">Pachet Complet 360°</option>
                                    </select>
                                    <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-white/20">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="mesaj" class="text-[10px] uppercase tracking-widest text-white/30 ml-1">Detaliere Proiect</label>
                            <textarea id="mesaj" name="mesaj" rows="4" placeholder="Cum vă putem ajuta?"
                                class="w-full rounded-2xl bg-white/5 border border-white/10 px-6 py-4 text-white placeholder:text-white/10 focus:border-neon focus:bg-white/[0.08] transition-all outline-none resize-none" required>{{ old('mesaj') }}</textarea>
                        </div>

                        <button type="submit" class="w-full py-5 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow glow-pulse hover-cta group flex items-center justify-center gap-3">
                            <span>Trimite cererea</span>
                            <x-icon-arrow-down class="w-5 h-5 -rotate-90 group-hover:translate-x-1 transition-transform" />
                        </button>
                    </form>

                    <!-- Trust Indicators & Privacy -->
                    <div class="mt-10 pt-10 border-t border-white/5 space-y-6">
                        <div class="flex flex-wrap gap-x-8 gap-y-4 text-[10px] uppercase tracking-widest text-white/40">
                            <span class="flex items-center gap-2 italic">
                                <span class="w-1.5 h-1.5 rounded-full bg-neon shadow-neon-sm"></span>
                                Răspuns sub 24h
                            </span>
                            <span class="flex items-center gap-2 italic">
                                <span class="w-1.5 h-1.5 rounded-full bg-neon shadow-neon-sm"></span>
                                Propunere personalizată
                            </span>
                            <span class="flex items-center gap-2 italic">
                                <span class="w-1.5 h-1.5 rounded-full bg-neon shadow-neon-sm"></span>
                                Fără obligații
                            </span>
                        </div>
                        <p class="text-[9px] uppercase tracking-[0.4em] text-white/20">Criptare end-to-end activă • Date protejate conform GDPR</p>
                    </div>
                </div>

                <!-- Right: Info Panel -->
                <div class="space-y-6">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-8 h-full flex flex-col justify-between space-y-10">
                        <div>
                            <p class="text-[10px] uppercase tracking-[0.4em] text-white/30 mb-10">Informații Contact</p>
                            <div class="space-y-6">
                                <div class="group/item flex items-center gap-6">
                                    <div class="h-10 w-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover/item:border-neon/50 transition duration-500 shrink-0">
                                        <x-icon-phone class="w-4 h-4 text-neon" />
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-white/40 mb-0.5">Telefon Direct</p>
                                        <a href="tel:0736854081" class="text-lg font-medium hover:text-white transition">0736 854 081</a>
                                    </div>
                                </div>

                                <div class="group/item flex items-center gap-6">
                                    <div class="h-10 w-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover/item:border-neon/50 transition duration-500 shrink-0">
                                        <x-icon-mail class="w-4 h-4 text-neon" />
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-[10px] uppercase tracking-widest text-white/40 mb-0.5">E-mail</p>
                                        <a href="mailto:contact@mediachallenge.ro" class="text-sm font-medium hover:text-white transition break-all">contact@mediachallenge.ro</a>
                                    </div>
                                </div>

                                <div class="group/item flex items-center gap-6 border-t border-white/5 pt-6">
                                    <div class="h-10 w-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover/item:border-neon/50 transition duration-500 shrink-0">
                                        <x-icon-map class="w-4 h-4 text-neon" />
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-white/40 mb-0.5">Sediu Central</p>
                                        <p class="text-sm font-medium text-white/80 leading-relaxed">
                                            Str. Nicolae Radian nr. 2,<br> bl. O2, ap. 10, Târgoviște
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-8 border-t border-white/10">
                            <p class="text-[10px] uppercase tracking-widest text-white/30 mb-4">Urmărește-ne</p>
                            <div class="flex gap-4">
                                <a href="https://facebook.com/mediachallenge" class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center hover:bg-neon hover:text-black transition duration-300">
                                    <x-icon-facebook class="w-5 h-5" />
                                </a>
                                <a href="https://instagram.com/mediachallenge" class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center hover:bg-neon hover:text-black transition duration-300">
                                    <x-icon-instagram class="w-5 h-5" />
                                </a>
                                <a href="https://tiktok.com/@mediachallenge" class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center hover:bg-neon hover:text-black transition duration-300">
                                    <x-icon-tiktok class="w-5 h-5" />
                                </a>
                            </div>
                        </div>

                        <!-- Mini Map Wrap -->
                        <div class="mt-6 rounded-2xl overflow-hidden border border-white/10 aspect-[4/2] relative group/map">
                            <iframe
                                class="w-full h-full grayscale opacity-60 group-hover/map:grayscale-0 group-hover/map:opacity-100 transition duration-700"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.298458737229!2d25.46142717666244!3d44.91724217107718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40ad2792da0c6563%3A0xc6659616ae905436!2sStrada%20Profesor%20Nicolae%20Radian%202%2C%20T%C3%A2rgovi%C8%99te%20130069!5e0!3m2!1sen!2sro!4v1711632280000!5m2!1sen!2sro"
                                style="border:0" allowfullscreen="" loading="lazy"
                            ></iframe>
                            <div class="absolute inset-0 bg-midnight/20 pointer-events-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Metadata (Homepage Style) -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8" data-reveal data-reveal-delay="400">
            <div class="text-center md:text-left space-y-2">
                <p class="text-3xl font-bold text-neon">24h</p>
                <p class="text-[10px] uppercase tracking-widest text-white/40 font-medium">Timp de Răspuns</p>
            </div>
            <div class="text-center md:text-left space-y-2">
                <p class="text-3xl font-bold text-neon">100%</p>
                <p class="text-[10px] uppercase tracking-widest text-white/40 font-medium">Propuneri Personalizate</p>
            </div>
            <div class="text-center md:text-left space-y-2">
                <p class="text-3xl font-bold text-neon">RO</p>
                <p class="text-[10px] uppercase tracking-widest text-white/40 font-medium">Acoperire Națională</p>
            </div>
            <div class="text-center md:text-left space-y-2">
                <p class="text-3xl font-bold text-neon">Live</p>
                <p class="text-[10px] uppercase tracking-widest text-white/40 font-medium">Consultant Dedicat</p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const phoneInput = document.getElementById('telefon');
        
        phoneInput.addEventListener('input', function(e) {
            let x = e.target.value.replace(/\D/g, '').match(/(\d{0,4})(\d{0,3})(\d{0,3})/);
            
            if (!x || !x[1]) {
                e.target.value = '';
                return;
            }
            
            e.target.value = x[1] + (x[2] ? ' ' + x[2] : '') + (x[3] ? ' ' + x[3] : '');
        });
    });
</script>
@endpush

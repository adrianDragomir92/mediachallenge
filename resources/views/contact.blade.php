@extends('layouts.app')

@section('title', 'Contact Media Challenge Târgoviște | Social Media & Web Dâmbovița')
@section('meta_description', 'Contactează Media Challenge din Târgoviște, județul Dâmbovița, pentru servicii de social media, site-uri și SEO. Răspundem rapid cu o propunere personalizată.')

@section('background')
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f1d] via-midnight to-midnight"></div>
    <div class="absolute top-0 left-0 h-96 w-96 rounded-full bg-[#5a3aa0] blur-[200px] opacity-70"></div>
    <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-[#243b6b] blur-[200px] opacity-60"></div>
@endsection

@section('content')
    <section class="max-w-4xl mx-auto px-6 pt-12 pb-8 text-center">
        <p class="text-sm uppercase tracking-[0.4em] text-white/60">Contact</p>
        <h1 class="text-4xl lg:text-5xl font-semibold mt-4">Hai să discutăm despre proiectul tău.</h1>
        <p class="text-white/70 mt-4">
            Completează formularul sau trimite-ne un email. Revenim în maximum 24h cu pașii următori și o propunere clară.
        </p>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-16 grid gap-10 lg:grid-cols-2">
        <form action="{{ route('contact.send') }}" method="POST" class="rounded-[32px] border border-white/10 bg-white/5 p-8 shadow-glow space-y-6">
            @csrf
            
            {{-- Honeypot field --}}
            <div class="hidden">
                 <label for="website_url">Website</label>
                 <input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
            </div>
            @if (session('status'))
                <div class="rounded-2xl border border-emerald-400/40 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-200">
                    {{ session('status') }}
                </div>
            @endif
            <div>
                <label for="nume" class="text-sm text-white/60">Nume și prenume</label>
                <input id="nume" name="nume" type="text" value="{{ old('nume') }}" placeholder="Numele tău complet" 
                    class="mt-2 w-full rounded-2xl bg-midnight/60 border border-white/10 px-4 py-3 text-white focus:border-neon focus:outline-none @error('nume') border-rose-500 @enderror" 
                    @error('nume') aria-invalid="true" aria-describedby="nume-error" @enderror
                    required />
                @error('nume')
                    <p id="nume-error" class="text-xs text-rose-300 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="email" class="text-sm text-white/60">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="email@brand.ro" 
                        class="mt-2 w-full rounded-2xl bg-midnight/60 border border-white/10 px-4 py-3 text-white focus:border-neon focus:outline-none @error('email') border-rose-500 @enderror" 
                        @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                        required />
                    @error('email')
                        <p id="email-error" class="text-xs text-rose-300 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="telefon" class="text-sm text-white/60">Telefon</label>
                    <input id="telefon" name="telefon" type="tel" value="{{ old('telefon') }}" placeholder="07xx xxx xxx" class="mt-2 w-full rounded-2xl bg-midnight/60 border border-white/10 px-4 py-3 text-white focus:border-neon focus:outline-none" />
                </div>
            </div>
            <div>
                <label for="servicii" class="text-sm text-white/60">Servicii dorite</label>
                <select id="servicii" name="servicii" class="mt-2 w-full rounded-2xl bg-midnight/60 border border-white/10 px-4 py-3 text-white focus:border-neon focus:outline-none">
                    <option value="">Selectează</option>
                    <option @selected(old('servicii') === 'Social Media')>Social Media</option>
                    <option @selected(old('servicii') === 'Creare site-uri')>Creare site-uri</option>
                    <option @selected(old('servicii') === 'SEO')>SEO</option>
                    <option @selected(old('servicii') === 'Pachet complet')>Pachet complet</option>
                </select>
            </div>
            <div>
                <label for="mesaj" class="text-sm text-white/60">Mesaj</label>
                <textarea id="mesaj" name="mesaj" rows="4" placeholder="Spune-ne câteva detalii despre afacerea ta."
                    class="mt-2 w-full rounded-2xl bg-midnight/60 border border-white/10 px-4 py-3 text-white focus:border-neon focus:outline-none @error('mesaj') border-rose-500 @enderror" 
                    @error('mesaj') aria-invalid="true" aria-describedby="mesaj-error" @enderror
                    required>{{ old('mesaj') }}</textarea>
                @error('mesaj')
                    <p id="mesaj-error" class="text-xs text-rose-300 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full px-6 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">
                Trimite mesaj
            </button>
            <div class="pt-6 border-t border-white/10 space-y-4">
                <p class="text-xs uppercase tracking-[0.2em] text-white/50">Ce se întâmplă după ce trimiți mesajul?</p>
                <div class="grid gap-3 text-sm">
                    <div class="flex items-center gap-3 text-white/70">
                        <span class="flex-shrink-0 h-1.5 w-1.5 rounded-full bg-neon"></span>
                        Analizăm mesajul tău imediat
                    </div>
                    <div class="flex items-center gap-3 text-white/70">
                        <span class="flex-shrink-0 h-1.5 w-1.5 rounded-full bg-neon"></span>
                        Revenim cu o propunere în max. 24h
                    </div>
                    <div class="flex items-center gap-3 text-white/70">
                        <span class="flex-shrink-0 h-1.5 w-1.5 rounded-full bg-neon"></span>
                        Stabilim o primă discuție (fizic/online)
                    </div>
                </div>
            </div>
            <p class="text-sm text-white/50 pt-4">Preferi email direct? <a href="mailto:contact@mediachallenge.ro" class="text-white hover:text-neon">contact@mediachallenge.ro</a></p>
        </form>
        <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 space-y-6">
            <div>
                <p class="text-sm text-white/60 uppercase tracking-[0.4em]">Birou</p>
                <h2 class="text-2xl font-semibold mt-3">Târgoviște</h2>
                
                <div class="mt-6 flex items-start gap-4">
                    <div class="h-10 w-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <x-icon-map class="w-5 h-5 text-neon" />
                    </div>
                    <div>
                        <p class="text-white font-medium">Adresă Sediu</p>
                        <p class="text-white/70 text-sm mt-1 leading-relaxed">Strada Profesor Nicolae Radian nr. 2, bl. O2, ap. 10.</p>
                    </div>
                </div>

                <div class="mt-6 flex items-start gap-4">
                    <div class="h-10 w-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <x-icon-bolt class="w-5 h-5 text-neon" />
                    </div>
                    <div>
                        <p class="text-white font-medium">Programări</p>
                        <p class="text-white/70 text-sm mt-1 leading-relaxed text-balance">Programăm întâlniri fizice sau online în funcție de proiect.</p>
                    </div>
                </div>

                <a href="https://maps.app.goo.gl/U5kgySxWoA7d21Ns9" target="_blank" rel="noopener" class="mt-8 inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-white/10 text-white text-sm hover:bg-white/5 transition-colors">
                    <x-icon-map class="w-4 h-4 text-neon" />
                    Vezi pe Google Maps
                </a>
            </div>
            <div class="rounded-2xl overflow-hidden border border-white/10 aspect-[4/3]">
                <iframe
                    class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.298458737229!2d25.46142717666244!3d44.91724217107718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40ad2792da0c6563%3A0xc6659616ae905436!2sStrada%20Profesor%20Nicolae%20Radian%202%2C%20T%C3%A2rgovi%C8%99te%20130069!5e0!3m2!1sen!2sro!4v1711632280000!5m2!1sen!2sro"
                    style="border:0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>

            </div>
            <div class="space-y-6 pt-6 border-t border-white/5">
                <div class="flex items-start gap-4">
                    <div class="h-10 w-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <x-icon-phone class="w-5 h-5 text-neon" />
                    </div>
                    <div>
                        <p class="text-white font-medium">Telefon</p>
                        <a href="tel:0736854081" class="text-white/70 text-sm mt-1 hover:text-neon transition-colors block">0736 854 081</a>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="h-10 w-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <x-icon-mail class="w-4 h-4 text-neon" />
                    </div>
                    <div>
                        <p class="text-white font-medium">Email</p>
                        <a href="mailto:contact@mediachallenge.ro" class="text-white/70 text-sm mt-1 hover:text-neon transition-colors block">contact@mediachallenge.ro</a>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="h-10 w-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <x-icon-clock class="w-5 h-5 text-neon" />
                    </div>
                    <div>
                        <p class="text-white font-medium">Program de Lucru</p>
                        <p class="text-white/70 text-sm mt-1">Luni - Vineri, 09:00 - 18:00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

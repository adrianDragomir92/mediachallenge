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
            @if (session('status'))
                <div class="rounded-2xl border border-emerald-400/40 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-200">
                    {{ session('status') }}
                </div>
            @endif
            <div>
                <label for="nume" class="text-sm text-white/60">Nume și prenume</label>
                <input id="nume" name="nume" type="text" value="{{ old('nume') }}" placeholder="Ana Marinescu" class="mt-2 w-full rounded-2xl bg-midnight/60 border border-white/10 px-4 py-3 text-white focus:border-neon focus:outline-none" required />
                @error('nume')
                    <p class="text-xs text-rose-300 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="email" class="text-sm text-white/60">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="email@brand.ro" class="mt-2 w-full rounded-2xl bg-midnight/60 border border-white/10 px-4 py-3 text-white focus:border-neon focus:outline-none" required />
                    @error('email')
                        <p class="text-xs text-rose-300 mt-2">{{ $message }}</p>
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
                    class="mt-2 w-full rounded-2xl bg-midnight/60 border border-white/10 px-4 py-3 text-white focus:border-neon focus:outline-none" required>{{ old('mesaj') }}</textarea>
                @error('mesaj')
                    <p class="text-xs text-rose-300 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full px-6 py-4 rounded-2xl bg-neon text-black font-semibold text-lg shadow-glow hover-cta">
                Trimite mesaj
            </button>
            <p class="text-sm text-white/50">Preferi email direct? <a href="mailto:hello@mediaalliance.com" class="text-white">hello@mediaalliance.com</a></p>
        </form>
        <div class="rounded-[32px] border border-white/10 bg-white/5 p-8 space-y-6">
            <div>
                <p class="text-sm text-white/60">Birou</p>
                <h2 class="text-2xl font-semibold">Târgoviște</h2>
                <p class="text-white/70 mt-2">Strada Profesor Nicolae Radian nr. 2, bl. O2, ap. 10. Programăm întâlniri fizice sau online în funcție de proiect.</p>
            </div>
            <div class="rounded-2xl overflow-hidden border border-white/10 aspect-[4/3]">
                <iframe
                    class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2845.3143614075654!2d26.098664315535946!3d44.43551397910257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff3c2fb878b7%3A0x4c9f64e4da8932b4!2sBucharest!5e0!3m2!1sen!2sro!4v1712000000000"
                    style="border:0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
            <div class="space-y-3 text-white/70">
                <p><span class="text-white">Telefon:</span> +40 723 000 111</p>
                <p><span class="text-white">Email:</span> hello@mediaalliance.com</p>
                <p><span class="text-white">Program:</span> Luni - Vineri, 09:00 - 18:00</p>
            </div>
        </div>
    </section>
@endsection

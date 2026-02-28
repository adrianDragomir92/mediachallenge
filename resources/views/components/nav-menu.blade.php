<nav class="hidden md:flex items-center gap-8 text-sm text-white/70">
    <a href="{{ url('/') }}" class="hover:text-white transition">Acasă</a>
    <div class="relative nav-dropdown">
        <button type="button" class="inline-flex items-center gap-1 hover:text-white transition focus:outline-none">
            Servicii
            <x-icon-arrow-down class="w-4 h-4" aria-hidden="true" />
        </button>
        <div class="nav-dropdown-panel absolute left-0 top-full pt-4 w-56 rounded-2xl border border-white/10 bg-midnight/95 backdrop-blur-xl p-4 flex-col gap-2 text-sm">
            <a href="{{ route('services.social') }}" class="px-3 py-2 rounded-xl hover:bg-white/10 text-white">Social Media</a>
            <a href="{{ route('services.sites') }}" class="px-3 py-2 rounded-xl hover:bg-white/10 text-white">Creare site-uri</a>
            <a href="{{ route('services.seo') }}" class="px-3 py-2 rounded-xl hover:bg-white/10 text-white">SEO</a>
        </div>
    </div>
    <a href="{{ route('about') }}" class="hover:text-white transition">Despre noi</a>
    <a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a>
</nav>

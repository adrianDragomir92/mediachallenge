<footer class="relative z-10 border-t border-white/10 bg-white/[0.02] backdrop-blur-sm overflow-hidden">
    <div class="absolute -top-24 left-1/4 h-64 w-64 rounded-full bg-[#3340a1] blur-[120px] opacity-20 pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-12 h-64 w-64 rounded-full bg-[#512c84] blur-[120px] opacity-10 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="flex flex-col md:flex-row justify-between gap-12 text-sm text-white/70">
            <div class="max-w-xs">
                <p class="text-white font-semibold text-lg">Media Challenge</p>
                <p class="mt-2 text-white/50 italic">Construim prezență digitală care aduce rezultate, nu doar trafic.</p>
            </div>
            <div class="flex gap-12 flex-wrap md:flex-nowrap">
                <ul class="space-y-3 min-w-[120px]">
                    <li class="text-white font-semibold uppercase tracking-wider text-xs">Servicii</li>
                    <li><a href="{{ route('services.social') }}" class="hover:text-neon transition">Social Media</a></li>
                    <li><a href="{{ route('services.sites') }}" class="hover:text-neon transition">Creare site-uri</a></li>
                    <li><a href="{{ route('services.seo') }}" class="hover:text-neon transition">SEO</a></li>
                </ul>
                <ul class="space-y-3 min-w-[120px]">
                    <li class="text-white font-semibold uppercase tracking-wider text-xs">Navigație</li>
                    <li><a href="{{ route('about') }}" class="hover:text-neon transition">Despre noi</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-neon transition">Contact</a></li>
                </ul>
                <ul class="space-y-3 min-w-[120px]">
                    <li class="text-white font-semibold uppercase tracking-wider text-xs">Politici</li>
                    <li><a href="{{ route('legal.terms') }}" class="hover:text-neon transition">Termeni și condiții</a></li>
                    <li><a href="{{ route('legal.privacy') }}" class="hover:text-neon transition">Confidențialitate</a></li>
                    <li><a href="{{ route('legal.cookies') }}" class="hover:text-neon transition">Politica Cookie</a></li>
                </ul>
                <div class="space-y-4">
                    <p class="text-white font-semibold uppercase tracking-wider text-xs">Contact</p>
                    <div class="space-y-2">
                        <a href="mailto:contact@mediachallenge.ro" class="flex items-center gap-2 hover:text-neon transition">
                            <x-icon-mail class="w-4 h-4 opacity-50" />
                            <span>contact@mediachallenge.ro</span>
                        </a>
                        <a href="tel:0731000000" class="flex items-center gap-2 hover:text-neon transition"> {{-- Placeholder, user should update --}}
                            <span class="opacity-50">📞</span>
                            <span>0736 854 081</span>
                        </a>
                    </div>
                    <div class="flex gap-4 pt-2">
                        <a href="https://maps.app.goo.gl/U5kgySxWoA7d21Ns9" target="_blank" rel="noopener" class="h-10 w-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-neon/10 hover:text-neon transition-all" aria-label="Google Maps">
                            <x-icon-map class="w-5 h-5" />
                        </a>
                        <a href="https://www.facebook.com/mediachallenge.ro" target="_blank" rel="noopener" class="h-10 w-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-neon/10 hover:text-neon transition-all" aria-label="Facebook">
                            <x-icon-facebook class="w-5 h-5" />
                        </a>
                        <a href="https://www.tiktok.com/@mediachallenge.ro" target="_blank" rel="noopener" class="h-10 w-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-neon/10 hover:text-neon transition-all" aria-label="TikTok">
                            <x-icon-tiktok class="w-5 h-5" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-white/50 text-[10px] uppercase tracking-[0.2em]">© {{ date('Y') }} MEDIA CHALLENGE SRL. Toate drepturile rezervate.</p>
            <div class="flex items-center gap-8 text-[11px] font-medium uppercase tracking-[0.1em] text-white/60">
                <a href="https://anpc.ro/" target="_blank" rel="noopener" class="hover:text-neon transition-colors">ANPC</a>
                <a href="https://anpc.ro/ce-este-sal/" target="_blank" rel="noopener" class="hover:text-neon transition-colors">SAL</a>
                <a href="https://consumer-redress.ec.europa.eu/index_ro" target="_blank" rel="noopener" class="hover:text-neon transition-colors">SOL</a>
            </div>
        </div>
    </div>

</footer>

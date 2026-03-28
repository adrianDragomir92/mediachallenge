<footer class="relative z-10 border-t border-white/5">
    <div class="max-w-6xl mx-auto px-6 py-12 flex flex-col md:flex-row justify-between gap-8 text-sm text-white/70">
        <div>
            <p class="text-white font-semibold text-lg">Media Challenge</p>
            <p class="mt-2 text-white/50">Marketing pe rețele sociale și site-uri construite în România.</p>
        </div>
        <div class="flex gap-10 flex-wrap">
            <ul class="space-y-2">
                <li class="text-white font-semibold">Servicii</li>
                <li><a href="{{ route('services.social') }}" class="hover:text-white">Social Media</a></li>
                <li><a href="{{ route('services.sites') }}" class="hover:text-white">Creare site-uri</a></li>
                <li><a href="{{ route('services.seo') }}" class="hover:text-white">SEO</a></li>
            </ul>
            <ul class="space-y-2">
                <li class="text-white font-semibold">Navigație</li>
                <li><a href="{{ route('about') }}" class="hover:text-white">Despre noi</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
            </ul>
            <ul class="space-y-2">
                <li class="text-white font-semibold">Legal</li>
                <li><a href="{{ route('legal.terms') }}" class="hover:text-white">Termeni și condiții</a></li>
                <li><a href="{{ route('legal.privacy') }}" class="hover:text-white">Politica de confidențialitate</a></li>
                <li><a href="{{ route('legal.cookies') }}" class="hover:text-white">Politica de cookie</a></li>
            </ul>
            <ul class="space-y-2">
                <li class="text-white font-semibold">Contact</li>
                <li class="flex items-center gap-2">
                    <x-icon-mail class="w-4 h-4 text-white/50" />
                    <a href="mailto:contact@mediachallenge.ro" class="hover:text-white">contact@mediachallenge.ro</a>
                </li>
                <li><a href="tel:0736854081" class="hover:text-white">0736 854 081</a></li>
                <li class="flex gap-4 text-white/60 pt-2">
                    <a href="https://maps.app.goo.gl/U5kgySxWoA7d21Ns9" target="_blank" rel="noopener" class="hover:text-white" aria-label="Vezi locația Media Challenge pe Google Maps">
                        <x-icon-map class="w-5 h-5" />
                    </a>
                    <a href="https://www.facebook.com/mediachallenge.ro" target="_blank" rel="noopener" class="hover:text-white" aria-label="Urmărește Media Challenge pe Facebook">
                        <x-icon-facebook class="w-5 h-5" />
                    </a>
                    <a href="https://www.tiktok.com/@mediachallenge.ro" target="_blank" rel="noopener" class="hover:text-white" aria-label="Urmărește Media Challenge pe TikTok">
                        <x-icon-tiktok class="w-5 h-5" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>

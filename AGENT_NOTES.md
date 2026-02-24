# Media Challenge – Agent Notes

Acest proiect este un landing / site de prezentare pentru agenția **Media Challenge**, construit pe Laravel cu layout + componente partajate.
Scopul principal este să comunice serviciile de social media + dezvoltare web oferite de Mădălina Olteanu (marketing) și Adrian Dragomir (IT).

## Structură și componente
- **Layout unic**: `resources/views/layouts/app.blade.php` conține head-ul, header-ul (badge „MA” + `<x-nav-menu />` + buton „Cere ofertă”) și include `partials.footer`. Toate paginile extind acest layout și își declară doar background-ul + conținutul specific.
- **Navigație**: `resources/views/components/nav-menu.blade.php` include linkurile „Acasă”, dropdown „Servicii” (Social Media / Creare site-uri / SEO), „Despre noi” și „Contact”. Dropdown-ul funcționează la hover folosind CSS (`nav-dropdown` + `.nav-dropdown-panel`), deci nu e nevoie de JS suplimentar.
- **Footer**: `resources/views/partials/footer.blade.php` listează servicii, navigație (Despre noi, Contact) și date de contact.
- **Pagini existente**:
  - `welcome.blade.php` – homepage-ul cu toate secțiunile (hero, servicii, diferențiatori, site-uri web, portofoliu, proces, testimoniale, CTA, concept mobil).
  - `services/social-media.blade.php`, `services/creare-site-uri.blade.php`, `services/seo.blade.php` – pagini dedicate pentru fiecare serviciu.
  - `about.blade.php` – descrie echipa (Mădălina Olteanu + Adrian Dragomir).
  - `contact.blade.php` – formular cu câmpuri standard + embed hartă Google.
- **Stiluri și animații**: folosește Tailwind v4 + CSS custom în `resources/css/app.css` (animații `data-reveal`, hover lift, nav dropdown). Scriptul `resources/js/app.js` doar pornește animațiile intersection observer.

## Filosofie vizuală
- Background întunecat, accente neon violet, glow subtil.
- Mesaje simple, fără jargon corporatist. Site-ul trebuie să transmită că agenția este social-first și rezolvă atât contentul, cât și partea tehnică.
- Pentru branding, folosim monograma „MA” (dar numele agenției este **Media Challenge**).

## Cum rulezi / continui munca
1. Instalează dependențele: `composer install`, `npm install` (dacă nu sunt deja). 
2. Rulează local: `npm run dev` pentru Vite + `php artisan serve` pentru backend.
3. Păstrează layout-ul și componentele partajate; dacă adaugi pagini noi, folosește `@extends('layouts.app')` și definește secțiunile `@section('background')` / `@section('content')`.
4. Dacă modifici meniu/footer, fă-o în componentele existente pentru a evita duplicarea.
5. Pentru secțiuni noi, continuă stilurile existente (glassmorphism, accente neon, animații `data-reveal`).

## Următorii pași posibili
- Integrare reală pentru formularul de contact (route POST + validări + trimitere email).
- Adăugarea de studii de caz dinamice (de ex. dintr-un model `CaseStudy`).
- Înlocuirea testimonialelor/rezultatelor cu date reale.

Folosește acest fișier ca referință pentru a menține direcția vizuală și structurală a site-ului Media Challenge.

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CapitalFarm — Hitung Modal & Untung Usaha Tani</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>(function(){var t=localStorage.getItem('cf-theme');if(t==='dark'||(!t&&window.matchMedia('(prefers-color-scheme:dark)').matches))document.documentElement.classList.add('dark')})()</script>
</head>
<body class="bg-stone-50 text-stone-800 dark:bg-stone-950 dark:text-stone-200 font-sans antialiased">

{{-- NAVBAR --}}
<header id="navbar" class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-transparent">
    <div class="container flex items-center justify-between h-16 lg:h-20">
        <a href="#" class="text-xl font-bold tracking-tight text-forest-700 dark:text-forest-400">CapitalFarm</a>
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-stone-600 dark:text-stone-400">
            <a href="#tentang" class="hover:text-forest-600 dark:hover:text-forest-400 transition-colors">Tentang</a>
            <a href="#sektor" class="hover:text-forest-600 dark:hover:text-forest-400 transition-colors">Sektor</a>
            <a href="#cara-kerja" class="hover:text-forest-600 dark:hover:text-forest-400 transition-colors">Cara Kerja</a>
            <a href="#faq" class="hover:text-forest-600 dark:hover:text-forest-400 transition-colors">FAQ</a>
        </nav>
        <div class="flex items-center gap-3">
            <button id="theme-toggle" class="w-9 h-9 flex items-center justify-center rounded-lg text-stone-500 hover:text-stone-700 dark:text-stone-400 dark:hover:text-stone-200 hover:bg-stone-200/50 dark:hover:bg-stone-800/50 transition-colors" aria-label="Toggle theme">
                <svg class="hidden dark:block w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591 1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/></svg>
                <svg class="block dark:hidden w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/></svg>
            </button>
            <a href="#" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-forest-600 hover:bg-forest-700 text-white text-sm font-semibold rounded-xl transition-colors shadow-sm shadow-forest-600/20">
                Mulai Hitung
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</header>

{{-- HERO --}}
<section class="relative min-h-screen flex items-center overflow-hidden pt-16">
    <div class="absolute inset-0 bg-gradient-to-br from-forest-50 via-white to-stone-100 dark:from-forest-950 dark:via-stone-950 dark:to-stone-950"></div>
    <div class="absolute top-1/4 -left-32 w-96 h-96 bg-forest-200/30 dark:bg-forest-800/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 -right-32 w-80 h-80 bg-amber-200/20 dark:bg-amber-800/10 rounded-full blur-3xl"></div>
    <div class="container relative z-10 py-20 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-forest-100 dark:bg-forest-900/50 text-forest-700 dark:text-forest-300 text-xs font-semibold rounded-full">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    Kalkulator Modal Agribisnis
                </span>
                <h1 class="mt-6 text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight text-stone-900 dark:text-white">
                    Hitung Modal & Untung<br/>
                    <span class="text-forest-600 dark:text-forest-400">Usaha Tani</span>,<br/>
                    Sebelum Kamu Mulai
                </h1>
                <p class="mt-6 text-base sm:text-lg text-stone-600 dark:text-stone-400 leading-relaxed max-w-lg">
                    CapitalFarm membantu petani dan peternak menghitung estimasi modal, biaya operasional, 
                    dan potensi keuntungan untuk usaha perikanan, perkebunan, dan peternakan — gratis, 
                    tanpa perlu paham akuntansi.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-forest-600 hover:bg-forest-700 text-white font-semibold rounded-xl transition-colors shadow-lg shadow-forest-600/25">
                        Mulai Hitung Sekarang
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="#tentang" class="inline-flex items-center gap-2 px-6 py-3 border border-stone-300 dark:border-stone-700 text-stone-700 dark:text-stone-300 font-semibold rounded-xl hover:bg-stone-100 dark:hover:bg-stone-800 transition-colors">
                        Pelajari Dulu
                    </a>
                </div>
                <div class="mt-10 flex items-center gap-8 text-sm">
                    <div><span class="text-2xl font-bold text-stone-900 dark:text-white">3</span><span class="block text-stone-500 dark:text-stone-400">Sektor Usaha</span></div>
                    <div class="w-px h-10 bg-stone-200 dark:bg-stone-700"></div>
                    <div><span class="text-2xl font-bold text-stone-900 dark:text-white">100%</span><span class="block text-stone-500 dark:text-stone-400">Gratis</span></div>
                    <div class="w-px h-10 bg-stone-200 dark:bg-stone-700"></div>
                    <div><span class="text-2xl font-bold text-stone-900 dark:text-white">+500</span><span class="block text-stone-500 dark:text-stone-400">Pengguna</span></div>
                </div>
            </div>
            <div class="relative flex items-center justify-center">
                <div class="relative w-full max-w-lg aspect-square">
                    <div class="absolute inset-0 bg-gradient-to-br from-forest-400/20 to-forest-600/20 dark:from-forest-500/10 dark:to-forest-800/10 rounded-full blur-2xl"></div>
                    <div class="relative w-full h-full flex items-center justify-center">
                        <svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                            <circle cx="200" cy="200" r="180" stroke="currentColor" stroke-width="0.5" class="text-forest-200 dark:text-forest-800" stroke-dasharray="4 4"/>
                            <circle cx="200" cy="200" r="140" stroke="currentColor" stroke-width="0.5" class="text-forest-200 dark:text-forest-800" stroke-dasharray="4 4"/>
                            <circle cx="200" cy="200" r="100" stroke="currentColor" stroke-width="0.5" class="text-forest-200 dark:text-forest-800" stroke-dasharray="4 4"/>
                            {{-- Fish (Perikanan) --}}
                            <g transform="translate(200,85)">
                                <ellipse cx="0" cy="0" rx="28" ry="12" class="fill-blue-500 dark:fill-blue-400" opacity="0.9"/>
                                <polygon points="-28,-8 -42,0 -28,8" class="fill-blue-600 dark:fill-blue-500"/>
                                <circle cx="12" cy="-3" r="3" class="fill-white dark:fill-stone-900"/>
                                <circle cx="12" cy="-3" r="1.5" class="fill-stone-900 dark:fill-white"/>
                            </g>
                            {{-- Leaf (Perkebunan) --}}
                            <g transform="translate(315,200)">
                                <path d="M0 22 Q-14 0 0 -22 Q14 0 0 22Z" class="fill-forest-500 dark:fill-forest-400" opacity="0.9"/>
                                <line x1="0" y1="22" x2="0" y2="34" stroke="currentColor" stroke-width="2.5" class="text-forest-700 dark:text-forest-500"/>
                                <path d="M0 -2 Q10 -14 3 -20" stroke="currentColor" stroke-width="1" fill="none" class="text-white/50 dark:text-stone-900/50"/>
                                <path d="M0 4 Q-10 -6 -3 -14" stroke="currentColor" stroke-width="1" fill="none" class="text-white/50 dark:text-stone-900/50"/>
                            </g>
                            {{-- Cow face (Peternakan) --}}
                            <g transform="translate(200,315)">
                                <ellipse cx="0" cy="0" rx="26" ry="20" class="fill-amber-600 dark:fill-amber-500" opacity="0.9"/>
                                <ellipse cx="0" cy="0" rx="22" ry="16" class="fill-amber-100 dark:fill-amber-900"/>
                                <ellipse cx="-9" cy="-7" rx="5" ry="6" class="fill-amber-600 dark:fill-amber-500"/>
                                <ellipse cx="9" cy="-7" rx="5" ry="6" class="fill-amber-600 dark:fill-amber-500"/>
                                <circle cx="-9" cy="-7" r="2.5" class="fill-white dark:fill-stone-900"/><circle cx="9" cy="-7" r="2.5" class="fill-white dark:fill-stone-900"/>
                                <circle cx="-9" cy="-7" r="1.2" class="fill-stone-900 dark:fill-white"/><circle cx="9" cy="-7" r="1.2" class="fill-stone-900 dark:fill-white"/>
                                <ellipse cx="0" cy="3" rx="4.5" ry="2.5" class="fill-amber-600 dark:fill-amber-500"/>
                                <path d="M-12 -20 Q-9 -27 -4 -24" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none" class="text-amber-700 dark:text-amber-400"/>
                                <path d="M12 -20 Q9 -27 4 -24" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none" class="text-amber-700 dark:text-amber-400"/>
                            </g>
                            {{-- Calculator center --}}
                            <g transform="translate(200,200)">
                                <circle cx="0" cy="0" r="34" class="fill-white/90 dark:fill-stone-900/90 stroke-forest-300 dark:stroke-forest-700" stroke-width="1.5"/>
                                <path d="M-14 10 L-6 0 L2 8 L14 -8" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-forest-600 dark:text-forest-400"/>
                                <polygon points="14,-8 9,-12 10,-4" class="fill-forest-600 dark:fill-forest-400"/>
                            </g>
                            {{-- Small decorative circles --}}
                            <circle cx="120" cy="130" r="3.5" class="fill-forest-400 dark:fill-forest-600" opacity="0.5"/>
                            <circle cx="280" cy="140" r="2.5" class="fill-amber-400 dark:fill-amber-600" opacity="0.5"/>
                            <circle cx="115" cy="270" r="2.5" class="fill-forest-400 dark:fill-forest-600" opacity="0.5"/>
                            <circle cx="290" cy="260" r="3" class="fill-amber-400 dark:fill-amber-600" opacity="0.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- KENAPA CAPITALFARM --}}
<section id="tentang" class="py-20 lg:py-28">
    <div class="container">
        <div class="text-center max-w-2xl mx-auto">
            <span class="inline-block px-3 py-1 bg-forest-100 dark:bg-forest-900/50 text-forest-700 dark:text-forest-300 text-xs font-semibold rounded-full">Mengapa CapitalFarm?</span>
            <h2 class="mt-4 text-3xl sm:text-4xl font-bold tracking-tight text-stone-900 dark:text-white">Kenapa Harus Pakai CapitalFarm?</h2>
            <p class="mt-4 text-stone-600 dark:text-stone-400 leading-relaxed">Kami percaya setiap petani dan peternak berhak merencanakan usaha dengan data yang akurat — tanpa biaya mahal.</p>
        </div>
        <div class="mt-16 grid sm:grid-cols-3 gap-8">
            <div class="group p-8 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 hover:border-forest-200 dark:hover:border-forest-800 hover:shadow-lg hover:shadow-forest-500/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-forest-100 dark:bg-forest-900/50 flex items-center justify-center text-forest-600 dark:text-forest-400 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-stone-900 dark:text-white">Gratis Selamanya</h3>
                <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Tidak ada biaya tersembunyi. Semua fitur kalkulasi bisa kamu gunakan gratis, kapan saja, tanpa perlu daftar.</p>
            </div>
            <div class="group p-8 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 hover:border-forest-200 dark:hover:border-forest-800 hover:shadow-lg hover:shadow-forest-500/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-forest-100 dark:bg-forest-900/50 flex items-center justify-center text-forest-600 dark:text-forest-400 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/></svg>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-stone-900 dark:text-white">Akurat & Terpercaya</h3>
                <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Kalkulasi berdasarkan data harga pasar terkini dan standar biaya operasional yang berlaku di Indonesia.</p>
            </div>
            <div class="group p-8 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 hover:border-forest-200 dark:hover:border-forest-800 hover:shadow-lg hover:shadow-forest-500/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-forest-100 dark:bg-forest-900/50 flex items-center justify-center text-forest-600 dark:text-forest-400 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/></svg>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-stone-900 dark:text-white">Mudah Dipakai</h3>
                <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Cukup isi beberapa data sederhana, hasil kalkulasi langsung muncul. Dirancang khusus agar ramah untuk pengguna awam.</p>
            </div>
        </div>
    </div>
</section>

{{-- PILIH SEKTOR --}}
<section id="sektor" class="py-20 lg:py-28 bg-stone-100/50 dark:bg-stone-900/50">
    <div class="container">
        <div class="text-center max-w-2xl mx-auto">
            <span class="inline-block px-3 py-1 bg-forest-100 dark:bg-forest-900/50 text-forest-700 dark:text-forest-300 text-xs font-semibold rounded-full">Sektor Usaha</span>
            <h2 class="mt-4 text-3xl sm:text-4xl font-bold tracking-tight text-stone-900 dark:text-white">Pilih Sektor Usaha Kamu</h2>
            <p class="mt-4 text-stone-600 dark:text-stone-400 leading-relaxed">Kami menyediakan kalkulator khusus untuk tiga sektor agribisnis utama. Pilih sesuai usaha kamu.</p>
        </div>
        <div class="mt-16 grid sm:grid-cols-3 gap-8">
            {{-- Perikanan --}}
            <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 hover:border-forest-200 dark:hover:border-forest-800 transition-all duration-300 hover:shadow-xl hover:shadow-forest-500/10">
                <div class="p-8">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/50 dark:to-cyan-900/50 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 17.25v-.228a4.5 4.5 0 0 0-.12-1.03l-2.268-9.64a3.375 3.375 0 0 0-3.285-2.602H7.923a3.375 3.375 0 0 0-3.285 2.602l-2.268 9.64a4.5 4.5 0 0 0-.12 1.03v.228m19.5 0a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3m19.5 0a3 3 0 0 0-3-3H5.25a3 3 0 0 0-3 3m16.5 0h.008v.008h-.008v-.008Z"/></svg>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-stone-900 dark:text-white">Perikanan</h3>
                    <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Budidaya ikan lele? Hitung modal bibit, pakan, kolam, dan estimasi panen dengan mudah.</p>
                    <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-forest-600 dark:text-forest-400 hover:text-forest-700 dark:hover:text-forest-300 transition-colors group/link">
                        Hitung Sekarang
                        <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 dark:from-blue-600 dark:to-cyan-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            </div>
            {{-- Perkebunan --}}
            <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 hover:border-forest-200 dark:hover:border-forest-800 transition-all duration-300 hover:shadow-xl hover:shadow-forest-500/10">
                <div class="p-8">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-forest-100 to-emerald-100 dark:from-forest-900/50 dark:to-emerald-900/50 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-forest-600 dark:text-forest-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z"/></svg>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-stone-900 dark:text-white">Perkebunan</h3>
                    <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Hitung modal lahan, bibit, pupuk, perawatan, dan estimasi hasil panen untuk kebun kamu.</p>
                    <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-forest-600 dark:text-forest-400 hover:text-forest-700 dark:hover:text-forest-300 transition-colors group/link">
                        Hitung Sekarang
                        <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-forest-400 to-emerald-400 dark:from-forest-600 dark:to-emerald-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            </div>
            {{-- Peternakan --}}
            <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 hover:border-forest-200 dark:hover:border-forest-800 transition-all duration-300 hover:shadow-xl hover:shadow-forest-500/10">
                <div class="p-8">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-100 to-yellow-100 dark:from-amber-900/50 dark:to-yellow-900/50 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-stone-900 dark:text-white">Peternakan</h3>
                    <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Hitung modal ternak, pakan, kandang, dan estimasi keuntungan untuk usaha peternakan kamu.</p>
                    <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-forest-600 dark:text-forest-400 hover:text-forest-700 dark:hover:text-forest-300 transition-colors group/link">
                        Hitung Sekarang
                        <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-yellow-400 dark:from-amber-600 dark:to-yellow-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            </div>
        </div>
    </div>
</section>

{{-- CARA KERJA --}}
<section id="cara-kerja" class="py-20 lg:py-28">
    <div class="container">
        <div class="text-center max-w-2xl mx-auto">
            <span class="inline-block px-3 py-1 bg-forest-100 dark:bg-forest-900/50 text-forest-700 dark:text-forest-300 text-xs font-semibold rounded-full">Cara Kerja</span>
            <h2 class="mt-4 text-3xl sm:text-4xl font-bold tracking-tight text-stone-900 dark:text-white">Cukup 3 Langkah Sederhana</h2>
            <p class="mt-4 text-stone-600 dark:text-stone-400 leading-relaxed">Tidak perlu bingung dengan rumus atau spreadsheet. CapitalFarm membuat semuanya mudah.</p>
        </div>
        <div class="mt-16 grid sm:grid-cols-3 gap-8 lg:gap-12">
            <div class="relative text-center">
                <div class="w-16 h-16 rounded-2xl bg-forest-100 dark:bg-forest-900/50 flex items-center justify-center mx-auto"><span class="text-2xl font-bold text-forest-600 dark:text-forest-400">01</span></div>
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-stone-900 dark:text-white">Pilih Sektor Usaha</h3>
                    <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Tentukan jenis usaha kamu: perikanan (lele), perkebunan, atau peternakan. Setiap sektor punya kalkulator khusus.</p>
                </div>
                <div class="hidden lg:block absolute top-8 left-[60%] w-[80%] h-px border-t-2 border-dashed border-forest-200 dark:border-forest-800"></div>
            </div>
            <div class="relative text-center">
                <div class="w-16 h-16 rounded-2xl bg-forest-100 dark:bg-forest-900/50 flex items-center justify-center mx-auto"><span class="text-2xl font-bold text-forest-600 dark:text-forest-400">02</span></div>
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-stone-900 dark:text-white">Masukkan Data Modal</h3>
                    <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Isi data sederhana seperti jumlah bibit, luas lahan, jenis pakan, atau harga jual. Semua dalam satuan yang kamu pahami.</p>
                </div>
                <div class="hidden lg:block absolute top-8 left-[60%] w-[80%] h-px border-t-2 border-dashed border-forest-200 dark:border-forest-800"></div>
            </div>
            <div class="relative text-center">
                <div class="w-16 h-16 rounded-2xl bg-amber-100 dark:bg-amber-900/50 flex items-center justify-center mx-auto"><span class="text-2xl font-bold text-amber-600 dark:text-amber-400">03</span></div>
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-stone-900 dark:text-white">Dapatkan Estimasi</h3>
                    <p class="mt-2 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">Hasil kalkulasi muncul langsung: total modal, biaya operasional, estimasi panen, dan potensi keuntungan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TESTIMONI --}}
<section class="py-20 lg:py-28 bg-stone-100/50 dark:bg-stone-900/50">
    <div class="container">
        <div class="text-center max-w-2xl mx-auto">
            <span class="inline-block px-3 py-1 bg-forest-100 dark:bg-forest-900/50 text-forest-700 dark:text-forest-300 text-xs font-semibold rounded-full">Testimoni</span>
            <h2 class="mt-4 text-3xl sm:text-4xl font-bold tracking-tight text-stone-900 dark:text-white">Apa Kata Mereka?</h2>
        </div>
        <div class="mt-16 grid sm:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="p-8 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800">
                <div class="flex items-center gap-1 text-amber-400">
                    @for ($i = 0; $i < 5; $i++)
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="mt-4 text-sm text-stone-600 dark:text-stone-400 leading-relaxed italic">"Dulu saya bingung hitung modal ternak, sering salah perkiraan. Sekarang pakai CapitalFarm jadi tahu persis berapa biaya yang harus disiapkan. Sangat membantu!"</p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-forest-400 to-forest-600 flex items-center justify-center text-white text-sm font-semibold">SP</div>
                    <div><p class="text-sm font-semibold text-stone-900 dark:text-white">Supriyadi</p><p class="text-xs text-stone-500 dark:text-stone-400">Peternak Ayam, Jawa Tengah</p></div>
                </div>
            </div>
            <div class="p-8 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800">
                <div class="flex items-center gap-1 text-amber-400">
                    @for ($i = 0; $i < 5; $i++)
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="mt-4 text-sm text-stone-600 dark:text-stone-400 leading-relaxed italic">"Saya baru mau mulai budidaya lele, tapi bingung modalnya berapa. CapitalFarm kasih gambaran lengkap dari bibit sampai panen. Recommended!"</p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-cyan-500 flex items-center justify-center text-white text-sm font-semibold">RN</div>
                    <div><p class="text-sm font-semibold text-stone-900 dark:text-white">Rina Nuraini</p><p class="text-xs text-stone-500 dark:text-stone-400">Pembudidaya Lele, Jawa Barat</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section id="faq" class="py-20 lg:py-28">
    <div class="container max-w-3xl">
        <div class="text-center">
            <span class="inline-block px-3 py-1 bg-forest-100 dark:bg-forest-900/50 text-forest-700 dark:text-forest-300 text-xs font-semibold rounded-full">FAQ</span>
            <h2 class="mt-4 text-3xl sm:text-4xl font-bold tracking-tight text-stone-900 dark:text-white">Pertanyaan Umum</h2>
        </div>
        <div class="mt-12 space-y-4">
            @php
                $faqs = [
                    ['q' => 'Apakah CapitalFarm benar-benar gratis?', 'a' => 'Ya, CapitalFarm 100% gratis tanpa biaya tersembunyi. Semua fitur kalkulasi bisa kamu gunakan tanpa perlu mendaftar atau berlangganan.'],
                    ['q' => 'Data saya aman tidak?', 'a' => 'Semua data yang kamu masukkan hanya diproses di perangkat kamu. Kami tidak menyimpan data pribadi atau hasil kalkulasi kamu. Privasi kamu adalah prioritas kami.'],
                    ['q' => 'Apakah bisa dipakai di HP?', 'a' => 'Tentu! CapitalFarm dirancang mobile-first, artinya bisa diakses dengan nyaman dari HP, tablet, maupun komputer. Cukup buka website ini di browser kamu.'],
                    ['q' => 'Apakah hasil kalkulasinya akurat?', 'a' => 'Kami menggunakan data harga pasar dan standar biaya operasional terkini yang relevan untuk konteks Indonesia. Hasil kalkulasi bersifat estimasi dan sebaiknya digunakan sebagai referensi perencanaan.'],
                ];
            @endphp
            @foreach($faqs as $faq)
            <div class="faq-item rounded-xl border border-stone-200 dark:border-stone-800 bg-white dark:bg-stone-900 overflow-hidden transition-all duration-300">
                <button class="faq-trigger w-full flex items-center justify-between px-6 py-5 text-left text-sm font-semibold text-stone-900 dark:text-white hover:bg-stone-50 dark:hover:bg-stone-800/50 transition-colors">
                    {{ $faq['q'] }}
                    <svg class="faq-icon w-5 h-5 text-stone-400 shrink-0 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-6 pb-5 text-sm text-stone-500 dark:text-stone-400 leading-relaxed">{{ $faq['a'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FOOTER --}}
<footer class="border-t border-stone-200 dark:border-stone-800 bg-white dark:bg-stone-900">
    <div class="container py-12 lg:py-16">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-2">
                <a href="#" class="text-xl font-bold tracking-tight text-forest-700 dark:text-forest-400">CapitalFarm</a>
                <p class="mt-3 text-sm text-stone-500 dark:text-stone-400 leading-relaxed max-w-sm">Membantu petani dan peternak di Indonesia merencanakan usaha dengan kalkulasi modal dan keuntungan yang akurat, gratis, dan mudah dipakai.</p>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-stone-900 dark:text-white">Navigasi</h4>
                <ul class="mt-4 space-y-3">
                    <li><a href="#tentang" class="text-sm text-stone-500 dark:text-stone-400 hover:text-forest-600 dark:hover:text-forest-400 transition-colors">Tentang</a></li>
                    <li><a href="#sektor" class="text-sm text-stone-500 dark:text-stone-400 hover:text-forest-600 dark:hover:text-forest-400 transition-colors">Sektor</a></li>
                    <li><a href="#cara-kerja" class="text-sm text-stone-500 dark:text-stone-400 hover:text-forest-600 dark:hover:text-forest-400 transition-colors">Cara Kerja</a></li>
                    <li><a href="#faq" class="text-sm text-stone-500 dark:text-stone-400 hover:text-forest-600 dark:hover:text-forest-400 transition-colors">FAQ</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-stone-900 dark:text-white">Ikuti Kami</h4>
                <div class="mt-4 flex items-center gap-3">
                    <a href="#" class="w-9 h-9 rounded-lg bg-stone-100 dark:bg-stone-800 flex items-center justify-center text-stone-500 dark:text-stone-400 hover:bg-forest-100 hover:text-forest-600 dark:hover:bg-forest-900/50 dark:hover:text-forest-400 transition-all" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><rect x="3" y="3" width="18" height="18" rx="5" ry="5"/><circle cx="12" cy="12" r="4.5"/><circle cx="17" cy="7" r="1" fill="currentColor"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-stone-100 dark:bg-stone-800 flex items-center justify-center text-stone-500 dark:text-stone-400 hover:bg-forest-100 hover:text-forest-600 dark:hover:bg-forest-900/50 dark:hover:text-forest-400 transition-all" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75H15a3.75 3.75 0 0 0-3.75 3.75v1.5h-2.25v3h2.25v6.75h3v-6.75h2.25l.75-3H14.25v-1.5c0-.621.504-1.125 1.125-1.125h2.25V6.75Z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-stone-100 dark:bg-stone-800 flex items-center justify-center text-stone-500 dark:text-stone-400 hover:bg-forest-100 hover:text-forest-600 dark:hover:bg-forest-900/50 dark:hover:text-forest-400 transition-all" aria-label="YouTube">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-stone-200 dark:border-stone-800 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-stone-400 dark:text-stone-500">&copy; {{ date('Y') }} CapitalFarm. Semua hak dilindungi.</p>
            <p class="text-xs text-stone-400 dark:text-stone-500">Dibuat dengan <span class="text-forest-500">&hearts;</span> untuk petani & peternak Indonesia</p>
        </div>
    </div>
</footer>

{{-- BACK TO TOP --}}
<button id="back-to-top" class="fixed bottom-6 right-6 w-10 h-10 rounded-xl bg-forest-600 hover:bg-forest-700 text-white shadow-lg shadow-forest-600/25 flex items-center justify-center opacity-0 invisible transition-all duration-300 z-40">
    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"/></svg>
</button>

<script>
(function(){var n=document.getElementById('navbar');if(n)window.addEventListener('scroll',function(){if(window.scrollY>50){n.classList.add('bg-white/80','dark:bg-stone-950/80','backdrop-blur-lg','shadow-sm','dark:shadow-stone-900/50');n.classList.remove('bg-transparent')}else{n.classList.remove('bg-white/80','dark:bg-stone-950/80','backdrop-blur-lg','shadow-sm','dark:shadow-stone-900/50');n.classList.add('bg-transparent')}})})
();
document.getElementById('theme-toggle').addEventListener('click',function(){var h=document.documentElement;if(h.classList.contains('dark')){h.classList.remove('dark');localStorage.setItem('cf-theme','light')}else{h.classList.add('dark');localStorage.setItem('cf-theme','dark')}})
;
document.querySelectorAll('.faq-item').forEach(function(i){var t=i.querySelector('.faq-trigger'),c=i.querySelector('.faq-content'),o=i.querySelector('.faq-icon');t.addEventListener('click',function(){var n=c.style.maxHeight&&c.style.maxHeight!=='0px';document.querySelectorAll('.faq-content').forEach(function(e){e.style.maxHeight='0px'});document.querySelectorAll('.faq-icon').forEach(function(e){e.classList.remove('rotate-180')});document.querySelectorAll('.faq-item').forEach(function(e){e.classList.remove('ring-1','ring-forest-200','dark:ring-forest-800')});if(!n){c.style.maxHeight=c.scrollHeight+'px';o.classList.add('rotate-180');i.classList.add('ring-1','ring-forest-200','dark:ring-forest-800')}})})
;
(function(){var b=document.getElementById('back-to-top');window.addEventListener('scroll',function(){if(window.scrollY>400){b.classList.remove('opacity-0','invisible');b.classList.add('opacity-100','visible')}else{b.classList.add('opacity-0','invisible');b.classList.remove('opacity-100','visible')}});b.addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'})})})();
</script>

</body>
</html>
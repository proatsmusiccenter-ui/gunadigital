<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flyer Promosi Resmi - GunaDigital</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,600,700,800,900|playfair-display:700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @media print {
            .no-print {
                display: none !important;
            }
            body {
                background: white !important;
                padding: 0 !important;
                margin: 0 !important;
            }
            .flyer-card {
                box-shadow: none !important;
                border: none !important;
                margin: 0 auto !important;
                max-width: 100% !important;
                page-break-inside: avoid;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            @page {
                size: A4 portrait;
                margin: 8mm;
            }
        }
    </style>
</head>
<body x-data="{ tab: 'vector' }" class="bg-slate-900 text-slate-800 font-sans antialiased min-h-screen py-6 px-3 sm:px-6">

    <!-- Top Navigation & Control Bar (Hidden on Print) -->
    <header class="no-print max-w-4xl mx-auto mb-6 bg-slate-800/90 backdrop-blur-md border border-slate-700/80 rounded-2xl p-3 sm:p-4 shadow-xl flex flex-wrap items-center justify-between gap-3 text-white">
        <div class="flex items-center gap-3">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-slate-300 hover:text-white text-xs sm:text-sm font-semibold transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Kembali ke Website</span>
            </a>
            <span class="text-slate-600">|</span>
            <span class="text-xs font-bold text-blue-400 uppercase tracking-wider">Flyer Marketing GunaDigital</span>
        </div>

        <div class="flex items-center gap-2">
            <!-- Mode Switcher -->
            <div class="bg-slate-900/80 p-1 rounded-xl flex items-center text-xs font-bold border border-slate-700">
                <button @click="tab = 'vector'"
                        :class="tab === 'vector' ? 'bg-blue-600 text-white shadow' : 'text-slate-400 hover:text-white'"
                        class="px-3 py-1.5 rounded-lg transition-all flex items-center gap-1.5">
                    <span>Vektor Siap Cetak (A4)</span>
                </button>
                <button @click="tab = 'art'"
                        :class="tab === 'art' ? 'bg-blue-600 text-white shadow' : 'text-slate-400 hover:text-white'"
                        class="px-3 py-1.5 rounded-lg transition-all flex items-center gap-1.5">
                    <span>Poster Grafis Visual</span>
                </button>
            </div>

            <!-- Print / Download Button -->
            <button onclick="window.print()"
                    class="px-3.5 py-1.5 rounded-xl bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white text-xs font-bold shadow-md flex items-center gap-1.5 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                <span>Cetak / PDF</span>
            </button>

            <a href="{{ asset('images/flyer-ai.jpg') }}" download="Flyer-GunaDigital.jpg"
               class="px-3.5 py-1.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold shadow-md flex items-center gap-1.5 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                <span>Unduh JPG</span>
            </a>
        </div>
    </header>

    <!-- TAB 1: VECTOR A4 PRINTABLE FLYER -->
    <main x-show="tab === 'vector'" class="max-w-4xl mx-auto">
        <div class="flyer-card bg-white rounded-3xl overflow-hidden shadow-2xl border border-slate-200 relative text-slate-800">

            <!-- Decorative Top Gradient Line -->
            <div class="h-2.5 w-full bg-gradient-to-r from-blue-600 via-indigo-600 to-sky-500"></div>

            <div class="p-6 sm:p-10 lg:p-12 space-y-8">

                <!-- 1. Header & Brand -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pb-6 border-b border-slate-100">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logologo.png') }}"
                             alt="GunaDigital"
                             class="h-10 sm:h-12 w-auto object-contain">
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-black uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
                            <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                            <span>Studio Solusi Digital #1</span>
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider bg-emerald-50 text-emerald-700 border border-emerald-200">
                            Diskon s/d 40%
                        </span>
                    </div>
                </div>

                <!-- 2. Hero Headline -->
                <div class="text-center space-y-3 max-w-2xl mx-auto">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-[1.15]">
                        Tingkatkan Bisnis & Abadikan Momen Spesial Anda
                    </h1>
                    <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed">
                        Layanan terpadu pembuatan <strong class="text-slate-900">Website Profesional</strong> dan <strong class="text-slate-900">Undangan Digital Eksklusif</strong> berteknologi modern dengan pengerjaan kilat dan hasil berkelas.
                    </p>
                </div>

                <!-- 3. Dual Service Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">

                    <!-- Service Card 1: Website Bisnis -->
                    <div class="rounded-2xl p-6 bg-gradient-to-b from-blue-50/60 to-white border-2 border-blue-200 relative flex flex-col justify-between space-y-5 shadow-xs">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-blue-600 text-white">
                                    Website Bisnis & UMKM
                                </span>
                                <span class="text-xs font-black text-blue-700 bg-blue-100 px-2.5 py-0.5 rounded-full">
                                    Mulai 499rb
                                </span>
                            </div>

                            <h3 class="text-xl font-black text-slate-900 leading-snug">
                                Company Profile, Landing Page & Toko Online
                            </h3>

                            <ul class="space-y-2.5 text-xs text-slate-600 font-medium">
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Desain Eksklusif, Elegan & Mobile-Friendly</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Gratis Domain (.com / .id) & Server Cloud Cepat</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Integrasi Tombol WhatsApp, Maps, & Kontak</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Optimasi SEO & Kecepatan Google PageSpeed</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Garansi Revisi Sepuasnya Sampai Puas</span>
                                </li>
                            </ul>
                        </div>

                        <div class="pt-3 border-t border-blue-100 flex items-center justify-between text-xs font-bold text-blue-700">
                            <span>⚡ Pengerjaan 2-3 Hari Siap Online</span>
                        </div>
                    </div>

                    <!-- Service Card 2: Undangan Digital -->
                    <div class="rounded-2xl p-6 bg-gradient-to-b from-pink-50/60 to-white border-2 border-pink-200 relative flex flex-col justify-between space-y-5 shadow-xs">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-gradient-to-r from-pink-600 to-rose-600 text-white">
                                    Undangan Digital Interaktif
                                </span>
                                <span class="text-xs font-black text-pink-700 bg-pink-100 px-2.5 py-0.5 rounded-full">
                                    Mulai 99rb
                                </span>
                            </div>

                            <h3 class="text-xl font-black text-slate-900 leading-snug">
                                Undangan Pernikahan & Event Eksklusif
                            </h3>

                            <ul class="space-y-2.5 text-xs text-slate-600 font-medium">
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Tema Desain Mewah, Botanical, Royal & Islami</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Konfirmasi Kehadiran (RSVP) Realtime WhatsApp</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Amplop Digital (QRIS, Rekening Bank, E-Wallet)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Musik Romantis, Galeri Foto & Video Sinematik</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-4 h-4 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-[10px] font-black shrink-0 mt-0.5">✓</span>
                                    <span>Link Sebar Nama Tamu Khusus Tanpa Batas</span>
                                </li>
                            </ul>
                        </div>

                        <div class="pt-3 border-t border-pink-100 flex items-center justify-between text-xs font-bold text-pink-700">
                            <span>⚡ Pengerjaan Kilat 24 Jam Jadi</span>
                        </div>
                    </div>

                </div>

                <!-- 4. Trust Banner Highlights -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 p-4 rounded-2xl bg-slate-50 border border-slate-200/80 text-center">
                    <div class="p-2">
                        <span class="block text-lg font-black text-slate-900">350+</span>
                        <span class="text-[11px] text-slate-600 font-semibold">Klien Terpercaya</span>
                    </div>
                    <div class="p-2">
                        <span class="block text-lg font-black text-amber-500">★ 4.9 / 5.0</span>
                        <span class="text-[11px] text-slate-600 font-semibold">Ulasan Kepuasan</span>
                    </div>
                    <div class="p-2">
                        <span class="block text-lg font-black text-emerald-600">24-48 Jam</span>
                        <span class="text-[11px] text-slate-600 font-semibold">Pengerjaan Cepat</span>
                    </div>
                    <div class="p-2">
                        <span class="block text-lg font-black text-blue-600">100%</span>
                        <span class="text-[11px] text-slate-600 font-semibold">Garansi Revisi</span>
                    </div>
                </div>

                <!-- 5. Bottom Call To Action & Contacts -->
                <div class="rounded-2xl p-6 sm:p-8 bg-gradient-to-r from-slate-900 via-blue-950 to-indigo-950 text-white flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl">
                    <div class="space-y-2 text-center sm:text-left">
                        <span class="inline-block px-3 py-1 rounded-full text-[10px] font-black tracking-widest uppercase bg-white/10 text-blue-200 border border-white/20">
                            KONSULTASI GRATIS SEKARANG
                        </span>
                        <h4 class="text-xl sm:text-2xl font-black tracking-tight">
                            Siap Wujudkan Proyek Digital Anda?
                        </h4>
                        <p class="text-xs sm:text-sm text-blue-200/80">
                            Hubungi kami untuk mendapatkan penawaran harga terbaik & slot pengerjaan kilat.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
                        <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20tertarik%20dengan%20promo%20flyer%20website%20dan%20undangan%20digital"
                           target="_blank"
                           class="w-full sm:w-auto px-6 py-3.5 rounded-xl font-black text-xs sm:text-sm bg-emerald-500 hover:bg-emerald-600 text-white shadow-lg shadow-emerald-500/30 flex items-center justify-center gap-2 transition-transform hover:scale-105">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm0 18.09c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.134 8.134 0 01-1.25-4.32c0-4.5 3.66-8.16 8.16-8.16 2.18 0 4.23.85 5.77 2.39 1.54 1.54 2.39 3.59 2.39 5.77 0 4.5-3.66 8.17-8.16 8.17zm4.47-6.13c-.25-.12-1.45-.72-1.68-.8-.22-.08-.39-.12-.55.12-.17.25-.64.8-.79.96-.14.17-.29.19-.54.07-.25-.12-1.05-.39-2-1.23-.74-.66-1.23-1.48-1.38-1.73-.14-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.17-.25.25-.41.08-.17.04-.31-.02-.43s-.55-1.33-.76-1.82c-.2-.48-.41-.41-.56-.42h-.48c-.17 0-.43.06-.66.31-.22.25-.86.84-.86 2.05s.88 2.38 1 2.54c.12.17 1.74 2.65 4.2 3.71.59.25 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.45-.6 1.66-1.17.2-.58.2-1.07.14-1.17-.06-.11-.22-.17-.46-.3z"/>
                            </svg>
                            <span>WhatsApp: 0812-3456-7890</span>
                        </a>

                        <a href="https://gunadigital.my.id"
                           target="_blank"
                           class="w-full sm:w-auto px-5 py-3.5 rounded-xl font-bold text-xs sm:text-sm bg-white/10 hover:bg-white/20 border border-white/20 text-white flex items-center justify-center gap-1.5 transition-all">
                            <span>gunadigital.my.id</span>
                            <span class="text-xs">&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Footer Tagline -->
                <div class="text-center pt-2 text-xs text-slate-400 font-medium">
                    &copy; {{ date('Y') }} GunaDigital (Web & Digital Invitation). Seluruh Hak Cipta Dilindungi.
                </div>

            </div>
        </div>
    </main>

    <!-- TAB 2: AI ART GRAPHIC POSTER -->
    <main x-show="tab === 'art'" class="max-w-2xl mx-auto space-y-4">
        <div class="bg-white rounded-3xl p-4 sm:p-6 shadow-2xl border border-slate-700/50">
            <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-md">
                <img src="{{ asset('images/flyer-ai.jpg') }}"
                     alt="Flyer Promosi GunaDigital"
                     class="w-full h-auto object-contain">
            </div>

            <div class="pt-5 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    <h3 class="font-bold text-slate-900 text-sm">Poster Grafis Visual GunaDigital</h3>
                    <p class="text-xs text-slate-500">Format 3:4 cocok untuk Instagram Feed, WhatsApp Story & Brosur Cetak.</p>
                </div>
                <a href="{{ asset('images/flyer-ai.jpg') }}" download="Flyer-GunaDigital.jpg"
                   class="w-full sm:w-auto px-6 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold text-center shadow-lg shadow-blue-500/25 transition-all">
                    Unduh Gambar Asli (JPG)
                </a>
            </div>
        </div>
    </main>

</body>
</html>

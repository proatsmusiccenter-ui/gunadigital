@props(['services' => []])

<section id="layanan" class="py-20 bg-white border-b border-slate-200/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14">

        <!-- Section Header -->
        <div class="max-w-2xl space-y-3">
            <span class="inline-block px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold">Layanan Utama</span>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 leading-tight">
                Solusi digital yang dirancang sesuai kebutuhan bisnis Anda
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                Baik untuk membangun profil perusahaan yang kredibel maupun sistem aplikasi untuk menunjang operasional harian tim Anda.
            </p>
        </div>

        <!-- 2 Soft Tinted Service Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

            <!-- Service 1: Website (Soft Blue Tinted Card) -->
            <div class="rounded-2xl bg-gradient-to-b from-[#eff5ff] via-[#f7faff] to-white border border-blue-200/80 shadow-sm hover:shadow-lg transition-all p-7 sm:p-9 flex flex-col justify-between space-y-8">
                <div class="space-y-5">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-xl bg-blue-600 text-white shadow-sm shadow-blue-600/20 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <span class="px-3.5 py-1 rounded-full bg-blue-100/80 text-blue-800 text-xs font-bold">
                            Mulai Rp 499.000
                        </span>
                    </div>

                    <div>
                        <h3 class="font-display text-xl sm:text-2xl font-bold text-slate-900">
                            Pembuatan Website & Toko Online
                        </h3>
                        <p class="text-slate-600 text-sm mt-2 leading-relaxed">
                            Cocok untuk Company Profile perusahaan, landing page promosi, katalog produk, instansi, hingga website toko online (e-commerce).
                        </p>
                    </div>

                    <ul class="space-y-3 pt-4 text-sm text-slate-700 border-t border-blue-100">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                            <span>Tampilan bersih, rapi, dan menyesuaikan layar HP maupun laptop</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                            <span>Struktur ramah mesin pencari (SEO) agar mudah ditemukan di Google</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                            <span>Dilengkapi panel admin untuk memperbarui konten atau produk sendiri</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                            <span>Sudah termasuk nama domain (.com / .id), hosting, dan keamanan SSL</span>
                        </li>
                    </ul>
                </div>

                <div class="pt-5 border-t border-blue-100 flex flex-wrap items-center gap-3">
                    <a href="{{ route('harga') }}" @click.prevent="activePricingTab = 'website'; navigateSection('harga')" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs sm:text-sm transition-colors">
                        Lihat Paket Website
                    </a>
                    <a href="{{ route('portofolio') }}" @click.prevent="activeServiceTab = 'website'; navigateSection('portofolio')" class="px-4 py-2.5 rounded-xl text-blue-700 hover:bg-blue-50 font-semibold text-xs sm:text-sm transition-colors">
                        Lihat Contoh Karya &rarr;
                    </a>
                </div>
            </div>

            <!-- Service 2: Application (Soft Indigo-Sky Tinted Card) -->
            <div class="rounded-2xl bg-gradient-to-b from-[#eef2ff] via-[#f6f8ff] to-white border border-indigo-200/80 shadow-sm hover:shadow-lg transition-all p-7 sm:p-9 flex flex-col justify-between space-y-8">
                <div class="space-y-5">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-xl bg-indigo-600 text-white shadow-sm shadow-indigo-600/20 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <span class="px-3.5 py-1 rounded-full bg-indigo-100/80 text-indigo-800 text-xs font-bold">
                            Mulai Rp 1.999.000
                        </span>
                    </div>

                    <div>
                        <h3 class="font-display text-xl sm:text-2xl font-bold text-slate-900">
                            Pengembangan Aplikasi Web & Mobile
                        </h3>
                        <p class="text-slate-600 text-sm mt-2 leading-relaxed">
                            Pengembangan aplikasi kustom sesuai alur kerja perusahaan, seperti sistem kasir (POS), inventori gudang, sistem klinik, reservasi, hingga aplikasi Android & iOS.
                        </p>
                    </div>

                    <ul class="space-y-3 pt-4 text-sm text-slate-700 border-t border-indigo-100">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                            <span>Fitur dirancang khusus mengikuti prosedur (SOP) operasional bisnis Anda</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                            <span>Mendukung pembagian hak akses pengguna (Admin, Staf, Kasir, Manajer)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                            <span>Integrasi pembayaran otomatis (QRIS / Virtual Account) & notifikasi WhatsApp</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                            <span>Rekapitulasi data otomatis lengkap dengan unduh laporan PDF & Excel</span>
                        </li>
                    </ul>
                </div>

                <div class="pt-5 border-t border-indigo-100 flex flex-wrap items-center gap-3">
                    <a href="{{ route('harga') }}" @click.prevent="activePricingTab = 'aplikasi'; navigateSection('harga')" class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-xs sm:text-sm transition-colors">
                        Lihat Paket Aplikasi
                    </a>
                    <a href="{{ route('portofolio') }}" @click.prevent="activeServiceTab = 'aplikasi'; navigateSection('portofolio')" class="px-4 py-2.5 rounded-xl text-indigo-700 hover:bg-indigo-50 font-semibold text-xs sm:text-sm transition-colors">
                        Lihat Contoh Aplikasi &rarr;
                    </a>
                </div>
            </div>

        </div>

        <!-- Soft Royal Navy 4-Step Connected Workflow Card -->
        <div class="rounded-3xl bg-gradient-to-r from-[#122247] via-[#172c5c] to-[#122247] text-white p-7 sm:p-10 shadow-xl border border-blue-800/50 relative overflow-hidden">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
                <div class="max-w-xl">
                    <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-sky-300">
                        <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                        <span>Alur & Tahapan Kerja</span>
                    </span>
                    <h3 class="font-display text-xl sm:text-2xl lg:text-3xl font-bold text-white mt-1">
                        Proses pengerjaan yang jelas dan terarah
                    </h3>
                </div>
                <span class="text-xs text-blue-200/80 font-medium">
                    Alur transparan dari diskusi awal hingga website/aplikasi siap digunakan
                </span>
            </div>

            <!-- Desktop Top Visual Flow Track (Nodes + Connecting Arrow Lines) -->
            <div class="hidden lg:grid lg:grid-cols-4 gap-6 mb-5 px-4">
                <!-- Node 1 -> 2 -->
                <div class="flex items-center">
                    <div class="w-11 h-11 rounded-2xl bg-sky-500 text-slate-950 font-extrabold text-sm flex items-center justify-center shadow-lg shadow-sky-500/30 shrink-0">
                        01
                    </div>
                    <div class="flex-1 flex items-center mx-3">
                        <div class="h-0.5 w-full bg-gradient-to-r from-sky-400 to-blue-400/60"></div>
                        <svg class="w-5 h-5 text-sky-400 -ml-1.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>

                <!-- Node 2 -> 3 -->
                <div class="flex items-center">
                    <div class="w-11 h-11 rounded-2xl bg-blue-500 text-white font-extrabold text-sm flex items-center justify-center shadow-lg shadow-blue-500/30 border border-sky-300/40 shrink-0">
                        02
                    </div>
                    <div class="flex-1 flex items-center mx-3">
                        <div class="h-0.5 w-full bg-gradient-to-r from-blue-400 to-indigo-400/60"></div>
                        <svg class="w-5 h-5 text-sky-400 -ml-1.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>

                <!-- Node 3 -> 4 -->
                <div class="flex items-center">
                    <div class="w-11 h-11 rounded-2xl bg-indigo-500 text-white font-extrabold text-sm flex items-center justify-center shadow-lg shadow-indigo-500/30 border border-indigo-300/40 shrink-0">
                        03
                    </div>
                    <div class="flex-1 flex items-center mx-3">
                        <div class="h-0.5 w-full bg-gradient-to-r from-indigo-400 to-emerald-400/80"></div>
                        <svg class="w-5 h-5 text-emerald-400 -ml-1.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>

                <!-- Node 4 (Finish) -->
                <div class="flex items-center">
                    <div class="w-11 h-11 rounded-2xl bg-emerald-500 text-slate-950 font-extrabold text-sm flex items-center justify-center shadow-lg shadow-emerald-500/30 shrink-0">
                        04
                    </div>
                    <div class="ml-3 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/15 border border-emerald-400/30 text-emerald-300 text-xs font-semibold">
                        <span>✓ Siap Online</span>
                    </div>
                </div>
            </div>

            <!-- 4 Step Cards with Floating Arrow Badges Between Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 lg:gap-6 relative">

                <!-- Step 1 -->
                <div class="relative flex flex-col">
                    <div class="p-6 rounded-2xl bg-white/10 hover:bg-white/15 border border-white/15 transition-all space-y-3 h-full">
                        <div class="flex items-center justify-between">
                            <span class="inline-block px-2.5 py-0.5 rounded-md bg-sky-400/20 text-sky-300 text-xs font-bold">Tahap 1</span>
                            <svg class="w-5 h-5 text-sky-300/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        </div>
                        <h4 class="font-bold text-white text-base">Diskusi & Perencanaan</h4>
                        <p class="text-xs text-slate-200 leading-relaxed">
                            Memahami kebutuhan bisnis Anda, menentukan fitur yang diperlukan, dan menyepakati estimasi pengerjaan.
                        </p>
                    </div>
                    <!-- Desktop Floating Arrow Badge to Card 2 -->
                    <div class="hidden lg:flex absolute -right-5 top-1/2 -translate-y-1/2 z-20 w-8 h-8 rounded-full bg-sky-500 text-slate-950 items-center justify-center shadow-lg border-2 border-[#152852]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </div>
                    <!-- Mobile Down Arrow -->
                    <div class="flex lg:hidden justify-center py-1 text-sky-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex flex-col">
                    <div class="p-6 rounded-2xl bg-white/10 hover:bg-white/15 border border-white/15 transition-all space-y-3 h-full">
                        <div class="flex items-center justify-between">
                            <span class="inline-block px-2.5 py-0.5 rounded-md bg-sky-400/20 text-sky-300 text-xs font-bold">Tahap 2</span>
                            <svg class="w-5 h-5 text-sky-300/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <h4 class="font-bold text-white text-base">Desain & Pengembangan</h4>
                        <p class="text-xs text-slate-200 leading-relaxed">
                            Merancang tampilan antarmuka yang rapi dan membangun fungsi sistem sesuai spesifikasi yang disepakati.
                        </p>
                    </div>
                    <!-- Desktop Floating Arrow Badge to Card 3 -->
                    <div class="hidden lg:flex absolute -right-5 top-1/2 -translate-y-1/2 z-20 w-8 h-8 rounded-full bg-sky-500 text-slate-950 items-center justify-center shadow-lg border-2 border-[#152852]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </div>
                    <!-- Mobile Down Arrow -->
                    <div class="flex lg:hidden justify-center py-1 text-sky-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex flex-col">
                    <div class="p-6 rounded-2xl bg-white/10 hover:bg-white/15 border border-white/15 transition-all space-y-3 h-full">
                        <div class="flex items-center justify-between">
                            <span class="inline-block px-2.5 py-0.5 rounded-md bg-sky-400/20 text-sky-300 text-xs font-bold">Tahap 3</span>
                            <svg class="w-5 h-5 text-sky-300/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h4 class="font-bold text-white text-base">Uji Coba & Revisi</h4>
                        <p class="text-xs text-slate-200 leading-relaxed">
                            Menampilkan pratinjau (demo) untuk Anda tinjau bersama tim serta melakukan penyesuaian jika diperlukan.
                        </p>
                    </div>
                    <!-- Desktop Floating Arrow Badge to Card 4 -->
                    <div class="hidden lg:flex absolute -right-5 top-1/2 -translate-y-1/2 z-20 w-8 h-8 rounded-full bg-emerald-400 text-slate-950 items-center justify-center shadow-lg border-2 border-[#152852]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </div>
                    <!-- Mobile Down Arrow -->
                    <div class="flex lg:hidden justify-center py-1 text-emerald-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative flex flex-col">
                    <div class="p-6 rounded-2xl bg-emerald-500/15 hover:bg-emerald-500/20 border border-emerald-400/30 transition-all space-y-3 h-full">
                        <div class="flex items-center justify-between">
                            <span class="inline-block px-2.5 py-0.5 rounded-md bg-emerald-400/20 text-emerald-300 text-xs font-bold">Tahap 4</span>
                            <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <h4 class="font-bold text-white text-base">Peluncuran & Panduan</h4>
                        <p class="text-xs text-slate-200 leading-relaxed">
                            Mengaktifkan website atau aplikasi di server utama disertai panduan pengelolaan dan dukungan teknis.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

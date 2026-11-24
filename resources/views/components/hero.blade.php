@props(['stats' => []])

<section class="relative bg-gradient-to-br from-[#eaf2ff] via-[#f3f7ff] to-[#e2ecff] pt-12 pb-20 lg:pt-20 lg:pb-24 border-b border-blue-200/60 overflow-hidden">

    <!-- Soft Pastel Decorative Blobs -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-400/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/3 -right-24 w-96 h-96 bg-sky-400/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <!-- Left Column -->
            <div class="lg:col-span-6 space-y-6 text-center lg:text-left">

                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 border border-blue-200/80 shadow-2xs text-xs font-semibold text-blue-700">
                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                    <span>Partner Pengembangan Website & Aplikasi Bisnis</span>
                </div>

                <h1 class="font-display text-3xl sm:text-5xl lg:text-[50px] font-extrabold tracking-tight leading-[1.15] text-slate-900">
                    Membangun website dan aplikasi untuk mendukung
                    <span class="text-blue-700">pertumbuhan bisnis Anda.</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-600 max-w-xl mx-auto lg:mx-0 leading-relaxed font-normal">
                    Kami mendampingi perusahaan, startup, dan UMKM dalam merancang <strong class="text-slate-800 font-semibold">Website Profesional & Toko Online</strong> hingga <strong class="text-slate-800 font-semibold">Aplikasi Web & Mobile</strong> yang rapi, cepat, dan mudah digunakan.
                </p>

                <!-- Clean Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 pt-2">
                    <a href="{{ route('harga') }}"
                       @click.prevent="navigateSection('harga')"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-xl font-semibold text-sm text-white bg-blue-600 hover:bg-blue-700 shadow-md shadow-blue-600/20 transition-all">
                        <span>Lihat Paket & Estimasi Biaya</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>

                    <button @click="contactModalOpen = true"
                            type="button"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-semibold text-sm text-slate-700 bg-white hover:bg-blue-50/50 border border-blue-200/80 shadow-2xs transition-colors cursor-pointer">
                        <span>Diskusikan Kebutuhan Anda</span>
                    </button>
                </div>

                <!-- Trust Points -->
                <div class="pt-3 flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-2 text-xs text-slate-600 font-medium">
                    <span class="flex items-center gap-1.5">
                        <span class="w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center text-[10px]">✓</span>
                        Termasuk Domain & Cloud Server
                    </span>
                    <span class="flex items-center gap-1.5">
                        <span class="w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center text-[10px]">✓</span>
                        Garansi Revisi & Pendampingan
                    </span>
                </div>

            </div>

            <!-- Right Column: Soft Navy & White Contrast Preview Card -->
            <div class="lg:col-span-6">
                <div class="bg-[#111e3b] text-white rounded-2xl border border-blue-900/60 shadow-2xl shadow-blue-950/15 overflow-hidden">

                    <!-- Top Bar -->
                    <div class="px-5 py-3.5 bg-[#0c162c] border-b border-slate-800 flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-rose-400/80"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-400/80"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400/80"></span>
                            <span class="text-xs font-medium text-slate-400 ml-1.5">Simulasi Layanan</span>
                        </div>

                        <div class="flex p-1 bg-[#162647] rounded-lg text-xs font-semibold">
                            <button @click="invitationMockup.activeMode = 'aplikasi'"
                                    :class="invitationMockup.activeMode === 'aplikasi' ? 'bg-blue-600 text-white shadow-2xs' : 'text-slate-300 hover:text-white'"
                                    class="px-3 py-1 rounded-md transition-all cursor-pointer">
                                Aplikasi & Sistem
                            </button>
                            <button @click="invitationMockup.activeMode = 'website'"
                                    :class="invitationMockup.activeMode === 'website' ? 'bg-blue-600 text-white shadow-2xs' : 'text-slate-300 hover:text-white'"
                                    class="px-3 py-1 rounded-md transition-all cursor-pointer">
                                Website Bisnis
                            </button>
                        </div>
                    </div>

                    <!-- TAB 1: APPLICATION DASHBOARD -->
                    <div x-show="invitationMockup.activeMode !== 'website'"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         class="p-5 sm:p-6 space-y-5">

                        <div class="flex items-center justify-between pb-4 border-b border-slate-800">
                            <div>
                                <span class="text-xs font-semibold text-sky-400 block">Sistem Manajemen Operasional</span>
                                <h3 class="text-base font-bold text-white">Dashboard Penjualan & Inventori</h3>
                            </div>
                            <button @click="invitationMockup.simulateOrder()"
                                    type="button"
                                    class="px-3 py-1.5 rounded-lg bg-blue-600 hover:bg-blue-500 text-white text-xs font-semibold transition-colors cursor-pointer">
                                + Tambah Transaksi
                            </button>
                        </div>

                        <!-- 3 Summary Cards -->
                        <div class="grid grid-cols-3 gap-3">
                            <div class="p-3.5 rounded-xl bg-[#17284d] border border-blue-900/60">
                                <span class="text-[11px] text-slate-300 block">Pendapatan</span>
                                <span class="text-sm sm:text-base font-bold text-white mt-1 block" x-text="invitationMockup.revenueToday">Rp 18.450.000</span>
                                <span class="text-[10px] text-emerald-400 font-medium mt-0.5 block">+18.4% bulan ini</span>
                            </div>
                            <div class="p-3.5 rounded-xl bg-[#17284d] border border-blue-900/60">
                                <span class="text-[11px] text-slate-300 block">Pesanan Aktif</span>
                                <span class="text-sm sm:text-base font-bold text-sky-300 mt-1 block" x-text="invitationMockup.ordersCount + ' Transaksi'">42 Transaksi</span>
                                <span class="text-[10px] text-slate-400 mt-0.5 block">Tersinkronisasi</span>
                            </div>
                            <div class="p-3.5 rounded-xl bg-[#17284d] border border-blue-900/60">
                                <span class="text-[11px] text-slate-300 block">Status Server</span>
                                <span class="text-sm sm:text-base font-bold text-emerald-400 mt-1 block">Stabil</span>
                                <span class="text-[10px] text-slate-400 mt-0.5 block">Cloud Hosting</span>
                            </div>
                        </div>

                        <!-- Clean Table List -->
                        <div class="rounded-xl border border-blue-900/60 overflow-hidden bg-[#152445]">
                            <div class="px-4 py-2.5 bg-[#18294f] border-b border-blue-900/60 flex items-center justify-between text-xs font-semibold text-slate-200">
                                <span>Riwayat Transaksi Terbaru</span>
                                <span class="text-[11px] text-sky-300 font-normal">Realtime</span>
                            </div>
                            <div class="divide-y divide-blue-900/40 max-h-40 overflow-y-auto hide-scrollbar">
                                <template x-for="ord in invitationMockup.orders" :key="ord.id">
                                    <div class="px-4 py-2.5 flex items-center justify-between text-xs">
                                        <div>
                                            <span class="font-semibold text-white block" x-text="ord.client"></span>
                                            <span class="text-[11px] text-slate-400" x-text="ord.id + ' • ' + ord.type"></span>
                                        </div>
                                        <div class="text-right">
                                            <span class="font-semibold text-emerald-400 block" x-text="ord.amount"></span>
                                            <span class="text-[10px] font-medium text-slate-300" x-text="ord.status"></span>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 2: WEBSITE PREVIEW -->
                    <div x-show="invitationMockup.activeMode === 'website'"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         class="p-5 sm:p-6 space-y-4">

                        <div class="relative rounded-xl overflow-hidden border border-blue-900/60 h-60 bg-slate-900">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=80"
                                 alt="Pratinjau Website Bisnis"
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0c162c] via-[#0c162c]/40 to-transparent flex flex-col justify-end p-5">
                                <span class="text-xs font-semibold text-sky-300 mb-1">Company Profile & E-Commerce</span>
                                <h3 class="text-white font-bold text-base sm:text-lg">
                                    Desain Rapi, Profesional & Mudah Diakses di Semua Perangkat
                                </h3>
                                <p class="text-slate-300 text-xs mt-1">
                                    Dilengkapi halaman manajemen konten (CMS) dan struktur SEO agar mudah ditemukan di Google.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-3 text-center">
                            <div class="p-3 rounded-xl bg-[#17284d] border border-blue-900/60">
                                <span class="block text-white font-bold text-xs">Responsif</span>
                                <span class="text-[11px] text-slate-300">HP & Desktop</span>
                            </div>
                            <div class="p-3 rounded-xl bg-[#17284d] border border-blue-900/60">
                                <span class="block text-white font-bold text-xs">Akses Cepat</span>
                                <span class="text-[11px] text-slate-300">Optimasi Kode</span>
                            </div>
                            <div class="p-3 rounded-xl bg-[#17284d] border border-blue-900/60">
                                <span class="block text-white font-bold text-xs">Panel Admin</span>
                                <span class="text-[11px] text-slate-300">Mudah Dikelola</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Royal Navy Stats Bar -->
        <div class="mt-16 rounded-2xl bg-gradient-to-r from-[#111e3b] via-[#172a52] to-[#111e3b] text-white p-7 sm:p-8 shadow-xl shadow-blue-950/10 border border-blue-900/50">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 divide-y sm:divide-y-0 sm:divide-x divide-blue-800/60">
                @foreach($stats as $index => $stat)
                <div class="{{ $index > 0 ? 'sm:pl-6 pt-4 sm:pt-0' : '' }}">
                    <span class="font-display text-2xl sm:text-3xl font-extrabold text-white block">
                        {{ $stat['value'] }}
                    </span>
                    <span class="text-sm font-semibold text-sky-300 mt-1 block">
                        {{ $stat['label'] }}
                    </span>
                    <span class="text-xs text-slate-300 block mt-0.5">
                        {{ $stat['sub'] }}
                    </span>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

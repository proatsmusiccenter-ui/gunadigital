@props(['packages' => []])

<section id="harga" class="py-20 bg-gradient-to-b from-[#eff5ff] to-white border-b border-blue-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        <!-- Header & Category Switcher -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="space-y-2.5 max-w-2xl">
                <span class="inline-block px-3 py-1 rounded-full bg-white text-blue-700 border border-blue-200/80 text-xs font-semibold">Estimasi Investasi</span>
                <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900">
                    Pilihan Paket Harga Terbaik
                </h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Biaya transparan sesuai ruang lingkup kebutuhan Anda, sudah termasuk pendampingan dan garansi revisi.
                </p>
            </div>

            <!-- Category Switcher -->
            <div class="inline-flex p-1.5 rounded-xl bg-white border border-blue-200/80 shadow-2xs self-start lg:self-end">
                <button @click="activePricingTab = 'website'"
                        :class="activePricingTab === 'website' ? 'bg-blue-600 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900'"
                        class="px-5 py-2.5 rounded-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer">
                    Paket Website Bisnis
                </button>
                <button @click="activePricingTab = 'aplikasi'"
                        :class="activePricingTab === 'aplikasi' ? 'bg-blue-600 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900'"
                        class="px-5 py-2.5 rounded-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer">
                    Paket Aplikasi & Sistem
                </button>
            </div>
        </div>

        <!-- TAB 1: WEBSITE PACKAGES -->
        <div x-show="activePricingTab === 'website'"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             class="grid grid-cols-1 lg:grid-cols-3 gap-7 items-stretch">

            @foreach(($packages['website'] ?? []) as $pkg)
            <div class="relative rounded-2xl p-7 sm:p-8 flex flex-col justify-between transition-all {{ $pkg['popular'] ? 'bg-gradient-to-b from-[#13254c] to-[#0f1d3d] text-white border-2 border-blue-400/60 shadow-xl shadow-blue-950/15 lg:-translate-y-2' : 'bg-white text-slate-800 border border-blue-100 shadow-sm' }}">
                @if($pkg['popular'])
                <div class="absolute -top-3 left-7 px-3.5 py-0.5 rounded-full bg-sky-400 text-slate-950 text-[11px] font-bold">
                    {{ $pkg['badge'] ?? 'Rekomendasi' }}
                </div>
                @endif

                <div class="space-y-6">
                    <div>
                        <h3 class="font-display text-xl font-bold {{ $pkg['popular'] ? 'text-white' : 'text-slate-900' }}">
                            {{ $pkg['name'] }}
                        </h3>
                        <p class="text-xs sm:text-sm mt-1.5 leading-relaxed {{ $pkg['popular'] ? 'text-slate-300' : 'text-slate-500' }}">
                            {{ $pkg['description'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t {{ $pkg['popular'] ? 'border-blue-800/70' : 'border-slate-100' }}">
                        <span class="text-xs block {{ $pkg['popular'] ? 'text-sky-300' : 'text-slate-400' }}">Estimasi Biaya</span>
                        <div class="flex items-baseline gap-1.5 mt-1">
                            <span class="font-display text-3xl font-bold {{ $pkg['popular'] ? 'text-white' : 'text-slate-900' }}">
                                {{ $pkg['price'] }}
                            </span>
                            <span class="text-xs {{ $pkg['popular'] ? 'text-slate-300' : 'text-slate-500' }}">
                                / {{ $pkg['period'] }}
                            </span>
                        </div>
                    </div>

                    <ul class="space-y-2.5 pt-2 text-xs sm:text-sm {{ $pkg['popular'] ? 'text-slate-200' : 'text-slate-600' }}">
                        @foreach($pkg['features'] as $feat)
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 shrink-0 mt-0.5 {{ $pkg['popular'] ? 'text-sky-400' : 'text-blue-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>{{ $feat }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="pt-7 mt-7 border-t {{ $pkg['popular'] ? 'border-blue-800/70' : 'border-slate-100' }}">
                    <a href="https://wa.me/6281234567890?text=Halo%20Gunova%20Digital,%20saya%20ingin%20berkonsultasi%20mengenai%20paket%20website%20{{ urlencode($pkg['name']) }}"
                       target="_blank"
                       rel="noopener"
                       class="w-full inline-flex items-center justify-center gap-2 py-3 px-5 rounded-xl font-semibold text-sm text-center transition-colors {{ $pkg['popular'] ? 'bg-blue-500 hover:bg-blue-400 text-white shadow-md' : 'bg-blue-50 hover:bg-blue-100 text-blue-700' }}">
                        <span>{{ $pkg['cta'] }}</span>
                    </a>
                </div>
            </div>
            @endforeach

        </div>

        <!-- TAB 2: APPLICATION & SYSTEM PACKAGES -->
        <div x-show="activePricingTab === 'aplikasi'"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             class="grid grid-cols-1 lg:grid-cols-3 gap-7 items-stretch">

            @foreach(($packages['aplikasi'] ?? []) as $pkg)
            <div class="relative rounded-2xl p-7 sm:p-8 flex flex-col justify-between transition-all {{ $pkg['popular'] ? 'bg-gradient-to-b from-[#13254c] to-[#0f1d3d] text-white border-2 border-blue-400/60 shadow-xl shadow-blue-950/15 lg:-translate-y-2' : 'bg-white text-slate-800 border border-blue-100 shadow-sm' }}">
                @if($pkg['popular'])
                <div class="absolute -top-3 left-7 px-3.5 py-0.5 rounded-full bg-sky-400 text-slate-950 text-[11px] font-bold">
                    {{ $pkg['badge'] ?? 'Rekomendasi' }}
                </div>
                @endif

                <div class="space-y-6">
                    <div>
                        <h3 class="font-display text-xl font-bold {{ $pkg['popular'] ? 'text-white' : 'text-slate-900' }}">
                            {{ $pkg['name'] }}
                        </h3>
                        <p class="text-xs sm:text-sm mt-1.5 leading-relaxed {{ $pkg['popular'] ? 'text-slate-300' : 'text-slate-500' }}">
                            {{ $pkg['description'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t {{ $pkg['popular'] ? 'border-blue-800/70' : 'border-slate-100' }}">
                        <span class="text-xs block {{ $pkg['popular'] ? 'text-sky-300' : 'text-slate-400' }}">Estimasi Biaya</span>
                        <div class="flex items-baseline gap-1.5 mt-1">
                            <span class="font-display text-3xl font-bold {{ $pkg['popular'] ? 'text-white' : 'text-slate-900' }}">
                                {{ $pkg['price'] }}
                            </span>
                            <span class="text-xs {{ $pkg['popular'] ? 'text-slate-300' : 'text-slate-500' }}">
                                / {{ $pkg['period'] }}
                            </span>
                        </div>
                    </div>

                    <ul class="space-y-2.5 pt-2 text-xs sm:text-sm {{ $pkg['popular'] ? 'text-slate-200' : 'text-slate-600' }}">
                        @foreach($pkg['features'] as $feat)
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 shrink-0 mt-0.5 {{ $pkg['popular'] ? 'text-sky-400' : 'text-blue-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>{{ $feat }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="pt-7 mt-7 border-t {{ $pkg['popular'] ? 'border-blue-800/70' : 'border-slate-100' }}">
                    <a href="https://wa.me/6281234567890?text=Halo%20Gunova%20Digital,%20saya%20ingin%20berkonsultasi%20mengenai%20paket%20aplikasi%20{{ urlencode($pkg['name']) }}"
                       target="_blank"
                       rel="noopener"
                       class="w-full inline-flex items-center justify-center gap-2 py-3 px-5 rounded-xl font-semibold text-sm text-center transition-colors {{ $pkg['popular'] ? 'bg-blue-500 hover:bg-blue-400 text-white shadow-md' : 'bg-blue-50 hover:bg-blue-100 text-blue-700' }}">
                        <span>{{ $pkg['cta'] }}</span>
                    </a>
                </div>
            </div>
            @endforeach

        </div>

        <!-- Soft Blue Consultation Strip -->
        <div class="rounded-2xl bg-[#eaf2ff] p-6 sm:p-8 border border-blue-200/80 flex flex-col md:flex-row items-center justify-between gap-5">
            <div class="space-y-1 text-center md:text-left">
                <h3 class="font-display text-base sm:text-lg font-bold text-slate-900">
                    Memiliki kebutuhan fitur khusus di luar paket di atas?
                </h3>
                <p class="text-xs sm:text-sm text-slate-600">
                    Ceritakan kebutuhan sistem atau proyek perusahaan Anda, kami siap menyusun estimasi biaya dan rincian teknis yang sesuai.
                </p>
            </div>
            <button @click="contactModalOpen = true"
                    type="button"
                    class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs sm:text-sm shrink-0 transition-colors cursor-pointer">
                Diskusikan Kebutuhan Kustom
            </button>
        </div>

    </div>
</section>

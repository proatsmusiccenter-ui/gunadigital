@props(['portfolios' => []])

<section id="portofolio" class="py-20 bg-[#101d38] text-white border-b border-blue-900/50 relative overflow-hidden">
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        <!-- Header & Filter Bar -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="space-y-2.5 max-w-2xl">
                <span class="inline-block px-3 py-1 rounded-full bg-blue-500/20 text-sky-300 border border-blue-400/30 text-xs font-semibold">Portofolio Proyek</span>
                <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-white">
                    Beberapa proyek yang telah kami kerjakan
                </h2>
                <p class="text-slate-300 text-sm sm:text-base">
                    Contoh implementasi website bisnis, katalog digital, dan aplikasi sistem informasi.
                </p>
            </div>

            <!-- Segmented Filter -->
            <div class="inline-flex p-1 rounded-xl bg-[#18294f] border border-blue-800/70 self-start lg:self-end">
                <button @click="activeServiceTab = 'all'"
                        :class="activeServiceTab === 'all' ? 'bg-blue-600 text-white shadow-xs' : 'text-slate-300 hover:text-white'"
                        class="px-4 py-2 rounded-lg text-xs font-semibold transition-all cursor-pointer">
                    Semua
                </button>
                <button @click="activeServiceTab = 'website'"
                        :class="activeServiceTab === 'website' ? 'bg-blue-600 text-white shadow-xs' : 'text-slate-300 hover:text-white'"
                        class="px-4 py-2 rounded-lg text-xs font-semibold transition-all cursor-pointer">
                    Website Bisnis
                </button>
                <button @click="activeServiceTab = 'aplikasi'"
                        :class="activeServiceTab === 'aplikasi' ? 'bg-blue-600 text-white shadow-xs' : 'text-slate-300 hover:text-white'"
                        class="px-4 py-2 rounded-lg text-xs font-semibold transition-all cursor-pointer">
                    Aplikasi & Sistem
                </button>
            </div>
        </div>

        <!-- Soft Navy Portfolio Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            @foreach($portfolios as $item)
            <div x-show="activeServiceTab === 'all' || activeServiceTab === '{{ $item['category'] }}'"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 class="bg-[#17284d] rounded-2xl overflow-hidden group flex flex-col justify-between border border-blue-800/60 hover:border-sky-400/60 shadow-lg transition-all">

                <!-- Image Frame -->
                <div class="relative overflow-hidden aspect-[16/10] bg-slate-900 border-b border-blue-900/50">
                    <img src="{{ $item['image'] }}"
                         alt="{{ $item['title'] }}"
                         loading="lazy"
                         class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-500">

                    <div class="absolute top-3 left-3 flex items-center gap-2">
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-semibold bg-[#101d38]/90 text-sky-300 border border-blue-700/60 backdrop-blur-xs">
                            {{ $item['category'] === 'website' ? 'Website' : 'Aplikasi' }}
                        </span>
                    </div>
                </div>

                <!-- Card Text Content -->
                <div class="p-6 flex flex-col flex-grow justify-between space-y-5">
                    <div class="space-y-2">
                        <span class="text-xs font-medium text-sky-300 block">{{ $item['tag'] }}</span>
                        <h3 class="font-display text-lg font-bold text-white group-hover:text-sky-300 transition-colors">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                            {{ $item['description'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-blue-800/60 flex items-center justify-between text-xs font-semibold">
                        <button @click="portfolioModal.show(@js($item))"
                                type="button"
                                class="text-slate-200 hover:text-sky-300 transition-colors cursor-pointer">
                            Lihat Detail
                        </button>

                        @if(!empty($item['link']) && $item['link'] !== '#')
                        <a href="{{ $item['link'] }}"
                           target="_blank"
                           rel="noopener"
                           class="text-sky-300 hover:text-white flex items-center gap-1">
                            <span>Kunjungi Situs</span>
                            <span>&rarr;</span>
                        </a>
                        @endif
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>

    <!-- Clean Modal Detail Proyek -->
    <div x-show="portfolioModal.open"
         x-cloak
         class="fixed inset-0 z-50 overflow-y-auto text-slate-800"
         style="display: none;">

        <div class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs transition-opacity"
             @click="portfolioModal.close()"></div>

        <div class="flex min-h-full items-center justify-center p-4">
            <div @click.away="portfolioModal.close()"
                 x-show="portfolioModal.open"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="relative w-full max-w-xl bg-white border border-slate-200 text-slate-800 rounded-2xl shadow-xl overflow-hidden">

                <template x-if="portfolioModal.item">
                    <div>
                        <div class="relative aspect-[16/9] w-full bg-slate-100 overflow-hidden">
                            <img :src="portfolioModal.item.image"
                                 :alt="portfolioModal.item.title"
                                 class="w-full h-full object-cover">

                            <button @click="portfolioModal.close()"
                                     type="button"
                                     class="absolute top-3 right-3 w-8 h-8 flex items-center justify-center rounded-full bg-white/90 text-slate-700 hover:bg-white shadow-xs transition-all cursor-pointer">
                                ✕
                            </button>
                        </div>

                        <div class="p-6 sm:p-7 space-y-4">
                            <div>
                                <span class="text-xs font-semibold text-blue-600" x-text="portfolioModal.item.tag"></span>
                                <h3 class="font-display text-xl sm:text-2xl font-bold text-slate-900 mt-0.5" x-text="portfolioModal.item.title"></h3>
                            </div>

                            <p class="text-slate-600 text-sm leading-relaxed" x-text="portfolioModal.item.description"></p>

                            <div class="flex flex-col sm:flex-row gap-2.5 pt-3 border-t border-slate-100">
                                <template x-if="portfolioModal.item.link && portfolioModal.item.link !== '#'">
                                    <a :href="portfolioModal.item.link"
                                       target="_blank"
                                       rel="noopener"
                                       class="flex-1 py-2.5 px-5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm text-center transition-colors">
                                        Kunjungi Situs
                                    </a>
                                </template>
                                <button @click="portfolioModal.close(); contactModalOpen = true"
                                        type="button"
                                        class="flex-1 py-2.5 px-5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-sm text-center transition-colors cursor-pointer">
                                    Diskusikan Proyek Serupa
                                </button>
                            </div>
                        </div>
                    </div>
                </template>

            </div>
        </div>
    </div>
</section>

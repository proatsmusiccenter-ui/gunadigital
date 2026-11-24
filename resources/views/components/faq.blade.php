@props(['faqs' => []])

<section id="faq" class="py-20 bg-white border-b border-slate-200/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

            <!-- Left Column -->
            <div class="lg:col-span-5 space-y-5">
                <span class="inline-block px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold">Pertanyaan Umum</span>
                <h2 class="font-display text-2xl sm:text-3xl font-bold text-slate-900 leading-tight">
                    Hal yang sering ditanyakan sebelum memulai proyek
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Informasi seputar proses pengerjaan, domain & server, hingga layanan pemeliharaan website dan aplikasi.
                </p>

                <!-- Royal Navy Support Box -->
                <div class="p-6 sm:p-7 rounded-2xl bg-gradient-to-br from-[#13254c] to-[#1e3a8a] text-white space-y-3 shadow-md">
                    <h3 class="text-base sm:text-lg font-bold text-white">
                        Ingin berkonsultasi langsung?
                    </h3>
                    <p class="text-xs sm:text-sm text-blue-100 leading-relaxed">
                        Tim kami siap membantu menjawab pertanyaan teknis maupun memberikan saran solusi yang paling tepat untuk bisnis Anda.
                    </p>
                    <div class="pt-2">
                        <a href="https://wa.me/6281234567890?text=Halo%20Gunova%20Digital,%20saya%20ingin%20bertanya%20mengenai%20layanan%20pembuatan%20website%20dan%20aplikasi"
                           target="_blank"
                           rel="noopener"
                           class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white hover:bg-blue-50 text-blue-800 font-semibold text-xs transition-colors">
                            <span>Hubungi via WhatsApp</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Soft Blue-Tinted Accordion -->
            <div class="lg:col-span-7 space-y-3">
                @foreach($faqs as $index => $faq)
                <div class="bg-[#f5f8ff] rounded-xl overflow-hidden border border-blue-100 transition-colors">
                    <button @click="toggleFaq({{ $index }})"
                            type="button"
                            class="w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-semibold text-slate-800 text-sm sm:text-base hover:text-blue-700 transition-colors cursor-pointer">
                        <span>{{ $faq['q'] }}</span>
                        <svg class="w-4 h-4 text-blue-500 shrink-0 transform transition-transform duration-200"
                             :class="activeFaq === {{ $index }} ? 'rotate-180 text-blue-700' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="activeFaq === {{ $index }}"
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         class="px-6 pb-5 text-sm text-slate-600 leading-relaxed border-t border-blue-100/80 pt-3.5 bg-white">
                        {{ $faq['a'] }}
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</section>

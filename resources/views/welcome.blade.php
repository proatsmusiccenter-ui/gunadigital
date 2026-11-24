<x-layouts.app>

    <x-hero :stats="$stats" />

    <x-services :services="$services" />

    <x-features />

    <x-portfolio :portfolios="$portfolios" />

    <x-pricing :packages="$packages" />

    <x-testimonials :testimonials="$testimonials" />

    <x-faq :faqs="$faqs" />

    <!-- Rich Royal Blue Call-to-Action Section -->
    <section class="py-16 bg-gradient-to-b from-white to-[#edf3ff]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl p-8 sm:p-12 bg-gradient-to-r from-[#13254c] via-[#1b356b] to-[#1e40af] text-white shadow-xl shadow-blue-950/15 flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="space-y-2.5 max-w-2xl text-center lg:text-left">
                    <span class="inline-block px-3 py-1 rounded-full bg-white/10 text-sky-200 text-xs font-semibold">Konsultasi Proyek</span>
                    <h2 class="font-display text-2xl sm:text-3xl font-bold text-white tracking-tight">
                        Siap mendiskusikan website atau aplikasi untuk bisnis Anda?
                    </h2>
                    <p class="text-blue-100 text-sm sm:text-base leading-relaxed">
                        Konsultasikan konsep, kebutuhan fitur, maupun estimasi anggaran bersama tim Gunova Digital tanpa biaya.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0 w-full sm:w-auto">
                    <button @click="contactModalOpen = true"
                            type="button"
                            class="w-full sm:w-auto px-6 py-3.5 rounded-xl font-semibold text-sm text-slate-900 bg-white hover:bg-blue-50 shadow-sm transition-colors cursor-pointer">
                        Mulai Konsultasi
                    </button>
                    <a href="https://wa.me/6281234567890?text=Halo%20Gunova%20Digital,%20saya%20ingin%20konsultasi%20pembuatan%20website%20dan%20aplikasi"
                       target="_blank"
                       rel="noopener"
                       class="w-full sm:w-auto px-6 py-3.5 rounded-xl font-semibold text-sm text-white bg-blue-600/60 hover:bg-blue-600 border border-blue-400/40 transition-colors text-center">
                        Chat via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>

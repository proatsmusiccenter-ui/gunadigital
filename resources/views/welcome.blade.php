<x-layouts.app>

    <x-hero :stats="$stats" />

    <x-services :services="$services" />

    <x-features />

    <x-portfolio :portfolios="$portfolios" />

    <x-pricing :packages="$packages" />

    <x-testimonials :testimonials="$testimonials" />

    <section class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-[36px] p-8 sm:p-14 lg:p-16 overflow-hidden bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 shadow-2xl shadow-blue-950/40 text-center space-y-6 border border-blue-500/20">

                <!-- Ambient Radial Lights -->
                <div class="absolute -top-24 -left-24 w-80 h-80 bg-blue-500/25 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-24 -right-24 w-80 h-80 bg-indigo-500/25 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 max-w-3xl mx-auto space-y-5">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-wider bg-white/10 text-blue-200 border border-white/20 backdrop-blur-md shimmer-badge">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>Siap Memulai Proyek Anda Hari Ini?</span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                        Wujudkan Website & Undangan Digital Impian Anda Bersama GunaDigital
                    </h2>
                    <p class="text-blue-100/90 text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl mx-auto font-normal">
                        Diskusikan konsep, kebutuhan desain, atau konsultasi gratis bersama tim kami. Dapatkan penawaran harga terbaik dan slot pengerjaan kilat 24-48 jam!
                    </p>
                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <button @click="contactModalOpen = true"
                                type="button"
                                class="w-full sm:w-auto px-8 py-4 rounded-2xl font-black text-slate-900 bg-white hover:bg-slate-50 shadow-2xl shadow-white/10 hover:scale-[1.02] transition-all">
                            Konsultasi Kebutuhan Gratis
                        </button>
                        <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20ingin%20tanya%20promo%20terbaru%20pembuatan%20website%20dan%20undangan%20digital"
                           target="_blank"
                           rel="noopener"
                           class="w-full sm:w-auto px-8 py-4 rounded-2xl font-black text-white bg-emerald-500 hover:bg-emerald-600 shadow-xl shadow-emerald-500/30 hover:scale-[1.02] transition-all flex items-center justify-center gap-2.5">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.311.045-.698.059-1.146-.073-.308-.09-.692-.224-1.211-.448-2.222-.962-3.666-3.218-3.777-3.367-.112-.149-.906-1.205-.906-2.298 0-1.094.574-1.632.778-1.854.204-.222.446-.278.595-.278.149 0 .298.002.428.008.139.007.324-.053.506.386.19.459.648 1.58.705 1.694.057.114.095.247.019.398-.076.152-.114.247-.228.38-.114.133-.24.298-.343.4-.114.114-.233.238-.101.465.133.227.591.975 1.267 1.579.871.777 1.605 1.018 1.833 1.132.228.114.362.095.495-.057.133-.152.572-.666.724-.894.152-.228.305-.19.513-.114.209.076 1.32.622 1.548.736.228.114.38.171.437.266.057.095.057.552-.087.957z"/>
                            </svg>
                            <span>Chat via WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-faq :faqs="$faqs" />
</x-layouts.app>

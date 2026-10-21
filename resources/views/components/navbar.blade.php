<header class="sticky top-0 z-40 w-full transition-all duration-300 bg-white/85 backdrop-blur-xl border-b border-slate-200/80 shadow-[0_2px_20px_-4px_rgba(15,23,42,0.06)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group py-1">
                <div class="relative w-11 h-11 rounded-2xl bg-gradient-to-tr from-blue-600 via-indigo-600 to-sky-500 p-0.5 shadow-md shadow-blue-500/20 group-hover:shadow-blue-500/40 group-hover:scale-105 transition-all duration-300">
                    <div class="w-full h-full bg-white rounded-[14px] flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600 group-hover:rotate-6 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-baseline">
                        <span class="text-xl font-black tracking-tight text-slate-900 font-sans">Guna</span>
                        <span class="text-xl font-black tracking-tight bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent font-sans">Digital</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-500 ml-0.5 animate-pulse"></span>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-600">Web & Digital Invitation</span>
                </div>
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-2 text-sm font-semibold text-slate-600 bg-slate-100/70 p-1.5 rounded-full border border-slate-200/70">
                <a href="{{ route('home') }}#layanan" class="px-4 py-1.5 rounded-full hover:text-blue-600 hover:bg-white transition-all">Layanan</a>
                <a href="{{ route('home') }}#keunggulan" class="px-4 py-1.5 rounded-full hover:text-blue-600 hover:bg-white transition-all">Keunggulan</a>
                <a href="{{ route('home') }}#portofolio" class="px-4 py-1.5 rounded-full hover:text-blue-600 hover:bg-white transition-all">Portofolio</a>
                <a href="{{ route('home') }}#harga" class="px-4 py-1.5 rounded-full hover:text-blue-600 hover:bg-white transition-all">Paket Harga</a>
            </nav>

            <!-- Actions -->
            <div class="hidden md:flex items-center gap-3">
                <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20ingin%20konsultasi%20jasa%20website%20atau%20undangan"
                   target="_blank"
                   rel="noopener"
                   class="p-2.5 rounded-xl text-emerald-600 hover:text-emerald-700 bg-emerald-50 hover:bg-emerald-100/80 border border-emerald-200/80 transition-all hover:scale-105"
                   title="WhatsApp Kami">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.311.045-.698.059-1.146-.073-.308-.09-.692-.224-1.211-.448-2.222-.962-3.666-3.218-3.777-3.367-.112-.149-.906-1.205-.906-2.298 0-1.094.574-1.632.778-1.854.204-.222.446-.278.595-.278.149 0 .298.002.428.008.139.007.324-.053.506.386.19.459.648 1.58.705 1.694.057.114.095.247.019.398-.076.152-.114.247-.228.38-.114.133-.24.298-.343.4-.114.114-.233.238-.101.465.133.227.591.975 1.267 1.579.871.777 1.605 1.018 1.833 1.132.228.114.362.095.495-.057.133-.152.572-.666.724-.894.152-.228.305-.19.513-.114.209.076 1.32.622 1.548.736.228.114.38.171.437.266.057.095.057.552-.087.957z"/>
                    </svg>
                </a>
                <button @click="contactModalOpen = true"
                        type="button"
                        class="flex items-center gap-2 px-5 py-2.5 rounded-xl font-bold text-sm bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 hover:from-blue-700 hover:to-indigo-800 text-white shadow-lg shadow-blue-600/25 hover:shadow-blue-600/40 hover:-translate-y-0.5 transition-all">
                    <span>Konsultasi Gratis</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </div>

            <div class="flex items-center gap-2 md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        type="button"
                        class="p-2 rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden border-b border-blue-100 bg-white/98 backdrop-blur-xl px-4 pt-3 pb-6 space-y-3">
        <a @click="mobileMenuOpen = false" href="{{ route('home') }}#layanan" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">Layanan</a>
        <a @click="mobileMenuOpen = false" href="{{ route('home') }}#keunggulan" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">Keunggulan</a>
        <a @click="mobileMenuOpen = false" href="{{ route('home') }}#portofolio" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">Portofolio</a>
        <a @click="mobileMenuOpen = false" href="{{ route('home') }}#harga" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">Paket Harga</a>
        <div class="pt-2">
            <button @click="contactModalOpen = true; mobileMenuOpen = false"
                    type="button"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold text-center shadow-lg shadow-blue-500/25">
                Konsultasi Gratis Sekarang
            </button>
        </div>
    </div>
</header>

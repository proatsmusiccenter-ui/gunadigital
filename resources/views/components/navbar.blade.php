<header class="sticky top-0 z-40 w-full transition-all duration-300 bg-white/85 backdrop-blur-xl border-b border-slate-200/80 shadow-[0_2px_20px_-4px_rgba(15,23,42,0.06)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center group py-1" title="GunaDigital - Web & Digital Invitation">
                <img src="{{ asset('images/logologo.png') }}?v={{ filemtime(public_path('images/logologo.png')) }}"
                     alt="GunaDigital"
                     class="h-8 sm:h-9 md:h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-2 text-sm font-semibold text-slate-600 bg-slate-100/70 p-1.5 rounded-full border border-slate-200/70">
                <a href="{{ route('home') }}#layanan" class="px-4 py-1.5 rounded-full hover:text-blue-600 hover:bg-white transition-all">Layanan</a>
                <a href="{{ route('home') }}#keunggulan" class="px-4 py-1.5 rounded-full hover:text-blue-600 hover:bg-white transition-all">Keunggulan</a>
                <a href="{{ route('home') }}#portofolio" class="px-4 py-1.5 rounded-full hover:text-blue-600 hover:bg-white transition-all">Portofolio</a>
                <a href="{{ route('home') }}#harga" class="px-4 py-1.5 rounded-full hover:text-blue-600 hover:bg-white transition-all">Paket Harga</a>
            </nav>

                <!-- WhatsApp Direct Icon Only -->
                <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20ingin%20konsultasi%20jasa%20website%20atau%20undangan"
                   target="_blank"
                   rel="noopener"
                   class="text-emerald-500 hover:text-emerald-600 hover:scale-110 transition-transform duration-300 p-1 flex items-center justify-center"
                   title="Chat WhatsApp Kami">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm0 18.09c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.134 8.134 0 01-1.25-4.32c0-4.5 3.66-8.16 8.16-8.16 2.18 0 4.23.85 5.77 2.39 1.54 1.54 2.39 3.59 2.39 5.77 0 4.5-3.66 8.17-8.16 8.17zm4.47-6.13c-.25-.12-1.45-.72-1.68-.8-.22-.08-.39-.12-.55.12-.17.25-.64.8-.79.96-.14.17-.29.19-.54.07-.25-.12-1.05-.39-2-1.23-.74-.66-1.23-1.48-1.38-1.73-.14-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.17-.25.25-.41.08-.17.04-.31-.02-.43s-.55-1.33-.76-1.82c-.2-.48-.41-.41-.56-.42h-.48c-.17 0-.43.06-.66.31-.22.25-.86.84-.86 2.05s.88 2.38 1 2.54c.12.17 1.74 2.65 4.2 3.71.59.25 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.45-.6 1.66-1.17.2-.58.2-1.07.14-1.17-.06-.11-.22-.17-.46-.3z"/>
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

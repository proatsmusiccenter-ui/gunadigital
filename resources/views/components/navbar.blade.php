<header class="sticky top-0 z-40 w-full bg-white/95 backdrop-blur-md border-b border-slate-200/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Brand Logo -->
            <a href="{{ route('home') }}" @click.prevent="navigateHome()" class="flex items-center py-1" title="Gunova Digital - Jasa Pembuatan Website & Aplikasi">
                <img src="{{ asset('images/logologo.png') }}?v={{ filemtime(public_path('images/logologo.png')) }}"
                     alt="Gunova Digital"
                     class="h-8 sm:h-9 md:h-10 w-auto object-contain">
            </a>

            <!-- Clean & Understated Navigation Links -->
            <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="{{ route('layanan') }}" @click.prevent="navigateSection('layanan')" class="hover:text-slate-900 transition-colors">
                    Layanan
                </a>
                <a href="{{ route('keunggulan') }}" @click.prevent="navigateSection('keunggulan')" class="hover:text-slate-900 transition-colors">
                    Keunggulan
                </a>
                <a href="{{ route('portofolio') }}" @click.prevent="navigateSection('portofolio')" class="hover:text-slate-900 transition-colors">
                    Portofolio
                </a>
                <a href="{{ route('harga') }}" @click.prevent="navigateSection('harga')" class="hover:text-slate-900 transition-colors">
                    Paket Harga
                </a>
                <a href="{{ route('about') }}" class="hover:text-slate-900 transition-colors">
                    Tentang Kami
                </a>
            </nav>

            <!-- Right Actions -->
            <div class="hidden md:flex items-center gap-3">
                <a href="{{ route('contact') }}"
                   class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                    Kontak
                </a>

                <button @click="contactModalOpen = true"
                        type="button"
                        class="px-5 py-2.5 rounded-xl font-semibold text-sm bg-blue-600 hover:bg-blue-700 text-white shadow-xs transition-colors cursor-pointer">
                    Konsultasi Proyek
                </button>
            </div>

            <!-- Mobile Hamburger -->
            <div class="flex items-center gap-2 md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        type="button"
                        class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-150"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden border-b border-slate-200 bg-white px-4 pt-2 pb-5 space-y-1">
        <a @click.prevent="navigateSection('layanan'); mobileMenuOpen = false" href="{{ route('layanan') }}" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-slate-50">
            Layanan
        </a>
        <a @click.prevent="navigateSection('keunggulan'); mobileMenuOpen = false" href="{{ route('keunggulan') }}" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-slate-50">
            Keunggulan
        </a>
        <a @click.prevent="navigateSection('portofolio'); mobileMenuOpen = false" href="{{ route('portofolio') }}" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-slate-50">
            Portofolio
        </a>
        <a @click.prevent="navigateSection('harga'); mobileMenuOpen = false" href="{{ route('harga') }}" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-slate-50">
            Paket Harga
        </a>
        <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-slate-50">
            Tentang Kami
        </a>
        <div class="pt-3">
            <button @click="contactModalOpen = true; mobileMenuOpen = false"
                    type="button"
                    class="w-full py-2.5 rounded-xl bg-blue-600 text-white font-semibold text-sm text-center">
                Konsultasi Proyek
            </button>
        </div>
    </div>
</header>

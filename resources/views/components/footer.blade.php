<footer class="bg-[#e8f0fe] text-slate-600 border-t border-blue-200/80 pt-14 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-10 border-b border-blue-200/60">

            <!-- Brand Info (4 Cols) -->
            <div class="lg:col-span-4 space-y-4">
                <a href="{{ route('home') }}" class="inline-block py-1" title="Gunova Digital - Jasa Pembuatan Website & Aplikasi">
                    <img src="{{ asset('images/logologo.png') }}?v={{ filemtime(public_path('images/logologo.png')) }}"
                         alt="Gunova Digital"
                         class="h-8 sm:h-9 w-auto object-contain">
                </a>

                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed max-w-sm">
                    Partner pengembangan website bisnis, company profile, toko online, serta aplikasi web dan mobile untuk perusahaan maupun UMKM di Indonesia.
                </p>
            </div>

            <!-- Solutions (3 Cols) -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Layanan</h4>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-600">
                    <li>
                        <a href="{{ route('layanan') }}" @click.prevent="navigateSection('layanan')" class="hover:text-blue-700 transition-colors">
                            Website Company Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" @click.prevent="navigateSection('layanan')" class="hover:text-blue-700 transition-colors">
                            Toko Online & E-Commerce
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" @click.prevent="navigateSection('layanan')" class="hover:text-blue-700 transition-colors">
                            Aplikasi Web & Sistem Internal
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" @click.prevent="navigateSection('layanan')" class="hover:text-blue-700 transition-colors">
                            Aplikasi Mobile Android & iOS
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Navigation & Legal (2 Cols) -->
            <div class="lg:col-span-2 space-y-3">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Informasi</h4>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-600">
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-blue-700 transition-colors">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}" class="hover:text-blue-700 transition-colors">
                            Syarat & Ketentuan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('refund') }}" class="hover:text-blue-700 transition-colors">
                            Kebijakan Garansi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('privacy') }}" class="hover:text-blue-700 transition-colors">
                            Kebijakan Privasi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('flyer') }}" target="_blank" class="hover:text-blue-700 transition-colors">
                            Brosur & Flyer
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info (3 Cols) -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Kontak</h4>
                <div class="space-y-2 text-xs sm:text-sm text-slate-600">
                    <div>
                        <span class="text-slate-500 text-xs block">WhatsApp:</span>
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="text-slate-800 hover:text-blue-700 font-semibold transition-colors">+62 812-3456-7890</a>
                    </div>
                    <div>
                        <span class="text-slate-500 text-xs block">Email:</span>
                        <a href="mailto:halo@gunovadigital.id" class="text-slate-800 hover:text-blue-700 font-semibold transition-colors">halo@gunovadigital.id</a>
                    </div>
                    <div>
                        <span class="text-slate-500 text-xs block">Jam Kerja:</span>
                        <span>Senin - Sabtu (08.00 - 21.00 WIB)</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>&copy; {{ date('Y') }} Gunova Digital. Seluruh Hak Cipta Dilindungi.</p>
            <div class="flex items-center gap-4">
                <a href="{{ route('about') }}" class="hover:text-slate-800">Tentang</a>
                <span>•</span>
                <a href="{{ route('contact') }}" class="hover:text-slate-800">Hubungi Kami</a>
            </div>
        </div>
    </div>
</footer>

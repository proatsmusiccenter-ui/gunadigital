<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $stats = [
            ['value' => '350+', 'label' => 'Proyek Selesai', 'sub' => 'Website & Aplikasi'],
            ['value' => '99.8%', 'label' => 'Kepuasan Klien', 'sub' => 'Review Bintang 5'],
            ['value' => '99.9%', 'label' => 'Uptime Server', 'sub' => 'Cloud Cepat & Aman'],
            ['value' => '100%', 'label' => 'Garansi Kualitas', 'sub' => 'Revisi & Maintenance'],
        ];

        $services = [
            [
                'id' => 'web-dev',
                'category' => 'website',
                'badge' => 'Website Bisnis',
                'icon' => 'globe',
                'title' => 'Pembuatan Website Profesional & Toko Online',
                'description' => 'Tingkatkan kredibilitas bisnis Anda dengan website modern, loading secepat kilat, SEO-friendly, dan desain responsif di semua perangkat.',
                'features' => [
                    'Company Profile Korporat, Instansi & UMKM',
                    'Landing Page Iklan Berkonversi Tinggi',
                    'Toko Online / E-Commerce dengan Payment Gateway',
                    'Kustom Desain Unik (Standar UI/UX Modern)',
                    'Integrasi WhatsApp, Google Maps, & Analitik',
                    'Optimasi SEO & Kecepatan Google PageSpeed 90+',
                ],
                'price_start' => 'Rp 499.000',
                'color' => 'indigo',
            ],
            [
                'id' => 'app-dev',
                'category' => 'aplikasi',
                'badge' => 'Aplikasi & Sistem',
                'icon' => 'cpu',
                'title' => 'Pengembangan Aplikasi Web, Sistem Informasi & Mobile',
                'description' => 'Otomasi operasional bisnis Anda dengan aplikasi web kustom, sistem informasi manajemen (ERP/POS/CRM), hingga aplikasi mobile Android & iOS.',
                'features' => [
                    'Custom Web Application & SaaS Platform',
                    'Sistem Informasi Manajemen (ERP, CRM, HRIS, POS Kasir)',
                    'Aplikasi Mobile Android & iOS (Cross-Platform)',
                    'Integrasi Payment Gateway, WhatsApp API & REST API',
                    'Dashboard Analitik Realtime & Export Laporan (PDF/Excel)',
                    'Keamanan Data Terenkripsi & Arsitektur Cloud Scalable',
                ],
                'price_start' => 'Rp 1.999.000',
                'color' => 'cyan',
            ],
        ];

        $portfolios = [
            [
                'id' => 1,
                'title' => 'Proats Music Center - Catalog Store',
                'category' => 'website',
                'tag' => 'E-Commerce & Digital Catalog',
                'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80',
                'description' => 'Platform katalog produk & instrumen musik digital modern dengan navigasi kategori terstruktur, showcase produk lengkap, dan integrasi pemesanan WhatsApp instan.',
                'link' => 'https://catalog.proatsmusiccenter.com/',
                'badge_color' => 'blue',
            ],
            [
                'id' => 2,
                'title' => 'Proats Music Center - Official Web',
                'category' => 'website',
                'tag' => 'Company Profile & Studio',
                'image' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=800&q=80',
                'description' => 'Website company profile resmi pusat alat musik, studio, dan training center dengan informasi layanan komprehensif, galeri kegiatan, dan konsultasi interaktif.',
                'link' => 'https://proatsmusiccenter.com/',
                'badge_color' => 'indigo',
            ],
            [
                'id' => 3,
                'title' => 'E-Voters.id - Online E-Voting System',
                'category' => 'aplikasi',
                'tag' => 'Web App & E-Voting Platform',
                'image' => 'https://images.unsplash.com/photo-1540910419892-4a36d2c3266c?auto=format&fit=crop&w=800&q=80',
                'description' => 'Platform aplikasi voting & pemilihan daring berbasis web dengan sistem verifikasi pemilih terpercaya, rekapitulasi data real-time transparan, dan antarmuka responsif.',
                'link' => 'https://e-voters.id/',
                'badge_color' => 'purple',
            ],
            [
                'id' => 4,
                'title' => 'Gunova POS & Inventory Cloud',
                'category' => 'aplikasi',
                'tag' => 'Point of Sale & ERP System',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
                'description' => 'Aplikasi kasir pintar dan manajemen inventori gudang multi-cabang berbasis cloud dengan pemantauan stok real-time, cetak struk thermal, serta laporan laba rugi otomatis.',
                'link' => '#',
                'badge_color' => 'cyan',
            ],
            [
                'id' => 5,
                'title' => 'MedikaCare - Sistem Informasi Klinik',
                'category' => 'aplikasi',
                'tag' => 'Healthcare Web & Mobile App',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
                'description' => 'Sistem informasi manajemen klinik terpadu mencakup booking antrean dokter online, rekam medis elektronik (EMR), manajemen stok apotek, dan billing terintegrasi.',
                'link' => '#',
                'badge_color' => 'emerald',
            ],
            [
                'id' => 6,
                'title' => 'Nusantara Logistics - Corporate & Tracking Web',
                'category' => 'website',
                'tag' => 'Corporate Web & Tracking Portal',
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80',
                'description' => 'Website korporat perusahaan ekspedisi & kargo nasional yang dilengkapi fitur pelacakan resi real-time, kalkulator ongkos kirim otomatis, dan portal kemitraan B2B.',
                'link' => '#',
                'badge_color' => 'blue',
            ],
        ];

        $packages = [
            'website' => [
                [
                    'name' => 'Landing Page Express',
                    'price' => 'Rp 499.000',
                    'period' => 'sekali bayar',
                    'popular' => false,
                    'description' => 'Sangat pas untuk promosi produk/jasa, kampanye iklan digital (Ads), UMKM, atau profil bisnis ringkas.',
                    'features' => [
                        '1 Halaman Panjang (Single Page High-Conversion)',
                        'Desain Modern & Mobile Responsive 100%',
                        'Integrasi Tombol WhatsApp & Media Sosial',
                        'Gratis Subdomain / Hubungkan Domain Anda',
                        'Pengerjaan Cepat 2-3 Hari Kerja',
                        'Garansi 2x Revisi Desain',
                    ],
                    'cta' => 'Pilih Paket Express',
                ],
                [
                    'name' => 'Business Pro',
                    'price' => 'Rp 999.000',
                    'period' => 'sekali bayar',
                    'popular' => true,
                    'badge' => 'Paling Diminati',
                    'description' => 'Pilihan utama perusahaan, instansi, konsultan, klinik, dan bisnis yang membutuhkan kredibilitas profesional.',
                    'features' => [
                        'Hingga 6 Halaman Lengkap (Home, About, Layanan, Portofolio, Kontak)',
                        'Gratis Domain .com / .id (1 Tahun)',
                        'Gratis Cloud Hosting Cepat & SSL Aman (1 Tahun)',
                        'Panel Admin CMS Mudah Kelola Konten Sendiri',
                        'Optimasi SEO On-Page & Google Indexing',
                        'Integrasi Google Maps & Formulir WhatsApp',
                        'Garansi Revisi Sepuasnya Selama Pembuatan',
                        'Panduan & Konsultasi Pengelolaan',
                    ],
                    'cta' => 'Pilih Paket Business Pro',
                ],
                [
                    'name' => 'E-Commerce & Custom Web',
                    'price' => 'Rp 1.899.000',
                    'period' => 'sekali bayar',
                    'popular' => false,
                    'description' => 'Website toko online atau portal korporat kustom dengan manajemen katalog produk dan sistem transaksi.',
                    'features' => [
                        'Katalog Produk & Kategori Tanpa Batas',
                        'Sistem Keranjang Belanja & Checkout WhatsApp / Payment Gateway',
                        'Gratis Domain .com / .id & Cloud Hosting Premium (1 Tahun)',
                        'Dashboard Admin Kelola Produk, Stok & Pesanan',
                        'Optimasi Kecepatan PageSpeed & Keamanan SSL',
                        'Pengerjaan 5-10 Hari Kerja',
                        'Prioritas Support & Garansi Maintenance',
                    ],
                    'cta' => 'Pilih Paket E-Commerce',
                ],
            ],
            'aplikasi' => [
                [
                    'name' => 'Starter Web App',
                    'price' => 'Rp 1.999.000',
                    'period' => 'sekali bayar',
                    'popular' => false,
                    'description' => 'Solusi aplikasi web internal untuk digitalisasi data, manajemen inventori, atau sistem administrasi bisnis.',
                    'features' => [
                        'Aplikasi Berbasis Web (Akses via Browser HP & Laptop)',
                        'Autentikasi Login & Manajemen Hak Akses (Multi-User)',
                        'Dashboard Statistik & Modul CRUD Data Kustom',
                        'Fitur Cetak & Export Laporan (PDF / Excel)',
                        'Desain UI/UX Dashboard Modern & Responsif',
                        'Gratis Setup Cloud Server & Domain (1 Tahun)',
                        'Garansi Bug Fixing & Pelatihan Penggunaan',
                    ],
                    'cta' => 'Pesan Starter Web App',
                ],
                [
                    'name' => 'Business System / SaaS Pro',
                    'price' => 'Rp 3.999.000',
                    'period' => 'sekali bayar',
                    'popular' => true,
                    'badge' => 'Paling Favorit',
                    'description' => 'Pengembangan aplikasi bisnis skala menengah seperti POS Kasir, Sistem Klinik, Booking Online, CRM, atau ERP.',
                    'features' => [
                        'Arsitektur Full-Stack Modern (Laravel / Node / React)',
                        'Alur Kerja Bisnis Kustom & Multi-Role Access Control',
                        'Integrasi Payment Gateway (QRIS, Virtual Account, E-Wallet)',
                        'Integrasi Notifikasi WhatsApp Otomatis & Email',
                        'Dashboard Analitik Realtime & Grafik Performa',
                        'REST API Ready & Dokumentasi Teknis',
                        'Gratis Cloud VPS Cepat & Domain .com/.id (1 Tahun)',
                        'Garansi Maintenance & Support Teknis 3 Bulan',
                    ],
                    'cta' => 'Pesan Aplikasi Pro',
                ],
                [
                    'name' => 'Enterprise & Mobile App',
                    'price' => 'Rp 7.500.000+',
                    'period' => 'sesuai ruang lingkup',
                    'popular' => false,
                    'description' => 'Solusi aplikasi skala besar atau aplikasi mobile Android & iOS terintegrasi backend cloud berkinerja tinggi.',
                    'features' => [
                        'Aplikasi Mobile Android & iOS (Flutter / React Native) + Web Admin',
                        'Arsitektur Cloud Scalable & Keamanan Tingkat Enterprise',
                        'Integrasi Pihak Ketiga Kompleks (ERP, Kurir, Maps, AI)',
                        'Push Notification Realtime & Sinkronisasi Data',
                        'Bantuan Publikasi ke Google Play Store & App Store',
                        'Source Code & Hak Milik Penuh (Full Ownership)',
                        'Dedicated Project Manager & SLA Support Prioritas',
                    ],
                    'cta' => 'Konsultasi Aplikasi Enterprise',
                ],
            ],
        ];

        $testimonials = [
            [
                'name' => 'Ferry Pratama',
                'role' => 'Owner Kafe & Roastery, Bandung',
                'service' => 'Website Company Profile',
                'rating' => 5,
                'content' => 'Pelayanan sangat memuaskan! Website bisnis saya selesai hanya dalam 3 hari, desainnya clean dan profesional. Banyak klien korporat baru masuk setelah melihat profil kami di Google.',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'name' => 'Hendra Kusuma, S.Kom',
                'role' => 'Direktur Operasional PT Mitra Logistik',
                'service' => 'Aplikasi Web ERP & Tracking',
                'rating' => 5,
                'content' => 'Sistem manajemen gudang dan aplikasi tracking yang dibangun tim Gunova Digital sangat stabil, cepat, dan mudah dipahami staf kami. Operasional harian kini jauh lebih efisien!',
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'name' => 'Anisa Rahmawati',
                'role' => 'Founder Hijab Fashion Boutique',
                'service' => 'Website & Aplikasi Toko Online',
                'rating' => 5,
                'content' => 'Sistem katalog e-commerce dan checkout otomatisnya bikin omzet naik 40%. Tim Gunova Digital juga sabar banget membimbing saya sampai paham kelola dashboard produk sendiri!',
                'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80',
            ],
        ];

        $faqs = [
            [
                'q' => 'Berapa lama estimasi proses pembuatan website dan aplikasi?',
                'a' => 'Untuk Landing Page dan Website Company Profile standar rata-rata selesai dalam 2-5 hari kerja setelah materi lengkap. Untuk Website E-Commerce berkisar 5-10 hari kerja, sedangkan pembuatan Aplikasi Web Kustom / Mobile App berkisar antara 2 hingga 6 minggu tergantung kompleksitas fitur.',
            ],
            [
                'q' => 'Apakah sudah termasuk domain (.com / .id) dan server hosting?',
                'a' => 'Tentu saja! Untuk paket Website Business Pro ke atas dan seluruh paket Pembuatan Aplikasi sudah termasuk gratis nama domain kustom (.com / .id) serta Cloud Hosting / VPS cepat lengkap dengan sertifikat keamanan SSL selama 1 tahun.',
            ],
            [
                'q' => 'Apakah saya bisa request fitur aplikasi sesuai alur bisnis perusahaan saya?',
                'a' => 'Sangat bisa! Tim developer kami berpengalaman membangun aplikasi kustom dari nol (tailor-made) sesuai SOP dan alur kerja bisnis Anda—mulai dari sistem kasir (POS), inventori gudang, manajemen klinik, sistem booking, hingga aplikasi mobile Android & iOS.',
            ],
            [
                'q' => 'Bagaimana jika setelah website atau aplikasi selesai ada revisi atau kendala teknis?',
                'a' => 'Kami memberikan garansi revisi sesuai paket yang dipilih hingga sistem berjalan sesuai kesepakatan, ditambah garansi maintenance gratis (bug fixing & pendampingan teknis) serta panduan lengkap pengelolaan dashboard admin.',
            ],
            [
                'q' => 'Apakah website dan aplikasi yang dibuat bisa diintegrasikan dengan Payment Gateway & WhatsApp?',
                'a' => 'Ya! Kami mendukung integrasi penuh dengan berbagai layanan pihak ketiga seperti Payment Gateway (QRIS, Virtual Account Bank, E-Wallet via Midtrans/Xendit), notifikasi WhatsApp otomatis, perhitungan ongkos kirim kurir, hingga REST API eksternal.',
            ],
            [
                'q' => 'Bagaimana sistem pembayarannya?',
                'a' => 'Sistem pembayaran sangat transparan dan bertahap. Pengerjaan dimulai setelah pembayaran DP minimal 50% di awal, dan pelunasan 50% sisanya dilakukan setelah website atau aplikasi selesai dipresentasikan pada tahap demo dan siap di-online-kan.',
            ],
        ];

        return view('welcome', compact('stats', 'services', 'portfolios', 'packages', 'testimonials', 'faqs'));
    }

    public function invitationDemo(): View
    {
        return view('invitations.demo');
    }

    public function flyer(): View
    {
        return view('pages.flyer');
    }
}

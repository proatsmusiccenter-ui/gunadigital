<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ContactMessage;
use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\PricingPackage;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {

        if (Portfolio::count() === 0) {
            $portfolios = [
                [
                    'title' => 'Proats Music Center - Catalog Store',
                    'category' => 'website',
                    'tag' => 'E-Commerce & Digital Catalog',
                    'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Platform katalog produk & instrumen musik digital modern dengan navigasi kategori terstruktur, showcase produk lengkap, dan integrasi pemesanan WhatsApp instan.',
                    'link' => 'https://catalog.proatsmusiccenter.com/',
                    'badge_color' => 'blue',
                    'is_featured' => true,
                    'order' => 1,
                ],
                [
                    'title' => 'Proats Music Center - Official Web',
                    'category' => 'website',
                    'tag' => 'Company Profile & Studio',
                    'image' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Website company profile resmi pusat alat musik, studio, dan training center dengan informasi layanan komprehensif, galeri kegiatan, dan konsultasi interaktif.',
                    'link' => 'https://proatsmusiccenter.com/',
                    'badge_color' => 'indigo',
                    'is_featured' => true,
                    'order' => 2,
                ],
                [
                    'title' => 'E-Voters.id - Online E-Voting System',
                    'category' => 'aplikasi',
                    'tag' => 'Web App & E-Voting Platform',
                    'image' => 'https://images.unsplash.com/photo-1540910419892-4a36d2c3266c?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Platform aplikasi voting & pemilihan daring berbasis web dengan sistem verifikasi pemilih terpercaya, rekapitulasi data transparan, dan antarmuka responsif.',
                    'link' => 'https://e-voters.id/',
                    'badge_color' => 'purple',
                    'is_featured' => true,
                    'order' => 3,
                ],
                [
                    'title' => 'Gunova POS & Inventory Cloud',
                    'category' => 'aplikasi',
                    'tag' => 'Point of Sale & ERP System',
                    'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Aplikasi kasir pintar dan manajemen inventori gudang multi-cabang berbasis cloud dengan pemantauan stok real-time, cetak struk thermal, serta laporan laba rugi otomatis.',
                    'link' => '#',
                    'badge_color' => 'cyan',
                    'is_featured' => true,
                    'order' => 4,
                ],
                [
                    'title' => 'MedikaCare - Sistem Informasi Klinik',
                    'category' => 'aplikasi',
                    'tag' => 'Healthcare Web & Mobile App',
                    'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Sistem informasi manajemen klinik terpadu mencakup booking antrean dokter online, rekam medis elektronik (EMR), manajemen stok apotek, dan billing terintegrasi.',
                    'link' => '#',
                    'badge_color' => 'emerald',
                    'is_featured' => true,
                    'order' => 5,
                ],
                [
                    'title' => 'Nusantara Logistics - Corporate & Tracking Web',
                    'category' => 'website',
                    'tag' => 'Corporate Web & Tracking Portal',
                    'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Website korporat perusahaan ekspedisi & kargo nasional yang dilengkapi fitur pelacakan resi real-time, kalkulator ongkos kirim otomatis, dan portal kemitraan B2B.',
                    'link' => '#',
                    'badge_color' => 'blue',
                    'is_featured' => true,
                    'order' => 6,
                ],
            ];

            foreach ($portfolios as $item) {
                Portfolio::create($item);
            }
        }

        if (PricingPackage::count() === 0) {
            $packages = [

                [
                    'category' => 'website',
                    'name' => 'Landing Page Express',
                    'price' => 'Rp 499.000',
                    'period' => 'sekali bayar',
                    'description' => 'Sangat pas untuk promosi produk tunggal, UMKM pemula, atau event promosi berdurasi tertentu.',
                    'features' => [
                        '1 Halaman Panjang (Single Page Modern)',
                        'Mobile Responsive 100%',
                        'Integrasi Tombol WhatsApp & Media Sosial',
                        'Gratis Subdomain / Hubungkan Domain Anda',
                        'Pengerjaan Cepat 2-3 Hari Kerja',
                        'Garansi 2x Revisi Desain',
                    ],
                    'is_popular' => false,
                    'badge' => null,
                    'cta_text' => 'Pilih Paket Express',
                    'order' => 1,
                ],
                [
                    'category' => 'website',
                    'name' => 'Business Pro',
                    'price' => 'Rp 999.000',
                    'period' => 'sekali bayar',
                    'description' => 'Pilihan utama bisnis, kantor hukum, konsultan, klinik, dan perusahaan yang butuh reputasi profesional.',
                    'features' => [
                        'Hingga 5 Halaman Lengkap (Home, About, Layanan, Galeri, Kontak)',
                        'Gratis Domain .com / .id (1 Tahun)',
                        'Gratis Cloud Hosting Cepat & Aman (1 Tahun)',
                        'Gratis Email Bisnis (info@bisnisanda.com)',
                        'Optimasi SEO Basic Google Indexing',
                        'Integrasi Google Maps & WhatsApp Form',
                        'Garansi Revisi Sepuasnya Selama Pembuatan',
                        'Panduan & Konsultasi Pengelolaan',
                    ],
                    'is_popular' => true,
                    'badge' => 'Paling Diminati',
                    'cta_text' => 'Pilih Paket Bisnis',
                    'order' => 2,
                ],
                [
                    'category' => 'website',
                    'name' => 'Toko Online & Custom Web',
                    'price' => 'Rp 1.899.000',
                    'period' => 'sekali bayar',
                    'description' => 'Sistem e-commerce atau portal web custom dengan pengelolaan produk, transaksi, dan integrasi kurir.',
                    'features' => [
                        'Katalog Produk Tanpa Batas',
                        'Sistem Keranjang Belanja & Checkout WhatsApp / Gateway',
                        'Gratis Domain .com / .id & Hosting Premium (1 Tahun)',
                        'Dashboard Kelola Produk & Pesanan Mandiri',
                        'Optimasi Kecepatan & Keamanan SSL',
                        'Pengerjaan 7-14 Hari Kerja',
                        'Prioritas Support 24/7 Selamanya',
                    ],
                    'is_popular' => false,
                    'badge' => null,
                    'cta_text' => 'Pilih Paket Toko Online',
                    'order' => 3,
                ],

                [
                    'category' => 'aplikasi',
                    'name' => 'Starter Web App',
                    'price' => 'Rp 1.999.000',
                    'period' => 'sekali bayar',
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
                    'is_popular' => false,
                    'badge' => null,
                    'cta_text' => 'Pesan Starter Web App',
                    'order' => 4,
                ],
                [
                    'category' => 'aplikasi',
                    'name' => 'Business System / SaaS Pro',
                    'price' => 'Rp 3.999.000',
                    'period' => 'sekali bayar',
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
                    'is_popular' => true,
                    'badge' => 'Paling Favorit',
                    'cta_text' => 'Pesan Aplikasi Pro',
                    'order' => 5,
                ],
                [
                    'category' => 'aplikasi',
                    'name' => 'Enterprise & Mobile App',
                    'price' => 'Rp 7.500.000+',
                    'period' => 'sesuai ruang lingkup',
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
                    'is_popular' => false,
                    'badge' => null,
                    'cta_text' => 'Konsultasi Aplikasi Enterprise',
                    'order' => 6,
                ],
            ];

            foreach ($packages as $pkg) {
                PricingPackage::create($pkg);
            }
        }

        if (Testimonial::count() === 0) {
            $testimonials = [
                [
                    'name' => 'Ferry Pratama',
                    'role' => 'Owner Kafe & Roastery, Bandung',
                    'service_name' => 'Website Company Profile',
                    'rating' => 5,
                    'content' => 'Pelayanan sangat memuaskan! Website bisnis saya selesai hanya dalam 3 hari, desainnya clean dan profesional. Banyak klien korporat baru masuk setelah melihat profil kami di Google.',
                    'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80',
                    'is_active' => true,
                    'order' => 1,
                ],
                [
                    'name' => 'Hendra Kusuma, S.Kom',
                    'role' => 'Direktur Operasional PT Mitra Logistik',
                    'service_name' => 'Aplikasi Web ERP & Tracking',
                    'rating' => 5,
                    'content' => 'Sistem manajemen gudang dan aplikasi tracking yang dibangun tim Gunova Digital sangat stabil, cepat, dan mudah dipahami staf kami. Operasional harian kini jauh lebih efisien!',
                    'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80',
                    'is_active' => true,
                    'order' => 2,
                ],
                [
                    'name' => 'Anisa Rahmawati',
                    'role' => 'Founder Hijab Fashion Boutique',
                    'service_name' => 'Website & Aplikasi Toko Online',
                    'rating' => 5,
                    'content' => 'Sistem katalog e-commerce dan checkout otomatisnya bikin omzet naik 40%. Tim Gunova Digital juga sabar banget membimbing saya sampai paham kelola dashboard produk sendiri!',
                    'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80',
                    'is_active' => true,
                    'order' => 3,
                ],
            ];

            foreach ($testimonials as $item) {
                Testimonial::create($item);
            }
        }

        if (Faq::count() === 0) {
            $faqs = [
                [
                    'question' => 'Berapa lama estimasi proses pembuatan website dan aplikasi?',
                    'answer' => 'Untuk Landing Page dan Website Company Profile standar rata-rata selesai dalam 2-5 hari kerja setelah materi lengkap. Untuk Website E-Commerce berkisar 5-10 hari kerja, sedangkan pembuatan Aplikasi Web Kustom / Mobile App berkisar antara 2 hingga 6 minggu tergantung kompleksitas fitur.',
                    'category' => 'general',
                    'is_active' => true,
                    'order' => 1,
                ],
                [
                    'question' => 'Apakah sudah termasuk domain (.com / .id) dan server hosting?',
                    'answer' => 'Tentu saja! Untuk paket Website Business Pro ke atas dan seluruh paket Pembuatan Aplikasi sudah termasuk gratis nama domain kustom (.com / .id) serta Cloud Hosting / VPS cepat lengkap dengan sertifikat keamanan SSL selama 1 tahun.',
                    'category' => 'website',
                    'is_active' => true,
                    'order' => 2,
                ],
                [
                    'question' => 'Apakah saya bisa request fitur aplikasi sesuai alur bisnis perusahaan saya?',
                    'answer' => 'Sangat bisa! Tim developer kami berpengalaman membangun aplikasi kustom dari nol (tailor-made) sesuai SOP dan alur kerja bisnis Anda—mulai dari sistem kasir (POS), inventori gudang, manajemen klinik, sistem booking, hingga aplikasi mobile Android & iOS.',
                    'category' => 'aplikasi',
                    'is_active' => true,
                    'order' => 3,
                ],
                [
                    'question' => 'Bagaimana jika setelah website atau aplikasi selesai ada revisi atau kendala teknis?',
                    'answer' => 'Kami memberikan garansi revisi sesuai paket yang dipilih hingga sistem berjalan sesuai kesepakatan, ditambah garansi maintenance gratis (bug fixing & pendampingan teknis) serta panduan lengkap pengelolaan dashboard admin.',
                    'category' => 'general',
                    'is_active' => true,
                    'order' => 4,
                ],
                [
                    'question' => 'Apakah website dan aplikasi yang dibuat bisa diintegrasikan dengan Payment Gateway & WhatsApp?',
                    'answer' => 'Ya! Kami mendukung integrasi penuh dengan berbagai layanan pihak ketiga seperti Payment Gateway (QRIS, Virtual Account Bank, E-Wallet via Midtrans/Xendit), notifikasi WhatsApp otomatis, perhitungan ongkos kirim kurir, hingga REST API eksternal.',
                    'category' => 'aplikasi',
                    'is_active' => true,
                    'order' => 5,
                ],
                [
                    'question' => 'Bagaimana sistem pembayarannya?',
                    'answer' => 'Sistem pembayaran sangat transparan dan bertahap. Pengerjaan dimulai setelah pembayaran DP minimal 50% di awal, dan pelunasan 50% sisanya dilakukan setelah website atau aplikasi selesai dipresentasikan pada tahap demo dan siap di-online-kan.',
                    'category' => 'general',
                    'is_active' => true,
                    'order' => 6,
                ],
            ];

            foreach ($faqs as $item) {
                Faq::create($item);
            }
        }

        if (ContactMessage::count() === 0) {
            $messages = [
                [
                    'name' => 'Budi Santoso',
                    'phone' => '081234567890',
                    'email' => 'budi.santoso@gmail.com',
                    'service_type' => 'website',
                    'budget' => 'Rp 1.000.000 - Rp 2.500.000',
                    'message' => 'Halo admin, saya butuh website company profile untuk kantor kontraktor interior di Surabaya. Apakah bisa selesai dalam 5 hari?',
                    'status' => 'new',
                    'admin_notes' => 'Perlu follow-up via WhatsApp untuk detail portofolio.',
                ],
                [
                    'name' => 'Dinda & Gilang',
                    'phone' => '085712345678',
                    'email' => 'dindagilang.wedding@gmail.com',
                    'service_type' => 'undangan',
                    'budget' => 'Rp 179.000 (Paket Gold)',
                    'message' => 'Halo, kami tertarik dengan undangan tema Rustic Gold untuk pernikahan bulan depan di Bandung. Mau tanya pilihan lagu romantisnya apa saja ya?',
                    'status' => 'contacted',
                    'admin_notes' => 'Sudah dikirimkan daftar katalog lagu via WA.',
                ],
                [
                    'name' => 'Hendro Wijaya',
                    'phone' => '087890123456',
                    'email' => 'hendro@wijayagroup.co.id',
                    'service_type' => 'website',
                    'budget' => '> Rp 3.000.000',
                    'message' => 'Selamat siang, kami memerlukan sistem katalog toko online sparepart otomotif dengan 200+ produk. Mohon proposal penawarannya.',
                    'status' => 'in_progress',
                    'admin_notes' => 'Proposal dikirimkan, menunggu konfirmasi DP.',
                ],
            ];

            foreach ($messages as $msg) {
                ContactMessage::create($msg);
            }
        }

        $settings = [
            'site_name' => 'Gunova Digital',
            'site_tagline' => 'Jasa Pembuatan Website & Aplikasi Profesional',
            'site_phone' => '0812-3456-7890',
            'site_whatsapp' => '6281234567890',
            'site_email' => 'halo@gunovadigital.id',
            'site_address' => 'Jl. Boulevard Raya No. 88, Jakarta Selatan, DKI Jakarta 12950',
            'site_instagram' => 'https://instagram.com/gunovadigital',
            'site_facebook' => 'https://facebook.com/gunovadigital',
            'meta_description' => 'Jasa pembuatan website profesional, company profile, toko online e-commerce, serta pengembangan aplikasi web, sistem informasi, dan aplikasi mobile terbaik di Indonesia.',
        ];

        foreach ($settings as $key => $val) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $val]);
        }
    }
}

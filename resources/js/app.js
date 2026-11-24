import Alpine from 'alpinejs';
import { createIcons, icons } from 'lucide';

// Make Lucide available
window.refreshIcons = () => {
    createIcons({ icons });
};

document.addEventListener('alpine:init', () => {
    Alpine.data('landingApp', () => ({
        // Dark Mode - default to light
        darkMode: localStorage.getItem('theme') === 'dark',
        toggleTheme() {
            this.darkMode = !this.darkMode;
            localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        },

        // Nav Mobile Menu
        mobileMenuOpen: false,

        // Service & Portfolio Tabs
        activeServiceTab: 'all', // 'all', 'website', 'aplikasi'
        activePricingTab: 'website', // 'website', 'aplikasi'

        // Interactive App & Website Mockup
        invitationMockup: {
            activeMode: 'aplikasi', // 'aplikasi' or 'website'
            activeModule: 'overview', // 'overview', 'orders', 'api'
            revenueToday: 'Rp 18.450.000',
            ordersCount: 42,
            serverLatency: '14ms',
            orders: [
                { id: '#INV-2841', client: 'PT Sinar Abadi', type: 'Checkout QRIS', amount: 'Rp 2.450.000', status: 'Lunas' },
                { id: '#INV-2840', client: 'CV Maju Bersama', type: 'Virtual Account', amount: 'Rp 5.800.000', status: 'Lunas' },
                { id: '#INV-2839', client: 'Toko Berkah Jaya', type: 'Transfer Bank', amount: 'Rp 1.200.000', status: 'Diproses' }
            ],
            simulateOrder() {
                this.ordersCount++;
                const id = '#INV-' + (2800 + this.ordersCount);
                this.orders.unshift({
                    id,
                    client: 'Pelanggan Baru #' + this.ordersCount,
                    type: 'QRIS Realtime',
                    amount: 'Rp 1.500.000',
                    status: 'Lunas'
                });
                if (this.orders.length > 4) {
                    this.orders.pop();
                }
            }
        },

        // Portfolio Preview Modal
        portfolioModal: {
            open: false,
            item: null,
            show(portfolioItem) {
                this.item = portfolioItem;
                this.open = true;
                setTimeout(() => window.refreshIcons(), 50);
            },
            close() {
                this.open = false;
                this.item = null;
            }
        },

        // Contact Modal
        contactModalOpen: false,
        consultationForm: {
            name: '',
            phone: '',
            service: 'website',
            budget: 'standar',
            notes: '',
            submit() {
                const targetPhone = '6281234567890';
                const serviceLabel = this.service === 'website' ? 'Pembuatan Website' : (this.service === 'aplikasi' ? 'Pembuatan Aplikasi & Sistem' : 'Keduanya (Website & Aplikasi)');
                let text = `Halo Gunova Digital! Saya ingin konsultasi:%0A%0A`;
                text += `👤 *Nama:* ${encodeURIComponent(this.name)}%0A`;
                text += `📱 *WhatsApp:* ${encodeURIComponent(this.phone)}%0A`;
                text += `🎯 *Layanan:* ${encodeURIComponent(serviceLabel)}%0A`;
                text += `💼 *Budget Perkiraan:* ${encodeURIComponent(this.budget)}%0A`;
                if (this.notes) {
                    text += `📝 *Catatan Kebutuhan:* ${encodeURIComponent(this.notes)}%0A`;
                }
                window.open(`https://wa.me/${targetPhone}?text=${text}`, '_blank');
            }
        },

        // Active FAQ accordion item
        activeFaq: null,
        toggleFaq(index) {
            this.activeFaq = this.activeFaq === index ? null : index;
        },

        // Clean URL Section Navigation (No # Hash)
        navigateSection(sectionId) {
            const target = document.getElementById(sectionId);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
                window.history.pushState(null, '', '/' + sectionId);
            } else {
                window.location.href = '/' + sectionId;
            }
        },

        navigateHome() {
            if (window.location.pathname === '/' || ['/layanan', '/keunggulan', '/portofolio', '/harga', '/faq'].includes(window.location.pathname)) {
                window.scrollTo({ top: 0, behavior: 'smooth' });
                window.history.pushState(null, '', '/');
            } else {
                window.location.href = '/';
            }
        },

        init() {
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
            this.invitationMockup.init();

            // Auto scroll if navigated directly to clean path like /keunggulan, /layanan, /portofolio, /harga, /faq
            const path = window.location.pathname.replace(/^\/+/g, '').replace(/\/+$/g, '');
            if (['layanan', 'keunggulan', 'portofolio', 'harga', 'faq'].includes(path)) {
                this.$nextTick(() => {
                    setTimeout(() => {
                        const target = document.getElementById(path);
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth' });
                        }
                    }, 150);
                });
            }

            // Handle browser Back/Forward navigation smoothly
            window.addEventListener('popstate', () => {
                const currentPath = window.location.pathname.replace(/^\/+/g, '').replace(/\/+$/g, '');
                if (['layanan', 'keunggulan', 'portofolio', 'harga', 'faq'].includes(currentPath)) {
                    document.getElementById(currentPath)?.scrollIntoView({ behavior: 'smooth' });
                } else if (currentPath === '') {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            });

            // Refresh icons after Alpine initializes
            this.$nextTick(() => {
                window.refreshIcons();
            });
        }
    }));
});

window.Alpine = Alpine;
Alpine.start();

// Initialize icons on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    window.refreshIcons();
});

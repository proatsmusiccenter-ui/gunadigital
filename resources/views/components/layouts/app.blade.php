<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Gunova Digital - Jasa Pembuatan Website & Aplikasi Bisnis' }}</title>
    <meta name="description" content="Jasa pembuatan website profesional, company profile, toko online e-commerce, serta pengembangan aplikasi web dan mobile untuk bisnis di Indonesia.">
    <meta name="keywords" content="jasa pembuatan website, jasa pembuatan aplikasi, software house indonesia, pembuatan web aplikasi, company profile, website toko online">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Gunova Digital - Jasa Pembuatan Website & Aplikasi">
    <meta property="og:description" content="Mitra pengembangan website bisnis dan aplikasi kustom dengan desain bersih, performa cepat, dan layanan terpercaya.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}?v={{ filemtime(public_path('images/favicon.png')) }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v={{ filemtime(public_path('favicon.ico')) }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}?v={{ filemtime(public_path('images/favicon.png')) }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="landingApp" class="bg-[#f8fafc] text-slate-800 font-sans antialiased selection:bg-blue-600 selection:text-white relative overflow-x-hidden min-h-screen">

    <div class="relative z-10 flex flex-col min-h-screen">

        @include('components.navbar')

        <main class="flex-grow">
            {{ $slot }}
        </main>

        @include('components.footer')
        @include('components.contact-modal')
    </div>

    <!-- Clean & Soft Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890?text=Halo%20Gunova%20Digital,%20saya%20ingin%20berkonsultasi%20mengenai%20pembuatan%20website%20/%20aplikasi"
       target="_blank"
       rel="noopener"
       aria-label="Chat WhatsApp"
       class="fixed bottom-6 right-6 z-40 flex items-center gap-2.5 bg-white hover:bg-slate-50 text-slate-800 px-4 py-2.5 rounded-full shadow-[0_8px_30px_rgb(15,23,42,0.10)] border border-slate-200/90 hover:-translate-y-0.5 transition-all duration-200">
        <span class="w-8 h-8 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm0 18.09c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.134 8.134 0 01-1.25-4.32c0-4.5 3.66-8.16 8.16-8.16 2.18 0 4.23.85 5.77 2.39 1.54 1.54 2.39 3.59 2.39 5.77 0 4.5-3.66 8.17-8.16 8.17zm4.47-6.13c-.25-.12-1.45-.72-1.68-.8-.22-.08-.39-.12-.55.12-.17.25-.64.8-.79.96-.14.17-.29.19-.54.07-.25-.12-1.05-.39-2-1.23-.74-.66-1.23-1.48-1.38-1.73-.14-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.17-.25.25-.41.08-.17.04-.31-.02-.43s-.55-1.33-.76-1.82c-.2-.48-.41-.41-.56-.42h-.48c-.17 0-.43.06-.66.31-.22.25-.86.84-.86 2.05s.88 2.38 1 2.54c.12.17 1.74 2.65 4.2 3.71.59.25 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.45-.6 1.66-1.17.2-.58.2-1.07.14-1.17-.06-.11-.22-.17-.46-.3z"/>
            </svg>
        </span>
        <span class="text-xs font-semibold text-slate-700 pr-1 hidden sm:inline">Tanya via WhatsApp</span>
    </a>
</body>
</html>

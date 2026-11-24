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
</body>
</html>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Desa Gondowangi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.07)',
                    }
                }
            }
        }
    </script>
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dropdown-menu {
            transform-origin: top;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .group:hover .dropdown-menu {
            opacity: 1;
            transform: scaleY(1);
            visibility: visible;
        }
        .dropdown-menu {
            opacity: 0;
            transform: scaleY(0);
            visibility: hidden;
            position: absolute;
        }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-800 antialiased selection:bg-brand-500 selection:text-white flex flex-col min-h-screen">

    <nav class="glass-nav fixed w-full top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-brand-500 to-brand-700 rounded-xl flex items-center justify-center text-white shadow-lg shadow-brand-500/30 group-hover:shadow-brand-500/50 transition-all duration-300 group-hover:scale-105">
                    <i class="fa-solid fa-leaf text-lg"></i>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-xl tracking-tight text-slate-900 leading-none">Desa<span class="text-brand-600">Gondowangi</span></span>
                    <span class="text-[10px] uppercase tracking-widest text-slate-500 font-medium mt-0.5">Sistem Informasi Digital</span>
                </div>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8 text-[15px] font-medium text-slate-600">
                <a href="{{ route('home') }}" class="hover:text-brand-600 transition-colors {{ request()->routeIs('home') ? 'text-brand-600 font-semibold' : '' }}">Beranda</a>
                
                <!-- Profil Dropdown -->
                <div class="relative group h-20 flex items-center">
                    <button class="hover:text-brand-600 transition-colors flex items-center gap-1.5 focus:outline-none">
                        Profil <i class="fa-solid fa-chevron-down text-xs text-slate-400 group-hover:text-brand-500 transition-transform group-hover:-rotate-180 duration-300"></i>
                    </button>
                    <div class="dropdown-menu top-20 left-1/2 -translate-x-1/2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-3 mt-1">
                        <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-slate-100"></div>
                        <div class="relative bg-white z-10 flex flex-col">
                            <a href="{{ route('profil', 'sejarah') }}" class="px-5 py-2.5 hover:bg-slate-50 hover:text-brand-600 transition-colors flex items-center gap-3"><i class="fa-solid fa-clock-rotate-left w-4 text-brand-500"></i> Sejarah</a>
                            <a href="{{ route('profil', 'visi-misi') }}" class="px-5 py-2.5 hover:bg-slate-50 hover:text-brand-600 transition-colors flex items-center gap-3"><i class="fa-solid fa-bullseye w-4 text-brand-500"></i> Visi Misi</a>
                            <a href="{{ route('profil', 'geografis') }}" class="px-5 py-2.5 hover:bg-slate-50 hover:text-brand-600 transition-colors flex items-center gap-3"><i class="fa-solid fa-map-location-dot w-4 text-brand-500"></i> Geografis</a>
                            <a href="{{ route('profil', 'demografis') }}" class="px-5 py-2.5 hover:bg-slate-50 hover:text-brand-600 transition-colors flex items-center gap-3"><i class="fa-solid fa-users w-4 text-brand-500"></i> Demografis</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('layanan') }}" class="hover:text-brand-600 transition-colors {{ request()->routeIs('layanan') ? 'text-brand-600 font-semibold' : '' }}">Layanan Publik</a>

                <!-- Informasi Dropdown -->
                <div class="relative group h-20 flex items-center">
                    <button class="hover:text-brand-600 transition-colors flex items-center gap-1.5 focus:outline-none">
                        Informasi <i class="fa-solid fa-chevron-down text-xs text-slate-400 group-hover:text-brand-500 transition-transform group-hover:-rotate-180 duration-300"></i>
                    </button>
                    <div class="dropdown-menu top-20 left-1/2 -translate-x-1/2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-3 mt-1">
                        <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-slate-100"></div>
                        <div class="relative bg-white z-10 flex flex-col">
                            <a href="{{ route('informasi', 'pengumuman') }}" class="px-5 py-2.5 hover:bg-slate-50 hover:text-brand-600 transition-colors flex items-center gap-3"><i class="fa-solid fa-bullhorn w-4 text-brand-500"></i> Pengumuman</a>
                            <a href="{{ route('informasi', 'berita') }}" class="px-5 py-2.5 hover:bg-slate-50 hover:text-brand-600 transition-colors flex items-center gap-3"><i class="fa-solid fa-newspaper w-4 text-brand-500"></i> Berita Terkini</a>
                            <a href="{{ route('informasi', 'agenda') }}" class="px-5 py-2.5 hover:bg-slate-50 hover:text-brand-600 transition-colors flex items-center gap-3"><i class="fa-regular fa-calendar-check w-4 text-brand-500"></i> Agenda Kegiatan</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('keuangan') }}" class="hover:text-brand-600 transition-colors {{ request()->routeIs('keuangan') ? 'text-brand-600 font-semibold' : '' }}">Keuangan</a>
                
                <!-- Action Button -->
                <a href="{{ route('suarahati') }}" class="ml-4 bg-slate-900 hover:bg-brand-600 text-white px-6 py-2.5 rounded-full transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/30 flex items-center gap-2 font-semibold">
                    <i class="fa-solid fa-comment-dots"></i> SuaraHati
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-300 pt-20 pb-10 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 32px 32px;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-12 gap-12 lg:gap-8 mb-16 border-b border-slate-800 pb-16">
                <div class="md:col-span-5 lg:col-span-4 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-brand-500 rounded-xl flex items-center justify-center text-white">
                            <i class="fa-solid fa-leaf text-lg"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-xl text-white">Desa<span class="text-brand-500">Gondowangi</span></span>
                        </div>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-400">Portal resmi Desa Gondowangi, Kecamatan Wagir. Mewujudkan tata kelola pemerintahan desa yang transparan, akuntabel, dan inovatif melalui digitalisasi pelayanan publik.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white transition-all duration-300"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white transition-all duration-300"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white transition-all duration-300"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="md:col-span-3 lg:col-span-2 lg:col-start-6 space-y-6">
                    <h3 class="text-white font-bold text-lg">Pintasan</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-brand-400 transition-colors">Beranda</a></li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-brand-400 transition-colors">Layanan Publik</a></li>
                        <li><a href="{{ route('keuangan') }}" class="hover:text-brand-400 transition-colors">Transparansi Keuangan</a></li>
                        <li><a href="{{ route('suarahati') }}" class="hover:text-brand-400 transition-colors">Lapor SuaraHati</a></li>
                    </ul>
                </div>

                <div class="md:col-span-4 lg:col-span-4 space-y-6">
                    <h3 class="text-white font-bold text-lg">Hubungi Kami</h3>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-brand-500"></i>
                            <span>Jl. Raya Pusat Desa No. 1, Gondowangi, Wagir, Malang, Jawa Timur 65158</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-brand-500"></i>
                            <span>(0341) 555-0123</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-brand-500"></i>
                            <span>halo@gondowangi.desa.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-slate-500">
                <p>&copy; 2024 Pemerintah Desa Gondowangi. All rights reserved.</p>
                <p class="mt-2 md:mt-0">Powered by SIDG Team</p>
            </div>
        </div>
    </footer>
</body>
</html>

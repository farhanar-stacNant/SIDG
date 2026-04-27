@extends('Home.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[85vh] min-h-[600px] flex items-center justify-center text-center text-white overflow-hidden">
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-slate-900/60 via-slate-900/40 to-slate-900/80"></div>
        <img src="https://images.unsplash.com/photo-1596422846543-74c6fc1e0066?auto=format&fit=crop&q=80&w=2000" class="absolute inset-0 w-full h-full object-cover" alt="Hero">
        <div class="relative z-20 px-4 max-w-5xl mx-auto flex flex-col items-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-8 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-brand-400 animate-pulse"></span>
                <span class="text-sm font-medium text-brand-50 tracking-wide">Portal Resmi Desa Gondowangi</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight tracking-tight drop-shadow-xl">
                Sinergi Membangun <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 to-brand-500">Desa Digital</span>
            </h1>
            <p class="max-w-2xl mx-auto mb-12 text-lg md:text-xl text-slate-200 font-light leading-relaxed drop-shadow-md">
                Akses layanan administratif, pantau transparansi keuangan, dan suarakan aspirasi Anda dengan mudah dan cepat.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                <a href="{{ route('layanan') }}" class="bg-brand-600 hover:bg-brand-500 text-white px-8 py-4 rounded-xl transition-all duration-300 font-bold shadow-lg shadow-brand-500/30 flex items-center justify-center gap-3 group">
                    Jelajahi Layanan <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="{{ route('keuangan') }}" class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 text-white px-8 py-4 rounded-xl transition-all duration-300 font-bold flex items-center justify-center gap-3">
                    Info Publik
                </a>
            </div>
        </div>
    </section>

    <!-- Sambutan Section -->
    <section class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-brand-500 to-brand-300 rounded-[2rem] blur-xl opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative rounded-[2rem] overflow-hidden aspect-[4/5] shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800" alt="Kepala Desa" class="w-full h-full object-cover scale-105 group-hover:scale-100 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent flex items-end p-8">
                        <div class="text-white">
                            <p class="font-bold text-xl">Danis Setya Budi Nugroho</p>
                            <p class="text-brand-300 text-sm font-medium">Kepala Desa Gondowangi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 text-brand-600 font-bold tracking-widest text-sm uppercase">
                    <i class="fa-solid fa-quote-left text-xl opacity-50"></i> Sambutan
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">Mewujudkan Desa<br><span class="text-brand-600">Maju & Sejahtera</span></h2>
                <div class="space-y-6 text-lg text-slate-600 leading-relaxed font-light">
                    <p>"Assalamualaikum Warahmatullahi Wabarakatuh. Puji syukur kita panjatkan kehadirat Tuhan Yang Maha Esa. Selamat datang di portal resmi Desa Gondowangi."</p>
                    <p>Kami berkomitmen untuk mewujudkan tata kelola pemerintahan desa yang transparan, akuntabel, dan inovatif. Melalui sistem ini, kami berharap warga dapat merasakan pelayanan yang prima tanpa batas waktu dan birokrasi yang rumit.</p>
                </div>
                <div class="pt-6 border-t border-slate-200">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f6/Signature_of_Joko_Widodo.svg" class="h-16 opacity-60 mix-blend-multiply" alt="Tanda Tangan">
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Highlight Section -->
    <section class="bg-slate-900 py-24 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute -top-[20%] -right-[10%] w-[50%] h-[50%] rounded-full bg-brand-600/20 blur-[120px]"></div>
            <div class="absolute -bottom-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-blue-600/20 blur-[120px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-brand-500 font-bold tracking-widest text-sm uppercase mb-3">Layanan Digital</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-white mb-6">Akses Cepat Layanan Desa</h3>
                <p class="text-slate-400 text-lg">Pilih layanan administratif yang Anda butuhkan tanpa perlu antre di kantor desa.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                @php
                    $layanan = [
                        ['title' => 'Pengajuan Kartu Keluarga', 'desc' => 'Buat pengurusan surat KK baru, pisah, atau perubahan data.', 'icon' => 'fa-users-rectangle', 'color' => 'from-blue-500 to-blue-600'],
                        ['title' => 'Pengajuan Akta Kelahiran', 'desc' => 'Layanan penerbitan akta kelahiran secara terintegrasi.', 'icon' => 'fa-baby', 'color' => 'from-brand-500 to-brand-600'],
                        ['title' => 'Administrasi KTP', 'desc' => 'Pengurusan KTP elektronik baru, hilang atau rusak.', 'icon' => 'fa-id-card', 'color' => 'from-purple-500 to-purple-600']
                    ];
                @endphp
                @foreach($layanan as $l)
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br {{ $l['color'] }} flex items-center justify-center text-white text-2xl mb-6 shadow-lg">
                        <i class="fa-solid {{ $l['icon'] }}"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">{{ $l['title'] }}</h4>
                    <p class="text-slate-400 mb-8 line-clamp-2">{{ $l['desc'] }}</p>
                    <a href="{{ route('layanan') }}" class="inline-flex items-center gap-2 text-brand-400 font-semibold group-hover:text-brand-300 transition-colors">
                        Mulai Pengajuan <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>
                @endforeach
            </div>
            
            <div class="mt-12 text-center">
                <a href="{{ route('layanan') }}" class="inline-flex items-center gap-2 text-white bg-white/10 hover:bg-white/20 px-6 py-3 rounded-full font-medium transition-colors border border-white/10 backdrop-blur-sm">
                    Lihat Semua Layanan
                </a>
            </div>
        </div>
    </section>

    <!-- Profil Mini Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Kenali <span class="text-brand-600">Desa Kami</span></h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Telusuri lebih dalam tentang sejarah, geografis, dan potensi Desa Gondowangi.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                @php
                    $profilItems = [
                        ['title' => 'Sejarah Desa', 'slug' => 'sejarah', 'icon' => 'fa-landmark', 'color' => 'bg-amber-50 text-amber-600 group-hover:bg-amber-500'],
                        ['title' => 'Visi & Misi', 'slug' => 'visi-misi', 'icon' => 'fa-rocket', 'color' => 'bg-blue-50 text-blue-600 group-hover:bg-blue-500'],
                        ['title' => 'Geografis', 'slug' => 'geografis', 'icon' => 'fa-map-location-dot', 'color' => 'bg-brand-50 text-brand-600 group-hover:bg-brand-500'],
                        ['title' => 'Demografis', 'slug' => 'demografis', 'icon' => 'fa-chart-pie', 'color' => 'bg-purple-50 text-purple-600 group-hover:bg-purple-500']
                    ];
                @endphp
                @foreach($profilItems as $item)
                <a href="{{ route('profil.' . $item['slug']) }}" class="group block bg-slate-50 border border-slate-100 rounded-3xl p-6 sm:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center">
                    <div class="w-16 h-16 mx-auto rounded-2xl flex items-center justify-center text-2xl mb-5 {{ $item['color'] }} group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid {{ $item['icon'] }}"></i>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg">{{ $item['title'] }}</h3>
                </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection
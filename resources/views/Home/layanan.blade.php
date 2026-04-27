@extends('Home.layouts.app')

@section('content')
<div class="bg-slate-50 relative overflow-hidden py-24 min-h-[80vh]">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-brand-200/50 rounded-full blur-3xl opacity-50 mix-blend-multiply"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[30rem] h-[30rem] bg-blue-200/50 rounded-full blur-3xl opacity-50 mix-blend-multiply"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-20">
            <span class="text-brand-600 font-bold tracking-widest text-sm uppercase mb-4 block"><i class="fa-solid fa-server mr-2"></i> E-Layanan Desa</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">Pelayanan Publik Digital</h1>
            <p class="text-lg text-slate-500 font-light">Kami terus berinovasi memberikan pelayanan yang cepat, mudah, dan transparan. Silakan pilih layanan yang Anda butuhkan tanpa perlu antre.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $layanan_list = [
                    ['title' => 'KTP Baru & Hilang', 'icon' => 'fa-id-card', 'desc' => 'Layanan pembuatan KTP elektronik baru, penggantian rusak, atau hilang dengan proses cepat.', 'color' => 'brand'],
                    ['title' => 'Kartu Keluarga', 'icon' => 'fa-users-rectangle', 'desc' => 'Pendaftaran KK baru, penambahan anggota, atau pembaruan data kependudukan.', 'color' => 'blue'],
                    ['title' => 'Akta Kelahiran', 'icon' => 'fa-baby', 'desc' => 'Pengurusan akta kelahiran anak agar terdata resmi dalam administrasi negara.', 'color' => 'purple'],
                    ['title' => 'Surat Pengantar Nikah', 'icon' => 'fa-ring', 'desc' => 'Penerbitan surat N1-N4 sebagai syarat utama pendaftaran pernikahan di KUA.', 'color' => 'pink'],
                    ['title' => 'Keterangan Usaha', 'icon' => 'fa-store', 'desc' => 'SKU untuk keperluan pendaftaran UMKM, perbankan, atau penerimaan bantuan.', 'color' => 'amber'],
                    ['title' => 'SKTM / Bantuan Sosial', 'icon' => 'fa-hand-holding-heart', 'desc' => 'Pengajuan SKTM untuk subsidi pendidikan, kesehatan, dan bantuan sosial.', 'color' => 'teal']
                ];
            @endphp

            @foreach($layanan_list as $l)
            <div class="bg-white border border-slate-100 rounded-[2rem] p-8 hover:-translate-y-2 hover:shadow-2xl hover:shadow-{{ $l['color'] }}-500/20 transition-all duration-300 group relative overflow-hidden flex flex-col h-full cursor-pointer">
                <div class="absolute top-0 right-0 p-6 opacity-5 group-hover:opacity-10 transition-opacity transform group-hover:scale-125 duration-500">
                    <i class="fa-solid {{ $l['icon'] }} text-8xl text-{{ $l['color'] }}-600"></i>
                </div>
                
                <div class="w-16 h-16 rounded-2xl bg-{{ $l['color'] }}-50 text-{{ $l['color'] }}-600 flex items-center justify-center text-2xl mb-8 group-hover:bg-{{ $l['color'] }}-600 group-hover:text-white transition-colors duration-300 shadow-sm relative z-10">
                    <i class="fa-solid {{ $l['icon'] }}"></i>
                </div>
                
                <h3 class="text-xl font-bold text-slate-900 mb-4 relative z-10 group-hover:text-{{ $l['color'] }}-700 transition-colors">{{ $l['title'] }}</h3>
                <p class="text-slate-500 text-sm mb-8 flex-grow leading-relaxed relative z-10">{{ $l['desc'] }}</p>
                
                <div class="pt-6 border-t border-slate-100 relative z-10">
                    <span class="inline-flex items-center text-sm font-bold text-slate-400 group-hover:text-{{ $l['color'] }}-600 transition-colors">
                        Mulai Pengajuan <i class="fa-solid fa-arrow-right ml-2 text-xs opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300"></i>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

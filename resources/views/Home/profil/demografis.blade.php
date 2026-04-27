@extends('Home.layouts.app')
@section('content')
<div class="bg-[#1a1a1a] text-white py-20 px-4">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10">Profil Demografis</h2>
        <div class="grid md:grid-cols-3 gap-8 items-center">
            <div class="bg-white/10 p-10 rounded-2xl border border-white/20">
                <i class="fa fa-users text-4xl mb-4 text-green-400"></i>
                <div class="text-5xl font-bold mb-2">4,250</div>
                <div class="uppercase text-xs tracking-widest opacity-60">Total Penduduk</div>
            </div>
            <div class="bg-white/10 p-10 rounded-2xl border border-white/20">
                <h4 class="text-sm mb-6 uppercase">Distribusi Gender</h4>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex-1 text-center"><div class="text-2xl font-bold">51%</div><div class="text-[10px] opacity-60 uppercase">Laki-Laki</div></div>
                    <div class="w-px h-10 bg-white/20"></div>
                    <div class="flex-1 text-center"><div class="text-2xl font-bold">49%</div><div class="text-[10px] opacity-60 uppercase">Perempuan</div></div>
                </div>
            </div>
            <div class="bg-white/10 p-10 rounded-2xl border border-white/20 text-left">
                <h4 class="text-sm mb-4 uppercase">Mata Pencaharian Utama</h4>
                <div class="space-y-3">
                    @foreach(['Pertanian' => 65, 'PNS / Swasta' => 15, 'UMKM' => 20] as $job => $val)
                    <div>
                        <div class="flex justify-between text-xs mb-1"><span>{{ $job }}</span><span>{{ $val }}%</span></div>
                        <div class="w-full bg-white/20 h-1.5 rounded-full overflow-hidden"><div class="bg-green-400 h-full" @style(["width: {$val}%"])></div></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
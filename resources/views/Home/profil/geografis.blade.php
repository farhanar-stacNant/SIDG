@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto py-16 px-4 grid md:grid-cols-2 gap-12 items-center">
    <div class="bg-gray-100 rounded-3xl p-4 shadow-inner">
        <div class="aspect-video bg-gray-300 rounded-2xl flex items-center justify-center italic text-gray-500">Peta Lokasi Desa</div>
    </div>
    <div>
        <h2 class="text-4xl font-bold mb-6">Letak <span class="text-green-600">Geografis</span></h2>
        <p class="text-gray-600 mb-8 leading-relaxed">Secara administratif, desa kami terletak di wilayah dataran tinggi dengan iklim yang sejuk, menjadikannya lokasi ideal untuk agrikultur dan pariwisata.</p>
        <div class="space-y-6">
            <div class="flex items-start gap-4 p-4 border rounded-xl">
                <i class="fa fa-map-marker-alt text-green-600 mt-1"></i>
                <div><h4 class="font-bold">Luas Wilayah</h4><p class="text-sm text-gray-500">1.250 Hektar (Terdiri dari Hutan, Sawah, dan Pemukiman)</p></div>
            </div>
            <div class="flex items-start gap-4 p-4 border rounded-xl">
                <i class="fa fa-compass text-green-600 mt-1"></i>
                <div><h4 class="font-bold">Batas Wilayah</h4><p class="text-sm text-gray-500">Utara: Desa Mekarsari | Selatan: Kawasan Hutan Lindung</p></div>
            </div>
        </div>
    </div>
</div>
@endsection
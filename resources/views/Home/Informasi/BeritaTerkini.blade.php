@extends('Home.layouts.app')
@section('content')
<div class="max-w-7xl mx-auto py-12 px-4">
    <h2 class="text-3xl font-bold mb-8">Berita <span class="text-green-600">Desa</span></h2>
    
    <div class="grid md:grid-cols-3 gap-8">
        <div class="md:col-span-2">
            <div class="relative group overflow-hidden rounded-2xl mb-6">
                <img src="https://via.placeholder.com/800x450" class="w-full h-[400px] object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                    <span class="bg-green-600 w-fit px-3 py-1 rounded text-xs mb-3">Pembangunan</span>
                    <h3 class="text-2xl font-bold mb-2">Pembangunan Irigasi Modern Tahap II Resmi Dimulai Untuk Kesejahteraan Petani</h3>
                    <p class="text-sm opacity-80">12 Mei 2024 | Admin Desa</p>
                </div>
            </div>
        </div>
        <div class="space-y-6">
            <h4 class="font-bold border-b pb-2">Berita Populer</h4>
            @foreach([1, 2, 3] as $i)
            <div class="flex gap-4 items-center">
                <div class="w-20 h-20 bg-gray-200 rounded-lg flex-shrink-0"></div>
                <div>
                    <h5 class="font-bold text-sm leading-snug">Festival Budaya Desa Gondowangi 2024 Berlangsung Meriah</h5>
                    <p class="text-[10px] text-gray-400 mt-1">10 Oktober 2024</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
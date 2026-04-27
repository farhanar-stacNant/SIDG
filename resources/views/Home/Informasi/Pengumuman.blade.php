@extends('Home.layouts.app')
@section('content')
<div class="max-w-7xl mx-auto py-12 px-4">
    <div class="flex justify-between items-end mb-8 border-b pb-4">
        <div>
            <h2 class="text-3xl font-bold text-gray-800">Pengumuman <span class="text-green-600">Resmi</span></h2>
            <p class="text-gray-500">Informasi penting terkait kegiatan dan kebijakan Desa Gondowangi.</p>
        </div>
        <div class="flex gap-2">
            <button class="bg-gray-100 px-4 py-2 rounded-md text-sm border">Filter</button>
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
            <div class="p-6">
                <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full uppercase">Penting</span>
                <h3 class="text-xl font-bold mt-4 mb-2">Musyawarah Perencanaan Pembangunan Desa (Musrenbangdes) 2025</h3>
                <div class="flex items-center text-gray-400 text-sm gap-4 mb-4">
                    <span><i class="fa fa-calendar mr-1"></i> 28 Oktober 2024</span>
                    <span><i class="fa fa-user mr-1"></i> Sekretaris Desa</span>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">Pemerintah Desa mengundang seluruh elemen masyarakat untuk hadir dalam rapat koordinasi penyusunan rencana kerja pemerintah desa tahun anggaran mendatang...</p>
                <a href="#" class="text-green-600 font-bold text-sm hover:underline">Baca Selengkapnya &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection
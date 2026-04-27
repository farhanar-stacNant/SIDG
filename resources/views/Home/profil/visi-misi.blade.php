@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto py-16 px-4">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold">Visi & <span class="text-green-600">Misi</span></h2>
        <p class="text-gray-500 mt-2">Arah strategis pembangunan desa untuk mewujudkan kesejahteraan bagi seluruh warga.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-green-900 text-white p-10 rounded-2xl shadow-xl flex flex-col justify-center">
            <i class="fa fa-eye text-4xl mb-6"></i>
            <h3 class="text-2xl font-bold mb-4">Visi</h3>
            <p class="italic opacity-90 text-lg">"Menjadi desa digital mandiri yang unggul dalam tata kelola, ekonomi kreatif, dan pelestarian lingkungan berbasis kearifan lokal pada tahun 2030."</p>
        </div>
        <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach(['Transformasi Digital', 'Pemberdayaan Ekonomi', 'SDM Unggul', 'Lingkungan Lestari'] as $misi)
            <div class="bg-white p-8 rounded-2xl border hover:border-green-500 transition shadow-sm">
                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mb-4 text-green-600">
                    <i class="fa fa-check"></i>
                </div>
                <h4 class="font-bold text-xl mb-2">{{ $misi }}</h4>
                <p class="text-gray-500 text-sm">Mewujudkan tata kelola yang transparan dan akuntabel melalui sistem informasi desa terpadu.</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
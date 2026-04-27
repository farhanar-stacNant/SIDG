@extends('Home.layouts.app')
@section('content')
<div class="max-w-7xl mx-auto py-12 px-4">
    <div class="grid md:grid-cols-3 gap-8">
        <div class="md:col-span-2 bg-white p-8 border rounded-2xl shadow-sm">
            <h2 class="text-2xl font-bold mb-6">Agenda Kegiatan Desa</h2>
            <div class="grid grid-cols-7 gap-2 text-center text-sm mb-4">
                @foreach(['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'] as $hari)
                    <div class="font-bold text-gray-400 py-2">{{ $hari }}</div>
                @endforeach
                @for($i = 1; $i <= 30; $i++)
                    <div class="py-3 border rounded-lg hover:bg-green-50 cursor-pointer {{ $i == 28 ? 'bg-green-600 text-white font-bold' : '' }}">
                        {{ $i }}
                    </div>
                @endfor
            </div>
        </div>
        <div class="space-y-4">
            <h3 class="font-bold text-lg">Kegiatan Terdekat</h3>
            <div class="p-4 bg-green-50 border-l-4 border-green-600 rounded-r-lg">
                <p class="text-xs text-green-700 font-bold">28 OKTOBER 2024</p>
                <h4 class="font-bold text-sm">Musrenbangdes 2025</h4>
                <p class="text-xs text-gray-500 mt-1"><i class="fa fa-clock mr-1"></i> 09:00 - Selesai</p>
                <p class="text-xs text-gray-500"><i class="fa fa-map-marker mr-1"></i> Balai Desa</p>
            </div>
        </div>
    </div>
</div>
@endsection
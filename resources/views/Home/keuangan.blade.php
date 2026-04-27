@extends('Home.layouts.app')

@section('content')
<div class="bg-slate-50 py-24 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 text-brand-600 font-bold tracking-widest text-sm uppercase mb-4">
                <i class="fa-solid fa-chart-line text-lg"></i> Transparansi Publik
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">Anggaran Pendapatan dan Belanja Desa 2024</h1>
            <p class="text-slate-500 text-lg">Komitmen kami untuk mewujudkan tata kelola keuangan desa yang terbuka, jujur, dan dapat dipertanggungjawabkan kepada seluruh masyarakat.</p>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-white p-10 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5">
                    <i class="fa-solid fa-coins text-9xl"></i>
                </div>
                <h3 class="font-bold text-2xl text-slate-800 mb-8 relative z-10 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                    Ikhtisar APBDes
                </h3>
                <div class="space-y-10 relative z-10">
                    <div class="group">
                        <div class="flex justify-between items-end mb-3">
                            <div>
                                <span class="block text-sm font-bold text-slate-500 uppercase tracking-wider mb-1">Total Pendapatan</span>
                                <span class="text-3xl font-extrabold text-slate-900 group-hover:text-brand-600 transition-colors">Rp 2.450.000.000</span>
                            </div>
                            <span class="text-sm font-bold text-brand-600 bg-brand-50 px-3 py-1 rounded-full">Target 2024</span>
                        </div>
                        <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden shadow-inner">
                            <div class="bg-gradient-to-r from-brand-400 to-brand-600 h-full rounded-full w-[90%] relative overflow-hidden">
                                <div class="absolute inset-0 bg-white/20" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.1) 10px, rgba(255,255,255,0.1) 20px);"></div>
                            </div>
                        </div>
                        <p class="text-xs text-slate-400 mt-2 font-medium">Tercapai 90% dari target tahunan</p>
                    </div>
                    
                    <div class="group">
                        <div class="flex justify-between items-end mb-3">
                            <div>
                                <span class="block text-sm font-bold text-slate-500 uppercase tracking-wider mb-1">Total Belanja</span>
                                <span class="text-3xl font-extrabold text-slate-900 group-hover:text-blue-600 transition-colors">Rp 2.380.000.000</span>
                            </div>
                            <span class="text-sm font-bold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Alokasi 2024</span>
                        </div>
                        <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden shadow-inner">
                            <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-full rounded-full w-[85%] relative overflow-hidden">
                                <div class="absolute inset-0 bg-white/20" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.1) 10px, rgba(255,255,255,0.1) 20px);"></div>
                            </div>
                        </div>
                        <p class="text-xs text-slate-400 mt-2 font-medium">Terserap 85% dari total alokasi</p>
                    </div>
                </div>
            </div>
            
            <div class="space-y-8">
                <div class="bg-gradient-to-br from-brand-600 to-slate-900 p-10 rounded-[2rem] text-white text-center flex flex-col justify-center shadow-xl shadow-brand-900/20 relative overflow-hidden h-full">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-brand-500 rounded-full blur-3xl opacity-50"></div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 mx-auto bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center mb-6 border border-white/20">
                            <i class="fa-solid fa-chart-pie text-4xl text-brand-300"></i>
                        </div>
                        <div class="text-7xl font-extrabold mb-2 tracking-tighter">75<span class="text-4xl text-brand-300">%</span></div>
                        <p class="text-lg font-medium text-slate-200 mb-6">Realisasi Keseluruhan</p>
                        
                        <a href="#" class="inline-flex items-center justify-center gap-2 w-full bg-white text-slate-900 hover:bg-brand-50 hover:text-brand-700 font-bold py-4 rounded-xl transition-all duration-300 shadow-lg">
                            <i class="fa-regular fa-file-pdf text-red-500"></i> Unduh Laporan Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('Home.layouts.app')

@section('content')
<div class="bg-slate-50 relative overflow-hidden py-24 min-h-screen">
    <!-- Decor Background -->
    <div class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-brand-500/10 rounded-full blur-[100px] -z-0 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-brand-100 text-brand-600 mb-6 text-2xl shadow-inner">
                <i class="fa-solid fa-bullhorn"></i>
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4 tracking-tight">Suara Hati Masyarakat</h1>
            <p class="text-lg text-slate-500">Sampaikan aspirasi, keluhan, atau ide kreatif Anda. Kami hadir untuk mendengar dan melayani demi kemajuan desa kita bersama.</p>
        </div>

        <div class="grid lg:grid-cols-12 gap-10">
            <!-- Form Card -->
            <div class="lg:col-span-8 bg-white rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 p-8 md:p-12">
                <h3 class="text-2xl font-bold text-slate-800 mb-8 pb-4 border-b border-slate-100"><i class="fa-solid fa-pen-to-square text-brand-500 mr-2"></i> Form Pengaduan Online</h3>
                
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">Nomor Induk Kependudukan (NIK)</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fa-regular fa-id-card text-slate-400"></i>
                                </div>
                                <input type="text" placeholder="16 Digit NIK Sesuai KTP" class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all text-sm font-medium">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">Nama Lengkap</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fa-regular fa-user text-slate-400"></i>
                                </div>
                                <input type="text" placeholder="Sesuai KTP" class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all text-sm font-medium">
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700">Kategori Laporan</label>
                        <div class="relative">
                            <select class="w-full pl-4 pr-10 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all text-sm font-medium appearance-none cursor-pointer">
                                <option disabled selected>Pilih Kategori Terkait...</option>
                                <option>Infrastruktur & Fasilitas Umum</option>
                                <option>Pelayanan Aparatur Desa</option>
                                <option>Keamanan & Ketertiban</option>
                                <option>Bantuan Sosial & Kesehatan</option>
                                <option>Lainnya</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <i class="fa-solid fa-chevron-down text-slate-400 text-xs"></i>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700">Detail Pesan / Aspirasi</label>
                        <textarea placeholder="Ceritakan keluhan atau masukan Anda secara detail di sini..." class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl h-40 focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all text-sm font-medium resize-none"></textarea>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700">Lampiran Bukti Foto (Jika Ada)</label>
                        <div class="border-2 border-dashed border-slate-200 rounded-2xl p-8 text-center bg-slate-50 hover:bg-brand-50 hover:border-brand-300 transition-colors cursor-pointer group">
                            <div class="w-16 h-16 mx-auto bg-white rounded-full shadow-sm flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-cloud-arrow-up text-brand-500 text-xl"></i>
                            </div>
                            <p class="text-sm font-bold text-slate-700">Klik untuk mengunggah atau seret file ke sini</p>
                            <p class="text-xs text-slate-500 mt-2">Mendukung format JPG, PNG (Maksimal 2MB)</p>
                        </div>
                    </div>

                    <button type="button" class="w-full bg-slate-900 hover:bg-brand-600 text-white font-bold py-4 rounded-xl transition-all duration-300 shadow-lg shadow-slate-900/20 hover:shadow-brand-500/30 flex items-center justify-center gap-2">
                        <i class="fa-regular fa-paper-plane"></i> Kirim Laporan Sekarang
                    </button>
                </form>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-4 space-y-8">
                <!-- Info Status -->
                <div class="bg-white rounded-[2rem] shadow-lg shadow-slate-200/40 border border-slate-100 p-8">
                    <h4 class="font-bold text-slate-800 text-lg mb-6 flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        Lacak Laporan
                    </h4>
                    <p class="text-sm text-slate-500 mb-4">Masukkan kode tiket (Tracking ID) yang Anda terima setelah melapor.</p>
                    <div class="flex gap-2">
                        <input type="text" placeholder="Misal: TIK-9921" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all font-medium uppercase tracking-wider">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 rounded-xl font-bold transition-colors">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Terms Notice -->
                <div class="bg-amber-50 rounded-[2rem] border border-amber-100 p-8 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-amber-200 rounded-full blur-2xl opacity-50"></div>
                    <h4 class="font-bold text-amber-800 text-lg mb-4 flex items-center gap-2 relative z-10">
                        <i class="fa-solid fa-shield-halved text-amber-600"></i> Ketentuan Laporan
                    </h4>
                    <ul class="space-y-3 text-sm text-amber-900/80 font-medium relative z-10">
                        <li class="flex gap-3"><i class="fa-solid fa-check mt-1 text-amber-500"></i> Laporan diteruskan ke Kepala Desa & tim terkait.</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check mt-1 text-amber-500"></i> Estimasi tindak lanjut adalah 3x24 jam kerja.</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check mt-1 text-amber-500"></i> Identitas pelapor dijamin kerahasiaannya.</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check mt-1 text-amber-500"></i> Harap berikan laporan dengan data dan fakta sebenarnya.</li>
                    </ul>
                </div>

                <!-- Emergency Contact -->
                <div class="bg-slate-900 rounded-[2rem] p-8 text-white relative overflow-hidden shadow-xl shadow-slate-900/30">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
                    <div class="relative z-10">
                        <h4 class="font-bold text-lg mb-6 pb-4 border-b border-white/10 flex items-center gap-2">
                            <i class="fa-solid fa-phone-volume text-red-400"></i> Kontak Darurat
                        </h4>
                        <div class="space-y-5 text-sm font-medium">
                            <a href="tel:110" class="flex items-center justify-between p-3 rounded-xl bg-white/5 hover:bg-white/10 transition-colors border border-white/5">
                                <span class="flex items-center gap-3"><i class="fa-solid fa-building-shield text-slate-400"></i> Polsek Wagir</span>
                                <span class="text-white font-bold bg-white/10 px-3 py-1 rounded-lg">110</span>
                            </a>
                            <a href="tel:119" class="flex items-center justify-between p-3 rounded-xl bg-white/5 hover:bg-white/10 transition-colors border border-white/5">
                                <span class="flex items-center gap-3"><i class="fa-solid fa-truck-medical text-slate-400"></i> Puskesmas</span>
                                <span class="text-white font-bold bg-white/10 px-3 py-1 rounded-lg">119</span>
                            </a>
                            <a href="tel:113" class="flex items-center justify-between p-3 rounded-xl bg-white/5 hover:bg-white/10 transition-colors border border-white/5">
                                <span class="flex items-center gap-3"><i class="fa-solid fa-fire-extinguisher text-slate-400"></i> Pemadam</span>
                                <span class="text-white font-bold bg-white/10 px-3 py-1 rounded-lg">113</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

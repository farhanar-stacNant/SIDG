@extends('Home.layouts.app')

@section('content')
<!-- Header Banner -->
<div class="relative bg-slate-900 py-20 mt-[-5rem] pt-[10rem] overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1505322022379-7c3353ee6291?auto=format&fit=crop&q=80&w=2000" alt="Sejarah" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full bg-brand-500/20 text-brand-300 font-bold text-sm tracking-widest uppercase mb-4 border border-brand-500/30 backdrop-blur-sm">Profil Desa</span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">Sejarah Gondowangi</h1>
        <p class="text-xl text-slate-300 font-light max-w-2xl mx-auto">Menelusuri jejak masa lalu, melestarikan budaya, dan melangkah menuju masa depan yang cerah.</p>
    </div>
</div>

<div class="bg-slate-50 py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">
        <div class="bg-white rounded-[2rem] shadow-xl shadow-slate-200/50 p-8 md:p-14 border border-slate-100 -mt-24 relative z-20">
            <div class="prose prose-lg prose-slate max-w-none prose-headings:font-bold prose-headings:text-slate-800 prose-a:text-brand-600 prose-img:rounded-2xl">
                <p class="lead text-2xl text-slate-600 font-light leading-relaxed mb-10 text-center border-b border-slate-100 pb-10">
                    Desa Gondowangi memiliki sejarah panjang yang berkaitan erat dengan perkembangan wilayah Kecamatan Wagir, Kabupaten Malang. Secara harfiah, <strong>"Gondo"</strong> berarti harum dan <strong>"Wangi"</strong> berarti wangi.
                </p>

                <div class="my-12 relative">
                    <div class="absolute inset-0 bg-brand-50 rounded-2xl transform rotate-1"></div>
                    <img src="https://images.unsplash.com/photo-1590055531615-f16d36ffe8ea?auto=format&fit=crop&q=80&w=1000" alt="Ilustrasi Sejarah" class="relative z-10 rounded-2xl shadow-lg w-full object-cover h-80 transform -rotate-1 hover:rotate-0 transition-transform duration-500">
                </div>

                <h3 class="text-2xl mt-12 mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center"><i class="fa-solid fa-seedling"></i></span>
                    Awal Mula Pendirian Desa
                </h3>
                <p>
                    Menurut cerita turun-temurun para sesepuh desa, kawasan Gondowangi mulai dirintis pada sekitar abad ke-18 oleh beberapa tokoh pendatang yang melakukan babat alas. Pemilihan kawasan ini bukan tanpa alasan; tanahnya yang sangat subur, curah hujan yang baik, serta melimpahnya sumber mata air menjadikannya lokasi yang ideal untuk membangun permukiman dan lahan pertanian baru.
                </p>
                <p>
                    Penamaan "Gondowangi" diyakini berasal dari kondisi alam desa pada masa lampau, yang dipenuhi oleh pepohonan rindang dan beraneka ragam bunga liar yang mekar sepanjang tahun, menyebarkan aroma harum semerbak hingga ke desa-desa tetangga.
                </p>

                <h3 class="text-2xl mt-12 mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center"><i class="fa-solid fa-timeline"></i></span>
                    Perkembangan Era Modern
                </h3>
                <p>
                    Seiring berjalannya waktu, Desa Gondowangi berkembang pesat menjadi desa yang mandiri. Sistem pemerintahan tradisional yang dipimpin oleh tetua adat perlahan bertransformasi mengikuti sistem administrasi pemerintahan Republik Indonesia.
                </p>
                
                <div class="bg-slate-50 border-l-4 border-brand-500 p-6 rounded-r-2xl my-8 italic text-slate-600">
                    "Meskipun arus modernisasi terus mengalir, masyarakat Gondowangi tetap teguh memegang akar budaya. Tradisi seperti Bersih Desa masih rutin digelar setiap tahun sebagai wujud rasa syukur atas hasil bumi dan penghormatan kepada para leluhur pembuat desa."
                </div>

                <p>
                    Hari ini, Gondowangi terus melangkah maju. Dengan diimplementasikannya Sistem Informasi Desa Digital (SIDG), desa ini mengukuhkan diri sebagai desa yang siap menyongsong era keterbukaan informasi, transparan, namun tetap berpijak pada nilai-nilai luhur dan kegotongroyongan.
                </p>
            </div>
            
            <!-- Bottom Navigation -->
            <div class="mt-16 pt-8 border-t border-slate-100 flex justify-between items-center">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-brand-600 font-medium transition-colors">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
                </a>
                <a href="{{ route('profil', 'visi-misi') }}" class="inline-flex items-center gap-2 bg-slate-900 hover:bg-brand-600 text-white px-6 py-2.5 rounded-full transition-all duration-300 font-medium shadow-md">
                    Selanjutnya: Visi Misi <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

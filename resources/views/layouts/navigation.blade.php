<nav class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 flex justify-between h-16 items-center">
        <a href="{{ route('home') }}" class="font-bold text-green-700 text-xl">SIDG</a>
        
        <div class="flex gap-6 text-sm font-medium">
            <a href="{{ route('home') }}" class="hover:text-green-600">Home</a>
            
            <div class="relative group">
                <button class="hover:text-green-600">Profil Desa</button>
                <div class="absolute hidden group-hover:block bg-white shadow-md border py-2 w-40 rounded">
                    <a href="{{ route('sejarah') }}" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a>
                    <a href="{{ route('visi-misi') }}" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a>
                </div>
            </div>

            <a href="{{ route('layanan') }}" class="hover:text-green-600">Layanan</a>
            <a href="{{ route('keuangan') }}" class="hover:text-green-600">Keuangan</a>
            <a href="{{ route('suarahati') }}" class="hover:text-green-600">SuaraHati</a>
        </div>
    </div>
</nav>
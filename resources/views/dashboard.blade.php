<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Portofolio') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-8 border-green-600 mb-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="h-20 w-20 bg-green-200 rounded-full flex items-center justify-center text-green-700 font-bold text-2xl">
                            FA
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Farhan Artoria</h3>
                            <p class="text-green-600 font-medium italic underline decoration-green-300">Informatics Student @ ITSK RS Dr. Soepraoen</p>
                        </div>
                    </div>
                    <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md">
                        Edit Profile
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-xl transition-shadow group cursor-pointer">
                    <div class="h-40 bg-green-50 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                        <span class="text-green-400 group-hover:text-green-600 transition-colors text-4xl">📁</span>
                    </div>
                    <h4 class="font-bold text-lg text-gray-800 uppercase tracking-wider">Project SpoorGo</h4>
                    <p class="text-gray-600 text-sm mt-2 leading-relaxed">Sistem ticketing berbasis Laravel & SQLite untuk efisiensi pemesanan tiket.</p>
                    <div class="mt-4 flex space-x-2">
                        <span class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded">Laravel</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded">SQLite</span>
                    </div>
                </div>

                <div class="bg-green-600 p-6 rounded-xl shadow-lg text-white">
                    <h4 class="font-bold text-lg mb-4 border-b border-green-400 pb-2 italic">Technical Skills</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center"><span class="mr-2">✔️</span> Networking (Cisco)</li>
                        <li class="flex items-center"><span class="mr-2">✔️</span> Web Dev (PHP 8.3)</li>
                        <li class="flex items-center"><span class="mr-2">✔️</span> UI/UX Design</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h4 class="font-bold text-lg text-gray-800 mb-4">Activity Status</h4>
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">Progress Belajar</span>
                            <span class="text-xs font-semibold inline-block text-green-600">85%</span>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                            <div style="width:85%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"></div>
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 italic font-light italic">*Last updated: Today at 22:38</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
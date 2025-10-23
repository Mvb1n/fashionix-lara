<x-shop::layouts
    :hasFeature="false"
    :hasFooter="false"
    :hasHeader="false"
>
    <x-slot:title>
        Custom Theme Home
    </x-slot>
    
    {{-- Custom Header --}}
    <x-custom-theme::layouts.header />

    <div class="container mx-auto mt-8 px-4 py-16">

        {{-- Tambahkan Konten lainnya disini (No 1-2) --}}

        <section class="w-full bg-white p-4 md:p-6 rounded-lg border border-gray-200">
            
            <div class="flex justify-between items-center mb-5 pb-4 border-b border-gray-200">
                <div class="flex items-baseline gap-x-4">
                    <h2 class="text-xl md:text-2xl font-semibold text-gray-800">
                        Penawaran Terbaik
                    </h2>
                    <span class="text-sm text-gray-500 mt-1">
                        Penawaran berakhir dalam: <strong>00:00:00</strong>
                    </span>
                </div>
                <a href="#" class="text-sm text-blue-600 font-medium hover:underline">
                    Lihat semua produk &rarr;
                </a>
            </div>
    
            <div class="grid grid-cols-6 gap-4">
                
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img 
                            src="https://down-id.img.susercontent.com/file/634a2cd690f412469db4541aa4127c82" 
                            alt="Jam Tangan Pria"
                            class="w-full block aspect-square object-cover" 
                        />
                        <span class="absolute top-2.5 left-2.5 bg-red-600 text-white py-1 px-2 rounded-md text-xs font-bold">
                            15% OFF
                        </span>
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            CHRONOX Jam Tangan Pria Sporty Analog - CX2006
                        </h3>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-400 line-through">Rp999.000</span>
                            <span class="text-base font-bold text-red-500">Rp789.000</span>
                        </div>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2024/3/13/ef8d8274-b2ee-4dc5-9c4e-a3edd4def7b5.png" alt="Gelang Kesehatan" class="w-full block aspect-square object-cover" />
                        </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            Racabel Gelang Kesehatan Bio Magnetik Apertor
                        </h3>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp200.000</span>
                        </div>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7qukx-liwp3vofg5y929_tn.webp" alt="Kalung Pria" class="w-full block aspect-square object-cover" />
                        <span class="absolute top-2.5 left-2.5 bg-red-600 text-white py-1 px-2 rounded-md text-xs font-bold">
                            15% OFF
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            ALPHA OMEGA - Kalung Cina Pria Katolik Medali
                        </h3>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-400 line-through">Rp175.500</span>
                            <span class="text-base font-bold text-red-500">Rp75.500</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98w-ly88ybss8sw5c2" alt="Dompet Pria" class="w-full block aspect-square object-cover" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            BekeleBOLO 087, ikat pinggang kulit pria
                        </h3>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp90.820</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/sg-11134201-7rcdl-lt40e3qwq1r8ca" alt="Kacamata Hitam" class="w-full block aspect-square object-cover" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            Dobujack Techno Black Sandals
                        </h3>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp113.000</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/sg-11134201-7ra0j-mbdwc2us9y7q82" alt="Overshirt" class="w-full block aspect-square object-cover" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            Hey Man Linen Blend Overshirt Relaxed Fit
                        </h3>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp199.000</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98p-lz092jbr6123dd" alt="Celana Kargo" class="w-full block aspect-square object-cover" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            BAPIN Cargo Panjang Pria Erroz – Long Pants Cargo Regulerfit
                        </h3>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp119.000</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/sg-11134201-7rceh-m680sqyrgbjo8f" alt="Jaket Pria" class="w-full block aspect-square object-cover" />
                        <span class="absolute top-2.5 left-2.5 bg-red-600 text-white py-1 px-2 rounded-md text-xs font-bold">
                            30% OFF
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            JAKET PRIA FLIGHT BOMBER MILITARY HUNTING CLOTH
                        </h3>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-400 line-through">Rp250.000</span>
                            <span class="text-base font-bold text-red-500">Rp159.000</span>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        {{-- Tambahkan kode lainnya disini (No. 4) --}}

        <section class="w-full bg-white p-4 md:p-6 rounded-lg border border-gray-200">
            
            <div class="flex justify-between items-center mb-5 pb-4 border-b border-gray-200">
                <div>
                    <h2 class="text-xl md:text-2xl font-semibold text-gray-800">
                        Produk Unggulan
                    </h2>
                </div>
                <div class="flex items-center gap-x-4">
                    <div class="flex items-center gap-x-2">
                        <button class="px-3 py-1 text-sm font-medium text-gray-600 bg-gray-100 rounded-full hover:bg-gray-200 transition">Semua Produk</button>
                        <button class="px-3 py-1 text-sm font-medium text-gray-600 bg-gray-100 rounded-full hover:bg-gray-200 transition">Tas</button>
                        <button class="px-3 py-1 text-sm font-medium text-gray-600 bg-gray-100 rounded-full hover:bg-gray-200 transition">Jeans</button>
                        <button class="px-3 py-1 text-sm font-medium text-gray-600 bg-gray-100 rounded-full hover:bg-gray-200 transition">T-shirt</button>
                        <button class="px-3 py-1 text-sm font-medium text-gray-600 bg-gray-100 rounded-full hover:bg-gray-200 transition">Sepatu</button>
                    </div>
                    <a href="#" class="text-sm text-blue-600 font-medium hover:underline whitespace-nowrap">
                        Lihat semua produk &rarr;
                    </a>
                </div>
            </div>
    
            <div class="grid grid-cols-6 gap-4">
                
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img 
                            src="https://down-id.img.susercontent.com/file/634a2cd690f412469db4541aa4127c82" 
                            alt="Jam Tangan Pria"
                            class="w-full block aspect-square object-cover" 
                        />
                        <span class="absolute top-2.5 left-2.5 bg-red-600 text-white py-1 px-2 rounded-md text-xs font-bold">
                            15% OFF
                        </span>
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            CHRONOX Jam Tangan Pria Sporty Analog - CX2006
                        </h3>
                        <div class="text-sm text-gray-500 mb-2">⭐ 4.5</div>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-400 line-through">Rp999.000</span>
                            <span class="text-base font-bold text-red-500">Rp789.000</span>
                        </div>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2024/3/13/ef8d8274-b2ee-4dc5-9c4e-a3edd4def7b5.png" alt="Gelang Kesehatan" class="w-full block aspect-square object-cover" />
                        </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            Racabel Gelang Kesehatan Bio Magnetik Apertor
                        </h3>
                        <div class="text-sm text-gray-500 mb-2">⭐ 4.8</div>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp200.000</span>
                        </div>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7qukx-liwp3vofg5y929_tn.webp" alt="Kalung Pria" class="w-full block aspect-square object-cover" />
                        <span class="absolute top-2.5 left-2.5 bg-red-600 text-white py-1 px-2 rounded-md text-xs font-bold">
                            15% OFF
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            ALPHA OMEGA - Kalung Salib Pria Katolik Medali
                        </h3>
                        <div class="text-sm text-gray-500 mb-2">⭐ 4.9</div>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-400 line-through">Rp175.500</span>
                            <span class="text-base font-bold text-red-500">Rp75.500</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98w-ly88ybss8sw5c2" alt="Dompet Pria" class="w-full block aspect-square object-cover" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            BekeleBOLO 087, ikat pinggang kulit pria
                        </h3>
                        <div class="text-sm text-gray-500 mb-2">⭐ 5.0</div>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp90.820</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/sg-11134201-7rcdl-lt40e3qwq1r8ca" alt="Kacamata Hitam" class="w-full block aspect-square object-cover" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            Dobujack Techno Black Sandals
                        </h3>
                        <div class="text-sm text-gray-500 mb-2">⭐ 4.7</div>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp113.000</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/sg-11134201-7ra0j-mbdwc2us9y7q82" alt="Overshirt" class="w-full block aspect-square object-cover" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            Hey Man Linen Blend Overshirt Relaxed Fit
                        </h3>
                        <div class="text-sm text-gray-500 mb-2">⭐ 4.6</div>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp199.000</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98p-lz092jbr6123dd" alt="Celana Kargo" class="w-full block aspect-square object-cover" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            BAPIN Cargo Panjang Pria Erroz – Long Pants Cargo Regulerfit
                        </h3>
                        <div class="text-sm text-gray-500 mb-2">⭐ 4.8</div>
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-gray-800">Rp119.000</span>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white transition-shadow duration-300 hover:shadow-lg">
                    <div class="relative">
                        <img src="https://down-id.img.susercontent.com/file/sg-11134201-7rceh-m680sqyrgbjo8f" alt="Jaket Pria" class="w-full block aspect-square object-cover" />
                        <span class="absolute top-2.5 left-2.5 bg-red-600 text-white py-1 px-2 rounded-md text-xs font-bold">
                            30% OFF
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-800 mb-1 line-clamp-2 h-10">
                            JAKET PRIA FLIGHT BOMBER MILITARY HUNTING CLOTH
                        </h3>
                        <div class="text-sm text-gray-500 mb-2">⭐ 4.9</div>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-400 line-through">Rp250.000</span>
                            <span class="text-base font-bold text-red-500">Rp159.000</span>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        {{-- Tambahkan kode lainnya disini (No. 6-8) --}}

    </div>
</x-shop::layouts>
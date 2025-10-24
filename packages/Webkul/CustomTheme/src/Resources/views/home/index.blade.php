<x-shop::layouts
    :hasFeature="false"
    :hasFooter="false"
>
    <x-slot:title>
        Custom Theme Home
    </x-slot>

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

<footer class="bg-black text-white py-12 mt-20 border-t border-gray-800">
  <div class="max-w-7xl mx-auto px-16 flex flex-row justify-between gap-2 flex-wrap">

    <!-- Kolom 1 -->
    <div class="flex-1 min-w-[220px]">
      <div class="flex items-center gap-2 mb-4">
        <img src="" alt="Logo Fashionix" class="w-8 h-8 object-contain bg-gray-800 rounded-full" />
        <h2 class="font-bold text-xl uppercase tracking-wide">FASHIONIX</h2>
      </div>
      <p class="text-sm mb-2 font-semibold">Dukungan Pelanggan:</p>
      <p class="text-lg font-bold mb-3">(629) 555-0129</p>
      <p class="text-sm mb-2">4517 Washington Ave.<br />Manchester, Kentucky 39495</p>
      <p class="text-sm">info@fashionix.com</p>
    </div>

    <!-- Kolom 2 -->
    <div class="flex-1 min-w-[180px]">
      <h3 class="font-bold mb-4 uppercase tracking-wide">Kategori Teratas</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Pakaian Wanita</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Pakaian Pria</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Aksesoris & Perhiasan</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Tas & Dompet</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Sepatu & Sandal</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Hijab & Muslim Wear</a></li>
      </ul>
      <a href="#" class="text-yellow-400 text-sm font-semibold inline-flex items-center mt-3 hover:underline transition-all duration-200">
        Jelajahi Semua Produk →
      </a>
    </div>

    <!-- Kolom 3 -->
    <div class="flex-1 min-w-[180px]">
      <h3 class="font-bold mb-4 uppercase tracking-wide">Tautan Cepat</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Belanja Produk</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Keranjang Belanja</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Daftar Keinginan</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Bandingkan</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Lacak Pesanan</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Bantuan Pelanggan</a></li>
        <li><a href="#" class="hover:text-yellow-400 hover:font-bold transition-all duration-200 ease-in-out">Tentang Kami</a></li>
      </ul>
    </div>

     <!-- Kolom 4 -->
    <div class="flex-1 min-w-[220px]">
      <h3 class="font-bold mb-4 uppercase tracking-wide">Popular Tag</h3>
      <div class="flex flex-wrap gap-2">
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Dress</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Kemeja</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Jeans</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Hijab</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Sneakers</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Tas</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Aksesoris</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Kalung</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Blazer</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Hoodie</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Rok</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Outerwear</span>
        <span class="border border-white px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black hover:font-bold transition-all duration-200 cursor-pointer">Fashion Pria</span>
      </div>
    </div>
  </div>
</footer>

</x-shop::layouts>
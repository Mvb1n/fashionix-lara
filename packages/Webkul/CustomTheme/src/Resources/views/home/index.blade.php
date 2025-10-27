<x-shop::layouts>
    <x-slot:title>
        Custom Theme Home
    </x-slot>

    <div class="container mx-auto mt-8 px-4 py-16">

        <div class="w-full bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
            {{-- 🌟 HEADER PENAWARAN TERBAIK --}}
            <div class="px-5 py-4 bg-gradient-to-r from-yellow-100 via-white to-yellow-50 border-b border-gray-200">
                <div class="flex items-baseline gap-3 flex-wrap md:flex-nowrap">
                    <div class="flex items-baseline gap-3 min-w-0">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l2.39 7.26h7.62l-6.17 4.48 2.39 7.26L12 16.52 5.77 21l2.39-7.26L2 9.26h7.61z"/>
                            </svg>
                            <h2 class="text-xl md:text-2xl font-bold text-gray-800 tracking-tight">
                                Penawaran Terbaik
                            </h2>
                        </div>
                        <span class="text-sm text-gray-600 whitespace-nowrap">Berakhir dalam:</span>
                        <span id="countdown"
                            class="bg-yellow-400/80 text-gray-900 font-semibold text-sm px-3 py-1 rounded-md shadow-sm">
                            16d : 21h : 57m : 23s
                        </span>
                    </div>
                    <a href="#"
                    class="ml-auto shrink-0 whitespace-nowrap inline-flex items-center gap-1 text-sm font-medium text-blue-600 hover:text-blue-700 transition">
                        Lihat semua produk
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- 🛍️ PRODUK CARD --}}
            <div class="p-6 flex justify-center">
                <div class="relative w-full max-w-xs bg-white rounded-lg border border-gray-200 shadow hover:shadow-lg transition duration-300 overflow-hidden">

                    {{-- Badge Diskon dan HOT --}}
                    <div class="flex justify-between px-3 pt-3">
                        <span class="bg-yellow-400 text-xs font-semibold text-white px-2 py-1 rounded shadow-sm">
                            32% OFF
                        </span>
                        <span class="bg-red-500 text-xs font-semibold text-white px-2 py-1 rounded shadow-sm">
                            HOT
                        </span>
                    </div>

                    {{-- Gambar Produk --}}
                    <div class="flex justify-center items-center mt-3">
                        <img
                            src="https://p16-images-sign-sg.tokopedia-static.net/tos-alisg-i-aphluv4xwc-sg/img/VqbcmM/2024/8/6/1982dc00-846a-4344-8654-cb0ede965ddd.jpg~tplv-aphluv4xwc-white-pad-v1:1600:1600.jpeg?lk3s=0ccea506&x-expires=1761548560&x-signature=kLoEMFDLwW7TjoiMQ3gstrGejdw%3D&x-signature-webp=YM1EHbrmYSPOM%2FiJf8wU32Sjtmg%3D"
                            alt="PUMA Sepatu Smash Leather Sneakers"
                            class="h-40 object-contain transition-transform duration-300 hover:scale-105"
                        />
                    </div>

                    {{-- Konten Produk --}}
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-1">
                            <img src="{{ asset('images/puma-logo.png') }}" alt="PUMA" class="h-4">
                            <span class="text-xs text-gray-500 font-medium">OFFICIAL STORE</span>
                        </div>

                        <h3 class="text-sm font-semibold text-gray-800 mb-1">
                            PUMA Sepatu Smash Leather Sneakers
                        </h3>

                        {{-- Rating --}}
                        <div class="flex items-center text-yellow-400 text-xs mb-2">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09L5.82 12.18.764 7.91l6.065-.526L10 2l3.171 5.384 6.065.526-5.056 4.27 1.698 5.91z"/></svg>
                            @endfor
                            <span class="ml-2 text-gray-500">(52,677)</span>
                        </div>

                        {{-- Harga --}}
                        <div class="mb-1">
                            <span class="text-gray-400 line-through text-sm">Rp1.249.000</span>
                        </div>
                        <div class="text-lg font-bold text-blue-600 mb-2">
                            Rp749.400
                        </div>

                        {{-- Deskripsi singkat --}}
                        <p class="text-xs text-gray-500 mb-4 leading-relaxed">
                            Mereka bilang Anda tak bisa memperbaiki yang asli, tetapi mereka tak pernah bilang Anda tak bisa melakukan hal baru pada yang asli.
                        </p>

                        {{-- 🔘 Tombol Aksi di Bawah --}}
                        <div class="flex items-center justify-between gap-2">
                            {{-- Love --}}
                            <button class="flex items-center justify-center w-10 h-10 border border-gray-300 rounded-md hover:bg-gray-100 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 hover:text-red-500 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                </svg>
                            </button>

                            {{-- Tombol Tengah (Fix Lebar dan Center) --}}
                            <button class="flex items-center justify-center gap-2 flex-grow bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-md text-sm transition text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9h12l-2-9M9 21a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                TAMBAH KE KERANJANG
                            </button>

                            {{-- View --}}
                            <button class="flex items-center justify-center w-10 h-10 border border-gray-300 rounded-md hover:bg-gray-100 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 hover:text-blue-500 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Countdown Timer --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const countdownEl = document.getElementById("countdown");
                const endDate = new Date();
                endDate.setDate(endDate.getDate() + 16);

                function updateCountdown() {
                    const now = new Date().getTime();
                    const distance = endDate - now;
                    if (distance <= 0) {
                        countdownEl.textContent = "Berakhir";
                        countdownEl.classList.replace("bg-yellow-400/80", "bg-red-400");
                        return;
                    }
                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    countdownEl.textContent = `${days}d : ${hours}h : ${minutes}m : ${seconds}s`;
                }

                updateCountdown();
                setInterval(updateCountdown, 1000);
            });
        </script>

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

<section class="container mx-auto py-10">
  <h2 class="text-2xl font-bold text-center mb-6">Kategori Produk</h2>
  @php
    $kategori = [
      ['nama' => 'Pakaian Wanita', 'gambar' => 'https://i.pinimg.com/736x/7c/b0/57/7cb057ab47a53a033aa2e3e29a77c9b3.jpg'],
      ['nama' => 'Pakaian Pria', 'gambar' => 'https://i.pinimg.com/1200x/18/82/d5/1882d5a0fe3a953c84fccd65141c1831.jpg'],
      ['nama' => 'Sepatu', 'gambar' => 'https://i.pinimg.com/1200x/da/60/88/da608828b2e33b947e65ec7cf76f3891.jpg'],
      ['nama' => 'Sendal', 'gambar' => 'https://i.pinimg.com/736x/58/96/13/5896138b0488f30bd9e3d29645a290ef.jpg'],
      ['nama' => 'Fashion Anak', 'gambar' => 'https://i.pinimg.com/736x/33/88/b6/3388b641ea32754a18b4e62f8e8b21d6.jpg'],
      ['nama' => 'Aksesoris', 'gambar' => 'https://i.pinimg.com/736x/8d/cf/54/8dcf548370eab9298d3ce7668c4bce3e.jpg'],
      ['nama' => 'Tas Wanita', 'gambar' => 'https://i.pinimg.com/1200x/4d/3d/36/4d3d36b33f36f149916efb5e7f95e96a.jpg'],
      ['nama' => 'Jaket Kulit', 'gambar' => 'https://i.pinimg.com/1200x/6e/3b/6c/6e3b6cff7af0c7e6445103d02f2bef5e.jpg'],
    ];
  @endphp

  <div class="relative">
    {{-- Tombol kiri --}}
    <button id="scrollLeft" 
      class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-200 text-gray-700 rounded-full p-2 hover:bg-gray-300 shadow-md z-10">
      ←
    </button>

    {{-- Kontainer scroll --}}
    <div id="scrollContainer" 
      class="flex overflow-x-auto px-12 pb-6 scrollbar-hide scroll-smooth snap-x snap-mandatory gap-6">
      
      @foreach ($kategori as $item)
        <div class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition-all flex-shrink-0 w-40 h-58 text-center snap-start flex flex-col justify-between">
            {{-- Bagian gambar --}}
            <div class="w-full h-48 rounded-t-lg overflow-hidden bg-gray-100 flex items-center justify-center">
            <img 
                src="{{ $item['gambar'] }}" 
                alt="{{ $item['nama'] }}"
                class="w-full h-full object-cover"
            >
            </div>

            {{-- Bagian nama kategori --}}
            <div class="p-3">
            <p class="font-semibold text-gray-800 text-base">{{ $item['nama'] }}</p>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Tombol kanan --}}
    <button id="scrollRight" 
      class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-200 text-gray-700 rounded-full p-2 hover:bg-gray-300 shadow-md z-10">
      →
    </button>
  </div>
</section>

{{-- Script scroll halus --}}
<script>
  const scrollContainer = document.getElementById('scrollContainer');
  document.getElementById('scrollLeft').onclick = () => scrollContainer.scrollBy({ left: -350, behavior: 'smooth' });
  document.getElementById('scrollRight').onclick = () => scrollContainer.scrollBy({ left: 350, behavior: 'smooth' });
</script>
    </div>

</x-shop::layouts>
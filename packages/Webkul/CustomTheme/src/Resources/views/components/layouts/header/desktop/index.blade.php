<div class="bg-[#1B6392] shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('shop.home.index') }}" class="text-2xl font-bold text-gray-800">
                    FashionIX
                </a>
            </div>

            <!-- Navigation Menu (Desktop) -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('shop.home.index') }}" class="text-gray-600 hover:text-gray-900 transition-colors">Home</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Men</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Women</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Kids</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">Sale</a>
            </nav>

            <!-- Search and Actions -->
            <div class="flex items-center space-x-4">
                <!-- Search Bar -->
                <div class="hidden sm:flex items-center">
                    <div class="relative">
                        <input type="text" placeholder="Search products..."
                               class="w-64 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Action Icons -->
                <div class="flex items-center space-x-3">
                    <!-- Compare -->
                    @if(core()->getConfigData('catalog.products.settings.compare_option'))
                        <a href="{{ route('shop.compare.index') }}" class="text-gray-600 hover:text-gray-900">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                            </svg>
                        </a>
                    @endif

                    <!-- Cart -->
                    @if(core()->getConfigData('sales.checkout.shopping_cart.cart_page'))
                        <a href="{{ route('shop.checkout.cart.index') }}" class="text-gray-600 hover:text-gray-900 relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.35 2.35A2 2 0 007 17h10a2 2 0 001.65-3.13L16 11.24M7 13v6a2 2 0 002 2h6a2 2 0 002-2v-6"></path>
                            </svg>
                            <!-- Cart count badge -->
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                        </a>
                    @endif

                    <!-- Profile Dropdown -->
                    <div class="relative">
                    <button
                        type="button"
                        class="text-gray-600 hover:text-gray-900"
                        @click.stop="toggleProfileDropdown"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50"
                        v-show="isProfileDropdownOpen"
                        @click.stop
                    >
                        @guest('customer')
                            <a href="{{ route('shop.customer.session.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign In</a>
                            <a href="{{ route('shop.customers.register.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign Up</a>
                        @else
                            <div class="px-4 py-2 text-sm text-gray-700 border-b">
                                    Welcome, {{ auth()->guard('customer')->user()->first_name }}
                                </div>
                                <a href="{{ route('shop.customers.account.profile.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Profile</a>
                                <a href="{{ route('shop.customers.account.orders.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Orders</a>
                                <a href="{{ route('shop.customer.session.destroy') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign Out</a>
                            @endguest
                        </div>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button
                        type="button"
                        class="text-gray-600 hover:text-gray-900"
                        @click.stop="toggleMobileMenu"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="md:hidden pb-4" v-show="isMobileMenuOpen" @click.stop>
            <div class="space-y-1">
                <a href="{{ route('shop.home.index') }}" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md">Home</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md">Men</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md">Women</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md">Kids</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md">Sale</a>
            </div>

            <!-- Mobile Search -->
            <div class="mt-4">
                <div class="relative">
                    <input type="text" placeholder="Search products..."
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

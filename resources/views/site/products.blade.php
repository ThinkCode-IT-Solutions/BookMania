<x-layouts.main-layout>

    <!-- Hero Banner -->
    <section class="bg-gradient-to-r from-sepia-200 to-sepia-300 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-sepia-900 mb-4">
                Our Products
            </h2>
            <p class="text-xl text-sepia-700 mb-8 max-w-2xl mx-auto">
                Explore our complete range of accessories, peripherals, and tech essentials to complement your laptop.
            </p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            @if($allProducts->isNotEmpty())

            <!-- Results Info -->
            <div class="flex justify-between items-center mb-8">
                <p class="text-sepia-600">Showing <span class="font-semibold text-sepia-800">{{ $allProducts->count() }}</span> products</p>
                <select class="bg-sepia-100 border border-sepia-300 text-sepia-800 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-sepia-500">
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                </select>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($allProducts as $item)
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-300 to-sepia-500 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-2 group-hover:text-sepia-700 transition-colors">{{ $item->name }}</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">${{ number_format($item->price, 2) }}</span>
                            <button class="bg-sepia-600 text-sepia-50 px-4 py-2 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @else

            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-sepia-200 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-sepia-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-sepia-900 mb-2">No Products Available</h3>
                <p class="text-sepia-600 mb-6">Check back soon for our latest products and accessories.</p>
                <a href="/books" class="inline-block bg-sepia-600 text-sepia-50 px-6 py-3 rounded-lg hover:bg-sepia-700 transition-colors font-medium">
                    Browse Laptops Instead
                </a>
            </div>

            @endif
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-sepia-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-sepia-900 mb-12">Product Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <div class="bg-sepia-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow cursor-pointer group">
                    <div class="w-16 h-16 bg-sepia-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-sepia-600 transition-colors">
                        <svg class="w-8 h-8 text-sepia-600 group-hover:text-sepia-50 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-sepia-900">Accessories</h3>
                </div>

                <!-- Category 2 -->
                <div class="bg-sepia-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow cursor-pointer group">
                    <div class="w-16 h-16 bg-sepia-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-sepia-600 transition-colors">
                        <svg class="w-8 h-8 text-sepia-600 group-hover:text-sepia-50 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-sepia-900">Monitors</h3>
                </div>

                <!-- Category 3 -->
                <div class="bg-sepia-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow cursor-pointer group">
                    <div class="w-16 h-16 bg-sepia-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-sepia-600 transition-colors">
                        <svg class="w-8 h-8 text-sepia-600 group-hover:text-sepia-50 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-sepia-900">Storage</h3>
                </div>

                <!-- Category 4 -->
                <div class="bg-sepia-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow cursor-pointer group">
                    <div class="w-16 h-16 bg-sepia-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-sepia-600 transition-colors">
                        <svg class="w-8 h-8 text-sepia-600 group-hover:text-sepia-50 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-sepia-900">Peripherals</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 bg-gradient-to-r from-sepia-600 to-sepia-800">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-sepia-50 mb-4">Looking for Laptops?</h2>
            <p class="text-sepia-200 mb-6 max-w-xl mx-auto">Check out our premium collection of laptops for every need and budget.</p>
            <a href="/books" class="inline-block bg-sepia-50 text-sepia-800 px-8 py-3 rounded-lg hover:bg-sepia-100 transition-colors font-semibold">
                Browse Laptops
            </a>
        </div>
    </section>

</x-layouts.main-layout>

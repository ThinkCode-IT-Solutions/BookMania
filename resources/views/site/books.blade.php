<x-layouts.main-layout>

    <!-- Hero Banner -->
    <section class="bg-gradient-to-r from-sepia-200 to-sepia-300 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-bold text-sepia-900 mb-4">
                Find Your Perfect Laptop
            </h2>
            <p class="text-xl text-sepia-700 mb-8 max-w-2xl mx-auto">
                Explore our curated collection of premium laptops. From gaming powerhouses to sleek ultrabooks, find the
                perfect device for every need.
            </p>
            <div class="max-w-md mx-auto">
                <div class="flex">
                    <input type="text" placeholder="Search laptops..."
                        class="flex-1 px-4 py-3 border border-sepia-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-sepia-500 focus:border-transparent">
                    <button
                        class="bg-sepia-600 text-sepia-50 px-6 py-3 rounded-r-lg hover:bg-sepia-700 transition-colors">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Laptop Categories -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button
                    class="bg-sepia-600 text-sepia-50 px-6 py-2 rounded-full hover:bg-sepia-700 transition-colors">All
                    Laptops</button>
                <button
                    class="bg-sepia-200 text-sepia-800 px-6 py-2 rounded-full hover:bg-sepia-300 transition-colors">Gaming</button>
                <button
                    class="bg-sepia-200 text-sepia-800 px-6 py-2 rounded-full hover:bg-sepia-300 transition-colors">Business</button>
                <button
                    class="bg-sepia-200 text-sepia-800 px-6 py-2 rounded-full hover:bg-sepia-300 transition-colors">Ultrabooks</button>
                <button
                    class="bg-sepia-200 text-sepia-800 px-6 py-2 rounded-full hover:bg-sepia-300 transition-colors">Workstations</button>
                <button
                    class="bg-sepia-200 text-sepia-800 px-6 py-2 rounded-full hover:bg-sepia-300 transition-colors">Budget</button>
            </div>
        </div>
    </section>

    <!-- Results Info -->
    <section class="pb-4">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <p class="text-sepia-600">Showing <span class="font-semibold text-sepia-800">{{ count($books ?? []) }}</span> laptops</p>
                <select class="bg-sepia-100 border border-sepia-300 text-sepia-800 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-sepia-500">
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                    <option>Best Rated</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Laptop Grid -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">

                @forelse($books ?? [] as $laptop)
                <!-- Laptop Card Dynamic -->
                <a href="{{ route('books.detail', $laptop->slug) }}" class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-300 to-sepia-500 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        @if($laptop->is_active)
                        <div class="absolute top-3 right-3 bg-sepia-600 text-sepia-50 px-3 py-1 rounded-full text-xs font-medium">
                            In Stock
                        </div>
                        @else
                        <div class="absolute top-3 right-3 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                            Out of Stock
                        </div>
                        @endif
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1 group-hover:text-sepia-700 transition-colors line-clamp-1">{{ $laptop->name }}</h3>
                        <p class="text-sepia-600 text-sm mb-2">{{ $laptop->aurthor_name }}</p>
                        <p class="text-sepia-500 text-xs mb-3">{{ $laptop->pages }} pages</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">${{ number_format($laptop->price, 2) }}</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </a>
                @empty

                <!-- Static Laptop Cards when no data -->
                <!-- Laptop Card 1 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-300 to-sepia-500 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <div class="absolute top-3 right-3 bg-sepia-600 text-sepia-50 px-3 py-1 rounded-full text-xs font-medium">
                            New
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1 group-hover:text-sepia-700 transition-colors">ProBook Elite 15</h3>
                        <p class="text-sepia-600 text-sm mb-2">Intel i7 | 16GB RAM</p>
                        <p class="text-sepia-500 text-xs mb-3">512GB SSD | 15.6" FHD</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">$1,299</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Laptop Card 2 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-400 to-sepia-600 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <div class="absolute top-3 right-3 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                            Sale
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1 group-hover:text-sepia-700 transition-colors">GamerX Pro 17</h3>
                        <p class="text-sepia-600 text-sm mb-2">RTX 4080 | 32GB RAM</p>
                        <p class="text-sepia-500 text-xs mb-3">1TB SSD | 17.3" 165Hz</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-sepia-800 font-bold text-lg">$1,899</span>
                                <span class="text-sepia-500 text-sm line-through ml-1">$2,299</span>
                            </div>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Laptop Card 3 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-500 to-sepia-700 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1 group-hover:text-sepia-700 transition-colors">UltraSlim Air 14</h3>
                        <p class="text-sepia-600 text-sm mb-2">M2 Chip | 8GB RAM</p>
                        <p class="text-sepia-500 text-xs mb-3">256GB SSD | 14" Retina</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">$999</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Laptop Card 4 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-600 to-sepia-800 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <div class="absolute top-3 right-3 bg-sepia-600 text-sepia-50 px-3 py-1 rounded-full text-xs font-medium">
                            Popular
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1 group-hover:text-sepia-700 transition-colors">WorkStation Pro 16</h3>
                        <p class="text-sepia-600 text-sm mb-2">Xeon W | 64GB RAM</p>
                        <p class="text-sepia-500 text-xs mb-3">2TB SSD | 16" 4K</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">$2,499</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Laptop Card 5 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-400 to-sepia-700 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1 group-hover:text-sepia-700 transition-colors">BizBook 14</h3>
                        <p class="text-sepia-600 text-sm mb-2">Intel i5 | 8GB RAM</p>
                        <p class="text-sepia-500 text-xs mb-3">256GB SSD | 14" FHD</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">$749</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                @endforelse
            </div>
        </div>
    </section>

    <!-- Featured Laptops Section -->
    <section class="py-16 bg-sepia-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-sepia-900 mb-12">Featured Laptops</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured Laptop 1 -->
                <div class="bg-sepia-50 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-start space-x-4">
                        <div class="w-24 h-24 bg-gradient-to-br from-sepia-400 to-sepia-700 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-12 h-12 text-sepia-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="text-xs text-sepia-600 bg-sepia-200 px-2 py-1 rounded-full">Bestseller</span>
                            <h3 class="text-xl font-bold text-sepia-900 mt-2 mb-1">GamerX Ultimate 18</h3>
                            <p class="text-sepia-700 text-sm mb-2">RTX 4090 | 64GB DDR5 | 2TB NVMe</p>
                            <p class="text-sepia-600 text-sm mb-4">The ultimate gaming powerhouse with 18" 240Hz display...</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sepia-800 font-bold text-xl">$3,499</span>
                                <button class="bg-sepia-600 text-sepia-50 px-4 py-2 rounded-lg hover:bg-sepia-700 transition-colors">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Laptop 2 -->
                <div class="bg-sepia-50 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-start space-x-4">
                        <div class="w-24 h-24 bg-gradient-to-br from-sepia-500 to-sepia-800 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-12 h-12 text-sepia-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="text-xs text-sepia-600 bg-sepia-200 px-2 py-1 rounded-full">Editor's Pick</span>
                            <h3 class="text-xl font-bold text-sepia-900 mt-2 mb-1">ProBook Studio 16</h3>
                            <p class="text-sepia-700 text-sm mb-2">Intel i9 | 32GB RAM | 1TB SSD</p>
                            <p class="text-sepia-600 text-sm mb-4">Perfect for creative professionals with stunning 4K OLED...</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sepia-800 font-bold text-xl">$2,199</span>
                                <button class="bg-sepia-600 text-sepia-50 px-4 py-2 rounded-lg hover:bg-sepia-700 transition-colors">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Laptop 3 -->
                <div class="bg-sepia-50 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-start space-x-4">
                        <div class="w-24 h-24 bg-gradient-to-br from-sepia-600 to-sepia-900 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-12 h-12 text-sepia-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="text-xs text-sepia-600 bg-sepia-200 px-2 py-1 rounded-full">Best Value</span>
                            <h3 class="text-xl font-bold text-sepia-900 mt-2 mb-1">EcoBook Student 14</h3>
                            <p class="text-sepia-700 text-sm mb-2">AMD Ryzen 5 | 16GB RAM | 512GB</p>
                            <p class="text-sepia-600 text-sm mb-4">Affordable performance for students and everyday use...</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sepia-800 font-bold text-xl">$599</span>
                                <button class="bg-sepia-600 text-sepia-50 px-4 py-2 rounded-lg hover:bg-sepia-700 transition-colors">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="py-12 bg-gradient-to-r from-sepia-600 to-sepia-800">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-sepia-50 mb-4">Need Help Choosing?</h2>
            <p class="text-sepia-200 mb-6 max-w-xl mx-auto">Our experts are here to help you find the perfect laptop for your needs. Contact us for personalized recommendations.</p>
            <a href="/contact" class="inline-block bg-sepia-50 text-sepia-800 px-8 py-3 rounded-lg hover:bg-sepia-100 transition-colors font-semibold">
                Contact Our Experts
            </a>
        </div>
    </section>

</x-layouts.main-layout>

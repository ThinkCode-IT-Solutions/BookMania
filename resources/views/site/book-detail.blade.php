<x-layouts.main-layout>

    <!-- Breadcrumb -->
    <section class="bg-sepia-100 py-4 border-b border-sepia-200">
        <div class="container mx-auto px-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-sepia-600 hover:text-sepia-800 transition-colors">Home</a>
                <svg class="w-4 h-4 text-sepia-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <a href="/books" class="text-sepia-600 hover:text-sepia-800 transition-colors">Laptops</a>
                <svg class="w-4 h-4 text-sepia-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-sepia-800 font-medium">{{ $kitab->name ?? 'Product Details' }}</span>
            </nav>
        </div>
    </section>

    <!-- Product Detail -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Product Images -->
                <div class="lg:w-1/2">
                    <div class="bg-gradient-to-br from-sepia-300 to-sepia-500 rounded-2xl aspect-square flex items-center justify-center shadow-lg">
                        <svg class="w-1/2 h-1/2 text-sepia-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <!-- Thumbnail Gallery -->
                    <div class="flex gap-4 mt-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-sepia-300 to-sepia-500 rounded-lg flex items-center justify-center cursor-pointer ring-2 ring-sepia-600">
                            <svg class="w-10 h-10 text-sepia-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="w-20 h-20 bg-gradient-to-br from-sepia-400 to-sepia-600 rounded-lg flex items-center justify-center cursor-pointer hover:ring-2 hover:ring-sepia-400 transition-all">
                            <svg class="w-10 h-10 text-sepia-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="w-20 h-20 bg-gradient-to-br from-sepia-500 to-sepia-700 rounded-lg flex items-center justify-center cursor-pointer hover:ring-2 hover:ring-sepia-400 transition-all">
                            <svg class="w-10 h-10 text-sepia-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="lg:w-1/2">
                    @if(isset($kitab) && $kitab->is_active)
                    <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium mb-4">In Stock</span>
                    @else
                    <span class="inline-block bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium mb-4">Out of Stock</span>
                    @endif

                    <h1 class="text-3xl md:text-4xl font-bold text-sepia-900 mb-4">{{ $kitab->name ?? 'ProBook Elite 15' }}</h1>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex">
                            @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-sepia-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endfor
                        </div>
                        <span class="text-sepia-600">(128 reviews)</span>
                    </div>

                    <p class="text-sepia-600 mb-4">Brand: <span class="text-sepia-800 font-medium">{{ $kitab->aurthor_name ?? 'BookMania' }}</span></p>

                    <div class="text-3xl font-bold text-sepia-800 mb-6">
                        ${{ isset($kitab) ? number_format($kitab->price, 2) : '1,299.00' }}
                    </div>

                    <p class="text-sepia-700 mb-8 leading-relaxed">
                        {{ $kitab->description ?? 'Experience premium performance with the ProBook Elite 15. Featuring the latest Intel processor, stunning display, and all-day battery life. Perfect for professionals and creatives who demand the best.' }}
                    </p>

                    <!-- Specifications Quick View -->
                    <div class="bg-sepia-100 rounded-xl p-6 mb-8">
                        <h3 class="font-semibold text-sepia-900 mb-4">Quick Specs</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-sepia-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                                <span class="text-sepia-700">Intel Core i7-13700H</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-sepia-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                <span class="text-sepia-700">16GB DDR5 RAM</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-sepia-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                </svg>
                                <span class="text-sepia-700">512GB NVMe SSD</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-sepia-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sepia-700">15.6" FHD IPS Display</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quantity & Add to Cart -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <div class="flex items-center border border-sepia-300 rounded-lg">
                            <button class="px-4 py-3 text-sepia-600 hover:text-sepia-800 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </button>
                            <input type="number" value="1" min="1" class="w-16 text-center border-0 focus:ring-0 text-sepia-800 font-medium">
                            <button class="px-4 py-3 text-sepia-600 hover:text-sepia-800 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                        </div>
                        <button class="flex-1 bg-sepia-600 text-sepia-50 px-8 py-3 rounded-lg hover:bg-sepia-700 transition-colors font-semibold flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                        <button class="p-3 border border-sepia-300 rounded-lg hover:bg-sepia-100 transition-colors">
                            <svg class="w-6 h-6 text-sepia-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Trust Badges -->
                    <div class="grid grid-cols-3 gap-4 pt-8 border-t border-sepia-200">
                        <div class="text-center">
                            <svg class="w-8 h-8 text-sepia-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>
                            <p class="text-sepia-700 text-sm font-medium">Free Shipping</p>
                        </div>
                        <div class="text-center">
                            <svg class="w-8 h-8 text-sepia-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <p class="text-sepia-700 text-sm font-medium">2-Year Warranty</p>
                        </div>
                        <div class="text-center">
                            <svg class="w-8 h-8 text-sepia-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            <p class="text-sepia-700 text-sm font-medium">30-Day Returns</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Tabs -->
    <section class="py-12 bg-sepia-100">
        <div class="container mx-auto px-4">
            <div class="bg-sepia-50 rounded-2xl shadow-lg overflow-hidden">
                <!-- Tab Headers -->
                <div class="flex border-b border-sepia-200">
                    <button class="px-8 py-4 text-sepia-900 font-semibold border-b-2 border-sepia-600 bg-sepia-50">Description</button>
                    <button class="px-8 py-4 text-sepia-600 hover:text-sepia-800 transition-colors">Specifications</button>
                    <button class="px-8 py-4 text-sepia-600 hover:text-sepia-800 transition-colors">Reviews (128)</button>
                </div>

                <!-- Tab Content -->
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-sepia-900 mb-4">Product Description</h3>
                    <div class="prose prose-sepia max-w-none">
                        <p class="text-sepia-700 mb-4">
                            {{ $kitab->description ?? 'The ProBook Elite 15 represents the pinnacle of laptop engineering. Designed for professionals who demand the best, this laptop combines cutting-edge performance with elegant aesthetics.' }}
                        </p>
                        <p class="text-sepia-700 mb-4">
                            Featuring the latest 13th Gen Intel Core i7 processor and 16GB of lightning-fast DDR5 memory, the ProBook Elite 15 handles everything from complex spreadsheets to demanding creative applications with ease.
                        </p>
                        <h4 class="text-lg font-semibold text-sepia-900 mt-6 mb-3">Key Features</h4>
                        <ul class="list-disc list-inside text-sepia-700 space-y-2">
                            <li>13th Gen Intel Core i7-13700H Processor</li>
                            <li>16GB DDR5-4800 Memory (Expandable to 32GB)</li>
                            <li>512GB PCIe NVMe M.2 SSD</li>
                            <li>15.6" Full HD IPS Anti-Glare Display</li>
                            <li>Intel Iris Xe Graphics</li>
                            <li>Backlit Keyboard with Numeric Keypad</li>
                            <li>Fingerprint Reader</li>
                            <li>Windows 11 Pro</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-sepia-900 mb-8">Related Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Related Product 1 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-300 to-sepia-500 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1">ProBook Standard 14</h3>
                        <p class="text-sepia-600 text-sm mb-3">Intel i5 | 8GB RAM | 256GB</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">$899</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Related Product 2 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-400 to-sepia-600 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1">ProBook Ultra 15</h3>
                        <p class="text-sepia-600 text-sm mb-3">Intel i9 | 32GB RAM | 1TB</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">$1,799</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Related Product 3 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-500 to-sepia-700 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1">GamerX 15</h3>
                        <p class="text-sepia-600 text-sm mb-3">RTX 4070 | 16GB RAM | 512GB</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">$1,499</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Related Product 4 -->
                <div class="bg-sepia-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all group">
                    <div class="aspect-square bg-gradient-to-br from-sepia-600 to-sepia-800 relative overflow-hidden p-6">
                        <svg class="w-full h-full text-sepia-100 group-hover:scale-105 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-sepia-900 mb-1">UltraSlim Pro 13</h3>
                        <p class="text-sepia-600 text-sm mb-3">M2 Pro | 16GB RAM | 512GB</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sepia-800 font-bold text-lg">$1,399</span>
                            <button class="bg-sepia-600 text-sepia-50 px-3 py-1.5 rounded-lg text-sm hover:bg-sepia-700 transition-colors">
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.main-layout>

<div>
    <header class="bg-sepia-100 shadow-sm border-b border-sepia-200">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-sepia-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-sepia-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <a href="/" class="text-2xl font-bold text-sepia-800">BookMania</a>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-sepia-700 hover:text-sepia-900 transition-colors font-medium">Home</a>
                <a href="/books" class="text-sepia-700 hover:text-sepia-900 transition-colors font-medium">Books</a>
                    {{-- <a href="/products" class="text-sepia-700 hover:text-sepia-900 transition-colors font-medium">Products</a> --}}
                    <a href="/about" class="text-sepia-700 hover:text-sepia-900 transition-colors font-medium">About</a>
                    <a href="/contact" class="text-sepia-700 hover:text-sepia-900 transition-colors font-medium">Contact</a>
                </nav>

                <!-- Cart & Account -->
                <div class="flex items-center space-x-4">
                    <button class="text-sepia-700 hover:text-sepia-900 transition-colors relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <button class="text-sepia-700 hover:text-sepia-900 transition-colors relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </button>
                    <button class="bg-sepia-600 text-sepia-50 px-4 py-2 rounded-lg hover:bg-sepia-700 transition-colors flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span>Cart (0)</span>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-sepia-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
</div>

<aside class="w-64 bg-white border-r border-slate-200 hidden md:flex flex-col justify-between">
            <div>
                <!-- Logo Area -->
                <div class="h-16 flex items-center px-6 border-b border-slate-100">
                    <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-brand-600 to-brand-400">
                        <i class="fa-solid fa-book-open mr-2 text-brand-500"></i>BookMania
                    </span>
                </div>

                <!-- Navigation Links -->
                <nav class="mt-6 px-3 space-y-1">
                    <!-- Dashboard (Active State) -->
                    <a href="{{ route("dashboard") }}" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg @if(request()->routeIs("dashboard")) bg-brand-50 text-brand-700 @endif transition-colors">
                        <i class="fa-solid fa-chart-pie w-5 h-5 mr-3 text-brand-500"></i>
                        Dashboard
                    </a>

                    <!-- Catalog -->
                    <a href="{{ route("dashboard.books") }}" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors @if(request()->routeIs("dashboard.books")) bg-brand-50 text-brand-700 @endif">
                        <i class="fa-solid fa-book w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500"></i>
                        Books Catalog
                    </a>

                    <!-- Orders -->
                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                        <i class="fa-solid fa-box w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500"></i>
                        Orders
                        <span class="ml-auto bg-brand-100 text-brand-600 py-0.5 px-2 rounded-full text-xs font-semibold">12</span>
                    </a>

                    <!-- Customers -->
                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                        <i class="fa-solid fa-users w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500"></i>
                        Customers
                    </a>

                    <!-- Marketing -->
                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                        <i class="fa-solid fa-tag w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500"></i>
                        Discounts
                    </a>
                </nav>
            </div>

            <!-- Bottom Settings Link -->
            <div class="p-4 border-t border-slate-100">
                <a href="#" class="flex items-center px-3 py-2.5 text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                    <i class="fa-solid fa-gear w-5 h-5 mr-3 text-slate-400"></i>
                    Settings
                </a>
            </div>
        </aside>

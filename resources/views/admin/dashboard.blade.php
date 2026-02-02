<x-layouts.admin-layout>




    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6">

                <!-- Page Title Area -->
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-slate-800">Dashboard Overview</h1>
                        <p class="text-sm text-slate-500 mt-1">Welcome back! Here is your bookstore's performance.</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <button class="bg-brand-600 hover:bg-brand-700 text-white text-sm font-medium py-2 px-4 rounded-lg shadow-sm transition-colors flex items-center">
                            <i class="fa-solid fa-plus mr-2"></i> Add New Book
                        </button>
                    </div>
                </div>

                <!--
                    STATS GRID
                    Detailed breakdown of key metrics
                -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                    <!-- Stat Card: Total Sales -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Total Revenue</p>
                                <h3 class="text-2xl font-bold text-slate-800 mt-2">$24,300</h3>
                            </div>
                            <div class="p-2 bg-green-50 rounded-lg text-green-600">
                                <i class="fa-solid fa-dollar-sign text-lg"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-600 font-medium flex items-center">
                                <i class="fa-solid fa-arrow-trend-up mr-1 text-xs"></i> 12%
                            </span>
                            <span class="text-slate-400 ml-2">vs last month</span>
                        </div>
                    </div>

                    <!-- Stat Card: Books Sold -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Books Sold</p>
                                <h3 class="text-2xl font-bold text-slate-800 mt-2">1,452</h3>
                            </div>
                            <div class="p-2 bg-brand-50 rounded-lg text-brand-600">
                                <i class="fa-solid fa-book text-lg"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-600 font-medium flex items-center">
                                <i class="fa-solid fa-arrow-trend-up mr-1 text-xs"></i> 8%
                            </span>
                            <span class="text-slate-400 ml-2">vs last month</span>
                        </div>
                    </div>

                    <!-- Stat Card: Active Users -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Active Readers</p>
                                <h3 class="text-2xl font-bold text-slate-800 mt-2">3,200</h3>
                            </div>
                            <div class="p-2 bg-purple-50 rounded-lg text-purple-600">
                                <i class="fa-solid fa-user-group text-lg"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-red-500 font-medium flex items-center">
                                <i class="fa-solid fa-arrow-trend-down mr-1 text-xs"></i> 2%
                            </span>
                            <span class="text-slate-400 ml-2">vs last month</span>
                        </div>
                    </div>

                    <!-- Stat Card: Pending Orders -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">Pending Orders</p>
                                <h3 class="text-2xl font-bold text-slate-800 mt-2">45</h3>
                            </div>
                            <div class="p-2 bg-orange-50 rounded-lg text-orange-600">
                                <i class="fa-solid fa-clock text-lg"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-slate-500">Requires immediate attention</span>
                        </div>
                    </div>
                </div>

                <!--
                    CONTENT SPLIT
                    Main Table + Side Widget
                -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                    <!-- Recent Orders Table -->
                    <div class="lg:col-span-2 bg-white rounded-xl border border-slate-200 shadow-sm">
                        <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between">
                            <h2 class="text-lg font-bold text-slate-800">Recent Orders</h2>
                            <a href="#" class="text-sm text-brand-600 hover:text-brand-800 font-medium">View All</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm text-slate-600">
                                <thead class="bg-slate-50 text-xs uppercase font-semibold text-slate-500">
                                    <tr>
                                        <th class="px-6 py-3">Order ID</th>
                                        <th class="px-6 py-3">Customer</th>
                                        <th class="px-6 py-3">Total</th>
                                        <th class="px-6 py-3">Status</th>
                                        <th class="px-6 py-3 text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 font-medium text-slate-800">#ORD-0092</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs mr-3">AL</div>
                                                <span>Alice Lee</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">$45.00</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Completed
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-slate-400 hover:text-brand-600 transition-colors">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 font-medium text-slate-800">#ORD-0091</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs mr-3">MK</div>
                                                <span>Mike Kent</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">$120.50</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                                Pending
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-slate-400 hover:text-brand-600 transition-colors">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 font-medium text-slate-800">#ORD-0090</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs mr-3">SS</div>
                                                <span>Sarah Smith</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">$24.99</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                Shipped
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-slate-400 hover:text-brand-600 transition-colors">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Top Selling Books Widget -->
                    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
                        <h2 class="text-lg font-bold text-slate-800 mb-4">Top Selling Books</h2>

                        <div class="space-y-4">
                            <!-- Book Item 1 -->
                            <div class="flex items-center p-3 hover:bg-slate-50 rounded-lg transition-colors cursor-pointer border border-transparent hover:border-slate-100">
                                <div class="w-12 h-16 bg-slate-200 rounded shrink-0 overflow-hidden shadow-sm">
                                    <!-- Placeholder for book cover -->
                                    <div class="w-full h-full bg-brand-200 flex items-center justify-center text-brand-500">
                                        <i class="fa-solid fa-book"></i>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="text-sm font-semibold text-slate-800 leading-tight">The Great Gatsby</h4>
                                    <p class="text-xs text-slate-500 mt-1">F. Scott Fitzgerald</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-slate-800">124</p>
                                    <p class="text-xs text-slate-400">Sold</p>
                                </div>
                            </div>

                            <!-- Book Item 2 -->
                            <div class="flex items-center p-3 hover:bg-slate-50 rounded-lg transition-colors cursor-pointer border border-transparent hover:border-slate-100">
                                <div class="w-12 h-16 bg-slate-200 rounded shrink-0 overflow-hidden shadow-sm">
                                    <div class="w-full h-full bg-brand-200 flex items-center justify-center text-brand-500">
                                        <i class="fa-solid fa-book"></i>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="text-sm font-semibold text-slate-800 leading-tight">Atomic Habits</h4>
                                    <p class="text-xs text-slate-500 mt-1">James Clear</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-slate-800">89</p>
                                    <p class="text-xs text-slate-400">Sold</p>
                                </div>
                            </div>

                            <!-- Book Item 3 -->
                            <div class="flex items-center p-3 hover:bg-slate-50 rounded-lg transition-colors cursor-pointer border border-transparent hover:border-slate-100">
                                <div class="w-12 h-16 bg-slate-200 rounded shrink-0 overflow-hidden shadow-sm">
                                    <div class="w-full h-full bg-brand-200 flex items-center justify-center text-brand-500">
                                        <i class="fa-solid fa-book"></i>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="text-sm font-semibold text-slate-800 leading-tight">Project Hail Mary</h4>
                                    <p class="text-xs text-slate-500 mt-1">Andy Weir</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-slate-800">65</p>
                                    <p class="text-xs text-slate-400">Sold</p>
                                </div>
                            </div>
                        </div>

                        <button class="w-full mt-4 py-2 bg-slate-50 text-slate-600 text-sm font-medium rounded-lg hover:bg-slate-100 transition-colors border border-slate-200">
                            See Report
                        </button>
                    </div>

                </div>

            </main>
</x-layouts.admin-layout>

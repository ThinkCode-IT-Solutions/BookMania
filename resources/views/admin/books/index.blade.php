<x-layouts.admin-layout>



    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6">

        <!-- Page Title Area -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-bold text-slate-800">Books Catalog</h1>
                <p class="text-sm text-slate-500 mt-1"> Here is your bookstore's All Products</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('dashboard.books.create') }}"
                    class="bg-brand-600 hover:bg-brand-700 text-white text-sm font-medium py-2 px-4 rounded-lg shadow-sm transition-colors flex items-center">
                    <i class="fa-solid fa-plus mr-2"></i> Add New Book
                </a>
            </div>
        </div>

        <!-- Filters / Actions -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
            <div class="flex items-center gap-3">
                <input type="text" placeholder="Search books..." class="border rounded-lg px-3 py-2 text-sm w-64" />
                <select class="border rounded-lg px-3 py-2 text-sm">
                    <option>All categories</option>
                    <option>Fiction</option>
                    <option>Non-fiction</option>
                </select>
            </div>
            <div class="text-sm text-slate-500">Showing <strong>3</strong> sample books</div>
        </div>


        @if (Session::has('success'))
            <div class="flex items-center justify-between mb-4 bg-green-100 p-4 rounded-lg">
                <h2 class="text-lg font-semibold text-slate-700">✅ {{ Session::get('success') }}</h2>
            </div>
        @endif

        <!-- Table view (optional) -->
        <div class="mt-8 bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-sm font-semibold text-slate-700">All Books</h2>
                <div class="text-sm text-slate-500">3 entries</div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left">
                    <thead class="text-slate-500 uppercase text-xs border-b">
                        <tr>
                            <th class="p-3">Image</th>
                            <th class="p-3">Title</th>
                            <th class="p-3">Author</th>
                            <th class="p-3">Category</th>
                            <th class="p-3">Price</th>
                            <th class="p-3">Status</th>
                            <th class="p-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-700">

                        @if ($books->isNotEmpty())

                            @foreach ($books as $item)
                                <tr class="border-b">
                                    <td>
                                        @if($item->cover_image)
                                        <div class="m-1">
                                            <img src="{{ asset("storage/" . $item->cover_image) }}" alt="no image found" style="width: 80px;height:80px;border-radius:10px">
                                        </div>

                                        @else
                                            <div class="m-1" style="width: 80px;height:80px;background-color: #e2e8f0;border-radius:10px;display:flex;align-items:center;justify-content:center;">
                                                <span class="text-slate-500 text-xs">No Image</span >
                                        @endif
                                    </td>
                                    <td class="p-3">{{ $item->name }}</td>
                                    <td class="p-3">{{ $item->aurthor_name }}</td>
                                    <td class="p-3">{{ $item->category ?? 'No Category' }}</td>
                                    <td class="p-3">${{ $item->price }}</td>
                                    <td class="p-3"><span class="text-emerald-600">In stock</span></td>
                                    <td class="p-3">
                                        <a href="#" class="text-sky-600 hover:underline mr-3">View</a>
                                        <a href="#" class="text-slate-600 hover:underline mr-3">Edit</a>
                                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>No data to show</p>
                        @endif
                        {{-- <tr class="border-b">
                            <td class="p-3">Learning Laravel</td>
                            <td class="p-3">Jane Smith</td>
                            <td class="p-3">Education</td>
                            <td class="p-3">$24.00</td>
                            <td class="p-3"><span class="text-amber-600">Low stock</span></td>
                            <td class="p-3">
                                <a href="#" class="text-sky-600 hover:underline mr-3">View</a>
                                <a href="#" class="text-slate-600 hover:underline mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3">Design Patterns Explained</td>
                            <td class="p-3">Alex Rivers</td>
                            <td class="p-3">Programming</td>
                            <td class="p-3">$19.50</td>
                            <td class="p-3"><span class="text-red-600">Out of stock</span></td>
                            <td class="p-3">
                                <a href="#" class="text-sky-600 hover:underline mr-3">View</a>
                                <a href="#" class="text-slate-600 hover:underline mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</x-layouts.admin-layout>


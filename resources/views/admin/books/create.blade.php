<x-layouts.admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6">

        <div class="mb-6">
            <a href="{{ route('dashboard.books') }}" class="text-slate-600 hover:underline">&larr; Back to books</a>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6 max-w-3xl">
            <h1 class="text-lg font-semibold text-slate-800">Create New Book</h1>
            <p class="text-sm text-slate-500 mt-1">Fill in the fields below to add a new book. (UI only)</p>

            <form action="{{ route('dashboard.books.post') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm text-slate-600">Title</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2 mt-1" placeholder="Enter book title"
                        name="book_name" />
                    @error('book_name')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm text-slate-600">Description</label>
                    <textarea type="text" class="w-full border rounded-lg px-3 py-2 mt-1" placeholder="Enter book title"
                        name="book_description"> </textarea>
                    @error('book_description')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm text-slate-600">Author</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2 mt-1" placeholder="Author name"
                        name="book_author" />
                    @error('book_author')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm text-slate-600">Pages</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2 mt-1"
                        placeholder="How many pages are there in the book" name="book_pages" />
                    @error('book_pages')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror

                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm text-slate-600">Price</label>
                        <input type="text" class="w-full border rounded-lg px-3 py-2 mt-1" placeholder="$0.00"
                            name="book_price" />
                        @error('book_price')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm text-slate-600">Category</label>
                        <select class="w-full border rounded-lg px-3 py-2 mt-1" name="category">
                            <option>Fiction</option>
                            <option>Education</option>
                            <option>Programming</option>
                        </select>
                        @error('category')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm text-slate-600">Status</label>
                        <select class="w-full border rounded-lg px-3 py-2 mt-1" name="status">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        @error('status')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- <div>
                    <label class="block text-sm text-slate-600">Cover Image</label>
                    <div class="mt-2 flex items-center gap-4">
                        <div class="w-24 h-32 bg-slate-100 rounded flex items-center justify-center text-slate-400">Preview</div>
                        <button type="button" class="border px-3 py-2 rounded">Upload Image</button>
                    </div>
                </div> --}}

                {{-- <div>
                    <label class="block text-sm text-slate-600">Description</label>
                    <textarea rows="4" class="w-full border rounded-lg px-3 py-2 mt-1" placeholder="Short description"></textarea>
                </div> --}}

                <div class="pt-4">
                    <button type="submit" class="bg-brand-600 hover:bg-brand-700 text-white px-4 py-2 rounded">Create
                        Book</button>
                    <a href="#" class="ml-3 text-slate-600">Cancel</a>
                </div>
            </form>
        </div>

    </main>

</x-layouts.admin-layout>

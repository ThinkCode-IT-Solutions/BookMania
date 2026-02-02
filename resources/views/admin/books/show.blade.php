<x-layouts.admin-layout>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6">

        <div class="mb-6">
            <a href="#" class="text-slate-600 hover:underline">&larr; Back to books</a>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="md:flex md:items-start gap-6">
                <img src="https://via.placeholder.com/360x480?text=Book+Cover" alt="Cover" class="w-full md:w-72 h-auto object-cover rounded" />
                <div class="mt-4 md:mt-0 flex-1">
                    <h1 class="text-2xl font-bold text-slate-800">The Great Adventure</h1>
                    <p class="text-sm text-slate-500 mt-2">by John Doe</p>

                    <div class="mt-4">
                        <span class="text-sm text-slate-600">Category:</span>
                        <span class="ml-2 text-sm font-medium">Fiction</span>
                    </div>

                    <div class="mt-4 flex items-center gap-4">
                        <div class="text-3xl font-semibold text-slate-800">$14.99</div>
                        <div class="text-sm text-emerald-600 font-medium">In stock</div>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-sm font-semibold text-slate-700">Description</h3>
                        <p class="text-sm text-slate-600 mt-2">This is a sample description for the book. Replace with real content when wiring up the backend.</p>
                    </div>

                    <div class="mt-6 flex gap-3">
                        <a href="#" class="bg-brand-600 hover:bg-brand-700 text-white px-4 py-2 rounded">Edit Book</a>
                        <a href="#" class="border border-slate-200 px-4 py-2 rounded text-slate-700">Duplicate</a>
                    </div>
                </div>
            </div>
        </div>

    </main>

</x-layouts.admin-layout>

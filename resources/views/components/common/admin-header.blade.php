 <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 z-10">

     <!-- Mobile Menu Button (Visible only on small screens) -->
     <button class="md:hidden text-slate-500 hover:text-slate-700 focus:outline-none">
         <i class="fa-solid fa-bars text-xl"></i>
     </button>

     <!-- Search Bar -->
     <div class="hidden md:flex items-center w-full max-w-md ml-4">
         <div class="relative w-full">
             <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                 <i class="fa-solid fa-magnifying-glass text-slate-400"></i>
             </span>
             <input type="text"
                 class="w-full pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm bg-slate-50 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-shadow placeholder-slate-400"
                 placeholder="Search books, authors, or orders...">
         </div>
     </div>

     <!-- Right Side Actions -->
     <div class="flex items-center space-x-4">
         <!-- Notifications -->
         <button class="relative p-2 text-slate-400 hover:text-slate-600 transition-colors">
             <i class="fa-regular fa-bell text-xl"></i>
             <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
         </button>

         <!-- User Profile Dropdown Trigger -->
         {{-- <div class="relative" x-data="{ open: false }">
             <button @click="open = !open" @click.outside="open = false"
                 class="flex items-center ml-3 cursor-pointer focus:outline-none">
                 <div
                     class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 font-bold border border-brand-200">
                     {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                 </div>
                 <span
                     class="hidden md:block ml-2 text-sm font-medium text-slate-700">{{ Auth::user()->name ?? 'Admin' }}</span>
                 <i class="hidden md:block fa-solid fa-chevron-down ml-2 text-xs text-slate-400"></i>
             </button>

             <!-- Dropdown Menu -->
             <div x-show="open" x-transition:enter="transition ease-out duration-100"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 z-50 origin-top-right"
                 style="display: none;">

                 <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Your Profile</a>
                 <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Settings</a>
                 <div class="border-t border-slate-100 my-1"></div>

                 <!-- Logout Form -->
                 <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                         Sign out
                     </button>
                 </form>
             </div>
         </div> --}}
         <!-- User Profile Dropdown (CSS Only) -->
         <div class="relative group ml-3">
             <button class="flex items-center cursor-pointer focus:outline-none">
                 <div
                     class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 font-bold border border-brand-200">
                     {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                 </div>
                 <span
                     class="hidden md:block ml-2 text-sm font-medium text-slate-700">{{ Auth::user()->name ?? 'Admin' }}</span>
                 <i
                     class="hidden md:block fa-solid fa-chevron-down ml-2 text-xs text-slate-400 group-hover:rotate-180 transition-transform duration-200"></i>
             </button>

             <!-- Dropdown Menu -->
             <div
                 class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 z-50 origin-top-right invisible opacity-0 translate-y-2 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 ease-in-out">
                 <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Your Profile</a>
                 <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Settings</a>
                 <div class="border-t border-slate-100 my-1"></div>

                 <!-- Logout Form -->
                 <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                         Sign out
                     </button>
                 </form>
             </div>
         </div>
     </div>
 </header>

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
         <div class="flex items-center ml-3 cursor-pointer">
             <div
                 class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 font-bold border border-brand-200">
                 JD
             </div>
             <span class="hidden md:block ml-2 text-sm font-medium text-slate-700">John Doe</span>
             <i class="hidden md:block fa-solid fa-chevron-down ml-2 text-xs text-slate-400"></i>
         </div>
     </div>
 </header>

<x-app-layout>
    <!-- Header Section with Contextual Action -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-sans font-bold text-peanut tracking-tight">Farmer Directory</h1>
            <p class="text-sm text-stone-500 mt-1">Manage and view profiles, production capacities, and histories of registered cooperative farmers.</p>
        </div>
        <button class="inline-flex items-center justify-center gap-2 bg-peanut hover:bg-stone-950 text-white px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm self-start md:self-auto group">
            <svg class="w-4 h-4 transform group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add New Farmer
        </button>
    </div>

    <!-- Enhanced Control & Multi-Filtering Bar -->
    <div class="flex flex-col lg:flex-row gap-3 mb-6 bg-stone-50 p-3 rounded-2xl border border-stone-200/60">
        
        <!-- Search Input Component -->
        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
                </svg>
            </span>
            <input type="text" placeholder="Search farmers by name, product type..." 
                   class="w-full pl-11 pr-4 py-2.5 bg-white border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none text-sm shadow-sm transition">
        </div>
        
        <!-- Regional Ward Filter Dropdown -->
        <div class="relative">
            <select class="w-full lg:w-40 pl-4 pr-10 py-2.5 bg-white border border-stone-200 rounded-xl outline-none appearance-none cursor-pointer text-sm shadow-sm focus:ring-2 focus:ring-golden/20 focus:border-golden transition">
                <option>All Wards</option>
                <option>Ward 1</option>
                <option>Ward 2</option>
                <option>Ward 3</option>
                <option>Ward 4</option>
            </select>
            <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>
        </div>

        <!-- Performance / Sorting Filter Dropdown -->
        <div class="relative">
            <select class="w-full lg:w-48 pl-4 pr-10 py-2.5 bg-white border border-stone-200 rounded-xl outline-none appearance-none cursor-pointer text-sm shadow-sm focus:ring-2 focus:ring-golden/20 focus:border-golden transition">
                <option>Sort: Newest Registered</option>
                <option>Sort: Highest Yield Sold</option>
                <option>Sort: Most Active Products</option>
                <option>Sort: Alphabetical (A-Z)</option>
            </select>
            <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>
        </div>
    </div>

    <!-- Farmer Directory Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        
        <!-- Premium Farmer Card 1 -->
        <div class="bg-white border border-stone-200/80 rounded-2xl p-5 hover:shadow-md hover:border-golden/30 transition-all duration-300 flex flex-col justify-between group relative">
            <div class="absolute top-4 right-4 flex items-center gap-1 opacity-60 group-hover:opacity-100 transition-opacity">
                <button class="p-1.5 text-stone-400 hover:text-peanut hover:bg-stone-50 rounded-lg transition" title="Edit Profile">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>
            </div>

            <div>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-stone-50 flex items-center justify-center font-sans font-bold text-sm text-peanut border border-stone-200 shadow-inner group-hover:bg-cream/40 group-hover:border-golden/20 transition-colors flex-shrink-0">
                        RT
                    </div>
                    <div>
                        <h3 class="font-bold text-stone-900 text-base tracking-tight group-hover:text-peanut transition-colors">Ram Bahadur Tamang</h3>
                        <p class="text-xs text-stone-400 mt-0.5 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 text-stone-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            Ward 3, Ghachok
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-6 pt-5 border-t border-stone-100">
                    <div class="flex items-start gap-2.5">
                        <div class="p-1.5 bg-stone-50 rounded-lg text-stone-500 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.008 1.24l.885 1.77a2.25 2.25 0 002.007 1.24h1.98a2.25 2.25 0 002.007-1.24l.885-1.77a2.25 2.25 0 012.007-1.24h3.86m-18 0h18M2.25 13.5l1.626-5.693A4.5 4.5 0 018.228 4.5h7.544a4.5 4.5 0 014.352 3.307l1.626 5.693M2.25 13.5v6a2.25 2.25 0 002.25 2.25h15a2.25 2.25 0 002.25-2.25v6m-18 0V13.5" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Active Products</span>
                            <span class="block text-sm font-semibold text-stone-800 mt-0.5">12 Varieties</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <div class="p-1.5 bg-stone-50 rounded-lg text-stone-500 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0-18L8 7m4-4l4 4m-4 14l-4-4m4 4l4-4" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Total Yield Sold</span>
                            <span class="block text-sm font-semibold text-stone-800 mt-0.5">450 <span class="text-xs font-normal text-stone-500">kg</span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <a href="#" class="block w-full text-center bg-stone-50 hover:bg-peanut hover:text-white border border-stone-200/60 text-stone-700 text-xs font-bold uppercase tracking-wider py-2.5 rounded-xl transition-all duration-200 shadow-sm">
                    View Complete Profile
                </a>
            </div>
        </div>

        <!-- Premium Farmer Card 2 -->
        <div class="bg-white border border-stone-200/80 rounded-2xl p-5 hover:shadow-md hover:border-golden/30 transition-all duration-300 flex flex-col justify-between group relative">
            <div class="absolute top-4 right-4 flex items-center gap-1 opacity-60 group-hover:opacity-100 transition-opacity">
                <button class="p-1.5 text-stone-400 hover:text-peanut hover:bg-stone-50 rounded-lg transition" title="Edit Profile">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>
            </div>

            <div>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-stone-50 flex items-center justify-center font-sans font-bold text-sm text-peanut border border-stone-200 shadow-inner group-hover:bg-cream/40 group-hover:border-golden/20 transition-colors flex-shrink-0">
                        SS
                    </div>
                    <div>
                        <h3 class="font-bold text-stone-900 text-base tracking-tight group-hover:text-peanut transition-colors">Sita Devi Shrestha</h3>
                        <p class="text-xs text-stone-400 mt-0.5 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 text-stone-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            Ward 1, Ghachok
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-6 pt-5 border-t border-stone-100">
                    <div class="flex items-start gap-2.5">
                        <div class="p-1.5 bg-stone-50 rounded-lg text-stone-500 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.008 1.24l.885 1.77a2.25 2.25 0 002.007 1.24h1.98a2.25 2.25 0 002.007-1.24l.885-1.77a2.25 2.25 0 012.007-1.24h3.86m-18 0h18M2.25 13.5l1.626-5.693A4.5 4.5 0 018.228 4.5h7.544a4.5 4.5 0 014.352 3.307l1.626 5.693M2.25 13.5v6a2.25 2.25 0 002.25 2.25h15a2.25 2.25 0 002.25-2.25v6m-18 0V13.5" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Active Products</span>
                            <span class="block text-sm font-semibold text-stone-800 mt-0.5">4 Varieties</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <div class="p-1.5 bg-stone-50 rounded-lg text-stone-500 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0-18L8 7m4-4l4 4m-4 14l-4-4m4 4l4-4" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Total Yield Sold</span>
                            <span class="block text-sm font-semibold text-stone-800 mt-0.5">1,200 <span class="text-xs font-normal text-stone-500">kg</span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <a href="#" class="block w-full text-center bg-stone-50 hover:bg-peanut hover:text-white border border-stone-200/60 text-stone-700 text-xs font-bold uppercase tracking-wider py-2.5 rounded-xl transition-all duration-200 shadow-sm">
                    View Complete Profile
                </a>
            </div>
        </div>

    </div>
</x-app-layout>
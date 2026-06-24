<x-app-layout>
    <!-- Header Section with Contextual Action -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-serif font-bold text-peanut tracking-tight">Harvests & Products</h1>
            <p class="text-sm text-stone-500 mt-1">Manage and track cooperative inventory, producer sourcing, and marketplace listings.</p>
        </div>
        <button class="inline-flex items-center justify-center gap-2 bg-peanut hover:bg-stone-950 text-white px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm self-start md:self-auto group">
            <svg class="w-4 h-4 transform group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add Product
        </button>
    </div>

    <!-- Enhanced Control & Filtering Bar -->
    <div class="flex flex-col md:flex-row gap-3 mb-6 bg-stone-50 p-3 rounded-2xl border border-stone-200/60">
        <!-- Search Input with Custom Magnifier Icon -->
        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
                </svg>
            </span>
            <input type="text" placeholder="Search by product name, farmer, or ward..." 
                   class="w-full pl-11 pr-4 py-2.5 bg-white border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none text-sm shadow-sm transition">
        </div>
        
        <!-- Status Filter with Custom Dropdown Arrow -->
        <div class="relative">
            <select class="w-full md:w-48 pl-4 pr-10 py-2.5 bg-white border border-stone-200 rounded-xl outline-none appearance-none cursor-pointer text-sm shadow-sm focus:ring-2 focus:ring-golden/20 focus:border-golden transition">
                <option>All Statuses</option>
                <option>Active</option>
                <option>Pending</option>
            </select>
            <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>
        </div>
    </div>

    <!-- Inventory Stream Container -->
    <div class="flex flex-col gap-3">
        
        <!-- Premium Product Row Item -->
        <div class="bg-white border border-stone-200/80 rounded-2xl p-4 flex flex-col md:flex-row md:items-center justify-between gap-4 hover:shadow-md hover:border-golden/30 transition-all duration-300 group">
            
            <!-- Section 1: Product Thumbnail & Sourcing Details -->
            <div class="flex items-center gap-4 min-w-[260px]">
                <div class="w-14 h-14 bg-stone-50 rounded-xl flex items-center justify-center text-2xl border border-stone-100 shadow-inner flex-shrink-0 group-hover:bg-cream/40 transition-colors">
                    🥔
                </div>
                <div>
                    <h3 class="font-bold text-stone-900 text-base tracking-tight group-hover:text-peanut transition-colors">Organic Potatoes</h3>
                    <p class="text-xs text-stone-500 mt-0.5 flex items-center gap-1.5">
                        <span class="font-medium text-stone-700">Ram Bahadur Tamang</span>
                        <span class="text-stone-300">•</span>
                        <span class="bg-stone-100 text-stone-600 px-1.5 py-0.5 rounded text-[10px] font-semibold tracking-wide uppercase">Ward 3</span>
                    </p>
                </div>
            </div>

            <!-- Section 2: Financial & Stock Data Grid -->
            <div class="grid grid-cols-3 gap-4 md:gap-12 flex-1 max-w-md py-3 md:py-0 border-y md:border-y-0 border-stone-100">
                <div>
                    <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Price</span>
                    <span class="block text-sm font-semibold text-stone-800 mt-0.5">Rs. 80 <span class="text-xs font-normal text-stone-500">/kg</span></span>
                </div>
                <div>
                    <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Stock Available</span>
                    <span class="block text-sm font-semibold text-stone-800 mt-0.5">250 <span class="text-xs font-normal text-stone-500">kg</span></span>
                </div>
                <div>
                    <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Status</span>
                    <div class="mt-1">
                        <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100/80">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            Active
                        </span>
                    </div>
                </div>
            </div>

            <!-- Section 3: Clean, Low-Profile Actions -->
            <div class="flex items-center gap-1 self-end md:self-auto border-t md:border-t-0 pt-3 md:pt-0 border-stone-50 w-full md:w-auto justify-end">
                <button class="p-2 text-stone-400 hover:text-peanut hover:bg-stone-50 rounded-xl transition" title="Edit Listing">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </button>
                <button class="p-2 text-stone-400 hover:text-red-600 hover:bg-red-50 rounded-xl transition" title="Delete Listing">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </div>

        </div>

    </div>
</x-app-layout>
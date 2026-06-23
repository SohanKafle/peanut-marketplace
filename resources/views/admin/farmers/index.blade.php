<x-app-layout>
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-serif font-bold text-peanut">Farmer Directory</h1>
        <p class="text-sm text-peanut/60 mt-0.5">Manage and view profiles of registered farmers.</p>
    </div>

    <!-- Toolbar -->
    <div class="flex flex-col sm:flex-row gap-2 mb-8">
        <input type="text" placeholder="Search farmers by name or ward..." 
               class="flex-1 px-4 py-2.5 bg-white border border-stone-200 rounded-lg text-sm focus:border-golden outline-none shadow-sm">
        <button class="bg-peanut text-white px-5 py-2.5 rounded-lg text-xs font-bold uppercase tracking-wider hover:bg-black transition">
            + Add New Farmer
        </button>
    </div>

    <!-- Farmer Grid: 1 column mobile, 2 columns tablet, 3 columns desktop -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        
        <!-- Farmer Card -->
        <div class="bg-white border border-stone-200 rounded-xl p-5 hover:border-golden/30 transition-all shadow-sm group">
            <div class="flex items-start gap-4">
                <!-- Avatar -->
                <div class="w-12 h-12 rounded-full bg-stone-100 flex items-center justify-center font-bold text-peanut border border-stone-200">
                    RT
                </div>
                <!-- Basic Info -->
                <div class="flex-1">
                    <h3 class="text-sm font-bold text-peanut">Ram Bahadur Tamang</h3>
                    <p class="text-[11px] text-peanut/50 uppercase tracking-wide font-semibold">Ward 3, Ghachok</p>
                </div>
            </div>

            <!-- Stats/Details -->
            <div class="mt-5 grid grid-cols-2 gap-2">
                <div class="bg-stone-50 p-2 rounded-lg">
                    <p class="text-[10px] text-peanut/40 font-bold uppercase">Products</p>
                    <p class="text-sm font-semibold text-peanut">12</p>
                </div>
                <div class="bg-stone-50 p-2 rounded-lg">
                    <p class="text-[10px] text-peanut/40 font-bold uppercase">Total Sold</p>
                    <p class="text-sm font-semibold text-peanut">450kg</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="mt-4 pt-4 border-t border-stone-100 flex gap-2">
                <button class="flex-1 py-1.5 text-[10px] font-bold uppercase text-peanut bg-stone-100 hover:bg-stone-200 rounded transition">View Profile</button>
                <button class="px-3 py-1.5 text-[10px] font-bold uppercase text-red-700 bg-red-50 hover:bg-red-100 rounded transition">Edit</button>
            </div>
        </div>


    </div>
</x-app-layout>
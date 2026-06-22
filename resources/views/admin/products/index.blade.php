<x-app-layout>
    <div class="mb-8">
        <h1 class="text-3xl font-serif font-bold text-peanut">Harvests & Products</h1>
        <p class="text-peanut/60 mt-1">Manage cooperative inventory and listings.</p>
    </div>

    <div class="flex flex-col sm:flex-row gap-3 mb-8">
        <input type="text" placeholder="Search products..." 
               class="w-full px-5 py-3.5 bg-white border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 outline-none shadow-sm">
        <select class="w-full sm:w-48 px-5 py-3.5 bg-white border border-stone-200 rounded-xl outline-none shadow-sm cursor-pointer">
            <option>All Statuses</option>
            <option>Active</option>
            <option>Pending</option>
        </select>
        <button class="bg-peanut text-white px-6 py-3.5 rounded-xl text-sm font-bold uppercase tracking-wider hover:bg-black transition shadow-sm">
            + Add
        </button>
    </div>

    <div class="flex flex-col gap-4">
        
        <div class="bg-white border border-stone-200 rounded-2xl p-6 flex flex-col lg:flex-row lg:items-center gap-6 shadow-sm hover:border-golden/30 transition-all">
            
            <div class="flex items-center gap-5 flex-1">
                <div class="w-16 h-16 bg-stone-50 rounded-xl flex items-center justify-center text-3xl border border-stone-100 flex-shrink-0">🥔</div>
                <div>
                    <h3 class="text-lg font-bold text-peanut">Organic Potatoes</h3>
                    <p class="text-sm text-peanut/50">Ram Bahadur Tamang • Ward 3</p>
                </div>
            </div>

            <div class="flex flex-wrap gap-6 lg:gap-12 border-t lg:border-t-0 border-stone-100 pt-6 lg:pt-0">
                <div>
                    <p class="text-[10px] font-bold text-peanut/40 uppercase tracking-wider">Price</p>
                    <p class="text-base font-semibold text-peanut">Rs. 80 /kg</p>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-peanut/40 uppercase tracking-wider">Stock</p>
                    <p class="text-base font-semibold text-peanut">250 kg</p>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-peanut/40 uppercase tracking-wider">Status</p>
                    <span class="inline-block mt-1 px-3 py-1 bg-green-50 text-green-700 text-[10px] font-bold uppercase rounded-md border border-green-100">Active</span>
                </div>
            </div>

            <div class="flex gap-3 border-t lg:border-t-0 border-stone-100 pt-6 lg:pt-0">
                <button class="flex-1 lg:flex-none px-6 py-3 bg-stone-100 hover:bg-stone-200 text-peanut text-xs font-bold uppercase tracking-wider rounded-lg transition">Edit</button>
                <button class="flex-1 lg:flex-none px-6 py-3 bg-red-50 hover:bg-red-100 text-red-700 text-xs font-bold uppercase tracking-wider rounded-lg transition">Delete</button>
            </div>

        </div>

    </div>
</x-app-layout>
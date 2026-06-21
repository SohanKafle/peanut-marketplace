<x-app-layout>
    
    <div class="mb-8">
        <h1 class="text-2xl sm:text-3xl font-serif font-bold text-peanut">Dashboard Overview</h1>
        <p class="text-sm text-peanut/60 mt-1">Welcome back, {{ Auth::user()->name }}. Here is what's happening today.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
        
        <div class="bg-white p-6 rounded-2xl border border-stone-200 shadow-sm flex flex-col justify-between">
            <div class="text-sm font-medium text-peanut/60 mb-2">Total Farmers</div>
            <div class="text-3xl font-bold text-peanut">124</div>
            <div class="text-xs text-green-600 font-medium mt-2 flex items-center gap-1">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" /></svg>
                +12% from last month
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-stone-200 shadow-sm flex flex-col justify-between">
            <div class="text-sm font-medium text-peanut/60 mb-2">Active Harvests</div>
            <div class="text-3xl font-bold text-peanut">38</div>
            <div class="text-xs text-peanut/50 font-medium mt-2">Currently listed</div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-stone-200 shadow-sm flex flex-col justify-between">
            <div class="text-sm font-medium text-peanut/60 mb-2">Pending Orders</div>
            <div class="text-3xl font-bold text-peanut">12</div>
            <div class="text-xs text-amber-600 font-medium mt-2 flex items-center gap-1">
                Requires immediate action
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-stone-200 shadow-sm flex flex-col justify-between">
            <div class="text-sm font-medium text-peanut/60 mb-2">Monthly Revenue</div>
            <div class="text-3xl font-bold text-peanut">Rs. 450k</div>
            <div class="text-xs text-green-600 font-medium mt-2 flex items-center gap-1">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" /></svg>
                +4.5% from last month
            </div>
        </div>

    </div>

    <div class="bg-white rounded-2xl border border-stone-200 shadow-sm overflow-hidden">
        <div class="px-6 py-5 border-b border-stone-200 flex justify-between items-center">
            <h2 class="text-lg font-bold text-peanut">Recent Cooperative Activity</h2>
            <button class="text-sm font-medium text-golden hover:text-peanut transition-colors">View All</button>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-stone-50 text-xs uppercase tracking-wider text-peanut/60 border-b border-stone-200">
                        <th class="px-6 py-4 font-semibold">Farmer</th>
                        <th class="px-6 py-4 font-semibold">Product Listed</th>
                        <th class="px-6 py-4 font-semibold">Quantity</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-sm">
                    <tr class="hover:bg-stone-50/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-peanut">Ram Bahadur Tamang</td>
                        <td class="px-6 py-4 text-peanut/80">Organic Potatoes</td>
                        <td class="px-6 py-4 text-peanut/80">250 kg</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Verified</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-stone-50/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-peanut">Sita Gurung</td>
                        <td class="px-6 py-4 text-peanut/80">Millet (Kodo)</td>
                        <td class="px-6 py-4 text-peanut/80">100 kg</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-semibold">Pending Review</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
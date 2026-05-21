<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-3xl text-forest-900 leading-tight">
            {{ __('Overview') }}
        </h2>
        <p class="text-forest-500 font-light mt-1">Welcome back to the cooperative admin panel.</p>
    </x-slot>

    <!-- Metrics Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-white px-6 py-8 border border-peanut-200 border-l-4 border-l-terracotta shadow-soft">
            <p class="text-sm uppercase tracking-wider text-forest-500 font-medium mb-1">Total Harvests</p>
            <p class="text-4xl font-serif text-forest-900">0</p>
        </div>
        
        <div class="bg-white px-6 py-8 border border-peanut-200 border-l-4 border-l-forest shadow-soft">
            <p class="text-sm uppercase tracking-wider text-forest-500 font-medium mb-1">Registered Farmers</p>
            <p class="text-4xl font-serif text-forest-900">0</p>
        </div>
        
        <div class="bg-white px-6 py-8 border border-peanut-200 border-l-4 border-l-peanut shadow-soft">
            <p class="text-sm uppercase tracking-wider text-forest-500 font-medium mb-1">Pending Orders</p>
            <p class="text-4xl font-serif text-forest-900">0</p>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="bg-white border border-peanut-200 shadow-soft">
        <div class="border-b border-peanut-200 bg-cream/30 px-6 py-4">
            <h3 class="font-serif text-xl text-forest-900">Recent Activity</h3>
        </div>
        <div class="p-6 text-forest-500 text-center py-12">
            <p class="italic">No recent activity. Once farmers post their harvests, they will appear here.</p>
        </div>
    </div>
</x-app-layout>

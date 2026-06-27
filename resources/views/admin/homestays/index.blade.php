<x-app-layout>
    <div x-data="{ activeTab: 'listings' }">
        <!-- Header -->
        <h1 class="text-3xl font-serif font-bold text-peanut mb-6">Homestay Management</h1>

        <!-- Tab Navigation -->
        <div class="flex gap-6 border-b border-stone-200 mb-8">
            <button @click="activeTab = 'listings'" :class="activeTab === 'listings' ? 'border-peanut text-peanut' : 'border-transparent text-stone-500'" class="pb-3 border-b-2 font-bold uppercase text-xs tracking-wider transition">Listings</button>
            <button @click="activeTab = 'bookings'" :class="activeTab === 'bookings' ? 'border-peanut text-peanut' : 'border-transparent text-stone-500'" class="pb-3 border-b-2 font-bold uppercase text-xs tracking-wider transition">Recent Bookings</button>
        </div>

        <!-- Tab Content -->
        <div x-show="activeTab === 'listings'">
            <!-- Your existing Search/Filter bar + Grid for Listings here -->
            @include('admin.homestays.partials.listings-grid')
        </div>

        <div x-show="activeTab === 'bookings'">
            <!-- A clean table for Booking history -->
            @include('admin.homestays.partials.bookings-table')
        </div>
    </div>
</x-app-layout>
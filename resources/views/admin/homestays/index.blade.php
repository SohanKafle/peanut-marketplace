<x-app-layout>
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-serif font-bold text-peanut tracking-tight">Property & Booking Management</h1>
            <p class="text-sm text-stone-500 mt-1">Manage your full inventory and monitor guest reservations in one view.</p>
        </div>
        <a href="{{ route('admin.homestays.create') }}" class="bg-peanut text-white px-5 py-2.5 rounded-xl text-xs font-bold uppercase transition hover:bg-stone-900 shadow-sm">
            + Add New Property
        </a>
    </div>

    <form action="{{ route('admin.homestays.index') }}" method="GET" class="flex flex-col lg:flex-row gap-3 mb-6 bg-stone-50 p-3 rounded-2xl border border-stone-200/60">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by property or guest..." 
               class="flex-1 px-4 py-2.5 bg-white border border-stone-200 rounded-xl text-sm focus:ring-2 focus:ring-golden/20 outline-none">
        
        <select name="status" class="w-full lg:w-48 px-4 py-2.5 bg-white border border-stone-200 rounded-xl text-sm outline-none">
            <option value="">All Statuses</option>
            <option value="Available">Available / Vacant</option>
            <option value="Confirmed">Confirmed Booking</option>
            <option value="Checked In">Checked In</option>
        </select>
        
        <button type="submit" class="bg-peanut text-white px-6 py-2.5 rounded-xl font-bold uppercase text-xs hover:bg-stone-900 transition">Filter</button>
    </form>

    <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-stone-50 text-stone-400 text-[10px] uppercase">
                <tr>
                    <th class="px-6 py-4">Property Name</th>
                    <th class="px-6 py-4">Current Guest</th>
                    <th class="px-4 py-4">Status</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-stone-100">
                @forelse($homestays as $homestay)
                    <tr>
                        <td class="px-6 py-4 font-bold text-stone-900">{{ $homestay->name }}</td>
                        <td class="px-6 py-4 text-stone-600">
                            {{ $homestay->latestBooking->guest_name ?? 'Vacant' }}
                        </td>
                        <td class="px-4 py-4">
                            @if($homestay->latestBooking)
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-blue-50 text-blue-700 uppercase">
                                    {{ $homestay->latestBooking->status }}
                                </span>
                            @else
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 uppercase">
                                    Available
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.homestays.edit', $homestay->id) }}" class="text-stone-500 hover:text-peanut font-bold text-xs uppercase">Manage</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-6 py-12 text-center text-stone-400">No properties found.</td></tr>
                @endforelse
            </tbody>
        </table>
        <div class="p-4 border-t border-stone-100">
            {{ $homestays->links() }}
        </div>
    </div>
</x-app-layout>
<x-app-layout>

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl sm:text-3xl font-sans font-bold text-peanut tracking-tight">Homestays</h1>
            <p class="text-xs sm:text-sm text-stone-500 mt-1">Manage your home inventory, occupancy limits, and pricing details.</p>
        </div>
        <a href="{{ route('admin.homestays.create') }}" class="inline-flex items-center justify-center gap-2 bg-peanut hover:bg-stone-950 text-white px-5 py-3 sm:py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm self-stretch sm:self-auto text-center group">
            <svg class="w-4 h-4 transform group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add New Property
        </a>
    </div>

    <!-- Search & Filter Form -->
    <form id="search-form" action="{{ route('admin.homestays.index') }}" method="GET" class="flex flex-col lg:flex-row gap-3 mb-8">
        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
                </svg>
            </span>
            <input type="text" name="search" id="search-input" value="{{ request('search') }}" 
                   placeholder="Type to search properties..." 
                   oninput="autoSubmit()"
                   class="w-full pl-11 pr-4 py-3 bg-white border border-stone-200 rounded-xl focus:ring-2 focus:ring-peanut/20 focus:border-peanut outline-none text-sm transition">
        </div>

        <!-- Filter Placeholder (You can add specific filters here) -->
        <div class="relative w-full lg:w-48">
            <select name="sort" onchange="this.form.submit()"
                    class="w-full pl-4 pr-10 py-3 bg-white border border-stone-200 rounded-xl outline-none appearance-none cursor-pointer text-sm focus:ring-2 focus:ring-peanut/20 focus:border-peanut transition">
                <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest First</option>
                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
            </select>
            <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
            </span>
        </div>
    </form>

    <!-- List -->
    <div class="flex flex-col gap-3">
        @forelse($homestays as $homestay)
            <div class="bg-white border border-stone-200/80 rounded-2xl p-4 flex flex-col md:flex-row items-center gap-4 hover:shadow-md transition-all">
                
                <!-- Thumbnail -->
                <div class="w-full md:w-32 h-20 md:h-20 bg-stone-100 rounded-xl overflow-hidden flex-shrink-0 relative">
                    @if($homestay->image_path)
                        <img src="{{ asset('storage/' . $homestay->image_path) }}" class="w-full h-full object-cover" alt="Property">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-stone-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </div>
                    @endif
                </div>

                <!-- Text Content -->
                <div class="flex-1 min-w-0 w-full space-y-1">
                    <div class="flex items-center gap-2">
                        <span class="text-[10px] text-stone-400 font-bold uppercase tracking-wider">{{ $homestay->location }}</span>
                    </div>
                    <h3 class="font-bold text-stone-900 text-base truncate pr-4">
                        {{ $homestay->name }}
                    </h3>
                    <p class="text-xs text-stone-500 truncate">Hosted by <span class="font-medium text-stone-700">{{ $homestay->host_name }}</span> • {{ $homestay->capacity }} Guests</p>
                </div>

                <!-- Actions -->
                <div class="flex items-center justify-end gap-2 w-full md:w-auto shrink-0 border-t md:border-t-0 pt-3 md:pt-0 border-stone-100">
                            <a href="{{ route('admin.homestays.edit', $homestay->id) }}" class="flex-1 md:flex-none inline-flex items-center justify-center gap-1.5 px-3 py-2 bg-stone-50 hover:bg-stone-100 border border-stone-200 rounded-xl text-xs font-semibold text-stone-700 transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.homestays.destroy', $homestay->id) }}" method="POST" onsubmit="return confirm('Remove property listing?');" class="flex-1 md:flex-none">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full inline-flex items-center justify-center gap-1.5 px-3 py-2 bg-rose-50/50 hover:bg-rose-600 text-rose-700 hover:text-white border border-rose-100 hover:border-rose-600 rounded-xl text-xs font-semibold transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12 bg-white border border-dashed border-stone-200 rounded-2xl">
                        <span class="text-2xl">🏠</span>
                        <h3 class="mt-2 text-sm font-semibold text-stone-900">No properties found</h3>
                    </div>
                @endforelse

        <div class="mt-4">{{ $homestays->links() }}</div>
    </div>

    <script>
        let timeout = null;
        function autoSubmit() {
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                document.getElementById('search-form').submit();
            }, 500);
        }
    </script>
</x-app-layout>
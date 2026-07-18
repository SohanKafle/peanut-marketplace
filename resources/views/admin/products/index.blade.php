<x-app-layout>
    <div class="min-h-screen bg-stone-50 py-8">
        <div class="max-w-7xl mx-auto px-4">

            @if (session('success'))
                <div
                    class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm rounded-xl flex items-center gap-3 shadow-sm">
                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-sans font-bold text-peanut tracking-tight">Harvests & Products
                    </h1>
                    <p class="text-xs sm:text-sm text-stone-500 mt-1">Manage cooperative inventory, producer sourcing,
                        and marketplace listings.</p>
                </div>
                <a href="{{ route('admin.products.create') }}"
                    class="inline-flex items-center justify-center gap-2 bg-peanut hover:bg-stone-950 text-white px-5 py-3 sm:py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm self-stretch sm:self-auto text-center group">
                    <svg class="w-4 h-4 transform group-hover:scale-110 transition" fill="none" stroke="currentColor"
                        stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Product
                </a>
            </div>

            <form method="GET" id="filter-form" action="{{ route('admin.products.index') }}"
                class="flex flex-col md:flex-row gap-3 mb-6 bg-stone-100/60 p-3 rounded-2xl border border-stone-200/60">
                <div class="relative flex-1">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
                        </svg>
                    </span>
                    <input type="text" name="search" id="search-input" value="{{ request('search') }}"
                        placeholder="Search products..." autocomplete="off"
                        class="w-full pl-11 pr-4 py-2.5 bg-white border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut transition">
                </div>

                <div class="relative">
                    <select name="status" onchange="this.form.submit()"
                        class="w-full md:w-48 pl-4 pr-10 py-2.5 bg-white border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut appearance-none cursor-pointer transition">
                        <option value="">All Statuses</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive /
                            Hidden</option>
                    </select>
                    <span
                        class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </div>
            </form>

            <div class="space-y-3">
                @forelse($products as $product)
                    <div
                        class="bg-white border border-stone-200 rounded-2xl p-4 flex flex-col lg:flex-row lg:items-center justify-between gap-4 hover:shadow-sm hover:border-stone-300 transition-all duration-200">

                        <div class="flex items-center gap-4 flex-1 min-w-0">
                            <div
                                class="w-12 h-12 bg-stone-50 border border-stone-100 rounded-xl overflow-hidden flex items-center justify-center text-xl flex-shrink-0 shadow-inner">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}"
                                        class="w-full h-full object-cover">
                                @else
                                    {{ $product->featured ? '⭐' : '🌽' }}
                                @endif
                            </div>

                            <div class="min-w-0 flex-1">
                                <h3 class="font-bold text-stone-900 text-sm sm:text-base tracking-tight truncate"
                                    title="{{ $product->name }}">
                                    {{ $product->name }}
                                </h3>

                                <div
                                    class="text-xs text-stone-500 mt-0.5 flex flex-wrap items-center gap-x-1.5 gap-y-1">
                                    <span
                                        class="font-medium text-stone-700 truncate inline-block max-w-[120px] sm:max-w-[200px]"
                                        title="{{ $product->producer_name ?? 'Unknown Farmer' }}">
                                        {{ $product->producer_name ?? 'Unknown Farmer' }}
                                    </span>

                                    @if ($product->ward_number)
                                        <span class="text-stone-300 flex-shrink-0">•</span>
                                        <span class="text-stone-600 font-medium whitespace-nowrap flex-shrink-0">Ward
                                            {{ $product->ward_number }}</span>
                                    @endif

                                    @if ($product->village_name)
                                        <span class="text-stone-300 flex-shrink-0">•</span>
                                        <span class="text-stone-500 truncate inline-block max-w-[80px] sm:max-w-[150px]"
                                            title="{{ $product->village_name }}">
                                            {{ $product->village_name }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div
                            class="grid grid-cols-3 gap-2 sm:gap-4 lg:w-[320px] xl:w-[400px] flex-shrink-0 border-t lg:border-t-0 pt-3 lg:pt-0 border-stone-100">
                            <div class="min-w-0">
                                <span
                                    class="block text-[9px] font-bold text-stone-400 uppercase tracking-wider">Price</span>
                                <span class="block text-xs sm:text-sm font-semibold text-stone-800 truncate mt-0.5"
                                    title="Rs. {{ number_format($product->price, 2) }}">
                                    Rs. {{ number_format($product->price, 2) }}
                                </span>
                            </div>
                            <div class="min-w-0">
                                <span
                                    class="block text-[9px] font-bold text-stone-400 uppercase tracking-wider">Stock</span>
                                <span class="block text-xs sm:text-sm font-semibold text-stone-800 truncate mt-0.5">
                                    {{ $product->stock }} <span
                                        class="text-[11px] font-normal text-stone-400">{{ $product->unit }}</span>
                                </span>
                            </div>
                            <div class="min-w-0">
                                <span
                                    class="block text-[9px] font-bold text-stone-400 uppercase tracking-wider">Status</span>
                                <div class="mt-0.5 truncate">
                                    @if ($product->status === 'active')
                                        <span
                                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] sm:text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">
                                            Active
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] sm:text-[11px] font-semibold bg-stone-100 text-stone-600 border border-stone-200">
                                            Inactive
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-end gap-2 border-t lg:border-t-0 pt-3 lg:pt-0 border-stone-100 w-full lg:w-auto flex-shrink-0">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                class="flex-1 lg:flex-none inline-flex items-center justify-center gap-1.5 px-3 py-2 bg-stone-50 hover:bg-stone-100 border border-stone-200 rounded-xl text-xs font-semibold text-stone-700 transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                onsubmit="return confirm('Remove listing?');" class="flex-1 lg:flex-none">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full inline-flex items-center justify-center gap-1.5 px-3 py-2 bg-rose-50/50 hover:bg-rose-600 text-rose-700 hover:text-white border border-rose-100 hover:border-rose-600 rounded-xl text-xs font-semibold transition">
                                    Delete
                                </button>
                            </form>
                        </div>

                    </div>
                @empty
                    <div class="text-center py-12 bg-white border border-dashed border-stone-200 rounded-2xl">
                        <span class="text-2xl">🌾</span>
                        <h3 class="mt-2 text-sm font-semibold text-stone-900">No products found</h3>
                    </div>
                @endforelse
            </div>

            <div class="mt-6">
                {{ $products->appends(request()->query())->links() }}
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById('search-input');
            const filterForm = document.getElementById('filter-form');

            if (searchInput && filterForm) {
                if (searchInput.value.trim() !== "") {
                    searchInput.focus();
                    const valueLength = searchInput.value.length;
                    searchInput.setSelectionRange(valueLength, valueLength);
                }

                let typingTimer;
                const doneTypingInterval = 700;

                searchInput.addEventListener('input', function() {
                    clearTimeout(typingTimer);
                    typingTimer = setTimeout(function() {
                        filterForm.submit();
                    }, doneTypingInterval);
                });
            }
        });
    </script>
</x-app-layout>

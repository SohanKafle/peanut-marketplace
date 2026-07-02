<x-app-layout>
    <!-- Alert Flash Banner Notifications -->
    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm rounded-xl flex items-center gap-3 shadow-sm">
            <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Dynamic Header Layout Stack -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl sm:text-3xl font-sans font-bold text-peanut tracking-tight">Harvests & Products</h1>
            <p class="text-xs sm:text-sm text-stone-500 mt-1">Manage cooperative inventory, producer sourcing, and marketplace listings.</p>
        </div>
        <a href="{{ route('admin.products.create') }}" class="inline-flex items-center justify-center gap-2 bg-peanut hover:bg-stone-950 text-white px-5 py-3 sm:py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm self-stretch sm:self-auto text-center group">
            <svg class="w-4 h-4 transform group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add Product
        </a>
    </div>

    <!-- Fluid Filter Management Deck -->
    <form method="GET" action="{{ route('admin.products.index') }}" class="flex flex-col md:flex-row gap-3 mb-6 bg-stone-100/60 p-3 rounded-2xl border border-stone-200/60">
        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
                </svg>
            </span>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..." onchange="this.form.submit()"
                   class="w-full pl-11 pr-4 py-2.5 bg-white border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut transition">
        </div>
        
        <div class="relative">
            <select name="status" onchange="this.form.submit()" class="w-full md:w-48 pl-4 pr-10 py-2.5 bg-white border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut appearance-none cursor-pointer transition">
                <option value="">All Statuses</option>
                <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
            <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>
        </div>
    </form>

    <!-- Flex Row Table Alternative Stack -->
    <div class="space-y-3">
        @forelse($products as $product)
            <div class="bg-white border border-stone-200 rounded-2xl p-4 flex flex-col lg:flex-row lg:items-center justify-between gap-4 hover:shadow-sm hover:border-stone-300 transition-all duration-200">
                
                <!-- Sourcing block Layout -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-stone-50 border border-stone-100 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                        {{ $product->featured ? '⭐' : '🌽' }}
                    </div>
                    <div class="min-w-0">
                        <h3 class="font-bold text-stone-900 text-sm sm:text-base tracking-tight truncate">{{ $product->name }}</h3>
                        <p class="text-xs text-stone-500 mt-0.5 flex flex-wrap items-center gap-1.5">
                            <span class="font-medium text-stone-700 truncate max-w-[140px] sm:max-w-none">{{ $product->farmer->name ?? 'Unknown Farmer' }}</span>
                            @if(isset($product->farmer->ward))
                                <span class="text-stone-300">•</span>
                                <span class="text-stone-600 font-medium">Ward {{ $product->farmer->ward }}</span>
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Metrics layout grids grid -> Auto collapses cleanly via custom responsive breakpoints -->
                <div class="grid grid-cols-3 gap-2 sm:gap-6 lg:gap-12 flex-1 lg:max-w-md border-t lg:border-t-0 pt-3 lg:pt-0 border-stone-100">
                    <div>
                        <span class="block text-[9px] font-bold text-stone-400 uppercase tracking-wider">Price</span>
                        <span class="block text-xs sm:text-sm font-semibold text-stone-800 truncate mt-0.5">
                            Rs. {{ number_format($product->price, 2) }}
                        </span>
                    </div>
                    <div>
                        <span class="block text-[9px] font-bold text-stone-400 uppercase tracking-wider">Stock</span>
                        <span class="block text-xs sm:text-sm font-semibold text-stone-800 truncate mt-0.5">
                            {{ $product->stock }} <span class="text-[11px] font-normal text-stone-400">{{ $product->unit }}</span>
                        </span>
                    </div>
                    <div>
                        <span class="block text-[9px] font-bold text-stone-400 uppercase tracking-wider">Status</span>
                        <div class="mt-0.5">
                            @if($product->status === 'active')
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] sm:text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">
                                    Active
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] sm:text-[11px] font-semibold bg-stone-100 text-stone-600 border border-stone-200">
                                    Draft
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Action Button Footers layout elements -->
                <div class="flex items-center justify-end gap-2 border-t lg:border-t-0 pt-3 lg:pt-0 border-stone-100 w-full lg:w-auto">
                    <a href="{{ route('admin.products.edit', $product) }}" class="flex-1 lg:flex-none inline-flex items-center justify-center gap-1.5 px-3 py-2 bg-stone-50 hover:bg-stone-100 border border-stone-200 rounded-xl text-xs font-semibold text-stone-700 transition">
                        Edit
                    </a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Remove listing?');" class="flex-1 lg:flex-none">
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
                <span class="text-2xl">🌾</span>
                <h3 class="mt-2 text-sm font-semibold text-stone-900">No products found</h3>
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $products->links() }}
    </div>
</x-app-layout>
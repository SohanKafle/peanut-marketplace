<x-app-layout>
    <!-- View Navigation Header Breadcrumb Layer -->
    <div class="mb-6">
        <a href="{{ route('admin.products.index') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wider text-stone-500 hover:text-peanut transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Back to listings
        </a>
        <h1 class="text-2xl sm:text-3xl font-sans font-bold text-peanut tracking-tight mt-2">New Product Registration</h1>
    </div>

    <!-- Main Creation Form Framework Wrapper Block -->
    <form method="POST" action="{{ route('admin.products.store') }}" class="bg-white border border-stone-200 rounded-2xl p-4 sm:p-6 lg:p-8 shadow-sm">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Field 1: Producer Relationship Select Dropdown -->
            <div class="md:col-span-2">
                <label for="farmer_id" class="block text-xs font-bold uppercase tracking-wider text-stone-600 mb-1.5">Assigned Sourcing Farmer</label>
                <div class="relative">
                    <select id="farmer_id" name="farmer_id" required class="w-full pl-4 pr-10 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut appearance-none cursor-pointer transition">
                        <option value="" disabled selected>Select a local farm supplier...</option>
                        @foreach($farmers as $farmer)
                            <option value="{{ $farmer->id }}" {{ old('farmer_id') == $farmer->id ? 'selected' : '' }}>
                                {{ $farmer->name }} (Ward {{ $farmer->ward ?? 'N/A' }})
                            </option>
                        @endforeach
                    </select>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </div>
                @error('farmer_id') <p class="text-xs text-rose-600 mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            <!-- Field 2: Core Identification Name Input -->
            <div>
                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-stone-600 mb-1.5">Product Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="e.g., Organic White Potato"
                       class="w-full px-4 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut transition">
                @error('name') <p class="text-xs text-rose-600 mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            <!-- Field 3: URL Route Optimized Slug Property -->
            <div>
                <label for="slug" class="block text-xs font-bold uppercase tracking-wider text-stone-600 mb-1.5">URL Slug Reference</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug') }}" required placeholder="e.g., organic-white-potato"
                       class="w-full px-4 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut transition">
                @error('slug') <p class="text-xs text-rose-600 mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            <!-- Field 4: Base Pricing Numerical Scale Column -->
            <div>
                <label for="price" class="block text-xs font-bold uppercase tracking-wider text-stone-600 mb-1.5">Price Listing (NPR)</label>
                <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" required placeholder="0.00"
                       class="w-full px-4 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut transition">
                @error('price') <p class="text-xs text-rose-600 mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            <!-- Field 5: Volume Metric Inventory Units & Measurements Split -->
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label for="stock" class="block text-xs font-bold uppercase tracking-wider text-stone-600 mb-1.5">Initial Stock</label>
                    <input type="number" id="stock" name="stock" value="{{ old('stock', 0) }}" required
                           class="w-full px-4 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut transition">
                    @error('stock') <p class="text-xs text-rose-600 mt-1 font-medium">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="unit" class="block text-xs font-bold uppercase tracking-wider text-stone-600 mb-1.5">Measurement Unit</label>
                    <input type="text" id="unit" name="unit" value="{{ old('unit', 'kg') }}" required placeholder="kg, piece, ltr"
                           class="w-full px-4 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut transition">
                    @error('unit') <p class="text-xs text-rose-600 mt-1 font-medium">{{ $message }}</p> @enderror
                </div>
            </div>

            <!-- Field 6: Content Long Textarea Narrative Block -->
            <div class="md:col-span-2">
                <label for="description" class="block text-xs font-bold uppercase tracking-wider text-stone-600 mb-1.5">Product Description</label>
                <textarea id="description" name="description" rows="4" required placeholder="Outline flavor profile, harvesting timeline, storage parameters..."
                          class="w-full px-4 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-peanut/10 focus:border-peanut transition resize-none">{{ old('description') }}</textarea>
                @error('description') <p class="text-xs text-rose-600 mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            <!-- Field 7: Flag Toggle Settings Element Options Box -->
            <div class="md:col-span-2 bg-stone-50 border border-stone-200/70 rounded-xl p-4 flex items-start gap-3">
                <div class="flex items-center h-5">
                    <input type="checkbox" id="featured" name="featured" value="1" {{ old('featured') ? 'checked' : '' }}
                           class="w-4 h-4 text-peanut border-stone-300 rounded focus:ring-peanut focus:ring-opacity-20 cursor-pointer">
                </div>
                <div>
                    <label for="featured" class="block text-xs font-bold uppercase tracking-wider text-stone-800 cursor-pointer">Promote as Featured Item</label>
                    <p class="text-xs text-stone-500 mt-0.5">Checking this flags the harvest to appear within curated storefront sections and hero listings.</p>
                </div>
            </div>

        </div>

        <!-- Form Submission Footer Deck Panel -->
        <div class="mt-8 pt-4 border-t border-stone-100 flex flex-col sm:flex-row items-center justify-end gap-3">
            <a href="{{ route('admin.products.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5 bg-white border border-stone-200 hover:bg-stone-50 text-stone-700 text-xs font-bold uppercase tracking-wider rounded-xl transition">
                Cancel
            </a>
            <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-2.5 bg-peanut hover:bg-stone-950 text-white text-xs font-bold uppercase tracking-wider rounded-xl transition shadow-sm">
                Publish Product
            </button>
        </div>
    </form>

    <!-- Simple Automated Real-time Slug Generator Script Utility -->
    <script>
        document.getElementById('name').addEventListener('input', function() {
            if(!document.getElementById('slug').dataset.edited) {
                document.getElementById('slug').value = this.value
                    .toLowerCase()
                    .replace(/[^\w ]+/g, '')
                    .replace(/ +/g, '-');
            }
        });
        document.getElementById('slug').addEventListener('input', function() {
            this.dataset.edited = true;
        });
    </script>
</x-app-layout>
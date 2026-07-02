<x-admin-layout title="Edit Harvest | Ghachok Management">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">
        
        <!-- Header -->
        <div class="flex items-center gap-4 mb-6">
            <a href="{{ route('admin.products.index') }}" class="p-2 bg-white border border-stone-200 rounded-xl text-stone-500 hover:text-peanut hover:bg-stone-50 transition shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-sans font-bold text-stone-900 tracking-tight">Edit Harvest Listing</h1>
                <p class="text-sm text-stone-500 mt-1">Updating records for: <span class="font-semibold text-peanut">{{ $product->name }}</span></p>
            </div>
        </div>

        <!-- Form Canvas -->
        <form action="{{ route('admin.products.update', $product) }}" method="POST" class="bg-white border border-stone-200/80 rounded-2xl shadow-sm overflow-hidden">
            @csrf
            @method('PUT')
            
            <div class="p-6 sm:p-8 space-y-8">
                
                <!-- Section 1: Core Content -->
                <div>
                    <h3 class="text-sm font-bold text-stone-900 uppercase tracking-wide border-b border-stone-100 pb-2 mb-4">1. Product Identity</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <!-- Producer Selection -->
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold text-stone-700 uppercase tracking-wide mb-2">Assigned Farmer <span class="text-red-500">*</span></label>
                            <select name="farmer_id" required class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl outline-none focus:ring-2 focus:ring-golden/20 focus:border-golden transition appearance-none cursor-pointer">
                                @foreach($farmers as $farmer)
                                    <option value="{{ $farmer->id }}" {{ $product->farmer_id == $farmer->id ? 'selected' : '' }}>
                                        {{ $farmer->name }} (Ward {{ $farmer->ward ?? 'N/A' }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Product Name -->
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase tracking-wide mb-2">Product Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name_input" value="{{ old('name', $product->name) }}" required
                                class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none transition">
                        </div>

                        <!-- URL Slug -->
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase tracking-wide mb-2">URL Slug <span class="text-red-500">*</span></label>
                            <input type="text" name="slug" id="slug_input" value="{{ old('slug', $product->slug) }}" required
                                class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none transition">
                        </div>

                        <!-- Rich Text Description -->
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold text-stone-700 uppercase tracking-wide mb-2">Harvest Description <span class="text-red-500">*</span></label>
                            <textarea name="description" rows="4" required
                                class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none transition resize-none">{{ old('description', $product->description) }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Numbers & Logic -->
                <div>
                    <h3 class="text-sm font-bold text-stone-900 uppercase tracking-wide border-b border-stone-100 pb-2 mb-4">2. Market Pricing & Inventory</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        <!-- Price -->
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase tracking-wide mb-2">Price (Rs.) <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-stone-400 text-sm font-medium">Rs.</span>
                                <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}" required
                                    class="w-full pl-10 pr-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none transition">
                            </div>
                        </div>

                        <!-- Unit Selection -->
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase tracking-wide mb-2">Selling Unit</label>
                            <select name="unit" class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl outline-none focus:ring-2 focus:ring-golden/20 focus:border-golden transition appearance-none cursor-pointer">
                                <option value="kg" {{ $product->unit == 'kg' ? 'selected' : '' }}>Per Kilogram (kg)</option>
                                <option value="gram" {{ $product->unit == 'gram' ? 'selected' : '' }}>Per 100 Grams (g)</option>
                                <option value="piece" {{ $product->unit == 'piece' ? 'selected' : '' }}>Per Piece</option>
                                <option value="liter" {{ $product->unit == 'liter' ? 'selected' : '' }}>Per Liter (L)</option>
                            </select>
                        </div>

                        <!-- Stock Supply -->
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase tracking-wide mb-2">Stock Level Available</label>
                            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" min="0" required
                                class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none transition">
                        </div>

                        <!-- Featured Showcase Toggle -->
                        <div class="md:col-span-3 pt-2">
                            <label class="relative inline-flex items-center cursor-pointer select-none">
                                <input type="checkbox" name="featured" value="1" {{ $product->featured ? 'checked' : '' }} class="sr-only peer">
                                <div class="w-11 h-6 bg-stone-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-stone-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-peanut"></div>
                                <span class="ml-3 text-sm font-medium text-stone-800">Promote as Featured Product on Homepage</span>
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Actions -->
            <div class="px-6 py-4 bg-stone-50/50 border-t border-stone-100 flex items-center justify-end gap-3">
                <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 text-xs font-bold uppercase tracking-wider text-stone-500 hover:text-stone-900 transition">Cancel</a>
                <button type="submit" class="px-6 py-2.5 bg-peanut text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:bg-stone-950 focus:ring-4 focus:ring-golden/20 transition shadow-sm">
                    Save Changes
                </button>
            </div>
        </form>
    </div>

    <!-- Automatic Slug Watcher -->
    <script>
        document.getElementById('name_input').addEventListener('input', function() {
            let slug = this.value.toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
            document.getElementById('slug_input').value = slug;
        });
    </script>
</x-admin-layout>
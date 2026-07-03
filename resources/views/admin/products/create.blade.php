<x-app-layout>
    <div class="mb-8">
        <h1 class="text-3xl font-sans font-bold text-stone-900 tracking-tight">Add New Marketplace Product</h1>
        <p class="text-sm text-stone-500 mt-1">Fill out the product inventory specifications and the details of the local producer below.</p>
    </div>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        @csrf
        
        <div class="lg:col-span-2 bg-white border border-stone-200/80 p-6 md:p-8 rounded-2xl shadow-sm space-y-5">
            <div>
                <label for="name" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Product Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="e.g., Organic Local Peanuts" required
                       class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm shadow-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="price" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Price (Rs.)</label>
                    <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}" placeholder="e.g., 250.00" required
                           class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm shadow-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">
                </div>
                <div>
                    <label for="stock" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Available Stock</label>
                    <input type="number" name="stock" id="stock" value="{{ old('stock', 0) }}" required
                           class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm shadow-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">
                </div>
                <div>
                    <label for="unit" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Measurement Unit</label>
                    <input type="text" name="unit" id="unit" value="{{ old('unit', 'kg') }}" placeholder="e.g., kg, packet, ltr" required
                           class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm shadow-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="status" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Visibility Status</label>
                    <select name="status" id="status" class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">
                        <option value="active">Active (Visible on Site)</option>
                        <option value="inactive">Inactive (Hidden)</option>
                    </select>
                </div>
                <div>
                    <label for="featured" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Feature Item</label>
                    <select name="featured" id="featured" class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">
                        <option value="0">Standard Listing</option>
                        <option value="1">Showcase on Home Banner</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="description" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Product Description</label>
                <textarea name="description" id="description" rows="4" placeholder="Describe the item's texture, taste, or details..." required
                          class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm shadow-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">{{ old('description') }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Upload Display Image</label>
                <input type="file" name="image" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 transition file:cursor-pointer">
            </div>
        </div>

        <div class="lg:col-span-1 space-y-6">
            <div class="bg-stone-50 border border-stone-200/70 p-6 rounded-2xl space-y-5">
                <h3 class="text-xs font-bold text-stone-900 uppercase tracking-wider border-b border-stone-200 pb-2">Source Farmer Profile</h3>
                
                <div>
                    <label for="producer_name" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Farmer / Producer Name</label>
                    <input type="text" name="producer_name" id="producer_name" value="{{ old('producer_name') }}" placeholder="e.g., Ram Bahadur Gurung" required
                           class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm shadow-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">
                </div>

                <div class="grid grid-cols-3 gap-2">
                    <div class="col-span-1">
                        <label for="ward_number" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Ward</label>
                        <select name="ward_number" id="ward_number" class="w-full px-3 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm transition">
                            @foreach(range(1,4) as $w)
                                <option value="{{ $w }}">W-{{ $w }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="village_name" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Village Locality</label>
                        <input type="text" name="village_name" id="village_name" value="{{ old('village_name', 'Ghachok') }}" required
                               class="w-full px-3 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm transition">
                    </div>
                </div>

                <div>
                    <label for="contact_link" class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-2">Social Messaging URL (Link)</label>
                    <input type="url" name="contact_link" id="contact_link" value="{{ old('contact_link') }}" placeholder="https://m.me/yourusername"
                           class="w-full px-4 py-2.5 bg-white border border-stone-200 rounded-xl outline-none text-sm shadow-sm focus:ring-2 focus:ring-stone-900/10 focus:border-stone-900 transition">
                    <p class="text-[10px] text-stone-400 mt-1 leading-normal">Routes prospective marketplace clients directly to Facebook Messenger or Instagram messages as shown in your mindmap.</p>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 border border-stone-200 text-stone-600 rounded-xl text-xs font-bold uppercase tracking-wider hover:bg-stone-50 transition">Cancel</a>
                <button type="submit" class="bg-stone-900 hover:bg-stone-800 text-white px-6 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm">Save Product</button>
            </div>
        </div>
    </form>
</x-app-layout>
<x-app-layout>
    <div class="min-h-screen bg-stone-50 py-8">
        <div class="max-w-7xl mx-auto px-4">
            
            <div class="mb-8">
                <h1 class="text-3xl font-sans font-bold text-stone-900">Add New Product</h1>
                <p class="text-stone-500">Fill in the details to list a new marketplace item.</p>
            </div>

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <div class="lg:col-span-2 space-y-6">
                        <div class="bg-white p-6 md:p-8 rounded-3xl border border-stone-200 shadow-sm">
                            <div class="space-y-6">
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Product Name</label>
                                        <input type="text" name="name" id="name-input" value="{{ old('name') }}" required 
                                               class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">URL Slug (Read-Only)</label>
                                        <input type="text" name="slug" id="slug-input" value="{{ old('slug') }}" readonly required 
                                               class="w-full px-4 py-3 bg-stone-100 border border-stone-300 rounded-xl outline-none text-stone-500 font-mono text-sm select-none pointer-events-none transition">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Price (NPR)</label>
                                        <input type="number" step="0.01" name="price" value="{{ old('price') }}" required 
                                               class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Stock Quantity</label>
                                        <input type="number" name="stock" value="{{ old('stock', 0) }}" required 
                                               class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Measurement Unit</label>
                                        <input type="text" name="unit" value="{{ old('unit', 'kg') }}" required 
                                               class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Visibility Status</label>
                                        <select name="status" class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 appearance-none transition">
                                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active (Visible on Site)</option>
                                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive (Hidden)</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Feature Item Level</label>
                                        <select name="featured" class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 appearance-none transition">
                                            <option value="0" {{ old('featured') == 0 ? 'selected' : '' }}>Standard Marketplace Listing</option>
                                            <option value="1" {{ old('featured') == 1 ? 'selected' : '' }}>Showcase on Homepage Spotlight</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Product Description</label>
                                    <textarea name="description" rows="5" required 
                                              class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-1 space-y-6">
                        <div class="bg-white p-6 md:p-8 rounded-3xl border border-stone-200 shadow-sm space-y-5">
                            <h2 class="text-lg font-bold text-stone-900 border-b border-stone-100 pb-2">Producer & Media</h2>
                            
                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Source Farmer / Host Name</label>
                                <input type="text" name="producer_name" value="{{ old('producer_name') }}" required 
                                       class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">
                            </div>

                            <div class="grid grid-cols-3 gap-3">
                                <div class="col-span-1">
                                    <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Ward No.</label>
                                    <select name="ward_number" class="w-full px-3 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">
                                        @foreach(range(1,4) as $w)
                                            <option value="{{ $w }}" {{ old('ward_number') == $w ? 'selected' : '' }}>W-{{ $w }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Village Settlement</label>
                                    <input type="text" name="village_name" value="{{ old('village_name', 'Ghachok') }}" required 
                                           class="w-full px-3 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">
                                </div>
                            </div>

                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Contact Messaging Route URL</label>
                                <input type="url" name="contact_link" value="{{ old('contact_link') }}" placeholder="https://" 
                                       class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800 transition">
                            </div>

                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Upload Image Asset</label>
                                <input type="file" name="image" id="image-input" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 file:cursor-pointer transition">
                                
                                <div id="preview-container" class="hidden mt-4 rounded-xl overflow-hidden border border-stone-200 bg-stone-50 shadow-inner">
                                    <img id="image-preview" src="#" class="w-full aspect-video object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-8 border-t border-stone-200 flex flex-col md:flex-row items-center gap-4">
                    <a href="{{ route('admin.products.index') }}" 
                       class="w-full md:w-auto text-center px-8 py-3 text-xs font-bold text-stone-600 uppercase tracking-wider bg-stone-100 border border-stone-200 rounded-xl hover:bg-stone-200 hover:text-stone-900 transition">
                        Cancel
                    </a>

                    <button type="submit" 
                            class="w-full md:w-auto bg-peanut hover:bg-stone-950 text-white px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-lg">
                        Publish Product
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const nameInput = document.getElementById('name-input');
        const slugInput = document.getElementById('slug-input');

        if (nameInput && slugInput) {
            nameInput.addEventListener('input', function() {
                slugInput.value = nameInput.value
                    .toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '')     // Drop unusual symbols
                    .replace(/\s+/g, '-')             // Turn spaces into single dashes
                    .replace(/-+/g, '-');             // Clean up multi-dashes
            });
        }

        document.getElementById('image-input').onchange = function (evt) {
            const [file] = this.files;
            if (file) {
                document.getElementById('preview-container').classList.remove('hidden');
                document.getElementById('image-preview').src = URL.createObjectURL(file);
            }
        };
    </script>
</x-app-layout>
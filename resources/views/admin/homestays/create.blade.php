<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-serif font-bold text-stone-900">Add New Property</h1>
            <p class="text-stone-500">Fill in the details to list a new homestay.</p>
        </div>

        <form action="{{ route('admin.homestays.store') }}" method="POST" enctype="multipart/form-data" 
              class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @csrf

            <!-- Left Panel -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white p-6 md:p-8 rounded-3xl border border-stone-200 shadow-sm">
                    <div class="space-y-6">
                        <div>
                            <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Property Name</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:border-peanut outline-none">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Host Name</label>
                                <input type="text" name="host_name" required class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:border-peanut outline-none">
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Location</label>
                                <input type="text" name="location" required class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:border-peanut outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Max Capacity</label>
                                <input type="number" name="capacity" required class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:border-peanut outline-none">
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Price (NPR/Night)</label>
                                <input type="number" name="price_per_night" required class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:border-peanut outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Description</label>
                            <textarea name="description" rows="5" class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:border-peanut outline-none"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-6 md:p-8 rounded-3xl border border-stone-200 shadow-sm space-y-5">
                    <h2 class="text-lg font-bold text-stone-900">Media & Contact</h2>
                    
                    <div>
                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Contact URL</label>
                        <input type="url" name="contact_url" placeholder="https://" class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:border-peanut outline-none">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Upload Image</label>
                        <input type="file" name="image" id="image-input" class="w-full text-sm text-stone-500">
                        <div id="preview-container" class="hidden mt-4 rounded-xl overflow-hidden border border-stone-200">
                            <img id="image-preview" src="#" class="w-full aspect-video object-cover">
                        </div>
                    </div>
                </div>

                <!-- Footer Actions -->
                <div class="flex items-center gap-4 pt-4">
                    <a href="{{ route('admin.homestays.index') }}" class="flex-1 text-center py-4 bg-stone-100 text-stone-700 font-bold rounded-xl hover:bg-stone-200 transition">Cancel</a>
                    <button type="submit" class="flex-[2] py-4 bg-peanut text-white font-bold rounded-xl hover:bg-stone-900 transition shadow-lg">Save Property</button>
                </div>
            </div>
        </form>
    </div>
     <script>
    document.getElementById('image-input').onchange = function (evt) {
        const [file] = this.files;
        if (file) {
            document.getElementById('preview-container').classList.remove('hidden');
            document.getElementById('image-preview').src = URL.createObjectURL(file);
            
            // If on edit page, hide the old image
            const existing = document.getElementById('existing-image');
            if (existing) existing.classList.add('hidden');
        }
    };
</script>
</x-app-layout>
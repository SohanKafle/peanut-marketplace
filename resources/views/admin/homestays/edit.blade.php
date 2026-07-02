<x-app-layout>
    <div class="min-h-screen bg-stone-50 py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-8">
                <h1 class="text-3xl font-sans font-bold text-stone-900">Edit Property</h1>
                <p class="text-stone-500">Updating: {{ $homestay->name }}</p>
            </div>

            <form action="{{ route('admin.homestays.update', $homestay->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Panel -->
                    <div class="lg:col-span-2 space-y-6">
                        <div class="bg-white p-6 md:p-8 rounded-3xl border border-stone-200 shadow-sm">
                            <div class="space-y-6">
                                <div>
                                    <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Property Name</label>
                                    <input type="text" name="name" value="{{ $homestay->name }}" required class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Host Name</label>
                                        <input type="text" name="host_name" value="{{ $homestay->host_name }}" required class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Location</label>
                                        <input type="text" name="location" value="{{ $homestay->location }}" required class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Max Capacity</label>
                                        <input type="number" name="capacity" value="{{ $homestay->capacity }}" required class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Price (NPR/Night)</label>
                                        <input type="number" name="price_per_night" value="{{ $homestay->price_per_night }}" required class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Description</label>
                                    <textarea name="description" rows="5" class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800">{{ $homestay->description }}</textarea>
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
                                <input type="url" name="contact_url" value="{{ $homestay->contact_url }}" class="w-full px-4 py-3 bg-white border border-stone-300 rounded-xl focus:border-peanut outline-none text-stone-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-1.5">Change Image</label>
                                <input type="file" name="image" id="image-input" class="w-full text-sm text-stone-500">
                                @if($homestay->image_path)
                                    <div id="existing-image" class="mt-4 rounded-xl overflow-hidden border border-stone-200">
                                        <img src="{{ asset('storage/'.$homestay->image_path) }}" class="w-full aspect-video object-cover">
                                    </div>
                                @endif
                                <div id="preview-container" class="hidden mt-4 rounded-xl overflow-hidden border border-stone-200">
                                    <img id="image-preview" src="#" class="w-full aspect-video object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Actions -->
<div class="mt-8 pt-8 border-t border-stone-200 flex flex-col md:flex-row items-center gap-4">
    <!-- Cancel Button: Added border and background -->
    <a href="{{ route('admin.homestays.index') }}" 
       class="w-full md:w-auto text-center px-8 py-3 text-xs font-bold text-stone-600 uppercase tracking-wider bg-stone-100 border border-stone-200 rounded-xl hover:bg-stone-200 hover:text-stone-900 transition">
        Cancel
    </a>

    <!-- Action Button: Retained existing styling -->
    <button type="submit" 
            class="w-full md:w-auto bg-peanut hover:bg-stone-950 text-white px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-lg">
        {{ request()->routeIs('*edit*') ? 'Update Property' : 'Publish Property' }}
    </button>
</div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('image-input').onchange = function (evt) {
            const [file] = this.files;
            if (file) {
                document.getElementById('preview-container').classList.remove('hidden');
                document.getElementById('image-preview').src = URL.createObjectURL(file);
                const existing = document.getElementById('existing-image');
                if (existing) existing.classList.add('hidden');
            }
        };
    </script>
</x-app-layout>
<x-app-layout>
    <div class="min-h-screen bg-stone-50 py-8">
        <div class="max-w-5xl mx-auto px-4">
            
            <!-- Validation Error Messages -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-800 text-sm rounded-xl">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-sans font-bold text-stone-900">Add Hero Slide</h1>
                <p class="text-stone-500 mt-1">Upload a new banner image for the homepage hero slideshow.</p>
            </div>

            <form id="hero-slide-form" action="{{ route('admin.hero-slides.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Content (Title & Image) -->
                    <div class="lg:col-span-2 space-y-6">
                        
                        <!-- Title Card -->
                        <div class="bg-white border border-stone-200 rounded-2xl p-6 shadow-sm">
                            <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-2">
                                Slide Title
                            </label>
                            <input type="text" name="title" value="{{ old('title') }}" placeholder="e.g. Summer Special Banner" required
                                class="w-full text-xl font-bold bg-white border border-stone-300 rounded-xl px-4 py-3 focus:border-peanut outline-none text-stone-800">
                        </div>

                        <!-- Image Upload Card -->
                        <div class="bg-white border border-stone-200 rounded-2xl p-6 shadow-sm">
                            <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-3">
                                Slide Image
                            </label>
                            <div class="relative aspect-video rounded-xl bg-stone-50 border-2 border-dashed border-stone-300 flex items-center justify-center cursor-pointer overflow-hidden group hover:border-peanut transition">
                                <img id="image-preview" src="" class="absolute inset-0 w-full h-full object-cover hidden">
                                <input type="file" name="image" required class="absolute inset-0 opacity-0 cursor-pointer" onchange="preview(event)">
                                <div id="upload-placeholder" class="flex flex-col items-center justify-center text-center p-4">
                                    <svg class="w-8 h-8 text-stone-400 mb-2 group-hover:text-peanut transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-[10px] font-bold text-stone-400 uppercase group-hover:text-peanut">Click to upload photo</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar (Status) -->
                    <div class="space-y-6">
                        <div class="bg-white border border-stone-200 rounded-2xl p-6 shadow-sm">
                            <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-3">
                                Status
                            </label>
                            <select name="is_active"
                                class="w-full bg-white border border-stone-300 rounded-xl text-sm font-semibold text-stone-700 cursor-pointer focus:border-peanut py-3 px-4 outline-none">
                                <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Footer Actions -->
                <div class="mt-8 pt-8 border-t border-stone-200 flex flex-col md:flex-row items-center gap-4">
                    <a href="{{ route('admin.hero-slides.index') }}"
                        class="w-full md:w-auto text-center px-8 py-3 text-xs font-bold text-stone-600 uppercase tracking-wider bg-stone-100 border border-stone-200 rounded-xl hover:bg-stone-200 hover:text-stone-900 transition">
                        Cancel
                    </a>
                    <button type="submit"
                        class="w-full md:w-auto bg-peanut hover:bg-stone-950 text-white px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-lg">
                        Upload Slide
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function preview(event) {
            const output = document.getElementById('image-preview');
            const placeholder = document.getElementById('upload-placeholder');
            
            if (event.target.files && event.target.files[0]) {
                output.src = URL.createObjectURL(event.target.files[0]);
                output.classList.remove('hidden');
                if (placeholder) {
                    placeholder.classList.add('hidden');
                }
            }
        }
    </script>
</x-app-layout>
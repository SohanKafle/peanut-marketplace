<x-app-layout>
    <div class="min-h-screen bg-stone-50 py-8">
        <div class="max-w-5xl mx-auto px-4">
            <div class="mb-8">
                <h1 class="text-3xl font-sans font-bold text-stone-900">Compose Story</h1>
                <p class="text-stone-500 mt-1">Publish new content to your community.</p>
            </div>

            <form id="story-form" action="{{ route('admin.stories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Left Column -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Title Card -->
                        <div class="bg-white border border-stone-200 rounded-2xl p-6 shadow-sm">
                            <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-2">Title</label>
                            <input type="text" name="title" required
                                   class="w-full text-xl font-bold bg-white border border-stone-300 rounded-xl px-4 py-3 focus:border-peanut outline-none text-stone-800">
                        </div>

                        <!-- Description Card (Long/Short Fields) -->
                        <div class="bg-white border border-stone-200 rounded-2xl p-6 shadow-sm space-y-6">
                            <!-- Short Input Box -->
                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-2">Teaser (Short Description)</label>
                                <textarea name="excerpt" rows="2" 
                                          class="w-full text-sm bg-white border border-stone-300 rounded-xl px-4 py-3 focus:border-peanut outline-none text-stone-700"></textarea>
                            </div>

                            <!-- Long Input Box -->
                            <div>
                                <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-2">Full Story (Long Description)</label>
                                <textarea name="content" rows="12" required
                                          class="w-full text-sm bg-white border border-stone-300 rounded-xl px-4 py-3 focus:border-peanut outline-none text-stone-700"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <div class="bg-white border border-stone-200 rounded-2xl p-6 shadow-sm">
                            <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-3">Featured Image</label>
                            <div class="relative aspect-video rounded-xl bg-stone-50 border-2 border-dashed border-stone-300 flex items-center justify-center cursor-pointer overflow-hidden group hover:border-peanut transition">
                                <img id="image-preview" src="" class="absolute inset-0 w-full h-full object-cover hidden">
                                <input type="file" name="image" class="absolute inset-0 opacity-0 cursor-pointer" onchange="preview(event)">
                                <span class="text-[10px] font-bold text-stone-400 uppercase group-hover:text-peanut">Upload</span>
                            </div>
                        </div>

                        <div class="bg-white border border-stone-200 rounded-2xl p-6 shadow-sm">
                            <label class="block text-[10px] font-black text-stone-400 uppercase tracking-widest mb-3">Status</label>
                            <select name="status" class="w-full bg-white border border-stone-300 rounded-xl text-sm font-semibold text-stone-700 cursor-pointer focus:border-peanut py-3 px-4">
                                <option value="Draft">Draft</option>
                                <option value="Published">Published</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Footer Actions -->
                <div class="mt-8 pt-8 border-t border-stone-200 flex flex-col md:flex-row items-center gap-4">
                    <a href="{{ route('admin.stories.index') }}" 
                       class="w-full md:w-auto text-center px-8 py-3 text-xs font-bold text-stone-600 uppercase tracking-wider bg-stone-100 border border-stone-200 rounded-xl hover:bg-stone-200 hover:text-stone-900 transition">
                       Cancel
                    </a>
                    <button type="submit" 
                            class="w-full md:w-auto bg-peanut hover:bg-stone-950 text-white px-8 py-3 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-lg">
                        Publish Story
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function preview(event) {
            const output = document.getElementById('image-preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.classList.remove('hidden');
        }
    </script>
</x-app-layout>
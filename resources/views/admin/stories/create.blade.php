<x-app-layout>
    <!-- Wrapper: Ensures breathing room on all screen sizes -->
    <div class="max-w-6xl mx-auto p-4 md:p-8">
        
        <!-- Header -->
        <header class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-serif font-bold text-stone-900 tracking-tight">Compose Story</h1>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.stories.index') }}" class="px-4 py-2 text-sm font-semibold text-stone-500 hover:text-stone-900 transition">Discard</a>
                <button type="submit" form="story-form" class="px-6 py-2 bg-peanut text-white rounded-lg font-bold text-sm hover:bg-stone-900 transition shadow-sm">Publish Story</button>
            </div>
        </header>

        <form id="story-form" action="{{ route('admin.stories.store') }}" method="POST" enctype="multipart/form-data" 
              class="flex flex-col lg:flex-row gap-6">
            @csrf
            
            <!-- Editor Column: Flex-grow allows it to take available space -->
            <div class="flex-1 min-w-0 bg-white border border-stone-200 rounded-2xl p-6 md:p-8 shadow-sm">
                <input type="text" name="title" placeholder="Untitled Story..." 
                       class="w-full text-3xl md:text-4xl font-serif font-bold border-none placeholder:text-stone-300 focus:ring-0 p-0 mb-4">
                
                <textarea name="excerpt" placeholder="Add a short, compelling teaser..." 
                          class="w-full text-lg text-stone-600 italic border-none placeholder:text-stone-300 focus:ring-0 p-0 mb-6"></textarea>
                
                <textarea name="content" placeholder="Start your story..." 
                          class="w-full min-h-[300px] text-lg text-stone-800 leading-relaxed border-none placeholder:text-stone-300 focus:ring-0 p-0 resize-none"></textarea>
            </div>

            <!-- Settings Column: Fixed width on desktop, full width on mobile -->
            <div class="lg:w-80 flex flex-col gap-6 shrink-0">
                <!-- Image Box -->
                <div class="bg-white border border-stone-200 rounded-2xl p-5 shadow-sm">
                    <label class="block text-xs font-bold text-stone-400 uppercase tracking-wider mb-3">Featured Image</label>
                    <div class="relative aspect-video rounded-xl bg-stone-50 border-2 border-dashed border-stone-200 flex items-center justify-center cursor-pointer overflow-hidden group hover:border-peanut transition">
                        <img id="image-preview" src="" class="absolute inset-0 w-full h-full object-cover hidden">
                        <input type="file" name="image" class="absolute inset-0 opacity-0 cursor-pointer" onchange="preview(event)">
                        <span class="text-[10px] font-bold text-stone-400 uppercase group-hover:text-peanut">Upload</span>
                    </div>
                </div>

                <!-- Status Card -->
                <div class="bg-white border border-stone-200 rounded-2xl p-5 shadow-sm">
                    <label class="block text-xs font-bold text-stone-400 uppercase tracking-wider mb-3">Status</label>
                    <select name="status" class="w-full bg-stone-50 border-none rounded-lg text-sm font-semibold text-stone-700 cursor-pointer focus:ring-2 focus:ring-peanut/20">
                        <option value="Draft">Draft</option>
                        <option value="Published">Published</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <script>
        function preview(event) {
            const output = document.getElementById('image-preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.classList.remove('hidden');
        }
    </script>
</x-app-layout>
<x-app-layout>
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-serif font-bold text-peanut tracking-tight">Farm Stories</h1>
            <p class="text-sm text-stone-500 mt-1">Publish articles, share farm updates, and manage your blog content.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.stories.create') }}" class="bg-peanut hover:bg-stone-950 text-white px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm">
                + Write Story
            </a>
        </div>
    </div>

    <div class="flex flex-col gap-3">
        @forelse($stories as $story)
            <div class="bg-white border border-stone-200/80 rounded-2xl p-3 flex flex-col md:flex-row items-center gap-5 hover:shadow-md hover:border-golden/30 transition-all duration-300 group">
                
                <div class="w-full md:w-32 h-24 bg-stone-100 rounded-xl overflow-hidden flex-shrink-0 relative">
                    @if($story->image_path)
                        <img src="{{ asset('storage/' . $story->image_path) }}" class="w-full h-full object-cover" alt="Story Image">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-stone-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif
                </div>

                <div class="flex-1 min-w-0 py-2">
                    <div class="flex items-center gap-2 mb-1">
                        @if($story->status === 'Published')
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold tracking-wider uppercase bg-emerald-100 text-emerald-800 border border-emerald-200">Published</span>
                        @else
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold tracking-wider uppercase bg-stone-100 text-stone-600 border border-stone-200">Draft</span>
                        @endif
                        <span class="text-xs text-stone-400">{{ $story->created_at->format('M d, Y') }}</span>
                    </div>
                    <h3 class="font-bold text-stone-900 text-lg truncate group-hover:text-peanut transition-colors">
                        {{ $story->title }}
                    </h3>
                    <p class="text-sm text-stone-500 truncate mt-0.5">By {{ $story->author->name ?? 'Admin' }}</p>
                </div>

                <div class="flex items-center justify-end w-full md:w-auto px-2">
                    <a href="{{ route('admin.stories.edit', $story->id) }}" class="p-2 text-stone-400 hover:text-peanut hover:bg-stone-50 rounded-lg transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg>
                    </a>
                </div>
            </div>
        @empty
            <div class="bg-white border border-dashed border-stone-300 rounded-2xl p-12 text-center">
                <p class="text-sm text-stone-500">No stories published yet. Time to write one!</p>
            </div>
        @endforelse
    </div>
</x-app-layout>
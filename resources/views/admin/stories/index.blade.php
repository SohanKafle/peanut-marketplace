<x-app-layout>


    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl sm:text-3xl font-sans font-bold text-peanut tracking-tight">Farm Stories</h1>
            <p class="text-xs sm:text-sm text-stone-500 mt-1">Publish articles, share farm updates, and manage your blog
                content.</p>
        </div>
        <a href="{{ route('admin.stories.create') }}"
            class="inline-flex items-center justify-center gap-2 bg-peanut hover:bg-stone-950 text-white px-5 py-3 sm:py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm self-stretch sm:self-auto text-center group">
            <svg class="w-4 h-4 transform group-hover:scale-110 transition" fill="none" stroke="currentColor"
                stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add Blog Story
        </a>
    </div>


    <!-- Search & Filter Form -->
    <form id="search-form" action="{{ request()->url() }}" method="GET" class="flex flex-col lg:flex-row gap-3 mb-8">

        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
                </svg>
            </span>
            <input type="text" name="search" id="search-input" value="{{ request('search') }}"
                placeholder="Type to search..." oninput="autoSubmit()"
                class="w-full pl-11 pr-4 py-3 bg-white border border-stone-200 rounded-xl focus:ring-2 focus:ring-peanut/20 focus:border-peanut outline-none text-sm transition">
        </div>

        <div class="relative w-full lg:w-48">
            <select name="status" onchange="this.form.submit()"
                class="w-full pl-4 pr-10 py-3 bg-white border border-stone-200 rounded-xl outline-none appearance-none cursor-pointer text-sm focus:ring-2 focus:ring-peanut/20 focus:border-peanut transition">
                <option value="">All Statuses</option>
                @foreach ($statuses as $status)
                    <option value="{{ $status }}" {{ request('status') == $status ? 'selected' : '' }}>
                        {{ $status }}</option>
                @endforeach
            </select>
            <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>
        </div>
    </form>



    <div class="flex flex-col gap-3">

        @forelse($stories as $story)
            <div
                class="bg-white border border-stone-200/80 rounded-2xl p-4 flex flex-col md:flex-row items-center gap-4 hover:shadow-md transition-all">

                <div class="w-full md:w-32 h-20 md:h-20 bg-stone-100 rounded-xl overflow-hidden flex-shrink-0 relative">
                    @if ($story->image_path && file_exists(public_path('storage/' . $story->image_path)))
                        <img src="{{ asset('storage/' . $story->image_path) }}" class="w-full h-full object-cover"
                            alt="Story">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-stone-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    @endif
                </div>

                <div class="flex-1 min-w-0 w-full space-y-1">
                    <div class="flex items-center gap-2">
                        <span
                            class="px-2 py-0.5 rounded text-[9px] font-bold uppercase {{ $story->status === 'Published' ? 'bg-emerald-50 text-emerald-700' : 'bg-stone-100 text-stone-600' }}">
                            {{ $story->status }}
                        </span>
                        <span
                            class="text-[10px] text-stone-400 font-medium">{{ $story->created_at->format('M d, Y') }}</span>
                    </div>

                    <h3 class="font-bold text-stone-900 text-base truncate pr-4">
                        {{ $story->title }}
                    </h3>

                    <p class="text-xs text-stone-500 truncate">By {{ $story->author->name ?? 'Admin' }}</p>
                </div>

                <div
                    class="flex items-center justify-end gap-2 w-full md:w-auto shrink-0 border-t md:border-t-0 pt-3 md:pt-0 border-stone-100">
                    <a href="{{ route('admin.stories.edit', $story->id) }}"
                        class="flex-1 md:flex-none inline-flex items-center justify-center gap-1.5 px-3 py-2 bg-stone-50 hover:bg-stone-100 border border-stone-200 rounded-xl text-xs font-semibold text-stone-700 transition">
                        Edit
                    </a>
                    <form action="{{ route('admin.stories.destroy', $story->id) }}" method="POST"
                        onsubmit="return confirm('Remove this blog story listing?');" class="flex-1 md:flex-none">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-3 py-2 bg-rose-50/50 hover:bg-rose-600 text-rose-700 hover:text-white border border-rose-100 hover:border-rose-600 rounded-xl text-xs font-semibold transition">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        @empty
            <div class="text-center py-12 bg-white border border-dashed border-stone-200 rounded-2xl">
                <span class="text-2xl">📖</span>
                <h3 class="mt-2 text-sm font-semibold text-stone-900">No stories found</h3>
            </div>
        @endforelse
    </div>
    <div class="mt-4">{{ $stories->links() }}</div>

    <script>
        let timeout = null;

        function autoSubmit() {
            // Debounce: Wait 500ms after user stops typing to avoid too many requests
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                document.getElementById('search-form').submit();
            }, 500);
        }
    </script>
</x-app-layout>

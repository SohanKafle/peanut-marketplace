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

    <!-- Search & Filter Form -->
    <form action="{{ request()->url() }}" method="GET" class="flex flex-col lg:flex-row gap-3 mb-8 bg-stone-50 p-3 rounded-2xl border border-stone-200/60 shadow-sm">
    
    <div class="relative flex-1">
        <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
            </svg>
        </span>
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by title or name..." 
               class="w-full pl-11 pr-4 py-2.5 bg-white border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none text-sm transition">
    </div>

    <div class="relative">
        <select name="status" class="w-full lg:w-48 pl-4 pr-10 py-2.5 bg-white border border-stone-200 rounded-xl outline-none appearance-none cursor-pointer text-sm focus:ring-2 focus:ring-golden/20 focus:border-golden transition">
            <option value="">All Statuses</option>
            @foreach($statuses as $status)
                <option value="{{ $status }}" {{ request('status') == $status ? 'selected' : '' }}>{{ $status }}</option>
            @endforeach
        </select>
        <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
        </span>
    </div>

    <button type="submit" class="bg-peanut hover:bg-stone-950 text-white px-6 py-2.5 rounded-xl font-bold uppercase text-xs transition">Filter Results</button>
    <a href="{{ request()->url() }}" class="text-stone-500 hover:text-stone-800 text-xs font-bold uppercase flex items-center px-4 transition">Reset</a>
</form>

    <div class="flex flex-col gap-3">
        
        @forelse($stories as $story)
            <div class="bg-white border border-stone-200/80 rounded-2xl p-3 flex flex-col md:flex-row items-center gap-5 hover:shadow-md hover:border-golden/30 transition-all duration-300">
                <div class="w-full md:w-32 h-24 bg-stone-100 rounded-xl overflow-hidden flex-shrink-0 relative">
                    @if($story->image_path)
                        <img src="{{ asset('storage/' . $story->image_path) }}" class="w-full h-full object-cover" alt="Story Image">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-stone-300"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
                    @endif
                </div>
                <div class="flex-1 min-w-0 py-2">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="px-2 py-0.5 rounded text-[10px] font-bold uppercase {{ $story->status === 'Published' ? 'bg-emerald-100 text-emerald-800' : 'bg-stone-100 text-stone-600' }} border">{{ $story->status }}</span>
                        <span class="text-xs text-stone-400">{{ $story->created_at->format('M d, Y') }}</span>
                    </div>
                    <h3 class="font-bold text-stone-900 text-lg truncate">{{ $story->title }}</h3>
                    <p class="text-sm text-stone-500 truncate mt-0.5">By {{ $story->author->name ?? 'Admin' }}</p>
                </div>
                <div class="flex items-center justify-end w-full md:w-auto px-2">
                    <a href="{{ route('admin.stories.edit', $story->id) }}" class="p-2 text-stone-400 hover:text-peanut hover:bg-stone-50 rounded-lg transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg></a>
                </div>
            </div>
        @empty
            <div class="bg-white border border-dashed border-stone-300 rounded-2xl p-12 text-center text-sm text-stone-500">No stories found.</div>
        @endforelse
        <div class="mt-4">{{ $stories->links() }}</div>
    </div>
</x-app-layout>
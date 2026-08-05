<x-app-layout>
    <div class="min-h-screen bg-stone-50 py-8">
        <div class="max-w-7xl mx-auto px-4">

            <!-- Success Flash Notification -->
            @if (session('success'))
                <div id="flash-message"
                    class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm rounded-xl flex items-center gap-3 shadow-sm transition-opacity duration-500 ease-in-out">
                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            <!-- Page Header -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-sans font-bold text-peanut tracking-tight">Hero Slides</h1>
                    <p class="text-xs sm:text-sm text-stone-500 mt-1">Manage banner images, featured text, and slide order on the homepage hero section.</p>
                </div>
                <a href="{{ route('admin.hero-slides.create') }}"
                    class="inline-flex items-center justify-center gap-2 bg-peanut hover:bg-stone-950 text-white px-5 py-3 sm:py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm self-stretch sm:self-auto text-center group">
                    <svg class="w-4 h-4 transform group-hover:scale-110 transition" fill="none" stroke="currentColor"
                        stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Hero Slide
                </a>
            </div>

            <!-- Search & Filter Form -->
            <form id="search-form" action="{{ request()->url() }}" method="GET"
                class="flex flex-col lg:flex-row gap-3 mb-8">
                <div class="relative flex-1">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
                        </svg>
                    </span>
                    <input type="text" name="search" id="search-input" value="{{ request('search') }}"
                        placeholder="Search slides by title..." oninput="autoSubmit()"
                        class="w-full pl-11 pr-4 py-3 bg-white border border-stone-200 rounded-xl focus:ring-2 focus:ring-peanut/20 focus:border-peanut outline-none text-sm transition">
                </div>

                <div class="relative w-full lg:w-48">
                    <select name="status" onchange="this.form.submit()"
                        class="w-full pl-4 pr-10 py-3 bg-white border border-stone-200 rounded-xl outline-none appearance-none cursor-pointer text-sm focus:ring-2 focus:ring-peanut/20 focus:border-peanut transition">
                        <option value="">All Statuses</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="hidden" {{ request('status') == 'hidden' ? 'selected' : '' }}>Hidden</option>
                    </select>
                    <span
                        class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </div>
            </form>

            <!-- Slides List Container -->
            <div class="flex flex-col gap-3">
                @forelse($slides as $slide)
                    <div class="bg-white border border-stone-200/80 rounded-2xl p-4 flex flex-col md:flex-row items-center gap-4 hover:shadow-md transition-all">
                        
                        <!-- Slide Preview Image -->
                        <div class="w-full md:w-40 h-24 md:h-24 bg-stone-100 rounded-xl overflow-hidden flex-shrink-0 relative border border-stone-100">
                            @if ($slide->image_path && file_exists(public_path('storage/' . $slide->image_path)))
                                <img src="{{ asset('storage/' . $slide->image_path) }}"
                                    class="w-full h-full object-cover" alt="{{ $slide->title ?? 'Hero Slide' }}">
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

                        <!-- Slide Details -->
                        <div class="flex-1 min-w-0 w-full space-y-1">
                            <div class="flex items-center gap-2 flex-wrap">
                                <!-- Status Badge -->
                                <span class="px-2 py-0.5 rounded text-[9px] font-bold uppercase {{ $slide->is_active ? 'bg-emerald-50 text-emerald-700' : 'bg-stone-200 text-red-400' }}">
                                    {{ $slide->is_active ? 'Active' : 'Hidden' }}
                                </span>

                                <!-- Created Date -->
                                <span class="text-[10px] text-stone-400 font-medium">
                                    {{ $slide->created_at ? $slide->created_at->format('M d, Y') : '' }}
                                </span>
                            </div>

                            <h3 class="font-bold text-stone-900 text-base truncate pr-4">
                                {{ $slide->title ?? 'Untitled Hero Banner' }}
                            </h3>

                            @if($slide->subtitle || $slide->link_url)
                                <p class="text-xs text-stone-500 truncate">
                                    {{ $slide->subtitle ?? $slide->link_url }}
                                </p>
                            @endif
                        </div>

                        <!-- Actions Bar -->
                        <div class="flex items-center justify-end gap-2 w-full md:w-auto shrink-0 border-t md:border-t-0 pt-3 md:pt-0 border-stone-100">
                            <!-- Toggle Visibility -->
                            <form action="{{ route('admin.hero-slides.toggle', $slide->id) }}" method="POST" class="flex-1 md:flex-none">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                    class="w-full inline-flex items-center justify-center px-3 py-2 bg-stone-50 hover:bg-stone-100 border border-stone-200 rounded-xl text-xs font-semibold text-stone-700 transition">
                                    {{ $slide->is_active ? 'Hide' : 'Show' }}
                                </button>
                            </form>

                            <!-- Edit Button -->
                            <a href="{{ route('admin.hero-slides.edit', $slide->id) }}"
                                class="flex-1 md:flex-none inline-flex items-center justify-center px-3 py-2 bg-stone-50 hover:bg-stone-100 border border-stone-200 rounded-xl text-xs font-semibold text-stone-700 transition">
                                Edit
                            </a>

                            <!-- Delete Form -->
                            <form action="{{ route('admin.hero-slides.destroy', $slide->id) }}" method="POST"
                                onsubmit="return confirm('Remove this hero slide?');"
                                class="flex-1 md:flex-none">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full inline-flex items-center justify-center px-3 py-2 bg-rose-50/50 hover:bg-rose-600 text-rose-700 hover:text-white border border-rose-100 hover:border-rose-600 rounded-xl text-xs font-semibold transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12 bg-white border border-dashed border-stone-200 rounded-2xl">
                        <span class="text-2xl">🖼️</span>
                        <h3 class="mt-2 text-sm font-semibold text-stone-900">No hero slides found</h3>
                        <p class="text-xs text-stone-500 mt-1">Get started by creating your first homepage slideshow banner.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if(method_exists($slides, 'links'))
                <div class="mt-4">{{ $slides->links() }}</div>
            @endif

        </div>
    </div>

    <script>
        let timeout = null;

        function autoSubmit() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                document.getElementById('search-form').submit();
            }, 300);
        }

        // Auto-fade flash message
        document.addEventListener("DOMContentLoaded", function() {
            const flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                setTimeout(() => {
                    flashMessage.style.opacity = '0';
                    setTimeout(() => {
                        flashMessage.style.display = 'none';
                    }, 500);
                }, 3000);
            }
        });
    </script>
</x-app-layout>
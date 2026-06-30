<x-public-layout>
    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Community Conversations</span>
            <h1 class="font-serif text-4xl md:text-6xl font-bold text-white mb-6">Our Stories.</h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto font-light">
                Discover the latest updates, seasonal harvest news, and heartfelt stories from the families and innovators who make Ghachok thrive.
            </p>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @forelse($stories as $story)
                    <article class="bg-white border border-cream-dark rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group">
                        <div class="h-64 w-full bg-cream-dark overflow-hidden relative">
                            <img src="{{ $story->image_path ? asset('storage/' . $story->image_path) : asset('images/default-story.jpg') }}" 
                                 alt="{{ $story->title }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500 ease-out">
                        </div>
                        
                        <div class="p-6 md:p-8 flex-grow flex flex-col">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-golden mb-2 block">
                                {{ $story->created_at->format('M d, Y') }}
                            </span>
                            <h3 class="font-serif text-xl font-bold text-peanut mb-3 group-hover:text-peanut-light transition-colors duration-300">
                                {{ $story->title }}
                            </h3>
                            
                            <p class="text-xs sm:text-sm text-peanut/70 leading-relaxed mb-6 font-light flex-grow line-clamp-3">
                                {{ $story->excerpt ?? Str::limit($story->content, 100) }}
                            </p>
                            
                            <div class="mt-auto">
                                <a href="{{ route('stories.show', $story->id) }}" class="inline-flex items-center text-xs font-bold text-peanut group-hover:text-golden uppercase tracking-wider transition-colors duration-300">
                                    Read Full Story <span class="ml-2 transform group-hover:translate-x-1 transition-transform duration-300">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-20 text-peanut/50">
                        <p>No stories published yet. Check back soon!</p>
                    </div>
                @endforelse
            </div>

            <!-- Added Pagination -->
            <div class="mt-16">
                {{ $stories->links() }}
            </div>
        </div>
    </section>
</x-public-layout>
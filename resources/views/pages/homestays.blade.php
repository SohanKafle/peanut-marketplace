<x-public-layout>
    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Authentic Village Living</span>
            <h1 class="font-serif text-4xl md:text-6xl font-bold text-white mb-6">Stay in Ghachok.</h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto">
                Experience true Gurung hospitality. Stay with local families, enjoy organic home-cooked meals, and wake up to the majesty of the Annapurna range.
            </p>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-cream border-b border-cream-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-peanut mb-2">Available Homes</h2>
            <p class="text-sm text-peanut/70">Connect directly with the host families to reserve your room.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($homestays as $homestay)
                <div class="bg-white border border-cream-dark rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
                    
                    <!-- Fixed Height Container -->
                    <div class="h-64 w-full bg-cream-dark border-b border-cream-dark relative overflow-hidden">
                        <img src="{{ $homestay->image_path ? asset('storage/' . $homestay->image_path) : asset('images/default-home.jpg') }}" 
                             alt="{{ $homestay->name }}" 
                             class="w-full h-full object-cover">
                        
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur text-peanut text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                            NPR {{ number_format($homestay->price_per_night) }} / Night
                        </div>
                    </div>
                    
                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="font-serif text-xl font-bold text-peanut mb-1">{{ $homestay->name }}</h3>
                        <p class="text-xs text-golden font-bold uppercase tracking-wider mb-4">Host: {{ $homestay->host_name ?? 'Local Host' }}</p>
                        
                        <!-- Description limited to 3 lines to keep card height consistent -->
                        <p class="text-sm text-peanut/70 mb-6 leading-relaxed flex-grow line-clamp-3">
                            {{ $homestay->description }}
                        </p>
                        
                        <a href="{{ $homestay->contact_url ?? '#' }}" 
                           target="_blank" 
                           class="block w-full text-center bg-peanut hover:bg-stone-900 text-white text-xs font-bold uppercase tracking-wider py-3 rounded-xl transition mt-auto">
                           Contact to Book
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10 text-peanut/50">
                    No homes currently listed. Please check back later!
                </div>
            @endforelse
        </div>
    </div>
</section>
</x-public-layout>
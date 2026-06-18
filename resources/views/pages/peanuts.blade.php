<x-public-layout>
    <div class="bg-peanut text-cream py-16 md:py-24 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="font-serif text-4xl md:text-5xl font-bold text-white mb-4">Ghachok Local Peanuts</h1>
            <p class="text-lg text-cream/80 max-w-2xl mx-auto">Cultivated with care by our women-led cooperatives. Discover the story behind every batch and bring the taste of Ghachok to your home.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @forelse($peanuts as $product)
                <div class="bg-white border border-cream-dark rounded-2xl overflow-hidden shadow-sm flex flex-col h-full hover:shadow-md transition">
                    <div class="aspect-video bg-cream-dark">
                        <img src="https://images.unsplash.com/photo-1568254183919-78a4f43a2877?auto=format&fit=crop&q=80&w=500" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="font-serif text-2xl font-bold text-peanut mb-2">{{ $product->name }}</h3>
                        <p class="text-sm text-peanut/70 mb-4 flex-grow">{{ $product->description }}</p>
                        
                        <div class="text-lg font-bold text-forest mb-6">Rs. {{ number_format($product->price, 2) }} / {{ $product->unit }}</div>
                        
                        <div class="flex gap-3">
                            <a href="https://m.me/ghachokcooperative" target="_blank" class="flex-1 bg-[#1877F2] text-white text-center text-sm font-bold py-3 rounded-xl hover:bg-[#0C5DC7] transition">
                                Message on Messenger
                            </a>
                            <a href="https://ig.me/m/ghachokcooperative" target="_blank" class="flex-1 bg-gradient-to-r from-[#F58529] via-[#DD2A7B] to-[#8134AF] text-white text-center text-sm font-bold py-3 rounded-xl opacity-90 hover:opacity-100 transition">
                                Message on Instagram
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-3 text-center py-20 border-2 border-dashed border-cream-dark rounded-2xl text-peanut/60">
                    <p class="text-lg">Fresh peanuts are currently being harvested. Check back soon!</p>
                </div>
            @endforelse

        </div>
    </div>
</x-public-layout>
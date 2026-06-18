<x-public-layout>
    <section class="relative bg-cream-dark py-24 border-b border-cream-dark/60 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center relative z-10">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Cultivated near the Annapurna Range</span>
                <h1 class="font-serif text-5xl md:text-6xl font-bold text-peanut leading-tight mb-6">
                    Premium Local Peanuts, Grown by Women Entrepreneurs.
                </h1>
                <p class="text-lg text-peanut/80 mb-8 max-w-xl leading-relaxed">
                    Connecting rural women-led agricultural cooperatives from Machapuchhre Municipality directly to urban markets. Real farmers, real stories, transparent impact.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="/marketplace" class="bg-forest hover:bg-forest-light text-white font-semibold px-6 py-3.5 rounded-xl transition shadow-sm">
                        Explore Marketplace
                    </a>
                    <a href="/farmers" class="bg-white/80 border-2 border-peanut/20 hover:border-peanut/40 text-peanut font-semibold px-6 py-3.5 rounded-xl transition">
                        Meet the Farmers
                    </a>
                </div>
            </div>
            <div class="relative aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                <img src="image/pn.jpg" alt="Peanut Farming Nepal" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-20">
        <div class="bg-peanut text-cream rounded-3xl p-8 md:p-12 grid grid-cols-1 md:grid-cols-3 gap-8 shadow-xl text-center md:text-left">
            <div class="border-b md:border-b-0 md:border-r border-cream-dark/20 pb-6 md:pb-0 md:pr-6">
                <span class="block font-serif text-4xl font-bold text-golden mb-1">{{ $metrics['farmers_count'] }}+</span>
                <span class="text-xs uppercase tracking-wider font-semibold opacity-80">Women Smallholder Farmers Supported</span>
            </div>
            <div class="border-b md:border-b-0 md:border-r border-cream-dark/20 pb-6 md:pb-0 md:pr-6">
                <span class="block font-serif text-4xl font-bold text-golden mb-1">{{ $metrics['cooperatives_count'] }} Active</span>
                <span class="text-xs uppercase tracking-wider font-semibold opacity-80">Women-Led Multi-purpose Cooperatives</span>
            </div>
            <div>
                <span class="block font-serif text-4xl font-bold text-golden mb-1">{{ $metrics['youth_enablers'] }} Members</span>
                <span class="text-xs uppercase tracking-wider font-semibold opacity-80">Local Youth Tech Leadership Team</span>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24">
        <div class="text-center max-w-xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-2">Direct From Source</span>
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-peanut">Featured Local Produce</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($featuredProducts as $product)
                <div class="bg-white border border-cream-dark rounded-2xl overflow-hidden shadow-sm p-6">
                    <h3 class="font-serif text-xl font-bold text-peanut">{{ $product->name }}</h3>
                    <p class="text-sm text-peanut/70 mt-2">{{ $product->description }}</p>
                    <div class="mt-4 pt-4 border-t border-cream-dark flex items-center justify-between">
                        <span class="font-bold text-lg text-forest">Rs. {{ number_format($product->price, 2) }}</span>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 bg-white rounded-2xl border border-cream-dark border-dashed">
                    <p class="text-peanut/60 font-medium">Platform setup active! Ready to populate with cooperative agricultural metadata.</p>
                </div>
            @endforelse
        </div>
    </section>
</x-public-layout>
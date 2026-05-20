<x-public-layout title="Home | Peanut Marketplace">
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 grid lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-8">
            <span class="uppercase tracking-widest text-xs font-bold text-terracotta">Machapuchhre Municipality</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl leading-tight">
                Grown with care by the women of <span class="italic text-peanut-700">Machapuchhre</span>.
            </h1>
            <p class="text-lg sm:text-xl text-forest-500 max-w-lg leading-relaxed font-light">
                Discover highly nutritious, organically grown peanuts sourced directly from our local women's cooperatives in Nepal.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <a href="#" class="inline-flex justify-center items-center px-8 py-4 bg-forest text-cream font-medium hover:bg-forest-900 transition-all duration-300 shadow-soft">
                    Shop the Harvest
                </a>
                <a href="#" class="inline-flex justify-center items-center px-8 py-4 border border-peanut-500 text-forest font-medium hover:bg-peanut-100 transition-colors">
                    Read Our Story
                </a>
            </div>
        </div>
        <!-- Image Placeholder for Hero -->
        <div class="relative w-full aspect-[6/5] bg-peanut-200 overflow-hidden flex items-center justify-center rounded-3xl">
            <div class="absolute inset-0 bg-forest/5"></div>
            <img src="image/pn.jpg" alt="Peanut Farming" class="object-cover w-full h-full">
            
        </div>
    </section>

    <!-- Storytelling Metric Section -->
    <section class="bg-forest text-cream py-16 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-forest-500/30">
            <div class="py-4">
                <div class="text-4xl font-serif text-peanut-200 mb-2">100%</div>
                <div class="text-sm uppercase tracking-wider text-peanut-100/80">Organic Farming</div>
            </div>
            <div class="py-4">
                <div class="text-4xl font-serif text-peanut-200 mb-2">50+</div>
                <div class="text-sm uppercase tracking-wider text-peanut-100/80">Women Empowered</div>
            </div>
            <div class="py-4">
                <div class="text-4xl font-serif text-peanut-200 mb-2">Direct</div>
                <div class="text-sm uppercase tracking-wider text-peanut-100/80">Coop-to-Table</div>
            </div>
        </div>
    </section>
</x-public-layout>

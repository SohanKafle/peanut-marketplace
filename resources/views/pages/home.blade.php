<x-public-layout title="Home | Peanut Marketplace & Agri-Tourism">
    <div class="bg-white text-peanut antialiased">

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 text-center lg:text-left">
                <span class="uppercase tracking-widest text-xs font-bold text-peanut-light block">
                    Machapuchhre Municipality
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-peanut leading-tight">
                    Grown with care by the women of <span class="italic text-peanut-light">Machapuchhre</span>.
                </h1>
                <p class="text-base sm:text-lg text-peanut/80 max-w-lg mx-auto lg:mx-0 leading-relaxed font-light">
                    Discover highly nutritious, organically grown peanuts sourced directly from our local women's cooperatives in Nepal.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <a href="/shop" class="inline-flex justify-center items-center px-8 py-4 bg-peanut text-cream font-medium rounded-xl hover:bg-peanut-dark transition-all duration-300 shadow-sm text-sm">
                        Shop the Harvest
                    </a>
                    <a href="#story" class="inline-flex justify-center items-center px-8 py-4 border border-peanut text-peanut font-medium rounded-xl hover:bg-cream-dark transition-colors text-sm">
                        Read Our Story
                    </a>
                </div>
            </div>
            
            <div class="relative w-full aspect-[6/5] bg-cream-dark overflow-hidden flex items-center justify-center rounded-3xl shadow-sm border border-cream-dark">
                <img src="{{ asset('image/pn.jpg') }}" alt="Peanut Farming in Ghachok" class="object-cover w-full h-full">
            </div>
        </section>

        <section class="bg-cream py-16 md:py-24 border-t border-b border-cream-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    
                    <div class="bg-white border border-cream-dark p-8 md:p-10 rounded-2xl text-center relative overflow-hidden group hover:border-peanut/30 transition-all duration-300 shadow-sm hover:shadow-md">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-peanut transition-colors"></div>
                        <span class="font-serif text-5xl lg:text-6xl font-bold text-peanut block mb-3">100%</span>
                        <h3 class="text-xs uppercase tracking-widest font-bold text-peanut-light mb-2">Pure & Organic</h3>
                        <p class="text-xs sm:text-sm text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Cultivated natively using traditional agricultural methods with zero synthetic inputs.
                        </p>
                    </div>

                    <div class="bg-white border border-cream-dark p-8 md:p-10 rounded-2xl text-center relative overflow-hidden group hover:border-peanut/30 transition-all duration-300 shadow-sm hover:shadow-md">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-peanut transition-colors"></div>
                        <span class="font-serif text-5xl lg:text-6xl font-bold text-peanut block mb-3">50+</span>
                        <h3 class="text-xs uppercase tracking-widest font-bold text-peanut-light mb-2">Women Empowered</h3>
                        <p class="text-xs sm:text-sm text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Directly supporting female agricultural innovators and indigenous smallholder setups.
                        </p>
                    </div>

                    <div class="bg-white border border-cream-dark p-8 md:p-10 rounded-2xl text-center relative overflow-hidden group hover:border-peanut/30 transition-all duration-300 shadow-sm hover:shadow-md">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-peanut transition-colors"></div>
                        <span class="font-serif text-5xl lg:text-6xl font-bold text-peanut block mb-3">Direct</span>
                        <h3 class="text-xs uppercase tracking-widest font-bold text-peanut-light mb-2">Coop-to-Table</h3>
                        <p class="text-xs sm:text-sm text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Weaving digital supply linkages to provide fair marketplace values back to our village.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section id="story" class="bg-white py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <div class="order-2 lg:order-1">
                    <div class="aspect-video bg-white border border-cream-dark rounded-3xl overflow-hidden shadow-md relative">
                        <iframe 
                            class="w-full h-full absolute top-0 left-0" 
                            src="https://www.youtube.com/embed/kxD9fvzlMSs" 
                            title="Beautiful Ghachowk Village View" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="no-referrer-when-downgrade" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="text-center lg:text-left order-1 lg:order-2 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-widest text-peanut-light block">
                        Machapuchhre Municipality Gateway
                    </span>
                    <h2 class="font-serif text-3xl sm:text-4xl font-bold text-peanut leading-tight">
                        Agri-Tourism & Local Roots.
                    </h2>
                    <p class="text-sm md:text-base text-peanut/80 leading-relaxed max-w-xl mx-auto lg:mx-0">
                        Discover Ghachok. Experience authentic community-led homestays, witness rural mountain lifestyles firsthand, and explore our premium organic local peanut cultivation nestled near the breathtaking mountain range.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start pt-2">
                        <a href="/homestays" class="bg-peanut text-white text-center font-semibold px-6 py-3.5 rounded-xl shadow-sm text-sm hover:bg-peanut-light transition">
                            Explore Homestays
                        </a>
                    </div>
                </div>

            </div>
        </section>

    </div>
</x-public-layout>
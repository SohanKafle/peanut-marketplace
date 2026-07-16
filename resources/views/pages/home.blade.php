<x-public-layout title="Home | Ghachok Community">
    <div class="bg-white text-peanut antialiased">

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 text-center lg:text-left">
                <span class="uppercase tracking-widest text-xs font-bold text-golden block">
                    Machapuchhre Municipality, Kaski
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-sans font-bold text-peanut leading-tight">
                    Grown with care by the women of <span class="italic text-golden">Machapuchhre</span>.
                </h1>
                <p class="text-sm sm:text-base text-peanut/80 max-w-lg mx-auto lg:mx-0 leading-relaxed font-light">
                    Sourced directly from indigenous women's cooperatives near Pokhara. We connect hand-harvested
                    organic fields to urban homes.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                    <a href="/peanuts"
                        class="inline-flex justify-center items-center px-6 py-3.5 bg-peanut text-cream text-xs font-bold uppercase tracking-wider rounded-xl hover:bg-peanut-light transition-all duration-300 shadow-sm">
                        Explore Marketplace
                    </a>
                    <a href="#story"
                        class="inline-flex justify-center items-center px-6 py-3.5 border border-peanut text-peanut text-xs font-bold uppercase tracking-wider rounded-xl hover:bg-yellow-100 transition-colors">
                        Watch Our Story
                    </a>
                </div>
            </div>

            <div
                class="relative w-full aspect-[6/5] bg-cream-dark overflow-hidden flex items-center justify-center rounded-3xl border border-cream-dark shadow-sm">
                <img src="{{ asset('image/pn.jpg') }}" alt="Peanut Farming in Ghachok"
                    class="object-cover w-full h-full">
            </div>
        </section>

        <section class="bg-cream py-12 md:py-16 border-t border-b border-cream-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

                    <div
                        class="bg-white border border-cream-dark p-6 md:p-8 rounded-2xl text-center relative overflow-hidden group hover:border-golden transition-all duration-300">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-golden transition-colors">
                        </div>
                        <span class="font-sans text-4xl lg:text-5xl font-bold text-peanut block mb-2">100%</span>
                        <h3 class="text-[10px] uppercase tracking-widest font-bold text-golden mb-1">Pure & Organic
                            Product </h3>
                        <p class="text-xs text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Cultivated natively using traditional, chemical-free mountain methods.
                        </p>
                    </div>

                    <div
                        class="bg-white border border-cream-dark p-6 md:p-8 rounded-2xl text-center relative overflow-hidden group hover:border-golden transition-all duration-300">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-golden transition-colors">
                        </div>
                        <span class="font-sans text-4xl lg:text-5xl font-bold text-peanut block mb-2">30+</span>
                        <h3 class="text-[10px] uppercase tracking-widest font-bold text-golden mb-1">Women, 2
                            Cooperatives </h3>
                        <p class="text-xs text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Directly backing local smallholder operations and farming networks.
                        </p>
                    </div>

                    <div
                        class="bg-white border border-cream-dark p-6 md:p-8 rounded-2xl text-center relative overflow-hidden group hover:border-golden transition-all duration-300">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-golden transition-colors">
                        </div>
                        <span class="font-sans text-4xl lg:text-5xl font-bold text-peanut block mb-2">Youth</span>
                        <h3 class="text-[10px] uppercase tracking-widest font-bold text-golden mb-1">Community Owned
                        </h3>
                        <p class="text-xs text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Managed locally by youth tech enablers to build independent growth.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section id="story" class="bg-white py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="order-2 lg:order-1">
                    <div
                        class="aspect-video bg-white border border-cream-dark rounded-3xl overflow-hidden shadow-sm relative">
                        <iframe class="w-full h-full absolute top-0 left-0"
                            src="https://www.youtube.com/embed/kxD9fvzlMSs" title="Beautiful Ghachowk Village View"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="no-referrer-when-downgrade" allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="text-center lg:text-left order-1 lg:order-2 space-y-5">
                    <span class="text-xs font-bold uppercase tracking-widest text-golden block">
                        Agri-Tourism Experiences
                    </span>
                    <h2 class="font-sans text-3xl sm:text-4xl font-bold text-peanut leading-tight">
                        Authentic Living Roots.
                    </h2>
                    <p class="text-xs sm:text-sm text-peanut/80 leading-relaxed font-light">
                        Experience local community-led homestays, witness traditional mountain lifestyles, and explore
                        organic peanut setups nestled near the Annapurna foothills. We bridge the direct path between
                        our growers and health-conscious buyers.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start pt-1">
                        <a href="/homestays"
                            class="bg-peanut text-white text-center font-bold uppercase tracking-wider px-5 py-3 rounded-xl text-xs hover:bg-peanut-light transition shadow-sm">
                            Explore Homestays
                        </a>
                        <a href="/about"
                            class="border border-peanut text-peanut text-center font-bold uppercase tracking-wider px-5 py-3 rounded-xl text-xs hover:bg-yellow-100 transition">
                            Meet Our Farmers
                        </a>
                    </div>

                    <p class="text-[11px] text-peanut/50 italic leading-snug pt-1">
                        * Note: Instant booking and marketplace orders sync directly into our neighborhood Facebook and
                        Instagram chat platforms.
                    </p>
                </div>

            </div>
        </section>

    </div>
</x-public-layout>
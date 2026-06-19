<x-public-layout>
    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Premium Organic Yield</span>
            <h1 class="font-serif text-4xl md:text-6xl font-bold text-white mb-6">The Ghachok Peanut.</h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto">
                Cultivated in the rich soils at the foothills of the Annapurna range. Hand-harvested, sun-dried, and
                cleanly processed by our local women's cooperative.
            </p>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div
                    class="aspect-video md:aspect-square bg-white rounded-2xl overflow-hidden shadow-sm border border-cream-dark">
                    <img src="{{ asset('image/pn.jpg') }}" alt="Organic Peanut Fields in Ghachok"
                        class="w-full h-full object-cover">
                </div>

                <div>
                    <h2 class="font-serif text-3xl font-bold text-peanut mb-4">Our Organic Process</h2>
                    <div class="w-12 h-1 bg-golden mb-6"></div>
                    <p class="text-sm md:text-base text-peanut/80 leading-relaxed mb-4">
                        Our peanuts are grown using ancestral, chemical-free farming techniques passed down through
                        generations. The high altitude and pristine glacial water runoff create a distinct, naturally
                        sweet flavor profile that you won't find in mass-produced alternatives.
                    </p>
                    <p class="text-sm md:text-base text-peanut/80 leading-relaxed">
                        By purchasing directly from this catalog, you are establishing a direct value-chain that
                        bypasses middlemen, ensuring that 100% of the profits return to the local families who nurtured
                        the soil.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-peanut mb-3">Direct from the Farm</h2>
                <p class="text-sm text-peanut/70">Connect with us on social media to place your order.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="bg-cream border border-cream-dark rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition group">
                    <div
                        class="aspect-[4/3] bg-white border-b border-cream-dark flex items-center justify-center text-4xl">
                        🥜
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-serif text-xl font-bold text-peanut">Premium Raw Peanuts</h3>
                            <span class="text-golden font-bold">NPR 450/kg</span>
                        </div>
                        <p class="text-xs text-peanut/70 mb-6 leading-relaxed">
                            Sun-dried and hand-sorted. Perfect for cooking, roasting at home, or making your own peanut
                            butter.
                        </p>
                        <div class="space-y-2">
                            <a href="#"
                                class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold uppercase tracking-wider py-3 rounded-xl transition">
                                Order via Messenger
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-cream border border-cream-dark rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition group">
                    <div
                        class="aspect-[4/3] bg-white border-b border-cream-dark flex items-center justify-center text-4xl">
                        🔥
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-serif text-xl font-bold text-peanut">Wood-Fire Roasted</h3>
                            <span class="text-golden font-bold">NPR 550/kg</span>
                        </div>
                        <p class="text-xs text-peanut/70 mb-6 leading-relaxed">
                            Traditionally roasted over local wood fires with a hint of Himalayan pink salt. A perfect
                            healthy snack.
                        </p>
                        <div class="space-y-2">
                            <a href="#"
                                class="block w-full text-center bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white text-xs font-bold uppercase tracking-wider py-3 rounded-xl transition">
                                DM on Instagram
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-cream border border-cream-dark rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition group">
                    <div
                        class="aspect-[4/3] bg-white border-b border-cream-dark flex items-center justify-center text-4xl">
                        📦
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-serif text-xl font-bold text-peanut">Wholesale Sacks</h3>
                            <span class="text-golden font-bold">Bulk Rates</span>
                        </div>
                        <p class="text-xs text-peanut/70 mb-6 leading-relaxed">
                            Looking to source organic peanuts for your business or restaurant? Contact us directly for
                            bulk pricing and logistics.
                        </p>
                        <div class="space-y-2">
                            <a href="https://wa.me/9779800000000"
                                class="block w-full text-center bg-green-500 hover:bg-green-600 text-white text-xs font-bold uppercase tracking-wider py-3 rounded-xl transition">
                                Chat on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-public-layout>

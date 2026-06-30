<x-public-layout title="The Ghachok Peanut | Organic Marketplace">
    
    <!-- Hero Section -->
    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Premium Organic Yield</span>
            <h1 class="font-serif text-4xl md:text-6xl font-bold text-white mb-6">The Ghachok Peanut.</h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto font-light">
                Cultivated in the rich soils at the foothills of the Annapurna range. Hand-harvested, sun-dried, and
                cleanly processed by our local women's cooperative.
            </p>
        </div>
    </section>

    <!-- Our Process Section: The Story Branch -->
    <section class="py-16 md:py-20 bg-cream border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                
                <!-- Fixed Image Container -->
                <div class="aspect-video bg-white rounded-3xl overflow-hidden shadow-sm border border-stone-200 p-2.5">
                    <img src="{{ asset('image/pn.jpg') }}" alt="Organic Peanut Fields in Ghachok"
                        class="w-full h-full object-cover rounded-2xl">
                </div>

                <!-- Text Content Block -->
                <div class="space-y-5">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-peanut/50 block mb-1">Heritage Agriculture</span>
                        <h2 class="font-serif text-3xl md:text-4xl font-bold text-peanut">Our Organic Process</h2>
                    </div>
                    <div class="w-12 h-1 bg-golden rounded-full"></div>
                    
                    <p class="text-sm md:text-base text-peanut/80 leading-relaxed font-light">
                        Our peanuts are grown using ancestral, chemical-free farming techniques passed down through
                        generations. The high altitude and pristine glacial water runoff create a distinct, naturally
                        sweet flavor profile that you won't find in mass-produced alternatives.
                    </p>
                    <p class="text-sm md:text-base text-peanut/80 leading-relaxed font-light">
                        By purchasing directly from this catalog, you are establishing a direct value-chain that
                        bypasses middlemen, ensuring that 100% of the profits return to the local families who nurtured
                        the soil.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Catalog Section: The Marketplace Branch -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
            
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-1">Direct Procurement</span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-peanut mb-2">Direct from the Farm</h2>
                <p class="text-sm text-peanut/60 font-light">Connect with our cooperative channels to place your order directly.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                <!-- Product 1: Premium Raw Peanuts -->
                <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group">
                    <div class="aspect-[4/3] bg-stone-50 flex items-center justify-center text-4xl relative overflow-hidden border-b border-stone-100 group-hover:bg-stone-100 transition-colors">
                        <span class="transform group-hover:scale-110 transition duration-300">🥜</span>
                    </div>
                    <div class="p-5 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="font-serif text-lg font-bold text-peanut">Premium Raw Peanuts</h3>
                                <span class="text-xs font-bold text-golden whitespace-nowrap ml-2">NPR 450 / kg</span>
                            </div>
                            <p class="text-xs sm:text-sm text-peanut/70 mb-6 leading-relaxed font-light">
                                Sun-dried and hand-sorted. Perfect for cooking, roasting at home, or blending your own premium artisan peanut butter.
                            </p>
                        </div>
                        <!-- FIXED: Routed placeholder to Facebook Messenger according to mind map constraints -->
                        <div class="mt-auto">
                            <a href="https://m.me/your-facebook-page" target="_blank" 
                               class="flex items-center justify-center gap-2 w-full text-center bg-peanut hover:bg-stone-900 text-white text-xs font-bold uppercase tracking-wider py-3.5 rounded-xl transition shadow-sm">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.562V24l4.093-2.271A12.33 12.33 0 0012 22.222c6.627 0 12-4.974 12-11.111S18.627 0 12 0zm1.293 14.246l-3.08-3.297-6.015 3.297 6.615-7.022 3.138 3.297 5.957-3.297-6.615 7.022z"/></svg>
                                Order via Messenger
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2: Wood-Fire Roasted -->
                <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group">
                    <div class="aspect-[4/3] bg-stone-50 flex items-center justify-center text-4xl relative overflow-hidden border-b border-stone-100 group-hover:bg-stone-100 transition-colors">
                        <span class="transform group-hover:scale-110 transition duration-300">🔥</span>
                    </div>
                    <div class="p-5 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="font-serif text-lg font-bold text-peanut">Wood-Fire Roasted</h3>
                                <span class="text-xs font-bold text-golden whitespace-nowrap ml-2">NPR 550 / kg</span>
                            </div>
                            <p class="text-xs sm:text-sm text-peanut/70 mb-6 leading-relaxed font-light">
                                Traditionally roasted over local wood fires with a light dusting of pristine Himalayan pink salt. An exceptional healthy snack.
                            </p>
                        </div>
                        <!-- FIXED: Routed placeholder to Instagram DM according to mind map constraints -->
                        <div class="mt-auto">
                            <a href="https://instagram.com/your-username" target="_blank" 
                               class="block w-full text-center bg-white border border-stone-300 hover:border-peanut text-peanut py-3.5 rounded-xl text-xs font-bold uppercase tracking-wider transition">
                                DM on Instagram
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3: Wholesale Sacks -->
                <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group">
                    <div class="aspect-[4/3] bg-stone-50 flex items-center justify-center text-4xl relative overflow-hidden border-b border-stone-100 group-hover:bg-stone-100 transition-colors">
                        <span class="transform group-hover:scale-110 transition duration-300">📦</span>
                    </div>
                    <div class="p-5 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="font-serif text-lg font-bold text-peanut">Wholesale Sacks</h3>
                                <span class="text-xs font-bold text-golden whitespace-nowrap ml-2">Bulk Rates</span>
                            </div>
                            <p class="text-xs sm:text-sm text-peanut/70 mb-6 leading-relaxed font-light">
                                Looking to source certified organic local peanuts for your culinary business, kitchen, or retail store? Contact our coop coordinators for custom shipping setup.
                            </p>
                        </div>
                        <!-- FIXED: Swapped out WhatsApp link for Facebook Messenger redirect to align with the mind map rule -->
                        <div class="mt-auto">
                            <a href="https://m.me/your-facebook-page" target="_blank" 
                               class="flex items-center justify-center gap-2 w-full text-center bg-peanut hover:bg-stone-900 text-white text-xs font-bold uppercase tracking-wider py-3.5 rounded-xl transition shadow-sm">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.562V24l4.093-2.271A12.33 12.33 0 0012 22.222c6.627 0 12-4.974 12-11.111S18.627 0 12 0zm1.293 14.246l-3.08-3.297-6.015 3.297 6.615-7.022 3.138 3.297 5.957-3.297-6.615 7.022z"/></svg>
                                Wholesale via Messenger
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-public-layout>
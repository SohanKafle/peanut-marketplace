<x-public-layout>
    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Community Conversations</span>
            <h1 class="font-serif text-4xl md:text-6xl font-bold text-white mb-6">Our Stories.</h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto">
                Discover the latest updates, seasonal harvest news, and heartfelt stories from the families and innovators who make Ghachok thrive.
            </p>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <article class="bg-white border border-cream-dark rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="aspect-video bg-cream-dark">
                        <img src="{{ asset('images/story-1.jpg') }}" alt="Harvest Season" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-golden mb-2 block">Harvest Update</span>
                        <h3 class="font-serif text-xl font-bold text-peanut mb-3">The Season of Peanuts</h3>
                        <p class="text-sm text-peanut/70 leading-relaxed mb-4">
                            How this year's monsoon affected our harvest and why the yield is exceptionally sweet...
                        </p>
                        <a href="#" class="text-xs font-bold text-peanut hover:text-golden uppercase tracking-wider transition">Read Full Story &rarr;</a>
                    </div>
                </article>

                <article class="bg-white border border-cream-dark rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="aspect-video bg-cream-dark">
                        <img src="{{ asset('images/story-2.jpg') }}" alt="Community Innovation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-golden mb-2 block">Innovation</span>
                        <h3 class="font-serif text-xl font-bold text-peanut mb-3">Tech in the Village</h3>
                        <p class="text-sm text-peanut/70 leading-relaxed mb-4">
                            Meeting the youth team that is building our digital platform from the ground up...
                        </p>
                        <a href="#" class="text-xs font-bold text-peanut hover:text-golden uppercase tracking-wider transition">Read Full Story &rarr;</a>
                    </div>
                </article>

                <article class="bg-white border border-cream-dark rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="aspect-video bg-cream-dark">
                        <img src="{{ asset('images/story-3.jpg') }}" alt="Local Hospitality" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-golden mb-2 block">Hospitality</span>
                        <h3 class="font-serif text-xl font-bold text-peanut mb-3">Aama's Kitchen Secrets</h3>
                        <p class="text-sm text-peanut/70 leading-relaxed mb-4">
                            Visiting a local home and learning the traditional way of preparing organic snacks...
                        </p>
                        <a href="#" class="text-xs font-bold text-peanut hover:text-golden uppercase tracking-wider transition">Read Full Story &rarr;</a>
                    </div>
                </article>

            </div>
        </div>
    </section>
</x-public-layout>
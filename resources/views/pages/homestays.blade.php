<x-public-layout title="Homestays | Ghachok Community">
    
    <!-- Hero Section -->
    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Authentic Village Living</span>
            <h1 class="font-sans text-4xl md:text-6xl font-bold text-white mb-6">Stay in Ghachok.</h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto font-light">
                Experience true Gurung hospitality. Stay with local families, enjoy organic home-cooked meals, and wake up to the majesty of the Annapurna range.
            </p>
        </div>
    </section>

    <!-- Map Section (UPDATED: Fulfills "Linking local map" node) -->
    <section class="py-12 bg-cream-dark border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200 flex flex-col lg:flex-row items-center gap-8">
                
                <div class="w-full lg:w-1/3 p-2 text-center lg:text-left">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-golden block mb-1">Local Topography</span>
                    <h2 class="font-sans text-2xl font-bold text-peanut mb-3">Linking Our Local Map</h2>
                    <p class="text-xs sm:text-sm text-peanut/70 mb-5 leading-relaxed">
                        Our houses are scattered naturally across the farming plateau of Machhapuchhre Municipality. Use the interactive map layout to coordinate your travel paths.
                    </p>
                </div>

                <!-- FIXED: Implemented an functional embedded frame focused on Ghachok, Nepal -->
                <div class="w-full lg:w-2/3 h-72 bg-stone-100 rounded-xl overflow-hidden border border-stone-200 relative shadow-inner">
                    <iframe 
                        class="w-full h-full filter grayscale opacity-90 contrast-125"
                        src="https://maps.google.com/maps?q=Ghachok,%20Kaski,%20Nepal&t=&z=14&ie=UTF8&iwloc=&output=embed" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    <!-- Listings Section -->
    <section class="py-16 md:py-20 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center md:text-left">
                <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-1">Marketplace Platform</span>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-peanut mb-2">Available Homes</h2>
                <p class="text-xs sm:text-sm text-peanut/70">Connect directly via secure social channels to book rooms immediately with host families.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($homestays as $homestay)
                    <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
                        
                        <!-- Image Container with Price Badge -->
                        <div class="h-64 w-full bg-stone-100 border-b border-stone-100 relative overflow-hidden">
                            <img src="{{ $homestay->image_path ? asset('storage/' . $homestay->image_path) : asset('images/default-home.jpg') }}" 
                                 alt="{{ $homestay->name }}" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur text-peanut text-xs font-bold px-3 py-1.5 rounded-full shadow-sm border border-stone-100">
                                NPR {{ number_format($homestay->price_per_night) }} <span class="text-[10px] text-peanut/60 font-normal">/ night</span>
                            </div>
                        </div>
                        
                        <!-- Details Content Block -->
                        <div class="p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="font-sans text-xl font-bold text-peanut mb-1">{{ $homestay->name }}</h3>
                                <p class="text-xs text-golden font-bold uppercase tracking-wider mb-4">Host: {{ $homestay->host_name ?? 'Local Family' }}</p>
                                
                                <p class="text-sm text-peanut/70 mb-6 leading-relaxed line-clamp-3 font-light">
                                    {{ $homestay->description }}
                                </p>
                            </div>
                            
                            <!-- FIXED: Modified action block to explicitly highlight social messaging redirects per the mind map rules -->
                            <div class="space-y-2 mt-auto">
                                <a href="{{ $homestay->facebook_url ?? 'https://m.me/your-facebook-page' }}" 
                                   target="_blank" 
                                   class="flex items-center justify-center gap-2 w-full bg-peanut hover:bg-stone-900 text-white text-[11px] font-bold uppercase tracking-wider py-3.5 rounded-xl transition shadow-sm">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.562V24l4.093-2.271A12.33 12.33 0 0012 22.222c6.627 0 12-4.974 12-11.111S18.627 0 12 0zm1.293 14.246l-3.08-3.297-6.015 3.297 6.615-7.022 3.138 3.297 5.957-3.297-6.615 7.022z"/></svg>
                                    Message Host on Messenger
                                </a>
                                <a href="{{ $homestay->instagram_url ?? 'https://instagram.com/your-username' }}" 
                                   target="_blank" 
                                   class="flex items-center justify-center gap-2 w-full bg-white border border-stone-300 hover:border-peanut text-peanut text-[11px] font-bold uppercase tracking-wider py-3.5 rounded-xl transition">
                                    Inquire on Instagram
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-stone-200 text-peanut/50 text-sm shadow-sm">
                        No community homestays are currently listed. Please check back soon!
                    </div>
                @endforelse
            </div>

            <!-- Pagination Container -->
            <div class="mt-12 flex justify-center">
                {{ $homestays->links() }}
            </div>
        </div>
    </section>
</x-public-layout>
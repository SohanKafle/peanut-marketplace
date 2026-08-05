<x-public-layout title="Homestays | Ghachok Community">

    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Authentic Village
                Living</span>
            <h1 class="font-sans text-4xl md:text-6xl font-bold text-white mb-6">Stay in Ghachok.</h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto font-light">
                Experience true Gurung hospitality. Stay with local families, enjoy organic home-cooked meals, and wake
                up to the majesty of the Annapurna range.
            </p>
        </div>
    </section>

    <section class="py-12 bg-cream-dark border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200 flex flex-col lg:flex-row items-center gap-8">

                <div class="w-full lg:w-1/3 p-2 text-center lg:text-left">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-golden block mb-1">Local
                        Topography</span>
                    <h2 class="font-sans text-2xl font-bold text-peanut mb-3">Linking Our Local Map</h2>
                    <p class="text-xs sm:text-sm text-peanut/70 mb-5 leading-relaxed">
                        Our houses are scattered naturally across the farming plateau of Machhapuchhre Municipality. Use
                        the interactive map layout to coordinate your travel paths.
                    </p>
                </div>

                <div
                    class="w-full lg:w-2/3 h-72 bg-stone-100 rounded-xl overflow-hidden border border-stone-200 relative shadow-inner">
                    <iframe class="w-full h-full filter grayscale opacity-90 contrast-125"
                        src="https://maps.google.com/maps?q=Ghachok,%20Kaski,%20Nepal&t=&z=14&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen>
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center md:text-left">
                <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-1">Marketplace
                    Platform</span>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-peanut mb-2">Available Homes</h2>
                <p class="text-xs sm:text-sm text-peanut/70">Connect directly via secure social channels to book rooms
                    immediately with host families.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($homestays as $homestay)
                    <div
                        class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col group">

                        <div class="h-64 w-full bg-stone-100 border-b border-stone-100 relative overflow-hidden">
                            <img src="{{ $homestay->image_path ? asset('storage/' . $homestay->image_path) : asset('images/default-home.jpg') }}"
                                alt="{{ $homestay->name }}"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">

                            <div
                                class="absolute top-4 right-4 bg-white/95 backdrop-blur text-peanut text-xs font-bold px-3 py-1.5 rounded-full shadow-sm border border-stone-100">
                                NPR {{ number_format($homestay->price_per_night) }} <span
                                    class="text-[10px] text-peanut/60 font-normal">/ night</span>
                            </div>
                        </div>

                        <div class="p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="font-sans text-xl font-bold text-peanut mb-1">{{ $homestay->name }}</h3>
                                <p class="text-xs text-golden font-bold uppercase tracking-wider mb-4">Host:
                                    {{ $homestay->host_name ?? 'Local Family' }}</p>

                                <p class="text-sm text-peanut/70 mb-6 leading-relaxed line-clamp-3 font-light">
                                    {{ $homestay->description }}
                                </p>
                            </div>

                            <div class="mt-auto grid grid-cols-2 gap-2">

                                {{-- WhatsApp Direct Chat Link --}}
                                @php
                                    // Get phone number or default fallback
                                    $rawPhone = $homestay->whatsapp_number ?? '977980000000'; // Include country code, e.g., 977 for Nepal

                                    // Remove non-numeric characters (+, spaces, dashes, brackets)
                                    $cleanPhone = preg_replace('/[^0-9]/', '', $rawPhone);

                                    // Default pre-filled message
                                    $message = 'Hello, I am interested in booking: ' . ($homestay->name ?? 'Homestay');
                                @endphp

                                <a href="https://wa.me/{{ $cleanPhone }}?text={{ urlencode($message) }}"
                                    target="_blank" rel="noopener noreferrer"
                                    class="flex items-center justify-center gap-1.5 w-full bg-[#25D366] hover:bg-[#20bd5a] text-white text-[10px] sm:text-xs font-bold uppercase tracking-wider py-3 rounded-xl transition shadow-sm"
                                    title="Book via WhatsApp">
                                    <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                    </svg>
                                    WhatsApp
                                </a>

                                <a href="{{ $homestay->facebook_url ?? 'https://m.me/your-facebook-page' }}"
                                    target="_blank"
                                    class="flex items-center justify-center gap-1.5 w-full bg-[#0084FF] hover:bg-[#0073e6] text-white text-[10px] sm:text-xs font-bold uppercase tracking-wider py-3 rounded-xl transition shadow-sm"
                                    title="Book via Messenger">
                                    <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.562V24l4.093-2.271A12.33 12.33 0 0012 22.222c6.627 0 12-4.974 12-11.111S18.627 0 12 0zm1.293 14.246l-3.08-3.297-6.015 3.297 6.615-7.022 3.138 3.297 5.957-3.297-6.615 7.022z" />
                                    </svg>
                                    Messenger
                                </a>

                            </div>

                        </div>
                    </div>
                @empty
                    <div
                        class="col-span-full text-center py-16 bg-white rounded-2xl border border-stone-200 text-peanut/50 text-sm shadow-sm">
                        No community homestays are currently listed. Please check back soon!
                    </div>
                @endforelse
            </div>

            <div class="mt-12 flex justify-center">
                {{ $homestays->links() }}
            </div>
        </div>
    </section>
</x-public-layout>

<x-public-layout title="Peanut Marketplace | Ghachok Community">
    
    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-3">Premium Organic Yield</span>
            <h1 class="font-sans text-4xl md:text-6xl font-bold text-white mb-6">The Ghachok Peanut.</h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto font-light">
                Cultivated in the rich soils at the foothills of the Annapurna range. Hand-harvested, sun-dried, and
                cleanly processed by our local women's cooperative.
            </p>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-cream border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="aspect-video bg-white rounded-3xl overflow-hidden shadow-sm border border-stone-200 p-2.5">
                    <img src="{{ asset('image/pn.jpg') }}" alt="Organic Peanut Fields in Ghachok" class="w-full h-full object-cover rounded-2xl">
                </div>
                <div class="space-y-5">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-peanut/50 block mb-1">Heritage Agriculture</span>
                        <h2 class="font-sans text-3xl md:text-4xl font-bold text-peanut">Our Organic Process</h2>
                    </div>
                    <div class="w-12 h-1 bg-golden rounded-full"></div>
                    <p class="text-sm md:text-base text-peanut/80 leading-relaxed font-light">
                        Our peanuts are grown using ancestral, chemical-free farming techniques passed down through generations.
                    </p>
                    <p class="text-sm md:text-base text-peanut/80 leading-relaxed font-light">
                        By purchasing directly from this catalog, you are establishing a direct value-chain that bypasses middlemen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-1">Direct Procurement</span>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-peanut mb-2">Direct from the Farm</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @forelse($products as $product)
                    <div onclick="openModal('modal-{{ $product->id }}')" class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group cursor-pointer">
                        <div class="aspect-[4/3] bg-stone-50 overflow-hidden border-b border-stone-100">
                            <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('image/pn.jpg') }}" alt="{{ $product->name }}" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                        </div>
                        
                        <div class="p-5 flex-grow flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-baseline mb-2 gap-2">
                                    <h3 class="font-sans text-lg font-bold text-peanut truncate">{{ $product->name }}</h3>
                                    <span class="text-xs font-bold text-golden">NPR {{ number_format($product->price) }}<span class="text-stone-400 font-medium">/ {{ $product->unit }}</span></span>
                                </div>
                                <p class="text-xs sm:text-sm text-peanut/70 mb-6 leading-relaxed font-light line-clamp-3">{{ $product->description }}</p>
                            </div>

                            <div class="mt-auto grid grid-cols-2 gap-2 border-t border-stone-100 pt-3" onclick="event.stopPropagation()">
                                <a href="https://wa.me/YOUR_PHONE_NUMBER?text={{ urlencode('Hello, I am interested in ordering: ' . $product->name) }}" target="_blank" class="flex items-center justify-center gap-1.5 w-full bg-[#25D366] hover:bg-[#20bd5a] text-white text-[10px] sm:text-xs font-bold uppercase tracking-wider py-3 rounded-xl transition shadow-sm">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                    WhatsApp
                                </a>
                                <a href="https://m.me/your-facebook-page" target="_blank" class="flex items-center justify-center gap-1.5 w-full bg-[#0084FF] hover:bg-[#0073e6] text-white text-[10px] sm:text-xs font-bold uppercase tracking-wider py-3 rounded-xl transition shadow-sm">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.562V24l4.093-2.271A12.33 12.33 0 0012 22.222c6.627 0 12-4.974 12-11.111S18.627 0 12 0zm1.293 14.246l-3.08-3.297-6.015 3.297 6.615-7.022 3.138 3.297 5.957-3.297-6.615 7.022z"/></svg>
                                    Messenger
                                </a>
                            </div>
                        </div>
                        
                    </div>

                    <div id="modal-{{ $product->id }}" class="fixed inset-0 z-[100] hidden p-4 flex items-center justify-center">
                        <div class="fixed inset-0 bg-stone-900/80 backdrop-blur-sm" onclick="closeModal('modal-{{ $product->id }}')"></div>
                        <div class="bg-white rounded-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto relative z-10 p-6 sm:p-10 shadow-2xl">
                            <button onclick="closeModal('modal-{{ $product->id }}')" class="absolute top-4 right-4 text-stone-400 hover:text-stone-800 text-xl font-bold">✕</button>
                            
                            <h2 class="text-2xl font-bold text-peanut mb-2">{{ $product->name }}</h2>
                            <p class="text-golden font-bold mb-6">NPR {{ number_format($product->price) }} / {{ $product->unit }}</p>

                            <div class="bg-stone-50 p-4 rounded-xl mb-6 border border-stone-200">
                                <h4 class="text-xs uppercase font-bold text-stone-400 mb-2">Farmer Information</h4>
                                <p class="font-bold text-peanut">{{ $product->producer_name }}</p>
                                <p class="text-sm text-stone-600">{{ $product->village_name }}, Ward {{ $product->ward_number }}</p>
                                <p class="text-xs text-stone-400 mt-2">Available: {{ $product->stock }} {{ $product->unit }}</p>
                            </div>

                            <p class="text-stone-600 leading-relaxed mb-8">{{ $product->description }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16 text-stone-500">No products available at the moment.</div>
                @endforelse
            </div>
        </div>
    </section>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</x-public-layout>
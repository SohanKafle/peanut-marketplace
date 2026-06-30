<x-public-layout title="About US | Ghachok Community">
    
    <!-- Hero Section -->
    <section class="bg-peanut text-cream py-16 md:py-24 border-b-4 border-golden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <span class="text-xs font-bold uppercase tracking-widest text-golden block">
                Machapuchhre Municipality, Kaski
            </span>
            <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight">
                Our Roots & Mission<span class="text-golden">.</span>
            </h1>
            <p class="text-sm md:text-base text-cream/80 leading-relaxed max-w-2xl mx-auto font-light">
                Bridging the direct path between ancestral mountain farming cooperatives and health-conscious urban centers through independent, community-owned technology.
            </p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="bg-cream py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

            <!-- NODE 1: DESCRIPTION (Clean HTML with proper typography tags) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6 order-2 lg:order-1 text-center lg:text-left">
                    <span class="text-xs font-bold uppercase tracking-widest text-golden block">
                        The People of Ghachok
                    </span>
                    <h2 class="font-serif text-3xl sm:text-4xl font-bold text-peanut leading-tight">
                        A Tapestry of Ethnicities, Backgrounds & Shared Occupations.
                    </h2>
                    <div class="w-12 h-1 bg-golden mx-auto lg:mx-0"></div>
                    
                    <p class="text-sm text-peanut/80 leading-relaxed font-light">
                        Ghachok is a vibrant settlement shaped by a rich convergence of cultures. The village stands as a peaceful mosaic of <strong>diverse ethnicities</strong>, prominently home to the indigenous <strong>Gurung and Magar</strong> communities, alongside <strong>Brahmin, Chhetri, and Dalit</strong> families. This demographic blend infuses our valley with distinct seasonal festivals, linguistic traditions, and centuries of collective communal wisdom.
                    </p>
                    <p class="text-sm text-peanut/80 leading-relaxed font-light">
                        Our collective identity is bound by shared local <strong>occupations</strong>. While the heartbeat of the plateau is driven by our <strong>smallholder agriculturalists</strong>—specifically over 30 smallholder women growers cultivating premium organic peanuts and millet—the community's economy expands into <strong>agro-tourism hospitality, local guiding, and pastoral animal husbandry</strong>. By bringing these diverse trades onto one digital platform, we ensure multi-generational skills directly fuel rural financial resilience.
                    </p>
                </div>
                
                <div class="lg:col-span-5 order-1 lg:order-2">
                    <div class="aspect-square bg-white p-2.5 overflow-hidden rounded-3xl border border-stone-200 shadow-sm">
                        <img src="{{ asset('image/fr.jpg') }}" alt="Machapuchhre Diverse Community Collective" class="w-full h-full object-cover rounded-2xl hover:scale-105 transition-transform duration-700 ease-in-out">
                    </div>
                </div>
            </div>

            <!-- NODE 2: MISSION & VISION -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 pt-4">
                <!-- Our Mission Card -->
                <div class="bg-white border border-stone-200 p-8 md:p-10 rounded-2xl relative overflow-hidden group transition-all duration-300 hover:border-golden shadow-sm">
                    <div class="absolute top-0 inset-x-0 h-1 bg-stone-200 group-hover:bg-golden transition-colors"></div>
                    <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-2">Our Core Mission</span>
                    <h3 class="font-serif text-2xl font-bold text-peanut mb-3">Market Linkage</h3>
                    <p class="text-sm text-peanut/75 leading-relaxed font-light">
                        To counter undervalued agricultural streams by establishing systemic, digital pathways that directly reward primary growers for their pure, organic craftsmanship and ancestral traditions.
                    </p>
                </div>
                
                <!-- Our Vision Card -->
                <div class="bg-white border border-stone-200 p-8 md:p-10 rounded-2xl relative overflow-hidden group transition-all duration-300 hover:border-golden shadow-sm">
                    <div class="absolute top-0 inset-x-0 h-1 bg-stone-200 group-hover:bg-golden transition-colors"></div>
                    <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-2">The Long Vision</span>
                    <h3 class="font-serif text-2xl font-bold text-peanut mb-3">Community Ownership</h3>
                    <p class="text-sm text-peanut/75 leading-relaxed font-light">
                        To build a sustainable structural prototype where indigenous agricultural yields and immersive eco-tourism values are independently scaled, managed, and expanded entirely by our local youth teams.
                    </p>
                </div>
            </div>

            <!-- NODE 3: LOCATION -->
            <div class="bg-white border border-stone-200 p-6 md:p-8 rounded-3xl shadow-sm space-y-6">
                <!-- Header Text -->
                <div class="text-center space-y-2">
                    <span class="text-xs font-bold uppercase tracking-widest text-golden block">Geographic Footprint</span>
                    <h3 class="font-serif text-2xl font-bold text-peanut">Regional Operations Gateway</h3>
                    <p class="text-sm text-peanut/80 font-light">
                        Machapuchhre Municipality, Ghachok (Ward No. 3), Kaski District, Gandaki Province, Nepal.
                    </p>
                </div>
                
                <!-- Real Interactive Map Container -->
                <div class="w-full h-64 md:h-80 bg-cream border border-stone-200 rounded-2xl overflow-hidden shadow-inner relative">
                    <iframe 
                        class="w-full h-full border-0 grayscale-[20%] contrast-[110%]" 
                        src="https://maps.google.com/maps?q=Ghachok,%20Kaski,%20Nepal&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </section>
</x-public-layout>
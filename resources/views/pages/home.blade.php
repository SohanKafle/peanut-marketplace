<x-public-layout title="Home | Ghachok Community">
    <div class="bg-white text-peanut antialiased">

        <!-- HERO SECTION -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Column: Text Content -->
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
            <!-- Right Column: Slideshow -->
            <div id="hero-slideshow" class="relative w-full aspect-[6/5] bg-cream-dark overflow-hidden rounded-3xl border border-cream-dark shadow-md">
    
    <!-- Slides -->
    <div class="relative w-full h-full">
        @forelse($heroSlides as $index => $slide)
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $loop->first ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
                <img src="{{ asset('storage/' . $slide->image_path) }}" alt="Hero Slide" class="object-cover w-full h-full">
            </div>
        @empty
            <div class="hero-slide absolute inset-0 opacity-100 z-10">
                <img src="{{ asset('image/pn.jpg') }}" alt="Default Ghachok Hero" class="object-cover w-full h-full">
            </div>
        @endforelse
    </div>

    <!-- Dots (rendered only if > 1 slide exists) -->
    @if(isset($heroSlides) && $heroSlides->count() > 1)
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex items-center space-x-2 bg-peanut/20 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/20">
            @foreach($heroSlides as $index => $slide)
                <button type="button" 
                        aria-label="Slide {{ $index + 1 }}" 
                        onclick="goToSlide({{ $index }})"
                        class="hero-dot transition-all duration-500 {{ $loop->first ? 'w-6 h-1.5 rounded-full bg-golden' : 'w-1.5 h-1.5 rounded-full bg-white/70 hover:bg-white' }}">
                </button>
            @endforeach
        </div>
    @endif

</div>

        </section>

        <!-- STATS SECTION -->
        <section class="bg-cream py-12 md:py-16 border-t border-b border-cream-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

                    <div
                        class="bg-white border border-cream-dark p-6 md:p-8 rounded-2xl text-center relative overflow-hidden group hover:border-golden transition-all duration-300">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-golden transition-colors">
                        </div>
                        <span class="font-sans text-4xl lg:text-5xl font-bold text-peanut block mb-2">100%</span>
                        <h3 class="text-[10px] uppercase tracking-widest font-bold text-golden mb-1">Pure & Organic Product</h3>
                        <p class="text-xs text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Cultivated natively using traditional, chemical-free mountain methods.
                        </p>
                    </div>

                    <div
                        class="bg-white border border-cream-dark p-6 md:p-8 rounded-2xl text-center relative overflow-hidden group hover:border-golden transition-all duration-300">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-golden transition-colors">
                        </div>
                        <span class="font-sans text-4xl lg:text-5xl font-bold text-peanut block mb-2">30+</span>
                        <h3 class="text-[10px] uppercase tracking-widest font-bold text-golden mb-1">Women, 2 Cooperatives</h3>
                        <p class="text-xs text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Directly backing local smallholder operations and farming networks.
                        </p>
                    </div>

                    <div
                        class="bg-white border border-cream-dark p-6 md:p-8 rounded-2xl text-center relative overflow-hidden group hover:border-golden transition-all duration-300">
                        <div class="absolute top-0 inset-x-0 h-1 bg-cream-dark group-hover:bg-golden transition-colors">
                        </div>
                        <span class="font-sans text-4xl lg:text-5xl font-bold text-peanut block mb-2">Youth</span>
                        <h3 class="text-[10px] uppercase tracking-widest font-bold text-golden mb-1">Community Owned</h3>
                        <p class="text-xs text-peanut/70 font-light leading-relaxed max-w-xs mx-auto">
                            Managed locally by youth tech enablers to build independent growth.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- STORY SECTION -->
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
                            Explore Farmstays
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

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const slideshowContainer = document.getElementById("hero-slideshow");
        if (!slideshowContainer) return;

        const slides = slideshowContainer.querySelectorAll(".hero-slide");
        const dots = slideshowContainer.querySelectorAll(".hero-dot");
        if (slides.length <= 1) return;

        let currentIndex = 0;
        let slideInterval = setInterval(nextSlide, 4000);

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("opacity-100", i === index);
                slide.classList.toggle("z-10", i === index);
                slide.classList.toggle("opacity-0", i !== index);
                slide.classList.toggle("z-0", i !== index);
            });

            dots.forEach((dot, i) => {
                dot.className = i === index 
                    ? "hero-dot w-6 h-1.5 rounded-full bg-golden transition-all duration-500" 
                    : "hero-dot w-1.5 h-1.5 rounded-full bg-white/70 hover:bg-white transition-all duration-500";
            });

            currentIndex = index;
        }

        function nextSlide() {
            showSlide((currentIndex + 1) % slides.length);
        }

        window.goToSlide = function(index) {
            clearInterval(slideInterval);
            showSlide(index);
            slideInterval = setInterval(nextSlide, 4000);
        };

        slideshowContainer.addEventListener("mouseenter", () => clearInterval(slideInterval));
        slideshowContainer.addEventListener("mouseleave", () => {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 4000);
        });
    });
</script>
</x-public-layout>
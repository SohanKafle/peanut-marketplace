<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ghachok Community Network</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-cream font-sans text-peanut antialiased flex flex-col min-h-screen selection:bg-peanut selection:text-white">

    <header class="bg-white/95 backdrop-blur-md sticky top-0 z-50 border-b border-cream-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 md:h-20 flex items-center justify-between">
            
            <a href="/" class="flex items-center gap-2">
                <span class="font-serif text-xl md:text-2xl font-bold tracking-tight text-peanut">Ghachok<span class="text-golden">.</span></span>
            </a>

            <nav class="hidden lg:flex items-center gap-8 font-medium text-xs tracking-wider uppercase text-peanut/80">
                <a href="/" class="hover:text-peanut border-b-2 border-transparent hover:border-golden transition py-1">Home</a>
                <a href="/about" class="hover:text-peanut border-b-2 border-transparent hover:border-golden transition py-1">About</a>
                <a href="/peanuts" class="hover:text-peanut border-b-2 border-transparent hover:border-golden transition py-1">Peanuts</a>
                <a href="/homestays" class="hover:text-peanut border-b-2 border-transparent hover:border-golden transition py-1">Homestays</a>
                <a href="/stories" class="hover:text-peanut border-b-2 border-transparent hover:border-golden transition py-1">Stories</a>
            </nav>

            <div class="hidden lg:block">
                <a href="/connect" class="bg-peanut hover:bg-peanut-light text-white text-xs font-bold uppercase tracking-wider px-5 py-3 rounded-xl transition">
                    Connect & Support
                </a>
            </div>

            <button id="mobile-menu-btn" class="lg:hidden p-2 text-peanut focus:outline-none" aria-label="Toggle Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-cream-dark shadow-xl absolute w-full left-0 z-50">
            <div class="px-4 pt-3 pb-6 space-y-1">
                <a href="/" class="block px-4 py-3.5 rounded-xl text-base font-medium text-peanut hover:bg-cream">Home</a>
                <a href="/about" class="block px-4 py-3.5 rounded-xl text-base font-medium text-peanut hover:bg-cream">About</a>
                <a href="/peanuts" class="block px-4 py-3.5 rounded-xl text-base font-medium text-peanut hover:bg-cream">Peanuts</a>
                <a href="/homestays" class="block px-4 py-3.5 rounded-xl text-base font-medium text-peanut hover:bg-cream">Homestays</a>
                <a href="/stories" class="block px-4 py-3.5 rounded-xl text-base font-medium text-peanut hover:bg-cream">Stories</a>
                <div class="pt-4 mt-2 border-t border-cream-dark">
                    <a href="/connect" class="w-full text-center block bg-peanut text-white font-semibold py-3.5 rounded-xl text-sm">
                        Connect & Support
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-peanut text-cream-dark pt-14 pb-8 border-t-4 border-golden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center md:text-left mb-12">
                <div>
                    <h3 class="font-serif text-2xl font-bold text-white mb-3">Ghachok<span class="text-golden">.</span></h3>
                    <p class="text-cream/70 text-sm max-w-sm mx-auto md:mx-0 leading-relaxed">
                        A collaborative digital platform elevating local organic initiatives and traditional lifestyles.
                    </p>
                </div>
                <div class="border-t border-white/10 md:border-0 pt-8 md:pt-0">
                    <h4 class="text-golden font-bold uppercase tracking-wider text-xs mb-4">Explore Community</h4>
                    <ul class="space-y-3 text-sm font-medium text-cream/80">
                        <li><a href="/peanuts" class="hover:text-white block py-1">Local Peanuts Section</a></li>
                        <li><a href="/homestays" class="hover:text-white block py-1">Community Homestays</a></li>
                        <li><a href="/stories" class="hover:text-white block py-1">Blogs & Conversations</a></li>
                    </ul>
                </div>
                <div class="border-t border-white/10 md:border-0 pt-8 md:pt-0">
                    <h4 class="text-golden font-bold uppercase tracking-wider text-xs mb-4">Contact Gateway</h4>
                    <p class="text-sm text-cream/80 mb-4">Machapuchhre Municipality, Kaski, Nepal[cite: 4, 23].</p>
                    <a href="tel:+9779800000000" class="inline-block bg-white/10 text-white text-xs font-bold uppercase tracking-wider px-5 py-2.5 rounded-xl hover:bg-white/20 transition">
                        📞 Call Representative [cite: 27]
                    </a>
                </div>
            </div>
            <div class="pt-6 border-t border-white/10 text-center text-xs text-cream/40">
                <p>&copy; {{ date('Y') }} Ghachok Community Hub. Built for mobile accessibility.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
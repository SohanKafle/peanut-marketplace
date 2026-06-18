<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Machapuchhre Peanut Marketplace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="bg-cream font-sans text-peanut antialiased">

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-cream-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3">
                <span class="font-serif text-2xl font-bold tracking-tight text-forest">Machapuchhre<span class="text-golden">.</span></span>
            </a>
            <nav class="hidden md:flex items-center gap-8 font-medium text-sm tracking-wide uppercase text-peanut/80">
                <a href="/marketplace" class="hover:text-forest transition">Marketplace</a>
                <a href="/farmers" class="hover:text-forest transition">Our Farmers</a>
            </nav>
            <div>
                <a href="/marketplace" class="bg-forest hover:bg-forest-light text-white font-semibold px-5 py-2.5 rounded-lg transition text-sm">
                    Explore Produce
                </a>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

<footer class="bg-peanut text-cream-dark mt-24 pt-16 pb-8 relative overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-white/5 rounded-3xl p-8 md:p-12 mb-16 flex flex-col md:flex-row items-center justify-between border border-white/10 shadow-inner">
                <div class="mb-6 md:mb-0 md:mr-8 text-center md:text-left">
                    <h3 class="font-serif text-2xl md:text-3xl text-white font-bold mb-2">Join Our Harvest Network</h3>
                    <p class="text-cream/70 text-sm max-w-md">Get updates on seasonal yields, fresh peanut batches, and stories directly from the Machapuchhre women cooperatives.</p>
                </div>
                <div class="w-full md:w-auto flex-shrink-0">
                    <form class="flex items-center w-full max-w-sm mx-auto md:mx-0 shadow-lg rounded-xl overflow-hidden">
                        <input type="email" placeholder="Your email address" class="bg-white/10 border-0 text-white placeholder-white/50 px-4 py-3.5 focus:outline-none focus:ring-2 focus:ring-golden w-full">
                        <button type="button" class="bg-golden hover:bg-yellow-600 text-peanut font-bold px-6 py-3.5 transition duration-200">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2 text-center md:text-left">
                    <a href="/" class="inline-block font-serif text-3xl font-bold tracking-tight text-white mb-4">
                        Machapuchhre<span class="text-golden">.</span>
                    </a>
                    <p class="text-cream/60 text-sm leading-relaxed max-w-sm mx-auto md:mx-0 mb-6">
                        A community-owned digital marketplace empowering women agricultural entrepreneurs through transparent trade and premium local branding.
                    </p>
                    
                    <div class="flex items-center justify-center md:justify-start gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white/70 hover:bg-golden hover:text-peanut transition hover:-translate-y-1">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white/70 hover:bg-golden hover:text-peanut transition hover:-translate-y-1">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                    </div>
                </div>

                <div class="text-center md:text-left">
                    <h4 class="text-golden font-bold uppercase tracking-wider text-xs mb-4">Explore</h4>
                    <ul class="space-y-3 text-sm text-cream/70">
                        <li><a href="/marketplace" class="hover:text-white transition">The Marketplace</a></li>
                        <li><a href="/farmers" class="hover:text-white transition">Meet the Farmers</a></li>
                        <li><a href="/stories" class="hover:text-white transition">Community Stories</a></li>
                        <li><a href="/resources" class="hover:text-white transition">Training Resources</a></li>
                    </ul>
                </div>

                <div class="text-center md:text-left">
                    <h4 class="text-golden font-bold uppercase tracking-wider text-xs mb-4">Visit Us</h4>
                    <ul class="space-y-3 text-sm text-cream/70">
                        <li>Machapuchhre Municipality</li>
                        <li>Gandaki Province, Nepal</li>
                        <li class="pt-2"><a href="mailto:hello@machapuchhre.coop" class="hover:text-white transition font-medium">hello@machapuchhre.coop</a></li>
                        <li><a href="tel:+9779800000000" class="hover:text-white transition font-medium">+977 980-0000000</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between text-xs text-cream/40">
                <p>&copy; {{ date('Y') }} Machapuchhre Digital Cooperative Network. All rights reserved.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-cream/80 transition">Privacy Policy</a>
                    <a href="#" class="hover:text-cream/80 transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
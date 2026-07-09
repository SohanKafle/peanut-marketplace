<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Ghachok Community Hub' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">
</head>

<body
    class="bg-cream font-sans text-peanut antialiased flex flex-col min-h-screen selection:bg-peanut selection:text-white">

    <header class="bg-white/95 backdrop-blur-md sticky top-0 z-50 border-b border-cream-dark transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 md:h-20 flex items-center justify-between">

            <a href="/" class="flex items-center gap-2 group">
                <span
                    class="font-sans text-xl md:text-2xl font-bold tracking-tight text-peanut transition-colors group-hover:text-golden">
                    Ghachok<span class="text-golden group-hover:text-peanut">.</span>
                </span>
            </a>

            <nav class="hidden lg:flex items-center gap-8 font-medium text-xs tracking-wider uppercase">
                <a href="/" @class([
                    'transition-all py-1 border-b-2',
                    'text-peanut border-golden font-bold' => request()->is('/'),
                    'text-peanut/70 border-transparent hover:text-peanut hover:border-golden' => !request()->is(
                        '/'),
                ])>Home</a>

                <a href="/about" @class([
                    'transition-all py-1 border-b-2',
                    'text-peanut border-golden font-bold' => request()->is('about*'),
                    'text-peanut/70 border-transparent hover:text-peanut hover:border-golden' => !request()->is(
                        'about*'),
                ])>About</a>

                <a href="/peanuts" @class([
                    'transition-all py-1 border-b-2',
                    'text-peanut border-golden font-bold' => request()->is('peanuts*'),
                    'text-peanut/70 border-transparent hover:text-peanut hover:border-golden' => !request()->is(
                        'peanuts*'),
                ])>Peanuts</a>

                <a href="/homestays" @class([
                    'transition-all py-1 border-b-2',
                    'text-peanut border-golden font-bold' => request()->is('homestays*'),
                    'text-peanut/70 border-transparent hover:text-peanut hover:border-golden' => !request()->is(
                        'homestays*'),
                ])>Homestays</a>

                <a href="/stories" @class([
                    'transition-all py-1 border-b-2',
                    'text-peanut border-golden font-bold' => request()->is('stories*'),
                    'text-peanut/70 border-transparent hover:text-peanut hover:border-golden' => !request()->is(
                        'stories*'),
                ])>Stories</a>
            </nav>

            <div class="hidden lg:block">
                <a href="/connect"
                    class="inline-flex items-center justify-center bg-peanut text-white text-xs font-bold uppercase tracking-wider px-5 py-3 rounded-xl shadow-sm hover:bg-golden hover:text-peanut transition-all duration-300">
                    Connect & Support
                </a>
            </div>

            <button id="mobile-menu-btn"
                class="lg:hidden p-2 text-peanut focus:outline-none rounded-lg hover:bg-cream transition-colors"
                aria-label="Toggle Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu"
            class="hidden lg:hidden bg-white border-t border-cream-dark shadow-xl absolute w-full left-0 z-50 transition-all duration-300">
            <div class="px-4 pt-3 pb-6 space-y-1.5">
                <a href="/" @class([
                    'block px-4 py-3.5 rounded-xl text-base font-medium transition-colors',
                    'bg-cream text-peanut font-bold' => request()->is('/'),
                    'text-peanut hover:bg-cream/50' => !request()->is('/'),
                ])>Home</a>

                <a href="/about" @class([
                    'block px-4 py-3.5 rounded-xl text-base font-medium transition-colors',
                    'bg-cream text-peanut font-bold' => request()->is('about*'),
                    'text-peanut hover:bg-cream/50' => !request()->is('about*'),
                ])>About</a>

                <a href="/peanuts" @class([
                    'block px-4 py-3.5 rounded-xl text-base font-medium transition-colors',
                    'bg-cream text-peanut font-bold' => request()->is('peanuts*'),
                    'text-peanut hover:bg-cream/50' => !request()->is('peanuts*'),
                ])>Peanuts</a>

                <a href="/homestays" @class([
                    'block px-4 py-3.5 rounded-xl text-base font-medium transition-colors',
                    'bg-cream text-peanut font-bold' => request()->is('homestays*'),
                    'text-peanut hover:bg-cream/50' => !request()->is('homestays*'),
                ])>Homestays</a>

                <a href="/stories" @class([
                    'block px-4 py-3.5 rounded-xl text-base font-medium transition-colors',
                    'bg-cream text-peanut font-bold' => request()->is('stories*'),
                    'text-peanut hover:bg-cream/50' => !request()->is('stories*'),
                ])>Stories</a>

                <div class="pt-4 mt-2 border-t border-cream-dark">
                    <a href="/connect"
                        class="w-full text-center block bg-peanut text-white font-bold uppercase tracking-wider py-3.5 rounded-xl text-xs hover:bg-golden hover:text-peanut transition-all duration-300 shadow-sm">
                        Connect & Support
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-peanut text-cream border-t-4 border-golden">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 pt-12 lg:pt-16 pb-8 lg:pb-10">

            <!-- Top Section (Main Grid) -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12 pb-10 border-b border-white/10">

                <!-- Brand Section -->
                <div class="md:col-span-5 space-y-3">
                    <h3 class="font-sans text-2xl font-bold text-white tracking-tight">Ghachok<span
                            class="text-golden">.</span></h3>
                    <p class="text-cream/70 text-sm max-w-sm leading-relaxed font-light">
                        A collaborative rural digital marketplace built to elevate native peanut smallholder
                        cultivation, community agri-tourism, and sustainable women-led operations.
                    </p>
                </div>

                <!-- Explore Hub -->
                <div class="md:col-span-3 space-y-3 lg:space-y-4">
                    <h4 class="text-golden font-bold uppercase tracking-widest text-[11px]">Explore Hub</h4>
                    <ul class="space-y-2.5 text-sm md:text-xs font-medium text-cream/80">
                        <li><a href="/peanuts"
                                class="hover:text-golden hover:underline transition-all inline-block py-0.5">Organic
                                Marketplace</a></li>
                        <li><a href="/homestays"
                                class="hover:text-golden hover:underline transition-all inline-block py-0.5">Village
                                Homestays</a></li>
                        <li><a href="/stories"
                                class="hover:text-golden hover:underline transition-all inline-block py-0.5">Community
                                News & Blogs</a></li>
                        <li><a href="/about"
                                class="hover:text-golden hover:underline transition-all inline-block py-0.5">Our
                                Collective Story</a></li>
                    </ul>
                </div>

                <!-- Contact Gateway -->
                <div class="md:col-span-4 space-y-3 lg:space-y-4">
                    <h4 class="text-golden font-bold uppercase tracking-widest text-[11px]">Contact Gateway</h4>
                    <p class="text-sm md:text-xs text-cream/70 font-light leading-relaxed max-w-xs">
                        Machapuchhre Municipality, Ward 3, Ghachok, Kaski, Gandaki Province, Nepal.
                    </p>
                    <div class="pt-2">
                        <a href="tel:+9779800000000"
                            class="inline-flex items-center justify-center bg-white/10 text-white text-[11px] font-bold uppercase tracking-wider px-5 py-3 rounded-xl hover:bg-white hover:text-peanut transition-all duration-300">
                            📞 Call Representative
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-[11px] text-cream/40">
                <p class="text-center md:text-left font-light leading-snug max-w-md md:max-w-none">
                    &copy; {{ date('Y') }} Ghachok Community Hub. <span class="hidden md:inline">Co-designed with
                        native tech leadership enablers.</span>
                </p>

                <div class="flex items-center justify-center">
                    <a href="/login"
                        class="hover:text-golden border-b border-cream/10 hover:border-golden transition-all pb-0.5 font-medium tracking-wide uppercase text-[10px]">
                        🔒 Admin Dashboard Access
                    </a>
                </div>
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

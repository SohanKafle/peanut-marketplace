<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Peanut Marketplace | Machapuchhre, Nepal' }}</title>
        <meta name="description" content="Community-centered marketplace for women peanut farmers in Machapuchhre Municipality, Nepal.">

        <!-- Scripts and Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="w-full border-b border-peanut-200 bg-cream pt-4 pb-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <a href="/" class="font-serif text-2xl font-bold tracking-tight text-forest-900">
                    Peanut<span class="text-terracotta">Marketplace</span>.
                </a>
                <nav class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="#" class="hover:text-terracotta transition-colors">Marketplace</a>
                    <a href="#" class="hover:text-terracotta transition-colors">Our Farmers</a>
                    <a href="#" class="hover:text-terracotta transition-colors">Our Story</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-sm font-medium hover:text-terracotta transition-colors">Sign In</a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-forest-900 text-cream py-12 mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-xl font-bold text-peanut-200 mb-4">PeanutMarketplace.</h3>
                        <p class="text-sm text-peanut-100/80 leading-relaxed">
                            Empowering women farmers in Machapuchhre Municipality, Nepal by bringing their organic, ethically grown peanuts directly to your table.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold mb-4">Explore</h4>
                        <ul class="space-y-2 text-sm text-peanut-100/80">
                            <li><a href="#" class="hover:text-terracotta transition-colors">Shop</a></li>
                            <li><a href="#" class="hover:text-terracotta transition-colors">The Cooperatives</a></li>
                            <li><a href="#" class="hover:text-terracotta transition-colors">Farming Practices</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold mb-4">Contact</h4>
                        <ul class="space-y-2 text-sm text-peanut-100/80">
                            <li>Machapuchhre Municipality, Ward 4</li>
                            <li>Kaski, Gandaki Province, Nepal</li>
                            <li><a href="mailto:hello@peanutmarketplace.np" class="hover:text-terracotta transition-colors">hello@peanutmarketplace.np</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-12 pt-8 border-t border-forest-500/30 text-center text-xs text-peanut-200/60">
                    <p>&copy; {{ date('Y') }} Machapuchhre Women's Peanut Cooperative. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
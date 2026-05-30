@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ? $title . ' | ' . config('app.name', 'Peanut Marketplace') : config('app.name', 'Peanut Marketplace') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-forest antialiased bg-cream flex min-h-screen">
        
        <!-- Left Side: Storytelling & Branding (Hidden on mobile) -->
        <div class="hidden lg:flex lg:w-1/2 bg-peanut-200 relative overflow-hidden items-center justify-center border-r border-peanut-500/30">
            <div class="absolute inset-0 bg-forest/5"></div>
            
            <div class="z-10 p-12 text-center max-w-lg">
                <a href="/" class="font-serif text-5xl font-bold tracking-tight text-forest-900 block mb-8">
                    Peanut<span class="text-terracotta">Marketplace</span>.
                </a>
                <p class="font-serif text-2xl italic text-forest-700 leading-relaxed">
                    "Empowering the women of Machapuchhre, one harvest at a time."
                </p>
                <p class="mt-6 text-forest-500 font-light tracking-wide uppercase text-sm">Community Cooperative Platform</p>
            </div>
        </div>

        <!-- Right Side: Authentication Form -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center px-8 sm:px-16 lg:px-24 xl:px-32 py-12 relative">
            <div class="w-full max-w-md mx-auto">
                <!-- Mobile Logo -->
                <div class="lg:hidden mb-12 text-center">
                    <a href="/" class="font-serif text-3xl font-bold tracking-tight text-forest-900">
                        Peanut<span class="text-terracotta">Marketplace</span>.
                    </a>
                </div>
                
                {{ $slot }}
            </div>
        </div>

    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Ghachok Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200..800&display=swap" rel="stylesheet"></head>
<body class="bg-cream text-peanut font-sans antialiased">

<!-- Main Shell - Prevents overflow issues across screen transformations -->
<div class="min-h-screen bg-stone-50 text-stone-800 antialiased">
    
    <!-- 1. The Admin Sidebar Navigation File Component Injected Here -->
    @include('layouts.navigation')

    <!-- 2. Responsive Content Frame: Offsets exactly 18rem (w-72) on large screens -->
    <div class="lg:pl-72 min-h-screen flex flex-col transition-all duration-300">
        
        <!-- Main Body Frame: Adds top padding on mobile to clear the absolute floating hamburger button -->
        <main class="flex-1 p-4 sm:p-6 lg:p-10 pt-20 lg:pt-10 max-w-7xl w-full mx-auto">
            {{ $slot }}
        </main>
        
    </div>
</div>

</body>
</html>
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

    <div class="min-h-screen bg-[#FBFBF9]"> @include('layouts.navigation')

        <main class="lg:pl-72 min-h-screen transition-all duration-300 ease-in-out">
            
            <div class="px-4 pt-20 pb-8 sm:px-6 sm:pt-24 lg:px-8 lg:pt-8 max-w-screen-2xl mx-auto w-full">
                {{ $slot }}
            </div>

        </main>

    </div>

</body>
</html>
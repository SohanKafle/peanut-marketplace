<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Peanut Marketplace Admin') }}</title>

        <!-- Scripts & Built-in font from app.css -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-forest bg-cream flex flex-col min-h-screen">
        <div class="flex-grow flex flex-col lg:flex-row">
            
            <!-- Side Navigation (Mobile Topbar, Desktop Sidebar) -->
            @include('layouts.navigation')

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col min-w-0">
                <!-- Page Heading -->
                @isset($header)
                    <header class="border-b border-peanut-200 bg-cream/50">
                        <div class="py-8 px-6 lg:px-12">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-1 p-6 lg:p-12">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>

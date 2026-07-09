<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghachok Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream text-peanut font-sans antialiased">
    <div class="flex min-h-screen">
        @include('layouts.navigation')
        <main class="flex-1 bg-white p-8">
            {{ $slot }}
        </main>
    </div>
</body>

</html>

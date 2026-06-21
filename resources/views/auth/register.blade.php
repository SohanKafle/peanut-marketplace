<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Closed | Admin Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-cream font-sans antialiased min-h-screen flex items-center justify-center p-4 sm:p-6 md:p-8">

    <div class="w-full max-w-md bg-[#e5e0d8] text-peanut rounded-3xl p-6 sm:p-10 md:p-12 border border-stone-300 shadow-sm text-center space-y-8">
        
        <div>
            <a href="/" class="font-serif text-2xl font-bold tracking-tight">
                Ghachok<span class="text-golden">.</span>
            </a>
        </div>

        <div class="space-y-3">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-white/40 text-peanut text-xl mb-2">
                🔒
            </div>
            <h1 class="font-serif text-2xl font-bold tracking-tight">Registration Disabled</h1>
            <p class="text-xs sm:text-sm text-peanut/70 font-light leading-relaxed">
                Public account registration is currently closed. Access to this management portal is restricted to pre-authorized administrators.
            </p>
        </div>

        <div class="pt-2">
            <a href="{{ route('login') }}" class="w-full inline-flex items-center justify-center bg-peanut text-cream text-xs font-bold uppercase tracking-wider py-4 rounded-xl shadow-sm hover:bg-golden hover:text-peanut transition-all duration-300">
                Return to Sign In
            </a>
        </div>

        <div class="pt-4 border-t border-peanut/10 text-[11px] text-peanut/50 font-light leading-relaxed">
            If you are a platform coordinator and require dashboard access, please contact the system administrator to set up your profile.
        </div>

    </div>

</body>
</html>
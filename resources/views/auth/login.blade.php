<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Portal | Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-cream font-sans antialiased min-h-screen flex items-center justify-center p-4 sm:p-6 md:p-8">

    <div class="w-full max-w-5xl bg-white rounded-3xl overflow-hidden border border-cream-dark shadow-sm grid grid-cols-1 lg:grid-cols-12 min-h-[520px] lg:min-h-[600px]">
        
        <div class="hidden lg:flex lg:col-span-5 bg-peanut p-12 flex-col justify-between relative overflow-hidden border-r border-cream-dark text-cream">
            <div class="absolute -right-12 -top-12 w-40 h-40 rounded-full bg-golden/10 blur-2xl"></div>
            <div class="absolute -left-12 -bottom-12 w-52 h-52 rounded-full bg-white/5 blur-2xl"></div>
            
            <div class="relative z-10">
                <a href="/" class="font-sans text-2xl font-bold text-white tracking-tight hover:text-golden transition-colors">
                    Ghachok<span class="text-golden">.</span>
                </a>
            </div>

            <div class="relative z-10 space-y-4">
                <span class="text-[10px] uppercase tracking-widest font-bold text-golden block">Administrative Portal</span>
                <h1 class="font-sans text-3xl font-bold text-white leading-tight">Securing Local Value Streams.</h1>
                <p class="text-xs text-cream/70 font-light leading-relaxed">
                    This dashboard enables authorized administrators to manage local peanut catalogs and coordinate community homestay schedules.
                </p>
            </div>

            <div class="relative z-10 text-[10px] text-cream/40 font-light tracking-wide">
                &copy; {{ date('Y') }} Ghachok Community Hub.
            </div>
        </div>

        <div class="col-span-1 lg:col-span-7 flex flex-col justify-center p-6 sm:p-12 md:p-14 bg-[#e5e0d8] relative">
            <div class="w-full max-w-md mx-auto space-y-8">
                
                <div class="lg:hidden text-center pb-2">
                    <a href="/" class="font-sans text-2xl font-bold text-peanut tracking-tight">
                        Ghachok<span class="text-golden">.</span>
                    </a>
                </div>

                <div class="text-center lg:text-left space-y-2">
                    <h2 class="font-sans text-2xl sm:text-3xl font-bold text-peanut tracking-tight">Admin Portal</h2>
                    <p class="text-xs sm:text-sm text-peanut/70 font-light leading-relaxed">
                        Please sign in with your administrator account to access the management dashboard.
                    </p>
                </div>

                <x-auth-session-status class="text-xs text-green-800 bg-white/60 p-4 rounded-xl border border-green-300" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div class="space-y-1.5">
                        <x-input-label for="email" :value="__('Email Address')" class="text-xs font-semibold uppercase tracking-wider text-peanut/80" />
                        <x-text-input id="email" 
                            class="block w-full border border-stone-300 bg-white text-peanut text-sm rounded-xl px-4 py-3.5 placeholder-peanut/30 focus:border-golden focus:ring-1 focus:ring-golden transition-all shadow-none" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required 
                            autofocus 
                            autocomplete="username" 
                            placeholder="name@ghachok.community" />
                        <x-input-error :messages="$errors->get('email')" class="text-xs text-red-600 pt-1" />
                    </div>

                    <div class="space-y-1.5">
                        <x-input-label for="password" :value="__('Password')" class="text-xs font-semibold uppercase tracking-wider text-peanut/80" />
                        <x-text-input id="password" 
                            class="block w-full border border-stone-300 bg-white text-peanut text-sm rounded-xl px-4 py-3.5 placeholder-peanut/30 focus:border-golden focus:ring-1 focus:ring-golden transition-all shadow-none"
                            type="password"
                            name="password"
                            required 
                            autocomplete="current-password" 
                            placeholder="••••••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="text-xs text-red-600 pt-1" />
                    </div>

                    <div class="pt-1">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer group select-none">
                            <input id="remember_me" type="checkbox" class="rounded border-stone-300 text-peanut shadow-sm focus:ring-golden focus:ring-offset-white bg-white w-4 h-4 checked:bg-peanut checked:border-peanut transition-all" name="remember">
                            <span class="ms-2.5 text-xs text-peanut/60 font-light group-hover:text-peanut transition-colors">
                                Keep me logged in on this device
                            </span>
                        </label>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center bg-peanut text-cream text-xs font-bold uppercase tracking-wider py-4 rounded-xl shadow-sm hover:bg-golden hover:text-peanut transition-all duration-300 transform active:scale-[0.99]">
                            Sign In to Dashboard
                        </button>
                    </div>
                </form>

                <div class="pt-6 border-t border-peanut/10">
                    <p class="text-[11px] text-peanut/50 font-light leading-relaxed text-center lg:text-left">
                        🔒 <strong>Security Notice:</strong> Public account registration is completely disabled. Please contact the system coordinator if you need administrative credentials.
                    </p>
                </div>

            </div>
        </div>

    </div>

</body>
</html>
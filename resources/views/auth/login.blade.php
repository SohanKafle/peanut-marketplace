<x-guest-layout title="Login">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-10">
        <h2 class="font-serif text-3xl text-forest-900 mb-2">Welcome Back</h2>
        <p class="text-forest-500 font-light">Please sign in to your accounts or cooperative dashboard.</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex justify-between items-center mt-1">
                <x-input-label for="password" :value="__('Password')" />
                @if (Route::has('password.request'))
                    <a class="text-xs text-peanut-700 hover:text-terracotta transition-colors font-medium" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded-none border-peanut-500 text-terracotta shadow-sm focus:ring-terracotta focus:ring-offset-cream bg-cream" name="remember">
                <span class="ms-2 text-sm text-forest-500">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="pt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>
        
        <div class="text-center mt-6">
            <span class="text-sm text-forest-500">Don't have an account?</span>
            <a href="{{ route('register') }}" class="text-sm text-terracotta font-medium hover:text-terracotta-700 transition-colors ml-1">Create one</a>
        </div>
    </form>
</x-guest-layout>

<x-guest-layout title="Register">
    <div class="mb-10">
        <h2 class="font-serif text-3xl text-forest-900 mb-2">Join the Community</h2>
        <p class="text-forest-500 font-light">Create an account to track your orders or join a cooperative.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div>
            <x-input-label for="phone" :value="__('Phone Number (For WhatsApp)')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" placeholder="+977" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Create Account') }}
            </x-primary-button>
        </div>
        
        <div class="text-center mt-6">
            <span class="text-sm text-forest-500">Already registered?</span>
            <a href="{{ route('login') }}" class="text-sm text-terracotta font-medium hover:text-terracotta-700 transition-colors ml-1">Sign In</a>
        </div>
    </form>
</x-guest-layout>

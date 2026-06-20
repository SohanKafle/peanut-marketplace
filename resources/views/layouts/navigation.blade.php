@if(Auth::check() && Auth::user()->is_admin)
<nav x-data="{ open: false }" class="bg-cream dark:bg-cream border-r border-cream-dark dark:border-cream-dark lg:w-72 flex-shrink-0 flex flex-col lg:min-h-screen">
    
    <div class="px-6 py-4 flex items-center justify-between lg:hidden border-b border-cream-dark dark:border-cream-dark">
        <a href="{{ route('admin.dashboard') }}" class="font-serif text-xl font-bold tracking-tight text-peanut dark:text-peanut">
            Ghachok<span class="text-golden">Admin</span>.
        </a>
        <button @click="open = ! open" class="text-peanut dark:text-peanut hover:text-peanut-light focus:outline-none">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div class="hidden lg:block px-8 py-8 border-b border-cream-dark dark:border-cream-dark">
        <span class="text-xs font-bold uppercase tracking-widest text-golden block mb-1">Machapuchhre Gateway</span>
        <a href="{{ route('admin.dashboard') }}" class="font-serif text-2xl font-bold tracking-tight text-peanut dark:text-peanut block">
            Ghachok<br><span class="text-peanut/80 dark:text-peanut/80">Marketplace</span>.
        </a>
        <p class="text-xs font-light text-peanut/60 dark:text-peanut/60 mt-2 uppercase tracking-widest">Cooperative Panel</p>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:flex flex-col flex-1 px-4 py-8 space-y-2">
        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        
        <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.*')">
            {{ __('Harvests & Products') }}
        </x-nav-link>
        
        <x-nav-link href="#" :active="request()->routeIs('admin.farmers.*')">
            {{ __('Farmer Profiles') }}
        </x-nav-link>
        
        <x-nav-link href="#" :active="request()->routeIs('admin.orders.*')">
            {{ __('Orders & Logistics') }}
        </x-nav-link>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:block px-4 py-6 border-t border-cream-dark dark:border-cream-dark">
        <div class="px-4 mb-4">
            <div class="font-medium text-peanut dark:text-peanut">{{ Auth::user()->name }}</div>
            <div class="font-light text-sm text-peanut/60 dark:text-peanut/60">{{ Auth::user()->email }}</div>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left block px-4 py-3 text-sm font-semibold text-peanut dark:text-peanut hover:bg-cream-dark dark:hover:bg-cream-dark rounded-xl transition">
                {{ __('Sign Out') }}
            </button>
        </form>
    </div>
</nav>
@endif
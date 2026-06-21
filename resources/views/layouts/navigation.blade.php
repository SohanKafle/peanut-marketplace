@if(Auth::check() && Auth::user()->is_admin)
<nav x-data="{ open: false }" @keydown.escape.window="open = false">
    
    <button @click="open = true" 
            :class="open ? 'opacity-0 pointer-events-none scale-90' : 'opacity-100 scale-100'"
            class="lg:hidden fixed top-4 left-4 sm:top-6 sm:left-6 z-40 p-2.5 bg-white/90 backdrop-blur-md border border-stone-200 rounded-xl shadow-sm text-peanut hover:text-golden focus:outline-none transition-all duration-300 ease-out">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
    </button>

    <div x-show="open" 
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="open = false"
         class="fixed inset-0 bg-peanut/40 backdrop-blur-sm z-40 lg:hidden" 
         style="display: none;">
    </div>

    <div :class="open ? 'translate-x-0 shadow-2xl' : '-translate-x-full'" 
         class="fixed top-0 left-0 h-screen w-72 bg-cream border-r border-cream-dark flex flex-col z-50 transition-transform duration-300 ease-in-out lg:translate-x-0 lg:fixed lg:shadow-none">
        
        <div class="flex items-center justify-between px-6 py-6 lg:py-8 border-b border-cream-dark flex-shrink-0">
            <div>
                <span class="text-[10px] font-bold uppercase tracking-widest text-golden block mb-1">Machapuchhre Gateway</span>
                <a href="{{ route('admin.dashboard') }}" class="font-serif text-2xl font-bold tracking-tight text-peanut block leading-tight">
                    Ghachok<br><span class="text-peanut/70 font-medium text-xl">Marketplace</span>.
                </a>
            </div>
            
            <button @click="open = false" class="lg:hidden p-2 -mr-2 text-peanut/50 hover:text-peanut transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto px-4 py-6 space-y-1.5 scrollbar-hide">
            
            <a href="{{ route('admin.dashboard') }}" 
               class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('admin.dashboard') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
                <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('admin.dashboard') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span>{{ __('Dashboard') }}</span>
            </a>
            
            <a href="{{ route('products.index') }}" 
               class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('products.*') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
                <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('products.*') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <span>{{ __('Harvests & Products') }}</span>
            </a>
            
            <a href="#" 
               class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('admin.farmers.*') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
                <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('admin.farmers.*') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
                <span>{{ __('Farmer Profiles') }}</span>
            </a>
            
            <a href="#" 
               class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('admin.orders.*') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
                <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('admin.orders.*') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124l-.247-3.96a1.125 1.125 0 0 0-1.124-1.056h-2.107m-5.848-2.625h5.454m-7.5 0h.008m-1.5 0h.008m-1.5 0h.008M6 10.5h1.5m-1.5 3h1.5m-1.5 3h1.5m6.06-11.25H18v3.75h-5.44M12 13.5H1.5M12 6.75H1.5m10.5 3.75H1.5m10.5 3.75H3.375A1.125 1.125 0 0 1 2.25 13.125v-1.5" />
                </svg>
                <span>{{ __('Orders & Logistics') }}</span>
            </a>

        </div>

        <div class="p-4 border-t border-cream-dark flex-shrink-0 bg-cream">
            <div class="px-2 mb-4 flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-peanut text-cream font-serif text-sm flex items-center justify-center font-bold shadow-sm">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="overflow-hidden">
                    <div class="font-semibold text-sm text-peanut truncate">{{ Auth::user()->name }}</div>
                    <div class="font-light text-xs text-peanut/60 truncate">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2.5 px-4 py-3 text-xs font-bold uppercase tracking-wider text-peanut/80 border border-stone-200 bg-white hover:bg-cream-dark hover:text-peanut rounded-xl transition duration-200 shadow-sm active:scale-95">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                    <span>{{ __('Sign Out') }}</span>
                </button>
            </form>
        </div>

    </div>

</nav>
@endif
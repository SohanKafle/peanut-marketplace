@if(Auth::check() && Auth::user()->is_admin)
<nav x-data="{ open: false }" @keydown.escape.window="open = false">
    
    <!-- Mobile Hamburger Toggle Button -->
    <button @click="open = true" 
            :class="open ? 'opacity-0 pointer-events-none scale-90' : 'opacity-100 scale-100'"
            class="lg:hidden fixed top-4 left-4 sm:top-6 sm:left-6 z-40 p-2.5 bg-white/90 backdrop-blur-md border border-stone-200 rounded-xl shadow-sm text-peanut hover:text-golden focus:outline-none transition-all duration-300 ease-out">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
    </button>

    <!-- Sidebar Drawer Overlay Behind Mobile View -->
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

    <!-- Main Sidebar Panel Wrapper -->
    <div :class="open ? 'translate-x-0 shadow-2xl' : '-translate-x-full'" 
         class="fixed top-0 left-0 h-screen w-72 bg-cream border-r border-cream-dark flex flex-col z-50 transition-transform duration-300 ease-in-out lg:translate-x-0 lg:fixed lg:shadow-none">
        
        <!-- Sidebar Branding Header Header -->
        <div class="flex items-center justify-between px-6 py-6 lg:py-8 border-b border-cream-dark flex-shrink-0">
            <div>
                <span class="text-[10px] font-bold uppercase tracking-widest text-golden block mb-1">Machapuchhre Gateway</span>
                <a href="{{ route('admin.dashboard') }}" class="font-sans text-2xl font-bold tracking-tight text-peanut block leading-tight">
                    Ghachok<br><span class="text-peanut/70 font-medium text-xl">Marketplace</span>.
                </a>
            </div>
            
            <button @click="open = false" class="lg:hidden p-2 -mr-2 text-peanut/50 hover:text-peanut transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Scrollable Navigation Application Links -->
        <div class="flex-1 overflow-y-auto px-4 py-6 space-y-1.5 scrollbar-hide">
            
            <a href="{{ route('admin.dashboard') }}" 
               class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('admin.dashboard') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
                <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('admin.dashboard') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v6.5h6.5v-6.5h-6.5Zm0 10v6.5h6.5v-6.5h-6.5Zm10-10v6.5h6.5v-6.5h-6.5Zm0 10v6.5h6.5v-6.5h-6.5Z" />
                </svg>
                <span>{{ __('Dashboard') }}</span>
            </a>
            
            <a href="{{ route('admin.products.index') }}" 
               class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('admin.products.*') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
                <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('admin.products.*') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <span>{{ __('Harvests & Products') }}</span>
            </a>
            
            <a href="{{ route('admin.homestays.index') }}" 
               class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('admin.homestays.*') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
                <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('admin.homestays.*') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span>{{ __('Homestays') }}</span>
            </a>

            <a href="{{ route('admin.stories.index') }}" 
               class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('admin.stories.*') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
                <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('admin.stories.*') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H5.25C4.629 3.75 4.125 4.254 4.125 4.875v15.25" />
                </svg>
                <span>{{ __('Farm Stories') }}</span>
            </a>

            <a href="{{ route('admin.hero-slides.index') }}" 
   class="flex items-center gap-3.5 px-4 py-3.5 rounded-xl border transition-all duration-200 group {{ request()->routeIs('admin.hero-slides.*') ? 'bg-white border-stone-200 shadow-sm font-semibold text-peanut text-sm' : 'border-transparent text-peanut/70 hover:bg-cream-dark/60 hover:text-peanut text-sm' }}">
    <svg class="w-5 h-5 flex-shrink-0 transition-all {{ request()->routeIs('admin.hero-slides.*') ? 'text-golden' : 'text-peanut/40 group-hover:text-peanut/80' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
    </svg>
    <span>{{ __('Hero Slideshow') }}</span>
</a>
        </div>


        <div class="p-4 border-t border-cream-dark flex-shrink-0 bg-cream/70 backdrop-blur-md">
            <!-- Admin User Profile Summary Card -->
            <div class="px-3 py-2.5 mb-3 flex items-center gap-3 bg-white/50 border border-stone-200/60 rounded-xl">
                <div class="w-9 h-9 rounded-full bg-peanut text-cream font-sans text-sm flex items-center justify-center font-bold shadow-sm flex-shrink-0">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="overflow-hidden">
                    <div class="font-semibold text-xs text-peanut truncate leading-tight">{{ Auth::user()->name }}</div>
                    <div class="font-light text-[11px] text-peanut/60 truncate mt-0.5">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <!-- Danger Redesigned Sign Out Trigger -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-3 text-xs font-bold uppercase tracking-wider text-rose-700 border border-rose-200/60 bg-rose-50/50 hover:bg-rose-600 hover:text-white hover:border-rose-600 rounded-xl transition-all duration-200 shadow-sm active:scale-95 group/logout">
                    <svg class="w-4 h-4 flex-shrink-0 text-rose-500/80 group-hover/logout:text-white transition-colors duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                    <span>{{ __('Sign Out') }}</span>
                </button>
            </form>
        </div>

    </div>
</nav>
@endif
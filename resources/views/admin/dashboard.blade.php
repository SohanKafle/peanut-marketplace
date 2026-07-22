<x-admin-layout title="Dashboard | Ghachok Management">
    <!-- Main Workspace - Shifted to warm, neutral Stone palette to match inventory stream -->
    <div
        class="lg:pl-72 min-h-screen bg-stone-50 text-stone-900 font-sans antialiased selection:bg-cream selection:text-peanut">

        <!-- Glassmorphism Header (Responsive Safe Zones Maintained) -->
        <header
            class="bg-white/80 backdrop-blur-md sticky top-0 z-30 border-b border-stone-200/80 pl-16 pr-4 sm:pl-20 sm:pr-8 lg:px-8 py-4 flex flex-wrap items-center justify-between gap-4 transition-all">
            <div>
                <!-- Updated to font-sans -->
                <h1 class="text-xl font-sans font-bold tracking-tight text-peanut">Dashboard</h1>
                <p class="text-xs text-stone-500 font-medium mt-0.5 hidden sm:block">Ghachok Marketplace & Tourism
                    Overview</p>
            </div>

            <div class="flex items-center gap-3">
                <div
                    class="flex items-center gap-1.5 bg-emerald-50 border border-emerald-100/80 px-3 py-1.5 rounded-full">
                    <span class="relative flex h-1.5 w-1.5 shrink-0">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-emerald-500"></span>
                    </span>
                    <span
                        class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-emerald-700 whitespace-nowrap">System
                        Live</span>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8 space-y-6 sm:space-y-8">

            <!-- SECTION 1: WELCOME & QUICK CONTEXT -->
            <div
                class="bg-white rounded-2xl border border-stone-200/80 shadow-sm p-5 sm:p-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="space-y-1">
                    <h2 class="text-xl font-sans font-bold text-stone-900 tracking-tight">
                        Welcome back, {{ Auth::user()->name }}
                        <span class="block text-lg font-nepali text-peanut mt-0.5">तपाईंलाई स्वागत छ!</span>
                    </h2>
                    <p class="text-sm text-stone-500 max-w-2xl leading-relaxed">
                        Manage your local agricultural yields, homestay availability, and cooperative stories from this
                        centralized control panel.
                    </p>
                </div>
                <div
                    class="text-xs sm:text-sm font-semibold uppercase tracking-wider text-stone-500 bg-stone-50 px-4 py-2.5 rounded-xl border border-stone-200/60 w-full md:w-auto text-center shrink-0">
                    {{ now()->format('l, F j, Y') }}
                </div>
            </div>

            <!-- SECTION 2: KEY METRICS GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">

                <!-- Metric Card: Products -->
                <div
                    class="bg-white rounded-2xl border border-stone-200/80 shadow-sm p-5 sm:p-6 hover:shadow-md hover:border-golden/30 transition-all duration-300 group flex flex-col justify-between">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-stone-50 text-peanut flex items-center justify-center border border-stone-100 shadow-inner group-hover:bg-cream/40 transition-all duration-300 shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-stone-400">Inventory</span>
                    </div>
                    <div>
                        <h3 class="text-2xl sm:text-3xl font-sans font-bold text-stone-900 tracking-tight">
                            {{ $productsCount }}</h3>
                        <p class="text-xs sm:text-sm text-stone-500 mt-1">Active harvest listings</p>
                    </div>
                </div>

                <!-- Metric Card: Homestays -->
                <div
                    class="bg-white rounded-2xl border border-stone-200/80 shadow-sm p-5 sm:p-6 hover:shadow-md hover:border-golden/30 transition-all duration-300 group flex flex-col justify-between">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-stone-50 text-stone-700 flex items-center justify-center border border-stone-100 shadow-inner group-hover:bg-cream/40 transition-all duration-300 shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-stone-400">Tourism</span>
                    </div>
                    <div>
                        <h3 class="text-2xl sm:text-3xl font-sans font-bold text-stone-900 tracking-tight">
                            {{ $homestaysCount }}</h3>
                        <p class="text-xs sm:text-sm text-stone-500 mt-1">Available host spaces</p>
                    </div>
                </div>

                <!-- Metric Card: Stories -->
                <div
                    class="sm:col-span-2 lg:col-span-1 bg-white rounded-2xl border border-stone-200/80 shadow-sm p-5 sm:p-6 hover:shadow-md hover:border-golden/30 transition-all duration-300 group flex flex-col justify-between">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-stone-50 text-stone-700 flex items-center justify-center border border-stone-100 shadow-inner group-hover:bg-cream/40 transition-all duration-300 shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H5.25C4.629 3.75 4.125 4.254 4.125 4.875v15.25" />
                            </svg>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-stone-400">Content</span>
                    </div>
                    <div>
                        <h3 class="text-2xl sm:text-3xl font-sans font-bold text-stone-900 tracking-tight">
                            {{ $storiesCount }}</h3>
                        <p class="text-xs sm:text-sm text-stone-500 mt-1">Published cultural logs</p>
                    </div>
                </div>
            </div>

            <!-- SECTION 3: SPLIT VIEW (Actions & Operations) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Left Panel: Quick Actions -->
                <div
                    class="lg:col-span-2 bg-white rounded-2xl border border-stone-200/80 shadow-sm overflow-hidden flex flex-col">
                    <div class="px-5 sm:px-6 py-4 sm:py-5 border-b border-stone-100 bg-stone-50/50">
                        <h3 class="text-sm sm:text-base font-sans font-bold text-stone-900">Quick Operations</h3>
                    </div>

                    <div class="flex-1 divide-y divide-stone-100">
                        <!-- Action Item 1 -->
                        <div
                            class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-stone-50/40 transition-colors">
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-stone-900 group-hover:text-peanut transition-colors">
                                    List New Harvest</h4>
                                <p class="text-xs sm:text-sm text-stone-500">Add fresh processing yields, update
                                    inventory, or adjust seasonal prices.</p>
                            </div>
                            <a href="{{ route('admin.products.index') }}"
                                class="inline-flex items-center justify-center px-5 py-2.5 bg-peanut text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:bg-stone-950 focus:ring-4 focus:ring-golden/20 transition-all shadow-sm shrink-0 w-full sm:w-auto">
                                Create Product
                            </a>
                        </div>

                        <!-- Action Item 2 -->
                        <div
                            class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-stone-50/40 transition-colors">
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-stone-900">Draft Community Story</h4>
                                <p class="text-xs sm:text-sm text-stone-500">Publish community journal metrics, cultural
                                    updates, or farmer profiles.</p>
                            </div>
                            <a href="{{ route('admin.stories.create') }}"
                                class="inline-flex items-center justify-center px-5 py-2.5 bg-white border border-stone-200 text-stone-700 text-xs font-bold uppercase tracking-wider rounded-xl hover:bg-stone-50 hover:text-stone-900 focus:ring-4 focus:ring-golden/20 transition-all shadow-sm shrink-0 w-full sm:w-auto">
                                Compose Story
                            </a>
                        </div>

                        <!-- Action Item 3 -->
                        <div
                            class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-stone-50/40 transition-colors">
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-stone-900">Manage Homestays</h4>
                                <p class="text-xs sm:text-sm text-stone-500">Review booking statuses, update host
                                    details, and configure amenities.</p>
                            </div>
                            <a href="{{ route('admin.homestays.index') }}"
                                class="inline-flex items-center justify-center px-5 py-2.5 bg-white border border-stone-200 text-stone-700 text-xs font-bold uppercase tracking-wider rounded-xl hover:bg-stone-50 hover:text-stone-900 focus:ring-4 focus:ring-golden/20 transition-all shadow-sm shrink-0 w-full sm:w-auto">
                                View Directory
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Panel: System Notice -->
                <div class="lg:col-span-1 space-y-6">

                    <div
                        class="bg-amber-50/60 rounded-2xl border border-amber-200 p-5 sm:p-6 shadow-sm relative overflow-hidden">
                        <svg class="absolute -right-4 -top-4 w-24 h-24 text-amber-600/10 pointer-events-none"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-11v6h2v-6h-2zm0-4v2h2V7h-2z" />
                        </svg>

                        <div class="relative z-10">
                            <div class="flex items-center gap-2 mb-3">
                                <svg class="w-5 h-5 text-amber-700 shrink-0" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <h3 class="text-xs font-bold text-amber-800 uppercase tracking-wide">Platform Routing
                                </h3>
                            </div>

                            <p class="text-xs sm:text-sm text-stone-700 leading-relaxed">
                                Transactions route directly through <strong>Social Messaging</strong> instead of an
                                automated cart database.
                            </p>

                            <div class="mt-4 p-3 bg-white/80 border border-amber-200/50 rounded-xl">
                                <p class="text-[11px] font-bold text-stone-800 uppercase tracking-wide">Data Entry
                                    Requirement:</p>
                                <p class="text-[11px] text-stone-600 mt-1.5 leading-relaxed">Ensure pricing models
                                    explicitly state units (e.g., "Rs. 80 / kg") to maintain clarity for inbound
                                    inquiries.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Server Meta Info -->
                    <div
                        class="bg-stone-100/60 rounded-2xl border border-stone-200 p-5 sm:p-6 flex flex-col justify-center items-center text-center">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-stone-400 mb-2" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008z" />
                        </svg>
                        <span class="text-[10px] font-bold text-stone-400 uppercase tracking-wider block">Server
                            Node</span>
                        <span class="text-xs font-semibold text-stone-700 mt-1">Ghachok Base Operations</span>
                    </div>

                </div>
            </div>
        </main>
    </div>
</x-admin-layout>

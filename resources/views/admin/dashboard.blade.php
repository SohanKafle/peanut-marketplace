<x-admin-layout title="Dashboard | Ghachok Management">
    <!-- Main Workspace - Calm, neutral background -->
    <div class="lg:pl-72 min-h-screen bg-slate-50 text-slate-900 font-sans antialiased selection:bg-emerald-100 selection:text-emerald-900">
        
        <!-- Glassmorphism Header -->
        <header class="bg-white/80 backdrop-blur-md sticky top-0 z-40 border-b border-slate-200 px-6 sm:px-8 py-4 flex items-center justify-between transition-all">
            <div class="flex items-center gap-4">
                <!-- Mobile menu spacer if needed -->
                <div class="w-8 lg:hidden"></div>
                <div>
                    <h1 class="text-xl font-semibold tracking-tight text-slate-900">Dashboard</h1>
                    <p class="text-xs text-slate-500 font-medium mt-0.5">Ghachok Marketplace & Tourism Overview</p>
                </div>
            </div>
            
            <div class="flex items-center gap-3">
                <div class="hidden sm:flex items-center gap-2 bg-emerald-50 border border-emerald-100 px-3 py-1.5 rounded-full">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-emerald-700">System Live</span>
                </div>
            </div>
        </header>

        <!-- Main Content Canvas -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
            
            <!-- SECTION 1: WELCOME & QUICK CONTEXT -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Welcome back, {{ Auth::user()->name }}</h2>
                    <p class="text-sm text-slate-500 mt-1 max-w-2xl">
                        Manage your local agricultural yields, homestay availability, and cooperative stories from this centralized control panel.
                    </p>
                </div>
                <div class="text-sm font-medium text-slate-400 bg-slate-100 px-4 py-2 rounded-lg border border-slate-200">
                    {{ now()->format('l, F j, Y') }}
                </div>
            </div>

            <!-- SECTION 2: KEY METRICS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Metric Card: Products -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 hover:shadow-md hover:border-slate-300 transition-all duration-200 group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:scale-110 group-hover:bg-emerald-100 transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Inventory</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 tracking-tight">{{ $productsCount }}</h3>
                        <p class="text-sm text-slate-500 mt-1">Active harvest listings</p>
                    </div>
                </div>

                <!-- Metric Card: Homestays -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 hover:shadow-md hover:border-slate-300 transition-all duration-200 group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:scale-110 group-hover:bg-blue-100 transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Tourism</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 tracking-tight">{{ $homestaysCount }}</h3>
                        <p class="text-sm text-slate-500 mt-1">Available host spaces</p>
                    </div>
                </div>

                <!-- Metric Card: Stories -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 hover:shadow-md hover:border-slate-300 transition-all duration-200 group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center group-hover:scale-110 group-hover:bg-indigo-100 transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H5.25C4.629 3.75 4.125 4.254 4.125 4.875v15.25" />
                            </svg>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Content</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 tracking-tight">{{ $storiesCount }}</h3>
                        <p class="text-sm text-slate-500 mt-1">Published cultural logs</p>
                    </div>
                </div>
            </div>

            <!-- SECTION 3: SPLIT VIEW (Actions & Operations) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Left Panel: Quick Actions (Takes up 2/3 width) -->
                <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden flex flex-col">
                    <div class="px-6 py-5 border-b border-slate-100 bg-slate-50/50">
                        <h3 class="text-base font-semibold text-slate-900">Quick Operations</h3>
                    </div>
                    
                    <div class="flex-1 divide-y divide-slate-100">
                        <!-- Action Item 1 -->
                        <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50/80 transition-colors">
                            <div>
                                <h4 class="text-sm font-semibold text-slate-900">List New Harvest</h4>
                                <p class="text-sm text-slate-500 mt-0.5">Add fresh processing yields, update inventory, or adjust seasonal prices.</p>
                            </div>
                            <a href="{{ route('admin.products.index') }}" class="inline-flex items-center justify-center px-4 py-2 bg-slate-900 text-white text-sm font-medium rounded-lg hover:bg-slate-800 focus:ring-4 focus:ring-slate-200 transition-all shadow-sm shrink-0">
                                Create Product
                            </a>
                        </div>

                        <!-- Action Item 2 -->
                        <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50/80 transition-colors">
                            <div>
                                <h4 class="text-sm font-semibold text-slate-900">Draft Community Story</h4>
                                <p class="text-sm text-slate-500 mt-0.5">Publish community journal metrics, cultural updates, or farmer profiles.</p>
                            </div>
                            <a href="{{ route('admin.stories.create') }}" class="inline-flex items-center justify-center px-4 py-2 bg-white border border-slate-200 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 hover:text-slate-900 focus:ring-4 focus:ring-slate-100 transition-all shadow-sm shrink-0">
                                Compose Story
                            </a>
                        </div>

                        <!-- Action Item 3 -->
                        <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50/80 transition-colors">
                            <div>
                                <h4 class="text-sm font-semibold text-slate-900">Manage Homestays</h4>
                                <p class="text-sm text-slate-500 mt-0.5">Review booking statuses, update host details, and configure amenities.</p>
                            </div>
                            <a href="{{ route('admin.homestays.index') }}" class="inline-flex items-center justify-center px-4 py-2 bg-white border border-slate-200 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 hover:text-slate-900 focus:ring-4 focus:ring-slate-100 transition-all shadow-sm shrink-0">
                                View Directory
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Panel: System Notice (Takes up 1/3 width) -->
                <div class="lg:col-span-1 space-y-6">
                    
                    <!-- Strategic Routing Notice Card -->
                    <div class="bg-amber-50 rounded-2xl border border-amber-200 p-6 shadow-sm relative overflow-hidden">
                        <!-- Decorative icon in background -->
                        <svg class="absolute -right-4 -top-4 w-24 h-24 text-amber-500/10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-11v6h2v-6h-2zm0-4v2h2V7h-2z" />
                        </svg>

                        <div class="relative z-10">
                            <div class="flex items-center gap-2 mb-3">
                                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <h3 class="text-sm font-bold text-amber-900 uppercase tracking-wide">Platform Routing</h3>
                            </div>
                            
                            <p class="text-sm text-amber-800/80 leading-relaxed">
                                Transactions on this platform route directly through <strong>Social Messaging (Messenger/Instagram)</strong> instead of an automated cart database.
                            </p>
                            
                            <div class="mt-4 p-3 bg-white/60 border border-amber-200/60 rounded-lg">
                                <p class="text-xs text-amber-900 font-medium">Data Entry Requirement:</p>
                                <p class="text-xs text-amber-700 mt-1 leading-relaxed">Ensure pricing models explicitly state units (e.g., "NPR 450 / 500g") to maintain clarity for inbound social media inquiries.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Server Meta Info -->
                    <div class="bg-slate-100 rounded-2xl border border-slate-200 p-6 flex flex-col justify-center items-center text-center">
                        <svg class="w-6 h-6 text-slate-400 mb-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008z" />
                        </svg>
                        <span class="text-xs font-semibold text-slate-500 block">Server Node</span>
                        <span class="text-sm font-medium text-slate-900 mt-0.5">Ghachok Base Operations</span>
                    </div>

                </div>
            </div>

        </main>
    </div>
</x-admin-layout>
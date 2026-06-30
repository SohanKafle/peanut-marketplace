<x-admin-layout title="Dashboard | Ghachok Admin">
    <!-- Main Content Canvas -->
    <div class="lg:pl-72 min-h-screen bg-zinc-50 text-zinc-900 font-sans antialiased">
        
        <!-- Minimalist Top Navigation Header -->
        <header class="bg-white border-b border-zinc-200 px-8 py-5 sticky top-0 z-30 flex items-center justify-between">
            <div>
                <h1 class="text-xl font-bold tracking-tight text-zinc-900">Dashboard</h1>
                <p class="text-xs text-zinc-500 mt-0.5">Manage Ghachok marketplace products, homestays, and articles.</p>
            </div>
            
            <!-- Live Status Pill -->
            <div class="flex items-center gap-2 bg-zinc-100 border border-zinc-200 px-3 py-1.5 rounded-lg">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span class="text-xs font-medium text-zinc-700">Production Live</span>
            </div>
        </header>

        <!-- Dashboard Workspace Container -->
        <main class="p-8 max-w-7xl mx-auto space-y-8">
            
            <!-- SECTION 1: UNIFORM HIGH-LEGIBILITY METRIC CARDS -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Metric 1: Products -->
                <div class="bg-white border border-zinc-200 rounded-xl p-6 shadow-xs flex items-center justify-between group hover:border-zinc-300 transition-all">
                    <div class="space-y-1">
                        <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400 block">Marketplace Yields</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-semibold tracking-tight text-zinc-900">{{ $productsCount }}</span>
                            <span class="text-xs text-zinc-500 font-normal">items listed</span>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-lg bg-zinc-50 border border-zinc-200 flex items-center justify-center text-zinc-500 group-hover:text-amber-600 group-hover:bg-amber-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </div>
                </div>

                <!-- Metric 2: Homestays -->
                <div class="bg-white border border-zinc-200 rounded-xl p-6 shadow-xs flex items-center justify-between group hover:border-zinc-300 transition-all">
                    <div class="space-y-1">
                        <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400 block">Agri-Tourism Units</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-semibold tracking-tight text-zinc-900">{{ $homestaysCount }}</span>
                            <span class="text-xs text-zinc-500 font-normal">active rooms</span>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-lg bg-zinc-50 border border-zinc-200 flex items-center justify-center text-zinc-500 group-hover:text-amber-600 group-hover:bg-amber-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                </div>

                <!-- Metric 3: Stories -->
                <div class="bg-white border border-zinc-200 rounded-xl p-6 shadow-xs flex items-center justify-between group hover:border-zinc-300 transition-all">
                    <div class="space-y-1">
                        <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400 block">Cultural Records</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-semibold tracking-tight text-zinc-900">{{ $storiesCount }}</span>
                            <span class="text-xs text-zinc-500 font-normal">logs live</span>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-lg bg-zinc-50 border border-zinc-200 flex items-center justify-center text-zinc-500 group-hover:text-amber-600 group-hover:bg-amber-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H5.25C4.629 3.75 4.125 4.254 4.125 4.875v15.25" />
                        </svg>
                    </div>
                </div>
            </section>

            <!-- SECTION 2: CONTENT PRODUCTION HUB & ACTION ROWS -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- Left Column: Quick Actions Manager Table List (Spans 2 Columns) -->
                <div class="lg:col-span-2 bg-white border border-zinc-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="px-6 py-5 border-b border-zinc-200 bg-zinc-50/50">
                        <h2 class="text-sm font-semibold text-zinc-900">Administrative Actions</h2>
                        <p class="text-xs text-zinc-500 mt-0.5">Quick entry points to update public data parameters.</p>
                    </div>

                    <div class="divide-y divide-zinc-100">
                        <!-- Action Row 1 -->
                        <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-zinc-50/50 transition">
                            <div class="space-y-0.5">
                                <h3 class="text-sm font-medium text-zinc-900">New Harvest Catalog Item</h3>
                                <p class="text-xs text-zinc-500">Add fresh crops, adjust pricing configurations, or toggles inventory availability.</p>
                            </div>
                            <a href="{{ route('admin.products.index') }}" class="inline-flex items-center justify-center px-4 py-2 border border-zinc-200 bg-white text-xs font-medium text-zinc-700 hover:bg-zinc-50 hover:text-zinc-950 rounded-lg shadow-2xs transition">
                                Launch Creator
                            </a>
                        </div>

                        <!-- Action Row 2 -->
                        <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-zinc-50/50 transition">
                            <div class="space-y-0.5">
                                <h3 class="text-sm font-medium text-zinc-900">Publish Cooperative Narrative</h3>
                                <p class="text-xs text-zinc-500">Draft crop life cycle reports, historical updates, and farming insights.</p>
                            </div>
                            <a href="{{ route('admin.stories.create') }}" class="inline-flex items-center justify-center px-4 py-2 border border-zinc-200 bg-white text-xs font-medium text-zinc-700 hover:bg-zinc-50 hover:text-zinc-950 rounded-lg shadow-2xs transition">
                                Open Editor
                            </a>
                        </div>

                        <!-- Action Row 3 -->
                        <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-zinc-50/50 transition">
                            <div class="space-y-0.5">
                                <h3 class="text-sm font-medium text-zinc-900">Manage Homestay Parameters</h3>
                                <p class="text-xs text-zinc-500">Modify village host lodging profiles, pricing brackets, and agri-tourism spaces.</p>
                            </div>
                            <a href="{{ route('admin.homestays.index') }}" class="inline-flex items-center justify-center px-4 py-2 border border-zinc-200 bg-white text-xs font-medium text-zinc-700 hover:bg-zinc-50 hover:text-zinc-950 rounded-lg shadow-2xs transition">
                                Open Directory
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: System Routing Architecture Context Card -->
                <div class="bg-white border border-zinc-200 rounded-xl shadow-xs p-6 flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 pb-3 border-b border-zinc-100">
                            <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 111.063 1.06l-.041.02a.75.75 0 01-1.063-1.06zm-4.24 4.24a.75.75 0 111.06-1.06l.04.04a.75.75 0 11-1.06 1.06l-.04-.04zm7.07 0a.75.75 0 111.06-1.06l.04.04a.75.75 0 11-1.06 1.06l-.04-.04z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                            </svg>
                            <h2 class="text-xs font-semibold uppercase tracking-wider text-zinc-500">Pipeline Rule</h2>
                        </div>
                        
                        <p class="text-xs text-zinc-600 leading-relaxed">
                            Because your marketplace relies on decentralized social media pipelines (Facebook and Instagram DMs) rather than internal card processing tables, all buyer-facing item pages must contain explicit measurements and clear value tiers to prevent communication friction.
                        </p>
                        
                        <div class="bg-zinc-50 border border-zinc-200 rounded-lg p-3 text-[11px] text-zinc-500 font-mono leading-normal">
                            Format Example:<br>
                            <span class="text-zinc-900 font-semibold">NPR 450 per 500g Pack</span>
                        </div>
                    </div>

                    <div class="text-[11px] text-zinc-400 font-medium">
                        Node Target: Ghachok Local Coop Base
                    </div>
                </div>

            </div>

        </main>
    </div>
</x-admin-layout>
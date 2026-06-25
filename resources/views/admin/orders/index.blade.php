<x-app-layout>
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-serif font-bold text-peanut tracking-tight">Orders & Logistics</h1>
            <p class="text-sm text-stone-500 mt-1">Track incoming orders, manage fulfillment workflows, and monitor delivery logistics.</p>
        </div>
        <div class="flex items-center gap-3 self-start md:self-auto">
            <button class="inline-flex items-center justify-center gap-2 bg-stone-50 hover:bg-stone-100 text-stone-700 border border-stone-200 px-4 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm group">
                <svg class="w-4 h-4 text-stone-400 group-hover:text-stone-600 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
                Export Manifest
            </button>
        </div>
    </div>

    <form id="filter-form" method="GET" action="{{ route('admin.orders.index') }}">
        <div class="flex flex-col lg:flex-row gap-3 mb-6 bg-stone-50 p-3 rounded-2xl border border-stone-200/60">
            
            <div class="relative flex-1">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-stone-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
                    </svg>
                </span>
                <input type="text" 
                       name="search" 
                       value="{{ request('search') }}" 
                       placeholder="Search by Order ID or customer name..." 
                       class="w-full pl-11 pr-4 py-2.5 bg-white border border-stone-200 rounded-xl focus:ring-2 focus:ring-golden/20 focus:border-golden outline-none text-sm shadow-sm transition">
            </div>
            
            <div class="relative">
                <select name="status" 
                        onchange="this.form.submit()"
                        class="w-full lg:w-48 pl-4 pr-10 py-2.5 bg-white border border-stone-200 rounded-xl outline-none appearance-none cursor-pointer text-sm shadow-sm focus:ring-2 focus:ring-golden/20 focus:border-golden transition">
                    <option value="">All Statuses</option>
                    <option value="Pending Fulfillment" {{ request('status') == 'Pending Fulfillment' ? 'selected' : '' }}>Pending Fulfillment</option>
                    <option value="In Transit" {{ request('status') == 'In Transit' ? 'selected' : '' }}>In Transit</option>
                    <option value="Delivered" {{ request('status') == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                    <option value="Cancelled" {{ request('status') == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
                <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </div>

            <div class="relative">
                <input type="text" 
                       id="date_picker" 
                       name="date_range"
                       value="{{ request('date_range') }}"
                       placeholder="Select Date Range..." 
                       class="w-full lg:w-56 pl-4 pr-10 py-2.5 bg-white border border-stone-200 rounded-xl outline-none cursor-pointer text-sm shadow-sm focus:ring-2 focus:ring-golden/20 focus:border-golden transition"
                       readonly>
                <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-stone-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                </span>
            </div>

            @if(request()->filled('search') || request()->filled('status') || request()->filled('date_range'))
                <a href="{{ route('admin.orders.index') }}" class="px-4 py-2.5 bg-stone-200 hover:bg-stone-300 text-stone-700 text-sm font-medium rounded-xl text-center transition flex items-center justify-center gap-1">
                    Clear Filters
                </a>
            @endif
        </div>
    </form>

    <div class="flex flex-col gap-3">
        @forelse($orders as $order)
            @php
                // Dynamic styling contextual flags depending on order statuses
                $statusColors = match($order->status) {
                    'Pending Fulfillment' => ['bg' => 'bg-amber-50 text-amber-700 border-amber-200', 'icon' => 'bg-amber-50 text-amber-600 border-amber-100'],
                    'In Transit'          => ['bg' => 'bg-blue-50 text-blue-700 border-blue-200',   'icon' => 'bg-blue-50 text-blue-600 border-blue-100'],
                    'Delivered'           => ['bg' => 'bg-emerald-50 text-emerald-700 border-emerald-200', 'icon' => 'bg-emerald-50 text-emerald-600 border-emerald-100'],
                    'Cancelled'           => ['bg' => 'bg-rose-50 text-rose-700 border-rose-200',   'icon' => 'bg-rose-50 text-rose-600 border-rose-100'],
                    default               => ['bg' => 'bg-stone-50 text-stone-700 border-stone-200', 'icon' => 'bg-stone-50 text-stone-600 border-stone-100']
                };
            @endphp

            <div class="bg-white border border-stone-200/80 rounded-2xl p-4 md:p-5 flex flex-col lg:flex-row lg:items-center justify-between gap-5 hover:shadow-md hover:border-golden/30 transition-all duration-300 group">
                
                <div class="flex items-center gap-4 min-w-[280px]">
                    <div class="w-12 h-12 {{ $statusColors['icon'] }} rounded-xl flex items-center justify-center border flex-shrink-0">
                        @if($order->status === 'Pending Fulfillment')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" /></svg>
                        @elseif($order->status === 'In Transit')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124l-.247-3.96a1.125 1.125 0 00-1.124-1.056h-2.107m-5.848-2.625h5.454m-7.5 0h.008m-1.5 0h.008m-1.5 0h.008M6 10.5h1.5m-1.5 3h1.5m-1.5 3h1.5m6.06-11.25H18v3.75h-5.44M12 13.5H1.5M12 6.75H1.5m10.5 3.75H1.5m10.5 3.75H3.375A1.125 1.125 0 012.25 13.125v-1.5" /></svg>
                        @else
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        @endif
                    </div>
                    <div>
                        <h3 class="font-bold text-stone-900 text-base tracking-tight flex items-center gap-2 group-hover:text-peanut transition-colors">
                            #ORD-{{ $order->id }}
                            @if($order->created_at->isToday())
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold tracking-wider uppercase bg-amber-100 text-amber-800 border border-amber-200 animate-pulse">New</span>
                            @endif
                        </h3>
                        <p class="text-xs text-stone-500 mt-0.5 flex items-center gap-1.5">
                            <span class="font-medium text-stone-700">{{ $order->user->name ?? 'Guest Customer' }}</span>
                            <span class="text-stone-300">•</span>
                            <span>{{ $order->city }}</span>
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 flex-1 border-y lg:border-y-0 border-stone-100 py-4 lg:py-0">
                    <div>
                        <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Total Amount</span>
                        <span class="block text-sm font-semibold text-stone-800 mt-0.5">Rs. {{ number_format($order->total_amount) }}</span>
                    </div>
                    <div>
                        <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Payment</span>
                        <span class="flex items-center gap-1 text-sm font-semibold {{ $order->payment_status === 'paid' ? 'text-emerald-600' : 'text-amber-600' }} mt-0.5">
                            @if($order->payment_status === 'paid')
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            @endif
                            {{ ucfirst($order->payment_status) }} ({{ $order->payment_method }})
                        </span>
                    </div>
                    <div>
                        <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Date</span>
                        <span class="block text-sm text-stone-700 mt-0.5" title="{{ $order->created_at->toDayDateTimeString() }}">
                            {{ $order->created_at->hasSeconds() ? $order->created_at->diffForHumans() : $order->created_at->format('M d, Y') }}
                        </span>
                    </div>
                    <div>
                        <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Status</span>
                        <span class="inline-flex items-center mt-0.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold {{ $statusColors['bg'] }} border">
                            {{ $order->status }}
                        </span>
                    </div>
                </div>

                <div class="flex items-center justify-end w-full lg:w-auto mt-2 lg:mt-0">
                    <a href="{{ route('admin.orders.show', $order->id) }}" class="px-5 py-2.5 {{ $order->status === 'Pending Fulfillment' ? 'bg-peanut text-white hover:bg-stone-950' : 'bg-stone-50 text-stone-700 hover:bg-stone-100 border border-stone-200' }} text-xs font-bold uppercase tracking-wider rounded-xl transition shadow-sm whitespace-nowrap">
                        {{ $order->status === 'Pending Fulfillment' ? 'Review Order' : 'View Details' }}
                    </a>
                </div>
            </div>
        @empty
            <div class="bg-white border border-dashed border-stone-300 rounded-2xl p-12 text-center">
                <svg class="w-12 h-12 text-stone-300 mx-auto mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.008 1.24l.885 1.77a2.25 2.25 0 002.007 1.24h1.98a2.25 2.25 0 002.007-1.24l.885-1.77a2.25 2.25 0 012.007-1.24h3.86m-18 0h18a2.25 2.25 0 012.25 2.25v4.28a2.25 2.25 0 01-2.25 2.25H2.25A2.25 2.25 0 010 20.03v-4.28A2.25 2.25 0 012.25 13.5z" />
                </svg>
                <h3 class="text-base font-semibold text-stone-800">No orders found</h3>
                <p class="text-sm text-stone-500 mt-1">Try adjusting your tracking queries, filters, or calendar timeline.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $orders->links() }}
    </div>
</x-app-layout>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>
    .flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, 
    .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange, 
    .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus, 
    .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover {
        background: #8c765c !important; /* Premium custom peanut aesthetic match */
        border-color: #8c765c !important;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#date_picker", {
            mode: "range",
            dateFormat: "Y-m-d",
            altInput: true,
            altFormat: "F j, Y",
            onClose: function(selectedDates, dateStr, instance) {
                if (selectedDates.length === 2 || selectedDates.length === 0) {
                    document.getElementById('filter-form').submit();
                }
            }
        });
    });
</script>
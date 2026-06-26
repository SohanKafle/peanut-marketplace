<x-app-layout>
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-serif font-bold text-peanut tracking-tight">Homestay Bookings</h1>
            <p class="text-sm text-stone-500 mt-1">Manage guest reservations, room availability, and check-in schedules.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.homestays.create') }}" class="bg-peanut hover:bg-stone-950 text-white px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-sm">
                + New Booking
            </a>
        </div>
    </div>

    <div class="flex flex-col gap-3">
        @forelse($bookings as $booking)
            @php
                $statusColors = match($booking->status) {
                    'Confirmed'  => ['bg' => 'bg-blue-50 text-blue-700 border-blue-200', 'icon' => 'bg-blue-50 text-blue-600'],
                    'Checked In' => ['bg' => 'bg-amber-50 text-amber-700 border-amber-200', 'icon' => 'bg-amber-50 text-amber-600'],
                    'Completed'  => ['bg' => 'bg-emerald-50 text-emerald-700 border-emerald-200', 'icon' => 'bg-emerald-50 text-emerald-600'],
                    'Cancelled'  => ['bg' => 'bg-rose-50 text-rose-700 border-rose-200', 'icon' => 'bg-rose-50 text-rose-600'],
                    default      => ['bg' => 'bg-stone-50 text-stone-700 border-stone-200', 'icon' => 'bg-stone-50 text-stone-600']
                };
            @endphp

            <div class="bg-white border border-stone-200/80 rounded-2xl p-4 md:p-5 flex flex-col lg:flex-row lg:items-center justify-between gap-5 hover:shadow-md hover:border-golden/30 transition-all duration-300 group">
                
                <div class="flex items-center gap-4 min-w-[280px]">
                    <div class="w-12 h-12 {{ $statusColors['icon'] }} rounded-xl flex items-center justify-center border border-current/10 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-stone-900 text-base tracking-tight flex items-center gap-2">
                            {{ $booking->guest_name }}
                        </h3>
                        <p class="text-xs text-stone-500 mt-0.5 flex items-center gap-1.5">
                            <span class="font-medium text-stone-700">{{ $booking->room_name }}</span>
                            <span class="text-stone-300">•</span>
                            <span>{{ $booking->guests_count }} Guests</span>
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 flex-1 border-y lg:border-y-0 border-stone-100 py-4 lg:py-0">
                    <div>
                        <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Check-in</span>
                        <span class="block text-sm font-semibold text-stone-800 mt-0.5">{{ \Carbon\Carbon::parse($booking->check_in)->format('M d, Y') }}</span>
                    </div>
                    <div>
                        <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Check-out</span>
                        <span class="block text-sm font-semibold text-stone-800 mt-0.5">{{ \Carbon\Carbon::parse($booking->check_out)->format('M d, Y') }}</span>
                    </div>
                    <div>
                        <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Total</span>
                        <span class="block text-sm text-stone-700 mt-0.5">Rs. {{ number_format($booking->total_price) }}</span>
                    </div>
                    <div>
                        <span class="block text-[10px] font-bold text-stone-400 uppercase tracking-wider">Status</span>
                        <span class="inline-flex items-center mt-0.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold {{ $statusColors['bg'] }} border">
                            {{ $booking->status }}
                        </span>
                    </div>
                </div>

                <div class="flex items-center justify-end w-full lg:w-auto mt-2 lg:mt-0">
                    <a href="{{ route('admin.homestays.show', $booking->id) }}" class="px-5 py-2.5 bg-stone-50 text-stone-700 hover:bg-stone-100 border border-stone-200 text-xs font-bold uppercase tracking-wider rounded-xl transition shadow-sm whitespace-nowrap">
                        Manage
                    </a>
                </div>
            </div>
        @empty
            <div class="bg-white border border-dashed border-stone-300 rounded-2xl p-12 text-center">
                <p class="text-sm text-stone-500">No bookings found for the selected dates.</p>
            </div>
        @endforelse
    </div>
</x-app-layout>
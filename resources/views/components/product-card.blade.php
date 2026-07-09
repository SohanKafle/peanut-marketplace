@props(['product'])

<a href="{{ route('marketplace.show', $product->slug) }}" class="group block">
    <div class="aspect-[4/5] bg-peanut-100 overflow-hidden relative mb-4">
        <!-- Placeholder for product image. Later to be replaced by Spatie Media Library -->
        <div class="absolute inset-0 bg-forest/5 group-hover:bg-transparent transition-colors duration-300"></div>
        <div
            class="absolute inset-x-0 bottom-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-center items-end">
            <span class="text-xs font-medium bg-cream text-forest px-4 py-2 uppercase tracking-widest shadow-soft">View
                Details</span>
        </div>
    </div>

    <div class="space-y-1">
        <h3 class="text-lg font-sans text-forest-900 group-hover:text-terracotta transition-colors">{{ $product->name }}
        </h3>

        <div class="flex justify-between items-start mt-2 text-sm">
            <span class="text-forest-500 font-medium">Rs. {{ number_format($product->price, 0) }} /
                {{ $product->unit }}</span>
            @if ($product->cooperative)
                <span
                    class="text-peanut-700 italic font-sans text-xs text-right">{{ $product->cooperative->name }}</span>
            @endif
        </div>
    </div>
</a>

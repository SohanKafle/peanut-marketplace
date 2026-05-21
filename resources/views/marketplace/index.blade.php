<x-public-layout title="Marketplace | Peanut Marketplace">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- Header Section -->
        <div class="mb-16 max-w-2xl">
            <h1 class="text-4xl md:text-5xl mb-4">Our Harvest</h1>
            <p class="text-lg text-forest-500 font-light leading-relaxed">
                Explore our selection of organically grown, hand-sorted peanuts. Every purchase directly supports the women farmers of Machapuchhre.
            </p>
        </div>

        <!-- Meta / Filters Placeholder -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center border-b border-peanut-200 pb-4 mb-12 gap-4">
            <div class="text-sm font-medium text-forest-500 tracking-wide uppercase">
                Showing {{ $products->count() }} of {{ $products->total() }} harvest items
            </div>
            <div>
                <span class="text-sm text-peanut-700 italic font-serif">Fresh from the locals</span>
            </div>
        </div>

        <!-- Product Grid -->
        @if($products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-16">
                @foreach($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="mt-16">
                {{ $products->links() }}
            </div>
        @else
            <div class="py-24 text-center border border-dashed border-peanut-200 bg-cream">
                <p class="text-xl text-forest-500 font-serif mb-2">We are currently waiting for the next harvest.</p>
                <p class="text-sm text-peanut-700 font-light">Please check back later or contact a cooperative directly.</p>
            </div>
        @endif

    </div>
</x-public-layout>
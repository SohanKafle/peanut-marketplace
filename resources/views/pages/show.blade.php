<x-public-layout title="Story Details | Ghachok Community">
    <div class="max-w-4xl mx-auto px-6 py-20">
        <!-- Back Link -->
        <a href="{{ route('stories.index') }}" class="text-stone-400 hover:text-peanut text-xs font-bold uppercase tracking-widest mb-6 block">&larr; Back to Stories</a>

        <!-- Title -->
        <h1 class="text-4xl md:text-5xl font-sans font-bold text-peanut mb-6">{{ $story->title }}</h1>
        
        <!-- Image -->
        @if($story->image_path)
            <img src="{{ asset('storage/' . $story->image_path) }}" alt="{{ $story->title }}" class="w-full aspect-video object-cover rounded-3xl mb-10 shadow-lg">
        @endif

        <!-- Content -->
        <div class="text-lg text-stone-700 leading-relaxed space-y-6">
            {!! nl2br(e($story->content)) !!}
        </div>
    </div>
</x-public-layout>
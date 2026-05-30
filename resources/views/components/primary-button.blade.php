<button {{ $attributes->merge(['class' => 'inline-flex items-center px-6 py-4 bg-forest border border-transparent rounded-none font-medium text-cream uppercase tracking-widest text-sm hover:bg-forest-900 focus:bg-forest-900 active:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-terracotta focus:ring-offset-2 focus:ring-offset-cream transition ease-in-out duration-150 shadow-soft']) }}>
    {{ $slot }}
</button>

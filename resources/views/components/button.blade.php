<button {{ $attributes->merge(['type' => 'button', 'class' => 'bg-primary text-white px-10 py-2 rounded-full font-semibold']) }}>
    {{ $slot }}
</button>
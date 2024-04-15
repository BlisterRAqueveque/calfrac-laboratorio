<button {{ $attributes->merge(['class' => $style, 'type' => $type]) }}>
    {{ $slot }}
</button>
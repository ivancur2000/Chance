<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary bg-indigo-600']) }}>
    {{ $slot }}
</button>

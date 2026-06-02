<a href="{{ $source }}" download class="flex p-2 gap-2 bg-bg-tertiary hover:bg-bg-tertiary-hover border-2 border-gray rounded-lg">
    <x-lucide-download />
    <span>
        {{ $slot }}
    </span>
</a>
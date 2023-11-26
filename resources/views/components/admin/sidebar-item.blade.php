@props(['name', 'href'])
<li>
    <a
        wire:navigate
        href="{{ $href }}"
        class="flex items-center p-2 rounded-lg hover:bg-gray-100 group"
    >
        <svg
            class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-gray-900"
            fill="currentColor"
            viewBox="0 0 18 20"
        >
            <x-icons :name="$name"/>
        </svg>
        <span class="flex-1 ms-3 whitespace-nowrap">{{ ucwords($name) }}</span>
        @if($slot->isNotEmpty())
            <span
                {{ $attributes->merge(['class' => 'inline-flex items-center justify-center text-sm font-medium ms-3 rounded-full']) }}
            >
                {{ $slot }}
            </span>
        @endif
    </a>
</li>

@props(['key', 'component', 'arguments'])

<tr wire:key="{{ $key }}" class="bg-[#F6F7F7] border-b hover:bg-gray-50">
    {{ $slot }}
</tr>

@props(['name', 'sortable' => false, 'type' => 'header'])

@if($type === 'checkbox')
    <th scope="col" class="px-6 py-4">
        <div class="flex items-center">
            <label>
                <input
                    type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500
                                focus:ring-2"
                >
            </label>
            <label for="checkbox-all" class="sr-only">{{ $name }}</label>
        </div>
    </th>
@else
    <th scope="col" class="px-6 py-3">
        <div class="flex items-center">
            {{ ucwords($name) }}
            @if($sortable)
                <a wire:click.prevent="sortBy('{{ $name }}')" href="#">
                    <svg class="w-4 h-4 ms-1.5" fill="currentColor" viewBox="0 0 24 24">
                        <x-icons name="sortable"/>
                    </svg>
                </a>
            @endif
        </div>
    </th>
@endif

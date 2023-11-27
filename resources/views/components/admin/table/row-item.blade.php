@props(['type' => 'item', 'value', 'component', 'arguments', 'deleteMethod'])

@if($type === 'checkbox')
    <td class="w-4 px-6 py-4">
        <div class="flex items-center">
            <input
                wire:model="checkboxes.{{ $value }}"
                id="checkbox-table-1"
                type="checkbox"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
            >
            <label for="checkbox-table-1" class="sr-only">checkbox</label>
        </div>
    </td>
@elseif($type === 'name')
    <th scope="row" class="group px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
        {{ $value }}
        <div class="hidden group-hover:block divide-x divide-red-500">
            <a class="text-blue-500 text-xs font-medium pr-1">
                <button
                    wire:click.prevent="$dispatch('openModal', { component: {{ $component }}, arguments: { {{ $arguments }} }})"
                >
                    Edit
                </button>
            </a>
            <a class="text-blue-500 text-xs font-medium pr-1 pl-2">View</a>
            <a class="text-red-500 text-xs font-medium pl-2">
                <button
                    wire:click.prevent="{{ $deleteMethod }}"
                    wire:confirm="You are about to delete these items from your site. Are you sure?"
                    type="button"
                >
                    Delete
                </button>
            </a>
        </div>
    </th>
@else
    <td class="px-6 py-4">
        {{ $value }}
    </td>
@endif

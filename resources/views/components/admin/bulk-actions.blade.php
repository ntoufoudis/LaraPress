<div class="flex items-center space-x-2">
    <label>
        <select
            wire:model.live="bulkActions"
            class="border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 p-2.5
                            focus:border-blue-500 focus:ring-2 focus:outline-none bg-white"
        >
            <option value="Bulk actions">Bulk Actions</option>
            <option value="delete">Delete</option>
        </select>
    </label>
    <button
        @if ($this->bulkActions === 'delete')
            wire:click.prevent="massDelete"
        wire:confirm="You are about to delete these items from your site. Are you sure?"
        @endif
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2 text-center"
    >Apply</button>
</div>

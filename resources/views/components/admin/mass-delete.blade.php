<div class="flex items-center space-x-2">
    <button
        wire:click="massDelete()"
        wire:confirm="You are about to delete these items from your site. Are you sure?"
        @if (empty($this->checkedItems)) disabled @endif
        type="button"
        class="disabled:opacity-25 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2 text-center"
    >
        Delete Selected ({{ count($this->checkedItems) }})
    </button>
</div>

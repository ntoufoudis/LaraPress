@props(['name'])
<div class="flex flex-row space-x-6">
    <div class="relative">
        <label>
            <input
                wire:model.live="{{ $name }}"
                class="border border-gray-400 w-48 h-8 px-2 rounded"
                type="search"
                placeholder="Search..."
            >
        </label>
        <div class="absolute top-0 right-0 flex items-center h-full mx-4">
            <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </div>
    </div>
</div>

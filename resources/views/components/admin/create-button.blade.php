@props(['component', 'name'])
<div>
    <button
        wire:click.prevent="$dispatch('openModal', { component: {{ $component }} })"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
            font-medium rounded-lg text-sm px-5 py-2 text-center"
    >
        {{ $name }}
    </button>
</div>

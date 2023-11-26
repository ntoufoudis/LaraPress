<div class="bg-white flex flex-col rounded  h-28 px-2 w-full">
    <div class="flex items-center justify-between mx-4 mt-2">
        <h2 class="text-2xl font-bold mb-6">Tags</h2>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
                <div>
                    <button
                        type="button"
                        class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                    >
                        <span class="sr-only">Open user menu</span>
                        <img
                            class="w-8 h-8 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                            alt="user photo"
                        >
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-end h-16 mb-4 rounded bg-gray-50">
        <x-admin.search-form name="search"/>
    </div>
    <div class="flex items-center justify-between p-4">
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
        <div>
            <button
                wire:click.prevent="$dispatch('openModal', { component: 'admin.tag-modal' })"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2 text-center"
            >Create Tag</button>
        </div>
    </div>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input
                                    id="checkbox-all"
                                    type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                                                focus:ring-blue-500 focus:ring-2"
                                >
                                <label for="checkbox-all" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Name
                                <a wire:click.prevent="sortBy('name')" href="#">
                                    <svg
                                        class="w-4 h-4 ms-1.5"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0
                                                0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0
                                                0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072
                                                2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123
                                                0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0
                                                0-1.846-1.087Z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Slug
                                <a wire:click.prevent="sortBy('slug')" href="#">
                                    <svg
                                        class="w-4 h-4 ms-1.5"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0
                                                0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0
                                                0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072
                                                2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123
                                                0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0
                                                0-1.846-1.087Z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Count
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tags as $tag)
                        <tr wire:key="{{ $tag->id }}" class="bg-white border-b hover:bg-gray-50">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input
                                        wire:model="checkboxes.{{ $tag->id }}"
                                        id="checkbox-table-1"
                                        type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                                                focus:ring-blue-500 focus:ring-2"
                                    >
                                    <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="group px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $tag->name }}
                                <div class="hidden group-hover:block divide-x divide-red-500">
                                    <a
                                        class="text-blue-500 text-xs font-medium pr-1"
                                    >
                                        <button
                                            wire:click.prevent="$dispatch('openModal', { component: 'admin.tag-modal', arguments: { tag: {{ $tag->id }} }})"
                                        >
                                            Edit
                                        </button>
                                    </a>
                                    <a class="text-blue-500 text-xs font-medium pr-1 pl-2">View</a>
                                    <a class="text-red-500 text-xs font-medium pl-2">
                                        <button
                                            wire:click.prevent="deleteTag({{ $tag }})"
                                            wire:confirm="You are about to delete these items from your site. Are you sure?"
                                            type="button"
                                        >
                                            Delete
                                        </button>
                                    </a>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $tag->slug }}
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th colspan="4" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                No Tags found.
                            </th>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="px-2 py-4">{{ $tags->links() }}</div>
        </div>
    </div>
</div>

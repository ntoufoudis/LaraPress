<div class="bg-white flex flex-col rounded  h-28 px-2 w-full">
    <h2 class="text-2xl font-bold mb-6">Categories</h2>
    <div class="flex items-center justify-end h-16 mb-4 rounded bg-gray-50">
        <x-admin.search-form name="search"/>
    </div>
    <div class="flex items-center justify-between p-4">
        <div class="flex items-center space-x-2">
            <label>
                <select class="border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 p-2.5
                            focus:border-blue-500 focus:ring-2 focus:outline-none bg-white"
                >
                    <option value="Bulk actions">Bulk Actions</option>
                    <option value="delete">Delete</option>
                </select>
            </label>
            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2 text-center"
            >Apply</button>
        </div>
        <div>
            <button
                wire:click.prevent="$dispatch('openModal', { component: 'admin.category-modal' })"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2 text-center"
            >Create Category</button>
        </div>
        <div class="flex items-center justify-center space-x-4">
            <div>
                <p>{{ $count }} @if ($count > 1) Items @else Item @endif</p>
            </div>
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
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Slug
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Count
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr wire:key="{{ $category->id }}" class="bg-white border-b hover:bg-gray-50">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input
                                        id="checkbox-table-1"
                                        type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                                                focus:ring-blue-500 focus:ring-2"
                                    >
                                    <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="group px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $category->name }}
                                <div class="hidden group-hover:block divide-x divide-red-500">
                                    <a
                                        class="text-blue-500 text-xs font-medium pr-1"
                                    >
                                        <button
                                            wire:click.prevent="$dispatch('openModal', { component: 'admin.category-modal', arguments: { category: {{ $category->id }} }})"
                                        >
                                            Edit
                                        </button>
                                    </a>
                                    <a class="text-blue-500 text-xs font-medium pr-1 pl-2">View</a>
                                    <a class="text-red-500 text-xs font-medium pl-2">
                                        <button wire:click.prevent="deleteCategory({{ $category }})" type="button">Delete</button>
                                    </a>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                @if(!empty($category->description))
                                    {{ $category->description }}
                                @else
                                    ---
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $category->slug }}
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th colspan="5" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                No Categories found.
                            </th>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="px-2 py-4">{{ $categories->links() }}</div>
        </div>
    </div>
</div>

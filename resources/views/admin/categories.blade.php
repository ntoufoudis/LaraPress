<x-admin-layout>
    <h2 class="text-2xl font-bold mb-6">Categories</h2>
    <div class="flex items-center justify-end h-16 mb-4 rounded bg-gray-50">
        <form action="#" method="POST">
            @csrf

            <div class="flex space-x-2">

                <div>
                    <label for="search">
                        <input
                            class="border border-gray-400 w-48 h-8 px-2 rounded"
                            type="search"
                            name="search"
                            id="search"
                            required
                        >
                    </label>

                    @error('search')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    class="bg-blue-500 text-white text-xs font-semibold hover:bg-blue-600 px-2 py-2"
                    type="submit"
                >
                    Search Categories
                </button>
            </div>
        </form>
    </div>

    <div class="flex gap-4 mb-4 w-full">
        <div class="w-1/3 flex items-center justify-start rounded bg-gray-50">
            <form action="#" method="POST" class="w-full mx-4 my-4">
                @csrf
                <h2 class="text-gray-900 font-bold text-sm mb-3">Add New Category</h2>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" required>
                    <p class="text-gray-500 text-xs mt-1">The name is how it appears on your site.</p>

                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="slug" id="slug" required>
                    <p class="text-gray-500 text-xs mt-1">
                        The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains
                        only letters, numbers, and hyphens.
                    </p>

                    @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="parent_category">
                        Parent Category
                    </label>

                    <select class="border border-gray-400 p-2 w-full" type="text" name="parent_category" id="parent_category" required>
                        <option value="none">None</option>
                        <option value="uncategorized">Uncategorized</option>
                    </select>
                    @error('parent_category')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">
                        Description
                    </label>

                    <textarea rows="3" class="border border-gray-400 p-2 w-full" name="description" id="description" required></textarea>

                    @error('description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <button class="bg-blue-500 text-white hover:bg-blue-600 rounded p-2" type="submit">Add New Category</button>
            </form>
        </div>
        <div class="w-2/3 flex flex-col rounded bg-gray-50 h-28 px-2">
            <div class="flex items-center justify-between">
                <div>
                    <select>
                        <option value="Bulk actions">Bulk Actions</option>
                        <option value="delete">Delete</option>
                    </select>
                    <button>Apply</button>
                </div>
                <div>
                    1 Item
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
                            <tr class="bg-white border-b hover:bg-gray-50">
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
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Uncategorized
                                </th>
                                <td class="px-6 py-4">
                                    ---
                                </td>
                                <td class="px-6 py-4">
                                    uncategorized
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input
                                            id="checkbox-table-2"
                                            type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                                                focus:ring-blue-500 focus:ring-2"
                                        >
                                        <label for="checkbox-table-2" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>


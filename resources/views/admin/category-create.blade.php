<x-admin-layout>
    <h2 class="text-2xl text-center font-bold mb-6">Create a New Category</h2>
        <div class="flex items-center justify-center bg-gray-200 py-4">
            <form action="{{ route('category.store') }}" method="POST" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-medium uppercase text-gray-700" for="name">
                        Name
                    </label>
                    <input
                        class="block p-2.5 w-full text-sm text-gray-700 rounded-lg border border-gray-300
                            focus:ring-blue-500 focus:ring-2 focus:border-blue-500 focus:outline-none"
                        type="text"
                        name="name"
                        id="name"
                        required
                        autofocus
                    >
                    <p class="mt-2 text-xs text-gray-500">The name is how it appears on your site.</p>

                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-medium uppercase text-gray-700" for="slug">
                        Slug
                    </label>

                    <input
                        class="block p-2.5 w-full text-sm text-gray-700 rounded-lg border border-gray-300
                            focus:ring-blue-500 focus:ring-2 focus:border-blue-500 focus:outline-none"
                        type="text"
                        name="slug"
                        id="slug"
                    >
                    <p class="mt-2 text-gray-500 text-xs">
                        The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains
                        only letters, numbers, and hyphens.
                    </p>

                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label
                        class="block mb-2 text-xs font-medium uppercase text-gray-700"
                        for="parent_category"
                    >
                        Parent Category
                    </label>
                    <select
                        class="border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 p-2.5 w-full
                            focus:border-blue-500 focus:ring-2 focus:outline-none bg-white"
                        name="parent_category"
                        id="parent_category">
                        <option value="none">None</option>
                        <option value="uncategorized">Uncategorized</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('parent_category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-medium uppercase text-gray-700" for="description">
                        Description
                    </label>
                    <textarea
                        rows="3"
                        class="block p-2.5 w-full text-sm text-gray-700 rounded-lg border border-gray-300
                            focus:ring-blue-500 focus:ring-2 focus:border-blue-500 focus:outline-none"
                        name="description"
                        id="description"
                    ></textarea>

                    @error('description')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>
                <div>
                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                >
                    Add new Category
                </button>

                </div>
            </form>
        </div>
</x-admin-layout>


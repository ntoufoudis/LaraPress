<div
    id="crud-modal"
    tabindex="-1"
    aria-hidden="true"
    class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center
            w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
>
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    @if(! is_null($tag->id))
                        Edit Tag
                    @else
                        Create a New Tag
                    @endif
                </h3>
                <button
                    wire:click.prevent="$dispatch('closeModal')"
                    type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8
                            h-8 ms-auto inline-flex justify-center items-center"
                >
                    <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                        />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form wire:submit="save" class="p-4 md:p-5">
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-medium uppercase text-gray-700" for="name">
                        Name
                    </label>
                    <input
                        wire:model="name"
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
                        wire:model="slug"
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
                <div>
                    <button
                        type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    >
                        @if(! is_null($tag->name))
                            Update Tag
                        @else
                            Add New Tag
                        @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

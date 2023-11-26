<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r
        border-gray-200 sm:translate-x-0"
>
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <x-admin.sidebar-item name="dashboard"/>
            <x-admin.sidebar-item name="kanban" class="px-2 text-gray-800 bg-gray-100">
                Pro
            </x-admin.sidebar-item>

            <x-admin.sidebar-item name="inbox" class="w-3 h-3 p-3 text-blue-800 bg-blue-100">
                3
            </x-admin.sidebar-item>
            <x-admin.sidebar-item name="users"/>
            <x-admin.sidebar-item name="products"/>
            <li x-data="{ open: false }">
                <button
                    @click="open = ! open"
                    type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group
                        hover:bg-gray-100"
                >
                    <svg
                        fill="currentColor"
                        viewBox="0 0 18 21"
                        class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                    >
                        <x-icons name="categories"/>
                    </svg>
                    <span class="flex-1 ms-3 text-left whitespace-nowrap">Categories</span>
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 10 6">
                        <x-icons name="chevron_down"/>
                    </svg>
                </button>
                <ul x-cloak x-show="open" x-transition id="dropdown-example" class="py-2 space-y-2">
                    <li>
                        <a
                            href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11
                                group hover:bg-gray-100"
                        >
                            All Categories
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11
                                group hover:bg-gray-100"
                        >
                            Add New Category
                        </a>
                    </li>
                </ul>
            </li>
            <li>
        </ul>
    </div>
</aside>

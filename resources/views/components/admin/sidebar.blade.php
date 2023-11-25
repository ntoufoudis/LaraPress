<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r
        border-gray-200 sm:translate-x-0"
>
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
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
        </ul>
    </div>
</aside>

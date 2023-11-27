<div class="w-full float-left px-4 mx-4 pt-4 pb-16">
    <x-admin.title name="Categories"/>
    <div class="flex items-center justify-end h-16 rounded">
        <x-admin.search-form name="search"/>
    </div>
    <div class="flex items-center justify-between p-4">
        <x-admin.bulk-actions/>
        <x-admin.create-button name="Create Category" component="'admin.category-modal'"/>
    </div>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-admin.table>
                <x-slot name="head">
                    <x-admin.table.head-item name="checkbox" type="checkbox"/>
                    <x-admin.table.head-item name="name" sortable="true"/>
                    <x-admin.table.head-item name="description" sortable="true"/>
                    <x-admin.table.head-item name="slug" sortable="true"/>
                    <x-admin.table.head-item name="count"/>
                </x-slot>
                <x-slot name="data">
                    <x-admin.table.row
                        :for="$categories"
                        as="$category"
                        empty-span="5"
                        empty-message="No Categories found."
                        :data="['id', 'name', 'description', 'slug', '0']"
                        component="'admin.category-modal'"
                        arguments="category: "
                        delete-method="deleteCategory"
                    >
                    </x-admin.table.row>
                </x-slot>
            </x-admin.table>
            <div class="px-2 py-4">{{ $categories->links() }}</div>
        </div>
    </div>
</div>

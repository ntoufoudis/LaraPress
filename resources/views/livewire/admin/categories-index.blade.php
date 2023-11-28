<div class="w-full float-left px-4 mx-4 pt-4 pb-16">
    <x-admin.title name="Categories"/>
    <div class="flex items-center justify-end h-16 rounded">
        <x-admin.search-form name="search"/>
    </div>
    <div class="flex items-center justify-between p-4">
        <x-admin.mass-delete/>
        <x-admin.create-button name="Create Category" component="'admin.category-modal'"/>
    </div>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-admin.table>
                <x-slot name="head">
                    <x-admin.table.head-item name="checkbox" type="checkbox"/>
                    <x-admin.table.head-item name="name" sortable="true" sort-field="name"/>
                    <x-admin.table.head-item name="description" sortable="true" sort-field="description"/>
                    <x-admin.table.head-item name="slug" sortable="true" sort-field="slug"/>
                    <x-admin.table.head-item name="count"/>
                </x-slot>
                @forelse($categories as $category)
                    <x-admin.table.row :key="$category->id">
                        <x-admin.table.row-item :value="$category->id" type="checkbox"/>
                        <x-admin.table.row-item
                            :value="$category->name"
                            type="links"
                            component="'admin.category-modal'"
                            :arguments="'category: ' . $category->id"
                            :delete-method="'deleteSingle('.$category->id.')'"

                        />
                        <x-admin.table.row-item :value="$category->description"/>
                        <x-admin.table.row-item :value="$category->slug"/>
                        <x-admin.table.row-item value="0"/>
                    </x-admin.table.row>
                @empty
                    <x-admin.table.row-item type="empty" empty-span="6" empty-message="No Categories Found."/>
                @endforelse
            </x-admin.table>
            <div class="px-2 py-4">{{ $categories->links() }}</div>
        </div>
    </div>
</div>

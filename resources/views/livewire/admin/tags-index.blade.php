<div class="w-full float-left px-4 mx-4 pt-4 pb-16">
    <x-admin.title name="Tags"/>
    <div class="flex items-center justify-end h-16 rounded">
        <x-admin.search-form name="search"/>
    </div>
    <div class="flex items-center justify-between p-4">
        <x-admin.bulk-actions/>
        <x-admin.create-button name="Create Tag" component="'admin.tag-modal'"/>
    </div>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-admin.table>
                <x-slot name="head">
                    <x-admin.table.head-item name="checkbox" type="checkbox"/>
                    <x-admin.table.head-item name="name" sortable="true" sort-field="name"/>
                    <x-admin.table.head-item name="slug" sortable="true" sort-field="slug"/>
                    <x-admin.table.head-item name="count"/>
                </x-slot>
                @forelse($tags as $tag)
                    <x-admin.table.row :key="$tag->id">
                        <x-admin.table.row-item :value="$tag->id" type="checkbox"/>
                        <x-admin.table.row-item
                            :value="$tag->name"
                            type="links"
                            component="'admin.tag-modal'"
                            :arguments="'tag: ' . $tag->id"
                            :delete-method="'deleteTag('.$tag->id.')'"
                        />
                        <x-admin.table.row-item :value="$tag->slug"/>
                        <x-admin.table.row-item value="0"/>
                    </x-admin.table.row>
                @empty
                    <x-admin.table.row-item type="empty" empty-span="6" empty-message="No Tags Found."/>
                @endforelse
            </x-admin.table>
            <div class="px-2 py-4">{{ $tags->links() }}</div>
        </div>
    </div>
</div>

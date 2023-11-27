<div class="w-full float-left px-4 mx-4 pt-4 pb-16">
    <x-admin.title name="Posts"/>
    <div class="flex items-center justify-end h-16 rounded">
        <x-admin.search-form name="search"/>
    </div>
    <div class="flex items-center justify-between p-4">
        <x-admin.bulk-actions/>
        <x-admin.create-button name="Create Post" component="'admin.post-modal'"/>
    </div>
    <div>
        <div class=" shadow-md sm:rounded-lg">
            <x-admin.table>
                <x-slot name="head">
                    <x-admin.table.head-item name="checkbox" type="checkbox"/>
                    <x-admin.table.head-item name="title" sortable="true" sort-field="title"/>
                    <x-admin.table.head-item name="author"/>
                    <x-admin.table.head-item name="categories"/>
                    <x-admin.table.head-item name="tags"/>
                    <x-admin.table.head-item name="comments"/>
                    <x-admin.table.head-item name="date"/>
                </x-slot>
                @forelse($posts as $post)
                    <x-admin.table.row :key="$post->id">
                        <x-admin.table.row-item :value="$post->id" type="checkbox"/>
                        <x-admin.table.row-item
                            :value="$post->title"
                            type="links"
                            component="admin.post-modal"
                            :arguments="'post: ' . $post->id"
                            :delete-method="'deletePost('.$post->id.')'"
                        />
                        <x-admin.table.row-item :value="$post->author->name"/>
                        <x-admin.table.row-item :value="$post->category->name"/>
                        <x-admin.table.row-item :value="$post->tag->name"/>
                        <x-admin.table.row-item value="0"/>
                        <x-admin.table.row-item value="0"/>
                    </x-admin.table.row>
                @empty
                    <x-admin.table.row-item type="empty" empty-span="6" empty-message="No Posts Found."/>
                @endforelse
            </x-admin.table>
            <div class="px-2 py-4">{{ $posts->links() }}</div>
        </div>
    </div>
</div>

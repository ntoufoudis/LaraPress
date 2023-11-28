<div class="w-full float-left px-4 mx-4 pt-4 pb-16">
    <x-admin.title name="Users"/>
    <div class="flex items-center justify-end h-16 rounded">
        <x-admin.search-form name="search"/>
    </div>
    <div class="flex items-center justify-between p-4">
        <x-admin.mass-delete/>
        <x-admin.create-button name="Create User" component="'admin.user-modal'"/>
    </div>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-admin.table>
                <x-slot name="head">
                    <x-admin.table.head-item name="checkbox" type="checkbox"/>
                    <x-admin.table.head-item name="username" sortable="true" sort-field="username"/>
                    <x-admin.table.head-item name="email" sortable="true" sort-field="email"/>
                    <x-admin.table.head-item name="name"/>
                    <x-admin.table.head-item name="role"/>
                    <x-admin.table.head-item name="posts"/>
                </x-slot>
                @forelse($users as $user)
                    <x-admin.table.row :key="$user->id">
                        <x-admin.table.row-item :value="$user->id" type="checkbox"/>
                        <x-admin.table.row-item
                            :value="$user->username"
                            type="links"
                            component="'admin.user-modal'"
                            :arguments="'user: ' . $user->id"
                            :delete-method="'deleteSingle('.$user->id.')'"
                        />
                        <x-admin.table.row-item :value="$user->email"/>
                        <x-admin.table.row-item :value="$user->display_name"/>
                        <x-admin.table.row-item :value="$user->role"/>
                        <x-admin.table.row-item value="0"/>
                    </x-admin.table.row>
                @empty
                    <x-admin.table.row-item type="empty" empty-span="6" empty-message="No Users Found."/>
                @endforelse
            </x-admin.table>
            <div class="px-2 py-4">{{ $users->links() }}</div>
        </div>
    </div>
</div>

<div class="w-full float-left px-4 mx-4 pt-4 pb-16">
    <x-admin.title name="Users"/>
    <div class="flex items-center justify-end h-16 rounded">
        <x-admin.search-form name="search"/>
    </div>
    <div class="flex items-center justify-between p-4">
        <x-admin.bulk-actions/>
        <x-admin.create-button name="Create User" component="'admin.user-modal'"/>
    </div>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-admin.table>
                <x-slot name="head">
                    <x-admin.table.head-item name="checkbox" type="checkbox"/>
                    <x-admin.table.head-item name="username" sortable="true"/>
                    <x-admin.table.head-item name="name" sortable="true"/>
                    <x-admin.table.head-item name="email" sortable="true"/>
                    <x-admin.table.head-item name="role" sortable="true"/>
                    <x-admin.table.head-item name="posts"/>
                </x-slot>
                <x-slot name="data">
                    <x-admin.table.row
                        :for="$users"
                        as="$user"
                        empty-span="6"
                        empty-message="No Users found."
                        :data="['id', 'name', 'displayName', 'email', 'role', '0']"
                        component="'admin.user-modal'"
                        arguments="user: "
                        delete-method="deleteUser"
                    >
                    </x-admin.table.row>
                </x-slot>
            </x-admin.table>
            <div class="px-2 py-4">{{ $users->links() }}</div>
        </div>
    </div>
</div>

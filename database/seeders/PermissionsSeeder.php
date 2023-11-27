<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Permissions

        // Administrator

        Permission::create(['name' => 'activate_plugins']);
        Permission::create(['name' => 'create_user']);
        Permission::create(['name' => 'delete_plugins']);
        Permission::create(['name' => 'delete_themes']);
        Permission::create(['name' => 'delete_users']);
        Permission::create(['name' => 'edit_files']);
        Permission::create(['name' => 'edit_plugins']);
        Permission::create(['name' => 'edit_theme_options']);
        Permission::create(['name' => 'edit_themes']);
        Permission::create(['name' => 'edit_users']);
        Permission::create(['name' => 'export']);
        Permission::create(['name' => 'import']);
        Permission::create(['name' => 'install_plugins']);
        Permission::create(['name' => 'install_themes']);
        Permission::create(['name' => 'list_users']);
        Permission::create(['name' => 'manage_options']);
        Permission::create(['name' => 'promote_users']);
        Permission::create(['name' => 'remove_users']);
        Permission::create(['name' => 'switch_themes']);
        Permission::create(['name' => 'update_core']);
        Permission::create(['name' => 'update_plugins']);
        Permission::create(['name' => 'update_themes']);
        Permission::create(['name' => 'edit_dashboard']);
        Permission::create(['name' => 'customize']);
        Permission::create(['name' => 'delete_site']);

        // Editor Permissions
        Permission::create(['name' => 'moderate_comments']);
        Permission::create(['name' => 'manage_categories']);
        Permission::create(['name' => 'manage_links']);
        Permission::create(['name' => 'edit_others_posts']);
        Permission::create(['name' => 'edit_pages']);
        Permission::create(['name' => 'edit_others_pages']);
        Permission::create(['name' => 'edit_published_pages']);
        Permission::create(['name' => 'publish_pages']);
        Permission::create(['name' => 'delete_pages']);
        Permission::create(['name' => 'delete_others_pages']);
        Permission::create(['name' => 'delete_published_pages']);
        Permission::create(['name' => 'delete_others_posts']);
        Permission::create(['name' => 'delete_private_posts']);
        Permission::create(['name' => 'edit_private_posts']);
        Permission::create(['name' => 'read_private_posts']);
        Permission::create(['name' => 'delete_private_pages']);
        Permission::create(['name' => 'edit_private_pages']);
        Permission::create(['name' => 'read_private_pages']);
        Permission::create(['name' => 'unfiltered_html']);

        // Author Permissions
        Permission::create(['name' => 'edit_published_posts']);
        Permission::create(['name' => 'upload_files']);
        Permission::create(['name' => 'publish_posts']);
        Permission::create(['name' => 'delete_published_posts']);

        // Contributor Permissions
        Permission::create(['name' => 'edit_posts']);
        Permission::create(['name' => 'delete_posts']);

        // Subscriber Permissions
        Permission::create(['name' => 'read']);

        // Create Roles and Assign Existing Permissions

        // Administrator
        $administrator = Role::create(['name' => 'administrator']);
        $administrator->givePermissionTo([
            'activate_plugins',
            'create_user',
            'delete_plugins',
            'delete_themes',
            'delete_users',
            'edit_files',
            'edit_plugins',
            'edit_theme_options',
            'edit_themes',
            'edit_users',
            'export',
            'import',
            'install_plugins',
            'install_themes',
            'list_users',
            'manage_options',
            'promote_users',
            'remove_users',
            'switch_themes',
            'update_core',
            'update_plugins',
            'update_themes',
            'edit_dashboard',
            'customize',
            'delete_site',
            'moderate_comments',
            'manage_categories',
            'manage_links',
            'edit_others_posts',
            'edit_pages',
            'edit_others_pages',
            'edit_published_pages',
            'publish_pages',
            'delete_pages',
            'delete_others_pages',
            'delete_published_pages',
            'delete_others_posts',
            'delete_private_posts',
            'edit_private_posts',
            'read_private_posts',
            'delete_private_pages',
            'edit_private_pages',
            'read_private_pages',
            'unfiltered_html',
            'edit_published_posts',
            'upload_files',
            'publish_posts',
            'delete_published_posts',
            'edit_posts',
            'delete_posts',
            'read',
        ]);

        // Editor
        $editor = Role::create(['name' => 'editor']);
        $editor->givePermissionTo([
            'moderate_comments',
            'manage_categories',
            'manage_links',
            'edit_others_posts',
            'edit_pages',
            'edit_others_pages',
            'edit_published_pages',
            'publish_pages',
            'delete_pages',
            'delete_others_pages',
            'delete_published_pages',
            'delete_others_posts',
            'delete_private_posts',
            'edit_private_posts',
            'read_private_posts',
            'delete_private_pages',
            'edit_private_pages',
            'read_private_pages',
            'unfiltered_html',
            'edit_published_posts',
            'upload_files',
            'publish_posts',
            'delete_published_posts',
            'edit_posts',
            'delete_posts',
            'read',
        ]);

        // Author
        $author = Role::create(['name' => 'author']);
        $author->givePermissionTo([
            'edit_published_posts',
            'upload_files',
            'publish_posts',
            'delete_published_posts',
            'edit_posts',
            'delete_posts',
            'read',
        ]);

        // Contributor
        $contributor = Role::create(['name' => 'contributor']);
        $contributor->givePermissionTo([
            'edit_posts',
            'delete_posts',
            'read',
        ]);

        // Subscriber
        $subscriber = Role::create(['name' => 'subscriber']);
        $subscriber->givePermissionTo(['read']);

        // Super-Admin
        $superAdmin = Role::create(['name' => 'Super-Admin']);

    }
}

<?php

use App\Models\User;
use Database\Seeders\PermissionsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

uses(RefreshDatabase::class, TestCase::class);

beforeEach(function () {
    $this->artisan('db:seed', ['--class' => PermissionsSeeder::class]);
    $this->app->make(PermissionRegistrar::class)->forgetCachedPermissions();
});

it('can assign a role and confirm the role is assigned', function () {
    $user = User::factory()->create();
    $user->assignRole('author');

    $freshUser = User::find($user->id);

    expect($freshUser->hasRole('author'))->toBeTrue()
        ->and($freshUser->hasPermissionTo('edit_posts'))->toBeTrue()
        ->and($freshUser->can('read'))->toBeTrue();

});

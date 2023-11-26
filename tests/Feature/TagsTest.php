<?php

use App\Livewire\Admin\TagsIndex;
use App\Models\Tag;
use Livewire\Livewire;

use function Pest\Laravel\get;

it('cannot be accessed by guest', function () {
    get(route('tag.index'))
        ->assertRedirect(route('login'));
});

it('can be access as logged in user', function () {
    loginAsUser();
    get(route('tag.index'))
        ->assertOk();
});

it('can search when more than 3 characters', function () {
    loginAsUser();

    Tag::factory()->create([
        'name' => 'Tag 1',
    ]);

    Tag::factory()->create([
        'name' => 'Tag 2',
    ]);

    Tag::factory()->create([
        'name' => 'Tag 3',
    ]);

    Livewire::test(TagsIndex::class)
        ->set('search', 'Tag 2')
        ->assertViewHas('tags', function ($tags) {
            return $tags->count() === 1
                && $tags->first()->name === 'Tag 2';
        });
});

it('cannot search when less than 3 characters', function () {
    loginAsUser();

    Tag::factory()->create([
        'name' => 'Tag 3',
    ]);

    Tag::factory()->create([
        'name' => 'Tag 1',
    ]);

    Tag::factory()->create([
        'name' => 'Tag 2',
    ]);

    Livewire::test(TagsIndex::class)
        ->set('search', 'ta')
        ->assertViewHas('tags', function ($tags) {
            return $tags->count() === 3
                && $tags->first()->name === 'Tag 1';
        });
});

//it('contains create category modal', function () {
//    loginAsUser();
//
//    Livewire::test(\App\Livewire\Admin\CategoryModal::class)
//        ->dispatch('openModal', 'admin.category-modal')
//        ->assertOk();
//});
//
//it('can show category create form when logged in', function () {
//    loginAsUser();
//
//
//});
//
//it('can validate input', function () {
//    loginAsUser();
//
//    Livewire::->test(CategoriesIndex::class)
//        ->set('name', '')
//        ->call('')
//});

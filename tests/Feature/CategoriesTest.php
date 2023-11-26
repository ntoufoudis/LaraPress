<?php

use App\Livewire\Admin\CategoriesIndex;
use App\Models\Category;
use Livewire\Livewire;

use function Pest\Laravel\get;

it('cannot be accessed by guest', function () {
    get(route('category.index'))
        ->assertRedirect(route('login'));
});

it('can be access as logged in user', function () {
    loginAsUser();
    get(route('category.index'))
        ->assertOk();
});

it('can search when more than 3 characters', function () {
    loginAsUser();

    Category::factory()->create([
        'name' => 'Category 1',
    ]);

    Category::factory()->create([
        'name' => 'Category 2',
    ]);

    Category::factory()->create([
        'name' => 'Category 3',
    ]);

    Livewire::test(CategoriesIndex::class)
        ->set('search', 'Category 2')
        ->assertViewHas('categories', function ($categories) {
            return $categories->count() === 1
                && $categories->first()->name === 'Category 2';
        });
});

it('cannot search when less than 3 characters', function () {
    loginAsUser();

    Category::factory()->create([
        'name' => 'Category 3',
    ]);

    Category::factory()->create([
        'name' => 'Category 1',
    ]);

    Category::factory()->create([
        'name' => 'Category 2',
    ]);

    Livewire::test(CategoriesIndex::class)
        ->set('search', 'ca')
        ->assertViewHas('categories', function ($categories) {
            return $categories->count() === 3
                && $categories->first()->name === 'Category 1';
        });
});

it('can show category create form when logged in', function () {

});

it('can validate input', function () {
    loginAsUser();

    Livewire::->test(CategoriesIndex::class)
        ->set('name', '')
        ->call('')
});

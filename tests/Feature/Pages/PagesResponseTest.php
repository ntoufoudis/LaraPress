<?php

use function Pest\Laravel\get;

it('gives back successful response for home page', function () {
    get(route('home'))
        ->assertOk();
});

it('gives back successful response for categories page', function () {
    get(route('category.index'))
        ->assertOk();
});

it('gives back successful response for create category page', function () {
    get(route('category.create'))
        ->assertOk();
});

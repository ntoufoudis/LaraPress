<?php

use function Pest\Laravel\get;

it('cannot be accessed by guest', function () {
    get(route('category.index'))
        ->assertRedirect(route('login'));

    loginAsUser();
    get(route('category.index'))
        ->assertOk();
});

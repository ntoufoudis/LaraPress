<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function __invoke()
    {
        return view('admin.categories');
    }
}

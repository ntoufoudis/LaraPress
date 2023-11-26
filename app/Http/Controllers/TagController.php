<?php

namespace App\Http\Controllers;

class TagController extends Controller
{
    public function __invoke()
    {
        return view('admin.tags');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function __invoke()
    {
        return view('admin.tags');
    }
}

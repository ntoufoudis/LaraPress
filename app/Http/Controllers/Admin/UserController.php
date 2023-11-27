<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __invoke()
    {
        return view('admin.users');
    }
}

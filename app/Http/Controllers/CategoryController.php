<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'slug' => ['nullable'],
            'parent_category' => ['nullable'],
            'description' => ['nullable'],
        ]);
//        dd($attributes);

        Category::create($attributes);

        return back()->with('success', 'Category Created!');

    }

    public function create()
    {
        return view('admin.category-create', [
            'categories' => Category::all(),
        ]);
    }

    //    public function show(Category $category)
    //    {
    //        return $category;
    //    }
    //
    //    public function update(Request $request, Category $category)
    //    {
    //        $request->validate([
    //
    //        ]);
    //
    //        $category->update($request->validated());
    //
    //        return $category;
    //    }
    //
    //    public function destroy(Category $category)
    //    {
    //        $category->delete();
    //
    //        return response()->json();
    //    }
}

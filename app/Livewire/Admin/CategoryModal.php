<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class CategoryModal extends ModalComponent
{
    public Category $category;

    public $name;
    public $slug;
    public $parent_category;
    public $description;

    public function mount(Category $category = null)
    {
        if ($category) {
            $this->name = $category->name;
            $this->slug = $category->slug;
            $this->parent_category = $category->parent_category;
            $this->description = $category->description;
            $this->category = $category;
        }
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('categories', 'name')->ignore($this->category),
            ],
            'slug' => [
                'nullable',
                Rule::unique('categories', 'slug')->ignore($this->category),
            ],
            'parent_category' => ['nullable'],
            'description' => ['nullable'],
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        Category::updateOrCreate(
            ['id' => $this->category->id],
            [
                'name' => $validated['name'],
                'slug' => $validated['slug'],
                'parent_category' => $validated['parent_category'],
                'description' => $validated['description'],
            ],
        );

        return redirect(route('category.index'))->with('success', 'Category Created!');

    }

    public function render()
    {
        return view('livewire.admin.category-modal', [
            'categories' => Category::all(),
        ]);
    }
}

<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesIndex extends Component
{
    use WithPagination;

    #[Url(as: 's')]
    public $search = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function deleteCategory(Category $category): void
    {
        $category->delete();
    }

    public function store()
    {

    }

    public function render()
    {
        return view('livewire.admin.categories-index', [
            'categories' => Category::when(strlen($this->search) >= 3, function ($query) {
                return $query->where('name', 'like', '%'.$this->search.'%');
            })
                ->orderBy('name', 'ASC')
                ->paginate(10),
            'count' => Category::count(),
        ]);
    }
}

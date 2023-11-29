<?php

namespace App\Traits;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

trait LaraPress
{
    use WithPagination;

    #[Url(as: 's')]
    public string $search = '';

    public string $sortField = 'id';

    public bool $sortAsc = true;

    public string $sortDirection = 'asc';

    public array $checkedItems = [];

    public bool $showDeleted = false;

    public array $items;

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function showTrashed(): void
    {
        if ($this->showDeleted === true) {
            $this->showDeleted = false;
        } else {
            $this->showDeleted = true;
        }
    }

    public function sortBy($field): void
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        if ($this->sortAsc === true) {
            $this->sortDirection = 'asc';
        } else {
            $this->sortDirection = 'desc';
        }

        $this->sortField = $field;
    }

    public function deleteItem($type, $item): void
    {
        if ($type === 'post') {
            Post::where('id', $item)->delete();
        }

        if ($type === 'category') {
            Category::where('id', $item)->delete();
        }

        if ($type === 'tag') {
            Tag::where('id', $item)->delete();
        }

        if ($type === 'user') {
            User::where('id', $item)->delete();
        }
    }

    public function deleteSelected($type): void
    {
        if ($type === 'post') {
            Post::whereKey($this->checkedItems)->delete();
        }

        if ($type === 'category') {
            Category::whereKey($this->checkedItems)->delete();
        }

        if ($type === 'tag') {
            Tag::whereKey($this->checkedItems)->delete();
        }

        if ($type === 'user') {
            User::whereKey($this->checkedItems)->delete();
        }

        $this->checkedItems = [];
    }

    public function renderItems($type, $paginate = 10)
    {
        if ($type === 'posts') {
            return Post::when(strlen($this->search) >= 3, function ($query) {
                return $query->where('title', 'like', '%'.$this->search.'%');
            })
                ->when($this->showDeleted === true, function ($query) {
                    return $query->onlyTrashed();
                })
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate($paginate);
        }

        if ($type === 'categories') {
            return Category::when(strlen($this->search) >= 3, function ($query) {
                return $query->where('name', 'like', '%'.$this->search.'%');
            })
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($paginate);
        }

        if ($type === 'tags') {
            return Tag::when(strlen($this->search) >= 3, function ($query) {
                return $query->where('name', 'like', '%'.$this->search.'%');
            })
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($paginate);
        }

        if ($type === 'users') {
            return User::when(strlen($this->search) >= 3, function ($query) {
                return $query->where('name', 'like', '%'.$this->search.'%');
            })
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate($paginate);
        }
    }
}

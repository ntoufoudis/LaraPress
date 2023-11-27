<?php

/**
 * @noinspection PhpVoidFunctionResultUsedInspection
 * @noinspection PhpMissingReturnTypeInspection
 */

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    #[Url(as: 's')]
    public $search = '';

    public array $checkboxes;

    public $bulkActions;

    public $sortField = 'title';

    public $sortAsc = true;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function mount()
    {
        $setOfIds = Post::pluck('id')->toArray();
        $this->checkboxes = array_fill_keys($setOfIds, false);
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function deletePost(Post $post): void
    {
        if (auth()->user()->can('delete', $post)) {
            $post->delete();
        }

    }

    public function massDelete()
    {
        $checkboxes = $this->checkboxes;
        $checkboxes = array_filter($checkboxes, function ($value) {
            return $value !== false;
        });
        $checkboxes = array_keys($checkboxes);

        foreach ($checkboxes as $checkbox) {
            $post = Post::find($checkbox)->get();
            if (auth()->user()->can('delete', $post)) {
                Post::find($checkbox)->delete();
            }

        }

        $this->checkboxes = [];
        $this->bulkActions = '';
    }

    public function render()
    {
        return view('livewire.admin.posts-index', [
            'posts' => Post::when(strlen($this->search) >= 3, function ($query) {
                return $query->where('title', 'like', '%'.$this->search.'%');
            })
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate(10),
        ]);
    }
}

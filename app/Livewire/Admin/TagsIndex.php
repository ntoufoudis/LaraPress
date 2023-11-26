<?php
/**
 * @noinspection PhpVoidFunctionResultUsedInspection
 * @noinspection PhpMissingReturnTypeInspection
 */

namespace App\Livewire\Admin;

use App\Models\Tag;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class TagsIndex extends Component
{
    use WithPagination;

    #[Url(as: 's')]
    public $search = '';

    public array $checkboxes;

    public $bulkActions;

    public $sortField = 'name';

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
        $setOfIds = Tag::pluck('id')->toArray();
        $this->checkboxes = array_fill_keys($setOfIds, false);
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function deleteTag(Tag $tag): void
    {
        $tag->delete();
    }

    public function massDelete()
    {
        $checkboxes = $this->checkboxes;
        $checkboxes = array_filter($checkboxes, function ($value) {
            return $value !== false;
        });
        $checkboxes = array_keys($checkboxes);

        foreach ($checkboxes as $checkbox) {
            Tag::find($checkbox)->delete();
        }

        return $this->redirect(route('tag.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.tags-index', [
            'tags' => Tag::when(strlen($this->search) >= 3, function ($query) {
                return $query->where('name', 'like', '%'.$this->search.'%');
            })
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate(10),
        ]);
    }
}

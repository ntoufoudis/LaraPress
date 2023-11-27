<?php
/**
 * @noinspection PhpMissingReturnTypeInspection
 * @noinspection PhpVoidFunctionResultUsedInspection
 */

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    #[Url(as: 's')]
    public $search = '';

    public array $checkboxes;

    public $bulkActions;

    public $sortField = 'username';

    public $sortAsc = true;

    public function sortBy($field): void
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
        $setOfIds = User::pluck('id')->toArray();
        $this->checkboxes = array_fill_keys($setOfIds, false);
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function deleteUser(User $user): void
    {
        $user->delete();
    }

    public function massDelete()
    {
        $checkboxes = $this->checkboxes;
        $checkboxes = array_filter($checkboxes, function ($value) {
            return $value !== false;
        });
        $checkboxes = array_keys($checkboxes);

        foreach ($checkboxes as $checkbox) {
            User::find($checkbox)->delete();
        }

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.admin.users-index', [
            'users' => User::when(strlen($this->search) >= 3, function ($query) {
                return $query->where('name', 'like', '%'.$this->search.'%');
            })
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate(10),
        ]);
    }
}

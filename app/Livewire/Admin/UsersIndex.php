<?php
/**
 * @noinspection PhpMissingReturnTypeInspection
 * @noinspection PhpVoidFunctionResultUsedInspection
 */

namespace App\Livewire\Admin;

use App\Traits\LaraPress;
use Livewire\Component;

class UsersIndex extends Component
{
    use LaraPress;

    public function deleteSingle($id)
    {
        $this->deleteItem('user', $id);
    }

    public function massDelete()
    {
        $this->deleteSelected('user');
    }

    public function render()
    {
        return view('livewire.admin.users-index', [
            'users' => $this->renderItems('users', 15),
        ]);
    }
}

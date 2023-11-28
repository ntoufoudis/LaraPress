<?php
/**
 * @noinspection PhpMissingReturnTypeInspection
 * @noinspection PhpVoidFunctionResultUsedInspection
 */

namespace App\Livewire\Admin;

use App\Traits\LaraPress;
use Livewire\Component;

class CategoriesIndex extends Component
{
    use LaraPress;

    public function deleteSingle($id)
    {
        $this->deleteItem('category', $id);
    }

    public function massDelete()
    {
        $this->deleteSelected('category');
    }

    public function render()
    {
        return view('livewire.admin.categories-index', [
            'categories' => $this->renderItems('categories', 2),
        ]);
    }
}

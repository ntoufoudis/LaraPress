<?php
/**
 * @noinspection PhpVoidFunctionResultUsedInspection
 * @noinspection PhpMissingReturnTypeInspection
 */

namespace App\Livewire\Admin;

use App\Traits\LaraPress;
use Livewire\Component;

class TagsIndex extends Component
{
    use LaraPress;

    public function deleteSingle($id)
    {
        $this->deleteItem('tag', $id);
    }

    public function massDelete()
    {
        $this->deleteSelected('tag');
    }

    public function render()
    {
        return view('livewire.admin.tags-index', [
            'tags' => $this->renderItems('tags', 2),
        ]);
    }
}

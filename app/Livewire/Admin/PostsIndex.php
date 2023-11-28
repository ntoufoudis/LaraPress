<?php

/**
 * @noinspection PhpVoidFunctionResultUsedInspection
 * @noinspection PhpMissingReturnTypeInspection
 */

namespace App\Livewire\Admin;

use App\Traits\LaraPress;
use Livewire\Component;

class PostsIndex extends Component
{
    use LaraPress;

    public function deleteSingle($id)
    {
        $this->deleteItem('post', $id);
    }

    public function massDelete()
    {
        $this->deleteSelected('post');
    }

    public function render()
    {
        return view('livewire.admin.posts-index', [
            'posts' => $this->renderItems('posts'),
        ]);
    }
}

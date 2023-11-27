<?php
/**
 * @noinspection PhpMissingReturnTypeInspection
 */

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class UserModal extends ModalComponent
{
    public User $user;

    public $name;
    public $slug;

    public function mount(User $user = null): void
    {
        if ($user) {
            $this->name = $user->name;
            $this->slug = $user->slug;
            $this->user = $user;
        }
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                Rule::unique('users', 'name')->ignore($this->user),
            ],
            'slug' => [
                'nullable',
                Rule::unique('users', 'slug')->ignore($this->user),
            ],
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        User::updateOrCreate(
            ['id' => $this->user->id],
            [
                'name' => $validated['name'],
                'slug' => $validated['slug'],
            ],
        );

        return redirect(route('user.index.index'))->with('success', 'User Created!');

    }

    public function render()
    {
        return view('livewire.admin.user-modal');
    }
}

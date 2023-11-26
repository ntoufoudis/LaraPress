<?php

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Livewire\Admin;

use App\Models\Tag;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class TagModal extends ModalComponent
{
    public Tag $tag;

    public $name;
    public $slug;

    public function mount(Tag $tag = null): void
    {
        if ($tag) {
            $this->name = $tag->name;
            $this->slug = $tag->slug;
            $this->tag = $tag;
        }
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                Rule::unique('tags', 'name')->ignore($this->tag),
            ],
            'slug' => [
                'nullable',
                Rule::unique('tags', 'slug')->ignore($this->tag),
            ],
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        Tag::updateOrCreate(
            ['id' => $this->tag->id],
            [
                'name' => $validated['name'],
                'slug' => $validated['slug'],
            ],
        );

        return redirect(route('tag.index'))->with('success', 'Tag Created!');

    }

    public function render()
    {
        return view('livewire.admin.tag-modal');
    }
}

<?php

namespace App\Livewire;

use App\Models\Note as NoteModel;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Note extends Component
{
    public NoteModel $note;

    #[Validate('required|string|max:255')]
    public $content;

    #[Validate('required|string')]
    public $title;

    public $class;

    public function mount(NoteModel $note)
    {
        $this->note = $note;
        $this->title = $note->title;
        $this->content = $note->content;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        $this->updateNote();
    }

    public function updateNote()
    {
        $this->note->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Note updated successfully.');
    }

    public function render()
    {
        return view('livewire.note');
    }
}

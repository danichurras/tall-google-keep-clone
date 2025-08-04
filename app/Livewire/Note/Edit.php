<?php

namespace App\Livewire\Note;

use Livewire\Component;
use App\Models\Note;
use Livewire\Attributes\{Title, Computed};

class Edit extends Component
{
    public Note $note;
    public $content;
    public $title;

    public function mount(Note $note)
    {
        $this->note = $note;
        $this->title = $note->title;
        $this->content = $note->content;
    }

    #[Title('Edit Note')]
    public function render()
    {
        return view('livewire.note.edit');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

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
}

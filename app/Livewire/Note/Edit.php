<?php

namespace App\Livewire\Note;

use Livewire\Component;
use App\Models\Note;
use Livewire\Attributes\{Title, Computed};

class Edit extends Component
{
    public ?Note $note;
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
        \Log::debug($this->note);
        \Log::debug($this->title);
        \Log::debug($this->content);
        return view('livewire.note.edit');
    }
}

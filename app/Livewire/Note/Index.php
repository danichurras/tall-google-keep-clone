<?php

namespace App\Livewire\Note;

use App\Models\Note;
use Livewire\Component;

class Index extends Component
{
    public $notes;

    public function mount()
    {
        $this->notes = Note::all();
    }

    public function render()
    {
        return view('livewire.note.index');
    }
}

<?php

namespace App\Livewire\Note;

use Livewire\Component;

class Create extends Component
{
    public $title;
    public $content;

    public function render()
    {
        return view('livewire.note.create');
    }
}

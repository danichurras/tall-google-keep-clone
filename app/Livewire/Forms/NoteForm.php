<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Note;

class NoteForm extends Form
{
    public ?Note $note;
}

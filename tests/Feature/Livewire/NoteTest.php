<?php

use App\Livewire\Note;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Note::class)
        ->assertStatus(200);
});

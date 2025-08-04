<?php

use App\Livewire\Note\Edit;
use App\Models\Note;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function(){
    $this->user = User::factory(['email'=>'danielchaves@uep.br', 'name'=>'Daniel'])->create();
});

test('if the component renders', function() {
    $note = Note::factory()->create();
    Livewire::test(Edit::class, ['note' => $note])
        ->assertStatus(200);
});

test('if component exists in page', function() {
    $note = Note::factory()->create();
    $this->actingAs($this->user);
    $this->get('/notes/'.$note->id.'/edit')
        ->assertSeeLivewire(Edit::class);
});

test('if the component returns 404 when dont exist', function() {
    $this->actingAs($this->user);
    $this->get('/notes/1/edit')
        ->assertStatus(404);
});

test('if the component loads the note', function() {
    $note = Note::factory()->create();

    Livewire::actingAs($this->user)
        ->test(Edit::class, ['note'=>$note])
        ->assertViewHas('note');
});

test('if the component can update the note', function() {
    $note = Note::factory()->create();

    Livewire::actingAs($this->user)
        ->test(Edit::class, ['note'=>$note])
        ->set('title', 'Updated Title')
        ->set('content', 'Updated Content')
        ->call('updateNote')
        ->assertHasNoErrors()
        ->assertSet('note.title', 'Updated Title')
        ->assertSet('note.content', 'Updated Content');

    $this->assertDatabaseHas('notes', [
        'id' => $note->id,
        'title' => 'Updated Title',
        'content' => 'Updated Content',
    ]);
});

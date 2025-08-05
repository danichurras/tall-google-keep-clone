<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Counter;
use App\Livewire\Note\Edit as NoteEdit;
use App\Livewire\Note\Index as NoteIndex;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/notes', NoteIndex::class)->name('notes.index');
    Route::get('/notes/{note}/edit', NoteEdit::class);

    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/teste', function() {
    return 'hi';
});

Route::get('/counter', Counter::class);


require __DIR__.'/auth.php';

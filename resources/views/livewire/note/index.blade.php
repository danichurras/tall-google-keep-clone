<div>
    {{-- The whole world belongs to you. --}}
    <div class="flex justify-center mb-4">
        <livewire:note.create />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 justify-center">

        @foreach($notes as $note)
            <livewire:note class="teste" wire:key="$note->id" :note="$note" />
        @endforeach
    </div>
</div>

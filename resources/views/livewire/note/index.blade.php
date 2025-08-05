<div>
    {{-- The whole world belongs to you. --}}
    <div class="flex justify-center mb-4">
        <livewire:note.create />
    </div>

    <div class="w-full flex flex-wrap justify-center sortable-list">
        @foreach($notes as $note)
            <livewire:note class="teste" wire:key="$note->id" :note="$note" />
        @endforeach
    </div>
</div>

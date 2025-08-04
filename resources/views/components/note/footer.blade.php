@props(['note'])
<div class="flex gap-2 text-lg">
    <div class="flex">
        <x-note.footer-button function='bold' title='Bold'>
            <b>B</b>
        </x-note.footer-button>
        <x-note.footer-button function='italic' title='Italic'>
            <i class="font-serif">I</i>
        </x-note.footer-button>
        <x-note.footer-button function='underline' title='Underline'>
            <u>U</u>
        </x-note.footer-button>
    </div>
    <flux:separator vertical />
    <x-note.footer-button function='insertUnordoredList' title='Bullet List'>
        <flux:icon.list-bullet />
    </x-note.footer-button>
    <x-note.footer-button function='insertOrdoredList' title='Numbered List'>
        <flux:icon.numbered-list />
    </x-note.footer-button>
    <x-note.footer-button function='createLink' title='Insert Link'>
        <flux:icon.link />
    </x-note.footer-button>

    <div wire:poll.15s.visible class="ml-auto text-sm italic pr-2">
        Last edited: {{ $note->updated_at->diffForHumans() }}
    </div>
</div>
</div>


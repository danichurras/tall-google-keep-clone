<div class="block float-start m-2">
    <div class="bg-yellow-600 rounded min-h-50 max-h-200 max-w-100 p-3 flex flex-col focus-within:outline-2 {{ $class }}">
        <x-note.title
            wire.model="title" />
        <x-note.body
            model="content"
            autofocus>
            {!! $content !!}
        </x-note.body>
        <x-note.footer :note='$note' />
    </div>
</div>

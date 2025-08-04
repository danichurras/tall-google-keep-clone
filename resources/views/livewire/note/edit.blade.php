<div>
    <div class="bg-yellow-600 rounded min-h-50 max-h-200 p-3 flex flex-col focus-within:outline-2">
        <x-note.title wire.model="title" />
        <x-note.body model="content" autofocus>
            {{ $content }}
        </x-note.body>
        <x-note.footer :note='$note' />
</div>


@script
<script>
    $js('format', (command) => {
        document.execCommand(command,false,null)
    })
</script>
@endscript

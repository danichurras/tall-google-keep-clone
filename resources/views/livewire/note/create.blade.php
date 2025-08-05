<div
    class="border border-gray-300 rounded p-4 mx-auto"
    x-data="{ creating: false }"
    @click.away="creating = false; $refs.content.blur()"
    class="flex flex-col">
    {{-- The best athlete wants his opponent at his best. --}}
    <input
        wire:model="title"
        x-ref="title"
        x-cloak
        x-show="creating"
        type="text"
        class="outline-none font-bold text-lg"
        placeholder="Title">
    <input
        x-show="!creating"
        x-on:focus="
            creating = true
            $nextTick(() => {
                $refs.content.focus()
            });
        "
        type="text"
        class=""
        placeholder="Start annotating...">
    <div
        wire:model="content"
        x-cloak
        x-ref="content"
        contenteditable="true"
        x-show="creating"
        class="outline-none">
    </div>
    <x-note.footer x-cloak x-show="creating" />
</div>

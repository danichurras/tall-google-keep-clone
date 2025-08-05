@props([
    'model' => ''
])
<div {{ $attributes->merge([
    'class' => 'grow focus:outline-none resize-none overflow-y-auto min-h-50 max-h-100 testando',
    ]) }}
    x-ref="contenteditable"
    contenteditable="true"
    wire:ignore
    x-data="{
        isCursorAtStart() {
            const selection = window.getSelection();
            const range = selection.getRangeAt(0);
            const startNode = range.startContainer;
            return startNode === $el && range.startOffset === 0 ||
                 ($el.firstChild && startNode === $el.firstChild && range.startOffset === 0);
        },
        timeout: null
    }"
    @keydown.up="
        if(isCursorAtStart()) {
            $event.preventDefault();
            $nextTick(() => { $el.previousElementSibling.focus() })
        }
    "
    x-init="
        $el.addEventListener('input', () => {
            clearTimeout(timeout)
            timeout = setTimeout(() => {
                $wire.set('{{ $model }}', $el.innerHTML)
            }, 500)
        })
    ">
    {{ $slot }}
</div>

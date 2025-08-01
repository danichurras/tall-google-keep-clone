@props([
    'model' => ''
])
<div {{ $attributes->merge([
    'class' => 'grow focus:outline-none resize-none overflow-y-auto min-h-50 max-h-100',
    ]) }}
    contenteditable=true
    wire:ignore
    x-data="{ timeout: null }"
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

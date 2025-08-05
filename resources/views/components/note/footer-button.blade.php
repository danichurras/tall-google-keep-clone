@props([
    'function' => 'bold',
    'title' => 'Bold',
])
<button {{ $attributes->merge([
    'class' => 'hover:outline-1 px-2 cursor-pointer rounded min-w-[40px]'
    ])}} title="{{ $title }}" @click="document.execCommand('{{ $function }}')">{{ $slot }}</button>

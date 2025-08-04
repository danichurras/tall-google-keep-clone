<input {{ $attributes->merge([
    "class"=>"text-xl focus:outline-none font-bold"
    ]) }} type="text" wire:model.live.debounce.250ms="title"
/>

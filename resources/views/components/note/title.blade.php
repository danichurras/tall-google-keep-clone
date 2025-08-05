<input {{ $attributes->merge([
    "class"=>"text-xl focus:outline-none font-bold"
    ]) }}
    type="text" wire:model.live.debounce.250ms="title"
    x-data="{
        focusNext($event) {
            $event.preventDefault();
            $nextTick(() => { $el.nextElementSibling.focus() })
        }
    }"
    @keydown.enter="focusNext($event)"
    @keydown.down="focusNext($event)"
></input>

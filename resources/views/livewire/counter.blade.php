<div>
    <h1>{{ $message }}</h1>
    <input type="text" wire:model.debounce.100ms="message" />
</div>
<div>
    {{-- Be like water. --}}
    {{-- @foreach ($data as $item)
        <h1>{{ $item }}</h1>
    @endforeach --}}

    {{--  life cycle hooks --}}
    <h1>Profile Component</h1>
    {{ $name }}
    <h3>{{ $counter }}</h3>
    <input type="text" wire:model="name" />
    <button wire:click="updateName('John Doe')">Update Name</button>
</div>

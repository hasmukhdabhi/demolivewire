<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1>Submit Your Product</h1>
    @if (session()->has('status'))
        <h1>
            {{ session('status') }}
        </h1>
    @endif
    <form action="" wire:submit.prevent="saveData">
        <label for="name">Name:</label>
        <input type="text" name="name" wire:model="name"><br><br>
        <label for="price">Price:</label>
        <input type="text" name="price" wire:model="price"><br><br>
        <label for="category">Category:</label>
        <input type="text" name="category" wire:model="category"><br><br>
        <button type="submit" value="Submit">Save Product</button>
    </form>
</div>
@livewireScripts

<div>
    <h1>Submit Your Product</h1>

    @if (session()->has('status'))
        <h1 style="color: green;">{{ session('status') }}</h1>
    @endif

    <form wire:submit.prevent="saveData">
        <label for="name">Name:</label>
        <input type="text" name="name" wire:model="name">
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror
        <br><br>

        <label for="price">Price:</label>
        <input type="text" name="price" wire:model="price">
        @error('price') <span style="color: red;">{{ $message }}</span> @enderror
        <br><br>

        <label for="category">Category:</label>
        <input type="text" name="category" wire:model="category">
        @error('category') <span style="color: red;">{{ $message }}</span> @enderror
        <br><br>

        <button type="submit">Save Product</button>
    </form>
</div>

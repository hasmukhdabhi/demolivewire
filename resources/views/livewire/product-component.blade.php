<div>
    <h1> Product Management</h1>
    @if (session()->has('status'))
        <h2 style="color:green;">{{ session('status') }}</h2>
    @endif
    @if ($updateMode)
        <h3>Edit Product</h3>
    @else
        <h3>Add Product</h3>
    @endif

    <form action="" wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}">
        <label for="name">Name:</label>
        <input type="text" wire:model="name">
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror
        <br><br>
        <label for="price">Price:</label>
        <input type="text" wire:model="price">
        @error('price')
            <span style="color:red;" {{ $message }}></span>
        @enderror

        <br><br>
        <label for="category">Category:</label>
        <input type="text" wire:model="category">
        @error('category')
            <span style="color:red;" {{ $message }}></span>
        @enderror

        <br><br>
        <button type="submit">{{ $updateMode ? 'Update' : 'Save' }}</button>
        <button type="button" wire:click="resetInputFields">Cancel</button>
    </form>


    <h3>All Products</h3>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category }}</td>
                    <td>
                        <button wire:click="edit({{ $product->id }})">Edit</button>
                        <button wire:click="delete({{ $product->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>

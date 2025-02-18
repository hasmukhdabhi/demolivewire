<!-- resources/views/livewire/crud-form.blade.php -->

<div class="crud-container">
    <h1>Product Management System</h1>
    @if (session()->has('message'))
        <div class="alert alert-success" style="color:green;">
            {{ session('message') }}
        </div>
    @endif
    <!-- Product Form -->
    <div class="form-container">
        <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" wire:model="name" id="name" class="form-control"
                    placeholder="Enter product name" />
                @error('name')
                    <span class="error" style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" wire:model="price" id="price" class="form-control"
                    placeholder="Enter price" />
                @error('price')
                    <span class="error" style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" wire:model="category" id="category" class="form-control"
                    placeholder="Enter category" />
                @error('category')
                    <span class="error" style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ $updateMode ? 'Update' : 'Save' }}</button>
            {{-- <button type="button" class="btn btn-secondary" wire:click="resetInputFields">Cancel</button> --}}
        </form>
    </div>

    <!-- Product List -->
    <div class="product-list">
        <h3>Product List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category }}</td>
                        <td>
                            <button wire:click="edit({{ $product->id }})" class="btn btn-warning">Edit</button>
                            <button wire:click="delete({{ $product->id }})" class="btn btn-danger"
                                onclick="confirmDelete({{ $product->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $products->links() }}
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('delete', id);
            }
        });
    }
</script>

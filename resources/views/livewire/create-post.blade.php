<div>
    @foreach ($posts as $post)
        <livewire:post-item :post="$post" :key="$post->id">
    @endforeach

    <form wire:submit.prevent="save">
        <label for="title">Title:</label>
        <input type="text" id="title" wire:model="title">
        <button type="submit">Save</button>
    </form>

    @if (session()->has('status'))
        <p>{{ session('status') }}</p>
    @endif
</div>

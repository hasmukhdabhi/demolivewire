<div>
    <h2>User Registration:</h2>
    <form action="" method="post" wire:submit.prevent="submit">
        <label for="name">Name:</label>
        <input type="text" id="name" wire:model="name">
        @error('name')<span class="error">{{ $message }}</span>@enderror
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" wire:model="email">
        @error('email')<span class="error">{{ $message }}</span>@enderror
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" wire:model="password">
        @error('password')<span class="error">{{ $message }}</span>@enderror
        <br>
        <button type="submit">Registration</button>
    </form>
</div>


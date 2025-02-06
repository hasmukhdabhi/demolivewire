<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <strong>User List Component</strong>
    {{-- <h2>{{ $names }}</h2> --}}
    @foreach ($names as $user)
        <h3>@livewire('user-list', ['user' => $user])</h3>
    @endforeach
</div>

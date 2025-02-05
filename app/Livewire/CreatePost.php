<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $title;
    public $posts; // Declare posts variable

    public function mount()
    {
        $this->posts = Post::all(); // Fetch posts from the database
    }

    public function save()
    {
        Post::create([
            'title' => $this->title
        ]);

        // Refresh the posts list after creating a new post
        $this->posts = Post::all();

        // Clear the title input field
        $this->title = '';

        session()->flash('status', 'Post created!');
    }

    public function render()
    {
        return view('livewire.create-post', [
            'posts' => $this->posts, // Pass posts to the Blade file
        ]);
    }
}

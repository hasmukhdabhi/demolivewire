<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '123-456-7890',
        ];
        return view('livewire.profile', ['data' => $data]);
        // return view('livewire.profile');
    }
}

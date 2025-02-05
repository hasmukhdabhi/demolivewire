<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    // life cycle hooks
    public $name = "Inital value";
    public $counter;
    function mount()
    {
        $this->name = "John Doe";
    }
    function hydrate()
    {
        $this->counter++;
    }

    function updateName($name)
    {

        $this->name = $name;
    }
    public function render()
    {
        // Data sharing between components

        // $data = [
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'phone' => '123-456-7890',
        // ];

        // return view('livewire.profile', ['data' => $data]);
        return view('livewire.profile');
    }
}

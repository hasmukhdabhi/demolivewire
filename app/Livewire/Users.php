<?php

namespace App\Livewire;

use Livewire\Component;

class Users extends Component
{
    public $names = ['Ajay', 'Mukesh', 'Chagan', 'Pankaj', 'Himanshu'];
    public function render()
    {
        return view('livewire.users');
    }
}

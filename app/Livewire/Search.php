<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $msg = "Message from search component";
    public function updateMsg($name)
    {
        $this->msg = $name;

    }
    public function render()
    {
        return view('livewire.search');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSave extends Component
{
    public $name, $price, $category;

    public function saveData()
    {
        // Validate input fields
        $this->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
            'category' => 'required|string|max:255',
        ]);

        // Save data to database
        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
        ]);

        // Flash message and reset form
        session()->flash('status', 'Product created successfully!');
        $this->reset(['name', 'price', 'category']);
    }

    public function render()
    {
        return view('livewire.product-save');
    }
}

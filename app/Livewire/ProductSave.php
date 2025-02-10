<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSave extends Component
{
    public $name;
    public $price;
    public $category;

    public function render()
    {
        return view('livewire.product-save');
    }
    function saveData()
    {
        $product = new Product;
        $product->name = $this->name;
        $product->price = $this->price;
        $product->category = $this->category;
        $product->save(); 
        session()->flash('status', 'Product created!');
        return redirect()->to('/product');
    }
}

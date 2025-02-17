<?php
// app/Http/Livewire/CrudForm.php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product; // Assuming you have a Product model
use Livewire\WithPagination;

class CrudForm extends Component
{
    use WithPagination;

    public $name, $price, $category, $product_id;
    public $updateMode = false;

    // Render method
    public function render()
    {
        $products = Product::paginate(10); // Show 10 products per page
        return view('livewire.crud-form', compact('products'));
    }

    // Store product
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
        ]);

        session()->flash('message', 'Product added successfully.');
        $this->resetInputFields();
    }

    // Edit product
    public function edit($id)
    {
        $this->updateMode = true;
        $product = Product::find($id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->category = $product->category;
    }

    // Update product
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        if ($this->product_id) {
            $product = Product::find($this->product_id);
            $product->update([
                'name' => $this->name,
                'price' => $this->price,
                'category' => $this->category,
            ]);

            $this->updateMode = false;
            session()->flash('message', 'Product updated successfully.');
            $this->resetInputFields();
        }
    }

    // Delete product
    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('message', 'Product deleted successfully.');
    }

    // Reset input fields
    private function resetInputFields()
    {
        $this->name = '';
        $this->price = '';
        $this->category = '';
        $this->updateMode = false;
    }

    // public function resetInputFields()
    // {
    //     $this->name = '';
    //     $this->price = '';
    //     $this->category = '';
    //     $this->updateMode = false;
    // }
}

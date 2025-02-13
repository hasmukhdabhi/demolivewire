<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductComponent extends Component
{
    use WithPagination;


    public $name, $price, $category, $product_id;
    public $updateMode = false;
    public function resetInputFields()
    {
        $this->name = '';
        $this->price = '';
        $this->category = '';
        $this->product_id = 'null';
        $this->updateMode = false;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
            'category' => 'required|string|max:255',
        ]);

        Product::create([
            'name' => $this->name,
            'email' => $this->price,
            'category' => $this->category,
        ]);

        session()->flash('status', 'Product Created Successfully!');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->product_id = $id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->category = $product->category;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
            'category' => 'required|string|max:255',
        ]);

        $product = Product::find($this->product_id);
        $product->update([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
        ]);

        session()->flash('status', 'Product Updated Successfully!');
        $this->resetInputFields();
        $this->updateMode = false;
    }

    public function delete($id)
    {
        Product::destroy($id);
        session()->flash('status', 'Product Deleted Successfully!');
    }


    public function render()
    {
        return view('livewire.product-component', [
            'products' => Product::latest()->paginate(5)
        ]);
    }
}

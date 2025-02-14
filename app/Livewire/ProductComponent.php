<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductComponent extends Component
{
    use WithPagination;
    // public $products, $name, $price, $category, $product_id;
    public $name, $price, $category, $product_id;
    public $updateMode = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'category' => 'required|string|max:255'
    ];

    public function resetInputFields()
    {
        $this->name = '';
    /**
     * Resets the input fields after submission.
     *
     * @return void
     */
        $this->price = '';
        $this->category = '';
        // Reset the input fields
        $this->product_id = null;
        $this->updateMode = false;
    }

    public function store()
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category
        ]);

        session()->flash('status', 'Product Added Successfully!');
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
        $this->validate();

        if ($this->product_id) {
            $product = Product::findOrFail($this->product_id);
            $product->update([
                'name' => $this->name,
                'price' => $this->price,
                'category' => $this->category
            ]);

            session()->flash('status', 'Product Updated Successfully!');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        session()->flash('status', 'Product Deleted Successfully!');
    }

    public function render()
    {
        $this->products = Product::all() ?? [];
        return view('livewire.product-component', [
            'products' => Product::paginate(5)
        ]);
    }
}

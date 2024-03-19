<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Alert;
use Illuminate\Support\Facades\Session;

class CartAdd extends Component
{
    public $product_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;

        // Check for product existence before adding to cart
        try {
            $product = Product::findOrFail($product_id);
            $this->addToCart($product);
            // $this->emit('cartUpdated'); // Emit event for potential cart update
            // $this->redirect()->with('success', 'Product added to cart successfully!');
            session()->flash('success', 'Product added to cart successfully!');
            // Alert::success('Hore!', 'Post Created Successfully');
            toast('Your Post as been submited!','success');
            $this->redirect('/');
        } catch (ModelNotFoundException $e) {
            // Handle product not found scenario
        }
    }

    public function render()
    {
        return view('livewire.product.cart-add');
    }

    private function addToCart(Product $product)
    {
        $cart = Session::get('cart', []);
        $id = $product->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "image" => $product->image
            ];
        }
        Session::put('cart', $cart);
    }
}

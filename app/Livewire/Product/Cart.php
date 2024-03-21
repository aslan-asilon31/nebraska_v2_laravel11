<?php 
namespace App\Livewire\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Cart extends Component
{
    public $cart;

    public function render()
    {
        // Load cart data from session on every render
        $this->cart = Session::get('cart', []);
        return view('livewire.product.cart')
        ->layout('components.layouts.app_cart');
        
    }
}


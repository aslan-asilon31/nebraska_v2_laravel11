<?php 
namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use App\Services\CreateSnapTokenService;

class Cart extends Component
{
    public $cart;

    public function render(Order $order)
    {
        $snapToken = $order->snap_token;
        if (is_null($snapToken)) {
            // If snap token is still NULL, generate snap token and save it to database

            $midtrans = new CreateSnapTokenService($order);
            $snapToken = $midtrans->getSnapToken();

            $order->snap_token = $snapToken;
            $order->save();
        }

        // Load cart data from session on every render
        $carts = Session::get('cart', []);
        
        return view('livewire.product.cart', compact('carts','snapToken'))
        ->layout('components.layouts.app_cart');
    }
}


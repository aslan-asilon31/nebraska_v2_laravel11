<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Http\Request;
use Alert;

class CartRemove extends Component
{
    public function remove(Request $request)
    {
        // dd($request->product_id);
        if ($request->product_id) {
            $cart = session()->get('cart');

            if (isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);

                toast('Product removed successfully', 'success');

                // Emit event for success and focus management
                $this->emit('productRemovedSuccess');
            } else {
                toast('Product removal failed', 'failed');
                $this->emit('productRemovedFailed');
            }
        }
    }

    public function render()
    {
        return view('livewire.welcome.index');
    }
}
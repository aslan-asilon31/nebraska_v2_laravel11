<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Alert;

class ProductController extends Controller
{
    public function cart()

    {

        return view('cart');

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function addToCart($id)

    {

        $product = Product::findOrFail($id);

          

        $cart = session()->get('cart', []);

  

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "name" => $product->name,

                "quantity" => 1,

                "image" => $product->image

            ];

        }

          

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function update(Request $request)

    {

        if($request->id && $request->quantity){

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');

        }

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    // public function remove(Request $request)
    // {
    //     // dd($request);

    //     if($request->id) {

    //         $cart = session()->get('cart');

    //         if(isset($cart[$request->id])) {

    //             unset($cart[$request->id]);

    //             session()->put('cart', $cart);

    //         }

    //         toast('Your Post as been submited!','success');

    //         return back();
    //         session()->flash('success', 'Product removed successfully');

    //     }

    // }


    public function remove(Request $request)
    {
        $request->id = 0;
        // dd($request->id);
        if ($request->id) {
            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            // Display success toast (assuming a toast library is configured)
            toast('Product removed successfully', 'success');
            
            // Redirect back to the previous page
            // return view('livewire.welcome.index');
            return redirect()->back();
        }else{

            // $cart = session()->get('cart', []);

            toast('Product removed Failed', 'failed');
            return redirect()->back();

            // return view('livewire.welcome.index', compact('cart'));

        }


    }


}

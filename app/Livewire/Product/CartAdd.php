<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Alert;
use DB;
use Illuminate\Support\Facades\Session;

class CartAdd extends Component
{
    public $id;

    public function mount()
    {
         

        // Check for product existence before adding to cart
        try {
            $product = Product::findOrFail($this->id);
            // dd($product);
            $this->addToCart($product);
            // $this->emit('cartUpdated'); // Emit event for potential cart update
            // $this->redirect()->with('success', 'Product added to cart successfully!');
            session()->flash('success', 'Product added to cart successfully!');
            // Alert::success('Hore!', 'Post Created Successfully');
            toast('Product added to cart successfully!','success');
            $this->redirect('/');
        } catch (ModelNotFoundException $e) {
            // Alert::success('Hore!', 'Post Created Successfully');
            toast('Product added to cart failed!','failed');
            $this->redirect('/');
        }
    }

    public function render()
    {
        return view('livewire.product.cart-add');
    }

    private function addToCart(Product $product)
    {
        $id = $product->id;

        $products = DB::select("
            SELECT a.id, a.product_id, a.category_master_id, a.status_master_id, a.image_banner,
                a.name as product_name, a.price_master_id, a.desc,
                b.name as status_name,
                c.price_before as price_before, c.price_after as price_after, c.discount,
                d.name as category_name
            FROM products a
            LEFT JOIN status_masters b ON b.status_id = a.status_master_id
            LEFT JOIN price_masters c ON c.price_master_id = a.price_master_id
            LEFT JOIN category_masters d ON d.category_master_id = a.category_master_id
            WHERE DATE(a.created_at) >= DATE(NOW()) - INTERVAL '3 days'
            AND a.id = $id
        ");

        // dd($products);

        foreach ($products as $product) {
            $product_id = $product->product_id;
            $product_name = $product->product_name;
            $status_name = $product->status_name;
            $category_master_id = $product->category_master_id;
            $category_name = $product->category_name;
            $price_master_id = $product->price_master_id;
            $price_before = $product->price_before;
            $price_after = $product->price_after;
            $product_name = $product->product_name;
            $discount = $product->discount;
            $image = $product->image_banner;
        }

        $cart = Session::get('cart', []);
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                "product_id" => $product_id,
                "category_master_id" => $category_master_id,
                "status_name" => $status_name,
                "category_name" => $category_name,
                "price_id" => $price_master_id,
                "price_before" => $price_before,
                "price_after" => $price_after,
                "discount" => $discount,
                "product_name" => $product_name,
                "quantity" => 1,
                "image" => $image
            ];
        }
        // dd($cart);
        Session::put('cart', $cart);
    }
}

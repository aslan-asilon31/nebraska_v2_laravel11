<?php

namespace App\Livewire\Welcome;

use Livewire\Component;
use DB;

class Index extends Component
{
    public $categories;
    public $category_clothe; //category_master_id = 1
    public $category_clothe_product_shirt;
    public $category_footwear; //category_master_id = 5
    public $category_jewelry; //category_master_id = 10
    public $category_perfume; //category_master_id = 13
    public $category_cosmetic;//category_master_id = 18
    public $category_glasses; //category_master_id = 24
    public $category_bag; //category_master_id = 27


    public $new_arrival; //New arrivals


    public $cart;

    public function mount()
    {
        $sql_categories  = "SELECT category_master_id, status_id, name, desc_cat_type_sub,
                            image_banner, cat_sub_from, cat_type_sub
                            FROM category_masters 
                            WHERE cat_type_sub = '1' 
                            AND status_id = '1' ";

        $this->categories = DB::connection('pgsql')->select($sql_categories);
        

        $sql_category_clothe  = "SELECT category_master_id, status_id, name, desc_cat_type_sub,
                               image_banner, cat_sub_from, cat_type_sub
                               FROM category_masters a
                               WHERE cat_sub_from = '1'
                               AND status_id = '1' ";

        // $sql_category_clothe  = "SELECT a.category_master_id AS cat_master_id, a.name As cat_name,
        //                                 a.cat_sub_from, a.cat_type_sub,
        //                                 b.cat_sub_master_id, b.category_master_id AS prod_cat_master_id, b.name AS product_name
        //                         FROM category_masters a
        //                         LEFT JOIN products b ON b.category_master_id = a.category_master_id
        //                         WHERE a.cat_sub_from = '1' ";

        $this->category_clothe = DB::connection('pgsql')->select($sql_category_clothe);

        
        $sql_category_clothe_product  = "SELECT a.category_master_id, a.status_id, a.name, a.desc_cat_type_sub,
                               a.image_banner, a.cat_sub_from, a.cat_type_sub
                               FROM category_masters a
                               LEFT JOIN products b
                               ON b.cat_sub_master_id = a.category_master_id
                               WHERE a.cat_sub_from = '1'
                               AND status_id = '1' ";
        $this->category_clothe_product = DB::connection('pgsql')->select($sql_category_clothe_product);
        
        

        $sql_category_footwear = "SELECT category_master_id, status_id, name, desc_cat_type_sub,
                               image_banner, cat_sub_from, cat_type_sub
                               FROM category_masters 
                               WHERE cat_sub_from = '5'
                               AND status_id = '1' ";
        $this->category_footwear = DB::connection('pgsql')->select($sql_category_footwear);
        

        $sql_category_jewelry = "SELECT category_master_id, status_id, name, desc_cat_type_sub,
                               image_banner, cat_sub_from, cat_type_sub
                               FROM category_masters 
                               WHERE cat_sub_from = '10'
                               AND status_id = '1' ";
        $this->category_jewelry= DB::connection('pgsql')->select($sql_category_jewelry);
        

        $sql_category_perfume = "SELECT category_master_id, status_id, name, desc_cat_type_sub,
                               image_banner, cat_sub_from, cat_type_sub
                               FROM category_masters 
                               WHERE cat_sub_from = '13'
                               AND status_id = '1' ";
        $this->category_perfume= DB::connection('pgsql')->select($sql_category_perfume);
        

        $sql_category_cosmetic = "SELECT category_master_id, status_id, name, desc_cat_type_sub,
                               image_banner, cat_sub_from, cat_type_sub
                               FROM category_masters 
                               WHERE cat_sub_from = '18'
                               AND status_id = '1' ";
        $this->category_cosmetic= DB::connection('pgsql')->select($sql_category_cosmetic);
        

        $sql_category_glasses = "SELECT category_master_id, status_id, name, desc_cat_type_sub,
                               image_banner, cat_sub_from, cat_type_sub
                               FROM category_masters 
                               WHERE cat_sub_from = '24'
                               AND status_id = '1' ";
        $this->category_glasses= DB::connection('pgsql')->select($sql_category_glasses);
        

        $sql_category_bag = "SELECT category_master_id, status_id, name, desc_cat_type_sub,
                               image_banner, cat_sub_from, cat_type_sub
                               FROM category_masters 
                               WHERE cat_sub_from = '27'
                               AND status_id = '1' ";
        $this->category_bag= DB::connection('pgsql')->select($sql_category_bag);
        

        $sql_new_arrival = "SELECT a.id, a.product_id,a.category_master_id,a.status_master_id, a.image_banner,
                                a.name as product_name, a.price_master_id,a.desc,
                                c.price_before as price_before, c.price_after as price_after, c.discount,
                                d.name as category_name
                            FROM 
                                products a
                            LEFT JOIN 
                                status_masters b ON b.status_id = a.status_master_id
                            LEFT JOIN
                                price_masters c ON c.product_id = a.product_id
                            LEFT JOIN
                                category_masters d ON d.category_master_id = a.category_master_id
                            WHERE 
                                DATE(a.created_at) >= DATE(NOW()) - INTERVAL '3 days'
                            ; ";

        $this->new_arrival= DB::connection('pgsql')->select($sql_new_arrival);

        $this->cart = session()->get('cart', []);
        // dd($this->cart);


    }


    public function render()
    {
        // dd($this->categories);
        // dd($this->category_subs);
        return view('livewire.welcome.index');
    }

    
    public function addToCart(int $productId): void
    {
        Cart::add(Product::where('product_id', $productId)->first());
    }

}

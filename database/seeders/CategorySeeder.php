<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\CategoryMaster;

use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // sidebar category
            [
                'category_master_id' => '1', 
                'cat_type_sub' => '1',//1 = cat
                'cat_sub_from' => '',
                'status_id' => '1',
                'image_banner' => 'dress.svg',
                'name' => 'Clothes',
                'desc' => '',
                'desc_cat_type_sub' => 'category',
            ],
            [
                'category_master_id' => '2',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '1',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Shirt',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 1 = Clothes',
            ],
            [
                'category_master_id' => '3',
                'cat_type_sub' => '2',
                'cat_sub_from' => '1',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Shorts and Jeans',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 1 = Clothes',
            ],
            [
                'category_master_id' => '4',
                'cat_type_sub' => '2',
                'cat_sub_from' => '1',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Jacket',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 1 = Clothes',
            ],
            [
                'category_master_id' => '4',
                'cat_type_sub' => '2',
                'cat_sub_from' => '1',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Dress & Frock',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 1 = Clothes',
            ],


            [
                'category_master_id' => '5',
                'cat_type_sub' => '1', //1 = cat
                'cat_sub_from' => '',
                'status_id' => '1',
                'image_banner' => 'shoes.svg',
                'name' => 'Footwear',
                'desc' => '',
                'desc_cat_type_sub' => 'category',
            ],
            [
                'category_master_id' => '6',
                'cat_type_sub' => '2', //2 = sub cat
                'cat_sub_from' => '5',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Sports',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 5 = Footwear',
            ],
            [
                'category_master_id' => '7',
                'cat_type_sub' => '2',
                'cat_sub_from' => '5',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Format',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 5 = Footwear',
            ],
            [
                'category_master_id' => '8',
                'cat_type_sub' => '2',
                'cat_sub_from' => '5',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Casual',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 5 = Footwear',
            ],
            [
                'category_master_id' => '9',
                'cat_type_sub' => '2',
                'cat_sub_from' => '5',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Safety Shoes',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 5 = Footwear',
            ],



            [
                'category_master_id' => '10', 
                'cat_type_sub' => '1',//1 = cat
                'cat_sub_from' => '',
                'status_id' => '1',
                'image_banner' => 'jewelry.svg',
                'name' => 'Jewelry',
                'desc' => '',
                'desc_cat_type_sub' => 'category',
            ],
            [
                'category_master_id' => '11',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '10',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Earrings',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 10 = jewelry',
            ],
            [
                'category_master_id' => '12',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '10',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Couple Rings',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 10 = jewelry',
            ],
            [
                'category_master_id' => '12',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '10',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Necklace',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 10 = jewelry',
            ],
            


            [
                'category_master_id' => '13', 
                'cat_type_sub' => '1',//1 = cat
                'cat_sub_from' => '',
                'status_id' => '1',
                'image_banner' => 'perfume.svg',
                'name' => 'Perfume',
                'desc' => '',
                'desc_cat_type_sub' => 'category',
            ],
            [
                'category_master_id' => '14',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '13',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Clothes Parfume',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 13 = Perfume',
            ],
            [
                'category_master_id' => '15',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '13',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Deodorant',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 13 = Perfume',
            ],
            [
                'category_master_id' => '16',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '13',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Jacket',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 13 = Perfume',
            ],
            [
                'category_master_id' => '17',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '13',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Dress & Frock',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 13 = Perfume',
            ],

                        


            [
                'category_master_id' => '18', 
                'cat_type_sub' => '1',//1 = cat
                'cat_sub_from' => '',
                'status_id' => '1',
                'image_banner' => 'cosmetics.svg',
                'name' => 'Cosmetics',
                'desc' => '',
                'desc_cat_type_sub' => 'category',
            ],
            [
                'category_master_id' => '19',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '18',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Clothes Parfume',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 18 = cosmetics',
            ],
            [
                'category_master_id' => '20',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '18',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Shampoo',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 18 = cosmetics',
            ],
            [
                'category_master_id' => '21',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '18',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Sunscreen',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 18 = cosmetics',
            ],
            [
                'category_master_id' => '22',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '18',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Body Wash',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 18 = cosmetics',
            ],
            [
                'category_master_id' => '23',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '18',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Makeup kit',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 18 = cosmetics',
            ],
            
                        


            [
                'category_master_id' => '24', 
                'cat_type_sub' => '1',//1 = cat
                'cat_sub_from' => '',
                'status_id' => '1',
                'image_banner' => 'glasses.svg',
                'name' => 'Glassess',
                'desc' => '',
                'desc_cat_type_sub' => 'category',
            ],
            [
                'category_master_id' => '25',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '24',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Sunglasses',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 24 = glasses',
            ],
            [
                'category_master_id' => '26',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '24',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Lenses',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 24 = glasses',
            ],

                        
                        


            [
                'category_master_id' => '27', 
                'cat_type_sub' => '1',//1 = cat
                'cat_sub_from' => '',
                'status_id' => '1',
                'image_banner' => 'bag.svg',
                'name' => 'Bags',
                'desc' => '',
                'desc_cat_type_sub' => 'category',
            ],
            [
                'category_master_id' => '28',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '27',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Shopping bag',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 27 = Bags',
            ],
            [
                'category_master_id' => '29',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '27',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Gym Backpack',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 27 = Bags',
            ],
            [
                'category_master_id' => '30',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '27',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Purse',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 27 = Bags',
            ],
            [
                'category_master_id' => '31',
                'cat_type_sub' => '2', // 2= sub cat
                'cat_sub_from' => '27',
                'status_id' => '1',
                'image_banner' => '',
                'name' => 'Wallet',
                'desc' => '',
                'desc_cat_type_sub' => 'sub category from cat 27 = Bags',
            ],

            
        ];

        // Insert data into the products table
        DB::table('category_masters')->insert($categories);
    }
}

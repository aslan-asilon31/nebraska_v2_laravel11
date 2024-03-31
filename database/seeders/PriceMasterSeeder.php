<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\MasterData\PriceMaster;


class PriceMasterSeeder extends Seeder
{

    public function run(): void
    {
        $price_masters = [
            [
                'price_master_id' => '1', 
                'product_id' => 'P002',
                'status_id' => '1',
                'discount' => 45,
                'name' => '150000 - 82500 - 45%',
                'price_before' => '1',
                'price_after' => '1',
            ],
            [
                'price_master_id' => '2', 
                'product_id' => 'P003',
                'status_id' => '1',
                'discount' => 45,
                'name' => '150000 - 82500 - 45%',
                'price_before' => '1',
                'price_after' => '1',
            ],
        ];

        // Insert data into the price_masters table
        DB::table('price_masters')->insert($price_masters);
    }
}

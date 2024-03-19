<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array of possible status_id values
        $statusIds = [5, 6, 16];

                // Loop for today
                for ($i = 0; $i < 200; $i++) {
                    Order::create([
                        'status_id' => $statusIds[array_rand($statusIds)],
                        'total_price' => rand(100000, 5000000),
                        'created_at'  => Carbon::today(),
                    ]);
                }
        
                // Loop for yesterday
                // for ($i = 0; $i < 250; $i++) {
                //     Order::create([
                //         'status_id' => $statusIds[array_rand($statusIds)],
                //         'total_price' => rand(100000, 5000000),
                //         'created_at'  => Carbon::yesterday(),
                //     ]);
                // }
        
                // Loop for Carbon::now()->startOfWeek()
                // for ($i = 0; $i < 350; $i++) {
                //     Order::create([
                //         'status_id' => $statusIds[array_rand($statusIds)],
                //         'total_price' => rand(100000, 5000000),
                //         'created_at'  => Carbon::now()->startOfWeek(),
                //     ]);
                // }
    }
}

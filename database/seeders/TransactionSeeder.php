<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Carbon\Carbon;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Loop for today
        for ($i = 0; $i < 100; $i++) {

            // Generate a random hour between 00:00:00 and 23:59:59 for each iteration
            $randomHour = rand(0, 23);
            $randomMinute = rand(0, 59);
            $randomSecond = rand(0, 59);

            // Create a Carbon instance for today with the random hour, minute, and second
            $createdAt = Carbon::yesterday()->setTime($randomHour, $randomMinute, $randomSecond);

            // Create the transaction with a random total price and the generated created_at timestamp
            Transaction::create([
                'total_price' => rand(100000, 5000000),
                'created_at'  => $createdAt,
            ]);
        }

        // Loop for yesterday
        for ($i = 0; $i < 50; $i++) {

            // Generate a random hour between 00:00:00 and 23:59:59 for each iteration
            $randomHour = rand(0, 23);
            $randomMinute = rand(0, 59);
            $randomSecond = rand(0, 59);

            // Create a Carbon instance for createdAtYesterday with the random hour, minute, and second
            $createdAtYesterday = Carbon::now()->startOfWeek()->setTime($randomHour, $randomMinute, $randomSecond);
            
            Transaction::create([
                'total_price' => rand(100000, 5000000),
                'created_at'  => $createdAtYesterday,
            ]);
        }

        // Loop for Carbon::now()->startOfWeek()
        for ($i = 0; $i < 50; $i++) {

            // Generate a random hour between 00:00:00 and 23:59:59 for each iteration
            $randomHour = rand(0, 23);
            $randomMinute = rand(0, 59);
            $randomSecond = rand(0, 59);

            // Create a Carbon instance for startOfWeek with the random hour, minute, and second
            $createdAtWeek = Carbon::today()->setTime($randomHour, $randomMinute, $randomSecond);

            
            Transaction::create([
                'total_price' => rand(100000, 5000000),
                'created_at'  => $createdAtWeek,
            ]);
        }

    }
}

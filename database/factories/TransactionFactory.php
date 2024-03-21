<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Transaction;
use App\Models\User;
use App\Models\MasterData\StatusMaster;
use App\Models\MasterData\CategoryMaster;
use App\Models\Product;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        return [
            'transaction_id' => Str::uuid()->toString(),
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'status_id' => function () {
                return StatusMaster::factory()->create()->id;
            },
            'category_id' => function () {
                return CategoryMaster::factory()->create()->id;
            },
            'price_id' => $this->faker->randomNumber(),
            'brand_id' => $this->faker->randomNumber(),
            'shipping_id' => Str::uuid()->toString(),
            'product_id' => function () {
                return Product::factory()->create()->id;
            },
            'snap_token' => Str::uuid()->toString(),
            'payment_method' => $this->faker->randomElement(['Credit Card', 'PayPal', 'Cash']),
            'invoice_code' => Str::random(10),
            'prod_amount' => $this->faker->randomNumber(),
            'total_price' => $this->faker->randomNumber(),
            'gross_total_price' => $this->faker->randomNumber(),
            'lang' => $this->faker->randomElement(['en', 'es', 'fr']),
            'lang_id' => Str::uuid()->toString(),
        ];
    }
}

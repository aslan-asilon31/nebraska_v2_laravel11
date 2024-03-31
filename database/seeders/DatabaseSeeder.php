<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(CategorySeeder::class);
        $this->call(DepartmentMasterSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(PriceMasterSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TransactionSeeder::class);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

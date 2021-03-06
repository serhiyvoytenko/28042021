<?php

namespace Database\Seeders;

use App\Models\Orders;
use App\Models\ProductEntity;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(1000)->create();
         $this->call([
             ProductEntitySeeder::class,
             OrdersSeeder::class,
         ]);
    }
}

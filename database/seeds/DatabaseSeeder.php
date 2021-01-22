<?php

use Illuminate\Database\Seeder;
import ('./ApiClientSeeder.php');

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ApiClientSeeder::class);
        $this->call(TransactionCategoriesSeeder::class);
    }
}

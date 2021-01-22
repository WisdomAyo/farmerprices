<?php

use Illuminate\Database\Seeder;

class TransactionCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curdate = date('Y-m-d H:i:s');
        DB::table('transaction_categories')->insert([
            'name' => 'DSTV',
            'created_at' => "$curdate"
        ]);
        DB::table('transaction_categories')->insert([
            'name' => 'GoTV',
            'created_at' => "$curdate"
        ]);
        DB::table('transaction_categories')->insert([
            'name' => 'Others',
            'created_at' => "$curdate"
        ]);
    }
}

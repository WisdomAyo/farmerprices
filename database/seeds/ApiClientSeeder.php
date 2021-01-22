<?php

use Illuminate\Database\Seeder;

class ApiClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_clients')->insert([
            'name' => 'Test Client',
            'email' => 'test@test.com',
            'apikey' => 'ABCDE12345'
        ]);
    }
}

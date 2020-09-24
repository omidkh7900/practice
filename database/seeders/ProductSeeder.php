<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Project1',
            'category' => 'PHP PROGRAMMING',
            'description' => 'This is a very simple project',
            'picture' => 'storage/sun.jpg',
        ]);

        DB::table('users')->insert([
            'name' => 'Omid',
            'email' => 'Omid@gmail.com',
            'picture' => 'storage/sun.jpg',
        ]);
    }
}

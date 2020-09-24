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
            'picture' => public_path('app/public/sun.jpg'),
        ]);
    }
}

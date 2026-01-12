<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

       DB::table('products')->insert([

            [
                'name' => 'shampoo',
                'price' => '20',
                'quantity' => '30',
                'description' => 'description text',

            ],

            [
                'name' => 'monitor',
                'price' => '20',
                'quantity' => '30',
                'description' => 'description text',
            ],


            [
                'name' => 'mouse',
                'price' => '20',
                'quantity' => '30',
                'description' => 'description text',
            ],




        ]);



    }
}

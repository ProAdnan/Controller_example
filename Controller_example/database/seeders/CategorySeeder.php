<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       DB::table('categories')->insert([

            ['category_name' => 'Electronics'],
            ['category_name' => 'Books'],
            ['category_name' => 'Clothing'],
            ['category_name' => 'Gamming'],



        ]);

    }
}

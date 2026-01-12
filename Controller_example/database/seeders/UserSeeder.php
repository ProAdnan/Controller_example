<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([

            [
                'name' => 'Test User',
                'email' => 'aa@gmail.com',
                'password' => '12345678'
            ],
            [
                'name' => 'Adnan',
                'email' => 'asdsd@gmail.com',
                'password' => 'ad12'
            ]

        ]);





    }
}

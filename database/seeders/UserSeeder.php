<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'first_name' => "Jhon",
            'second_name' => 'snow',
            'email' =>'admin@gamil.com',
            'user_name' => 'admin',
            'password' =>  Hash::make('123'),
            'is_admin' => 1
        ]);

        User::create([
            'first_name' => "Ram",
            'second_name' => 'Roy',
            'user_name' => 'ramroy',
            'email' =>'ram@gamil.com',
            'password' =>  Hash::make('123'),
            'is_admin' => 0
        ]);
    }
        
}

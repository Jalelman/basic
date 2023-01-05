<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'username' => 'user',
            'profile_image' => '202301041500321604533_685975619654398_226767018089136715_n.jpg',
            'email_verified_at'=>'2023-01-04 14:50:46',
            'password' => Hash::make('12345678'),
            'created_at'=>'2023-01-04 14:50:27',
            'updated_at'=>'2023-01-04 15:00:29',
        ]);
    }
}


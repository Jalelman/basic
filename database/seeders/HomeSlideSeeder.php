<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HomeSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('home_slides')->insert([
            'id' => '1',
            'title' => 'Best Coder',
            'short_title' => 'This is a a basic local website',
            'video_url' => 'https://www.youtube.com/watch?v=dYZXeShv7nQ',
            'home_slide' => '',
        ]);
    }
}

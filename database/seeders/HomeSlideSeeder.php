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
            'title' => 'best coder ever',
            'short_title' => 'this is a simple test of my website that i should take it as project to introduce my knowledge of laravel',
            'video_url' => 'https://www.youtube.com/watch?v=yGcfXw9sw84&t=179s',
            'home_slide' => 'upload/home_slide/1754107925302716.jpg',
        ]);
    }
}

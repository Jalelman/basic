<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('abouts')->insert([
            'id' => '1',
            'title' => 'Lorem Ipsum',
            'short_title' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'short_description' => 'this is a simple test of my website that i should take it as project to introduce my knowledge of laravel',
            'long_description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'about_image' => 'upload/about_images/no_image.jpg',
        ]);
    }
}

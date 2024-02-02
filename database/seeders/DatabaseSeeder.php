<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();




        Category::create([
            'name'=>'personal',
            'slug'=>'personal'
        ]);

       Category::create([
            'name'=>'Programming',
            'slug'=>'programming'
        ]);

        Category::create([
            'name'=>'bisnis',
            'slug'=>'bisnis'
        ]);

         Post::factory(20)->create();


        // \App\Models\Post::create([
        //     'judul'=>'judul pertama',
        //     'slug'=>'judul-pertama',
        //     'body'=>'belajar ngoding itu mudah hanya perlu rasa cinta aja semangat nabila',
        //     'excerpt'=>'ini judul pertama saya',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]); 

        // \App\Models\Post::create([
        //     'judul'=>'judul Dua',
        //     'slug'=>'judul-dua',
        //     'body'=>'belajar ngoding itu mudah hanya perlu rasa cinta aja semangat nabila',
        //     'excerpt'=>'ini judul pertama saya',
        //     'category_id'=>2,
        //     'user_id'=>1

        // ]); 

        // \App\Models\Post::create([
        //     'judul'=>'judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'body'=>'belajar ngoding itu mudah hanya perlu rasa cinta aja semangat nabila',
        //     'excerpt'=>'ini judul pertama saya',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]); 

        // \App\Models\Post::create([
        //     'judul'=>'judul keempat',
        //     'slug'=>'judul-keempat',
        //     'body'=>'belajar ngoding itu mudah hanya perlu rasa cinta aja semangat nabila',
        //     'excerpt'=>'ini judul pertama saya',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]); 




    }

}

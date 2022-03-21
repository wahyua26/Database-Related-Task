<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name' => 'Agus Budi',
        //     'email' => 'agus.budi@its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Fitrah Arie',
        //     'email' => 'fitrah@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Aji Wahyu A.U',
        //     'email' => 'wahyu@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Analisis Algoritma',
            'slug' => 'analisis-algoritma'
        ]);

        Category::create([
            'name' => 'Catatan Harian',
            'slug' => 'catatan-harian'
        ]);

        Article::factory(20)->create();

        // Article::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Artikel Pertama',
        //     'slug' => 'artikel-pertama',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'excerpt' => 'Lorem Ipsum is simply dummy'
        // ]);

        // Article::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Artikel Kedua',
        //     'slug' => 'artikel-kedua',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'excerpt' => 'Lorem Ipsum is simply dummy'
        // ]);

        // Article::create([
        //     'category_id' => 2,
        //     'user_id' => 3,
        //     'title' => 'Artikel Ketiga',
        //     'slug' => 'artikel-ketiga',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'excerpt' => 'Lorem Ipsum is simply dummy'
        // ]);

        // Article::create([
        //     'category_id' => 3,
        //     'user_id' => 3,
        //     'title' => 'Artikel Keempat',
        //     'slug' => 'artikel-keempat',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'excerpt' => 'Lorem Ipsum is simply dummy'
        // ]);

        // Article::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Artikel Kelima',
        //     'slug' => 'artikel-kelima',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'excerpt' => 'Lorem Ipsum is simply dummy'
        // ]);

    }
}

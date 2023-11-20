<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->admin()->create();

        DB::table('items')->insert([
            'name' => 'Sweet and Sour Pork',
            'type' => 'main',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'sweet-and-sour-pork.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Mapo Tofu',
            'type' => 'main',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'mapo-tofu.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'General Tso\'s Chicken',
            'type' => 'main',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'general-tso.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Orange Chicken',
            'type' => 'main',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'orange-chicken.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Mongolian Beef',
            'type' => 'main',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'mongolian-beef.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Sesame Chicken',
            'type' => 'main',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'sesame-chicken.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Chinese Tea',
            'type' => 'beverage',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'chinese-tea.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Liang Tea',
            'type' => 'beverage',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'liang-tea.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Soybean Milk',
            'type' => 'beverage',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'soybean-milk.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Silky Tofu Puding',
            'type' => 'dessert',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'tofu-pudding.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Pumpkin Cake',
            'type' => 'dessert',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'pumpkin-cake.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Sesame Balls',
            'type' => 'dessert',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'sesame-balls.jpg',
        ]);
    }
}

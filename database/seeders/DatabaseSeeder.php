<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
            'name' => 'Paracetamol',
            'type' => 'Tablet',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'paracetamol.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Salbutamol',
            'type' => 'Tablet',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 20,
            'picture' => 'salbutamol.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Cefadroxil',
            'type' => 'Capsule',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 40,
            'picture' => 'cefadroxil.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Fenamin',
            'type' => 'Capsule',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'cefadroxil.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Decadryl',
            'type' => 'Syrup',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 8,
            'picture' => 'decadryl.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Acyclovir',
            'type' => 'Ointment',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 12,
            'picture' => 'acyclovir.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Band-aids',
            'type' => 'Other',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 4,
            'picture' => 'band-aids.jpg',
        ]);

        User::create([
            'name' => 'Customer',
            'email' => 'test@example.com',
            'balance' => 5000,
            'picture' => 'default0.jpg',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'picture' => 'default0.jpg',
            'is_admin' => true,
        ]);
    }
}

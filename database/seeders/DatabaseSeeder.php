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
            'name' => 'Salbutamol',
            'type' => 'Capsule',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10000,
            'picture' => 'salbutamol.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Cefadroxil',
            'type' => 'Capsule',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 40000,
            'picture' => 'cefadroxil.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Fenamin 500',
            'type' => 'Capsule',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10000,
            'picture' => 'fenamin.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Mycoral',
            'type' => 'Tablet',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10000,
            'picture' => 'mycoral.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Cetirizine',
            'type' => 'Tablet',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 13000,
            'picture' => 'cetirizine.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Sumagesic',
            'type' => 'Tablet',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 8000,
            'picture' => 'sumagesic.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Decadryl',
            'type' => 'Syrup',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 14000,
            'picture' => 'decadryl.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Actifed',
            'type' => 'Syrup',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 8000,
            'picture' => 'actifed.png',
        ]);
        
        DB::table('items')->insert([
            'name' => 'Hufagripp',
            'type' => 'Syrup',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 17000,
            'picture' => 'hufagripp.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Aciclovir',
            'type' => 'Ointment',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 12000,
            'picture' => 'acyclovir.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Tenovate',
            'type' => 'Ointment',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 16000,
            'picture' => 'tenovate.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Garamycin',
            'type' => 'Ointment',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 15000,
            'picture' => 'garamycin.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Band Aids',
            'type' => 'Other',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 4000,
            'picture' => 'band-aids.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Herocyn',
            'type' => 'Other',
            'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 20000,
            'picture' => 'herocyn.png',
        ]);

        // DB::table('items')->insert([
        //     'name' => 'Salonpas',
        //     'type' => 'Other',
        //     'description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
        //     'price' => 6000,
        //     'picture' => 'salonpas.png',
        // ]);

        User::create([
            'name' => 'Customer',
            'email' => 'test@example.com',
            'balance' => 100000,
            'password' => 'password',
            'picture' => 'default0.jpg',
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

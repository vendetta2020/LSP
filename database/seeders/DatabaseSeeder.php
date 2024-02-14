<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new \App\Models\User; // Buat instansi model User
        $user->name = 'Admin';
        $user->email = 'afif@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        \App\Models\Kategori::create([
            'name'=> 'Kebersihan'
        ]);
        \App\Models\Kategori::create([
            'name'=> 'Kantin'
        ]);
        \App\Models\Kategori::create([
            'name'=> 'Kamar mandi'
        ]);
        \App\Models\Kategori::create([
            'name'=> 'Gor'
        ]);
        \App\Models\Kategori::create([
            'name'=> 'Lapangan'
        ]);
    }
}

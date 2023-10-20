<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
            User::create([
                'name' => 'Aldo',
                'username' => 'aldo',
                'email' => 'aldo@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            User::create([
                'name' => 'Ali',
                'username' => 'aliii',
                'email' => 'aliii@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            
            User::factory(3)->create();
        Berita::factory(12)->create();
        // Berita::create([
        //     'judul' => 'Debat Capres',
        //     'cover' => 'debat.jpg',
        //     'describe' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'user_id' => 1
        // ]);
        // Berita::create([
        //     'judul' => 'DPR Main Valorant',
        //     'cover' => 'dprmain.jpg',
        //     'describe' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'user_id' => 2
        // ]);
        // Berita::create([
        //     'judul' => 'Debat BEM IU',
        //     'cover' => 'debatbem.jpg',
        //     'describe' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'user_id' => 1
        // ]);
        // Berita::create([
        //     'judul' => 'Alif Ngajak Mabar',
        //     'cover' => 'alif.jpg',
        //     'describe' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'user_id' => 2
        // ]);
    }
}

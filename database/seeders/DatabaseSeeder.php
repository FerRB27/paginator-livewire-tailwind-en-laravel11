<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /**
         * usamos el metodo deleteDirectory, para evitar duplicacion de carpeptas/imagenes
         * esto es en caso que debamos correr los seeders nuevamente.
         */
        Storage::deleteDirectory('imagen');
        Storage::makeDirectory('imagen');

        Post::factory(10)->create();
    }
}

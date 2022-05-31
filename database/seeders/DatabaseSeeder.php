<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // Creamos los roles de usuarios.
        $rol1 = Rol::factory()->create([
            'name' => 'admin',
        ]);
        $rol2 = Rol::factory()->create([
            'name' => 'editor',
        ]);
        $rol3 = Rol::factory()->create([
            'name' => 'poster',
        ]);

        // Creamos los usuarios.
        $manuel = User::factory()->create([
            'name' => 'Manuel',
            'email' => 'manuel@mail.com',
            'password' => Hash::make('12345'),
        ]);
        $jose = User::factory()->create([
            'name' => 'Jose',
            'email' => 'jose@mail.com',
            'password' => Hash::make('12345'),
        ]);
        $antonio = User::factory()->create([
            'name' => 'Antonio',
            'email' => 'antonio@mail.com',
            'password' => Hash::make('12345'),
        ]);

        // Le asignamos los roles a cada usuario.
        $manuel->rol()->attach($rol1);
        $jose->rol()->attach($rol2);
        $antonio->rol()->attach($rol3);

        // Creamos posts.
        Post::factory()->create([
            'user_id' => $manuel->id,
            'name' => 'Soy Manuel',
        ]);
        Post::factory()->create([
            'user_id' => $jose->id,
            'name' => 'Soy Jose',
        ]);
    }
}

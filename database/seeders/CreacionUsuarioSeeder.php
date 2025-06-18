<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreacionUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'usuario1',
            'email' => 'usuario1@usuario1.com',
            'password' => Hash::make('usuario1'), 
        ]);

        User::create([
            'name' => 'usuario2',
            'email' => 'usuario2@usuario2.com',
            'password' => Hash::make('usuario2'),
        ]);

        User::create([
            'name' => 'usuario3',
            'email' => 'usuario3@usuario3.com',
            'password' => Hash::make('usuario3'),
        ]);
    }
}

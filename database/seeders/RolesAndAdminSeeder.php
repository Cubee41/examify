<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndAdminSeeder extends Seeder
{
   

    public function run():void
    {
        // Insérer les rôles
        DB::table('roles')->insert([
            ['name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'professeur', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'etudiant', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Créer un utilisateur admin par défaut
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Remplacez par un mot de passe sécurisé
            'role_id' => 1, // Assurez-vous que c'est l'ID du rôle admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

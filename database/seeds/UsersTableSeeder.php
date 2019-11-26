<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'          => 'Administrador',
            'slug'         =>  'admin',
            'description' => 'todos los permisos',
            'special'      => 'all-access',
                  
        ]);
        User::create([
            'name'          => 'Luis Valero',
            'email'         => 'luisvaleroc22@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456789',
            'remember_token' => Str::random(10),
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

        User::create([
            'name'          => 'Carlos',
            'email'         => 'carlos@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456789',
            'remember_token' => Str::random(10),
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

       
    }
}


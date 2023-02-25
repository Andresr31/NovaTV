<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserción individual mediante ORM
        $user = new User;
        $user->fullname = 'Carlos Andrés Rojas Parra';
        $user->email = 'carlos.rojasp@autonoma.edu.co';
        $user->phone = '3103707415';
        $user->photo = 'images/no-photo.png';
        $user->password = bcrypt('admin');
        $user->role_id = 1;
        $user->save();

        // Inserción individual mediante conexión a Base de datos
        DB::table('users')->insert([
            'fullname' => 'Homero Simpson',
            'email'    => 'homero@gmail.com',
            'phone'    => '3214567898',
            'photo'    => 'images/no-photo.png',
            'password' => bcrypt('guest'),
            'role_id'  => 2,
            'created_at' => now(),
        ]);

        // Inserción masiva
        // for ($i=0; $i < 100; $i++) { 
        //     $user = new User;
        //     $user->fullname = 'Nombre Prueba '.$i;
        //     $user->email = 'correo.prueba.'.$i.'@autonoma.edu.co';
        //     $user->phone = '+'.$i;
        //     $user->photo = 'images/no-photo.png';
        //     $user->password = bcrypt('test');
        //     $user->role_id = 2;
        //     $user->save();
        // }
        
    }
}

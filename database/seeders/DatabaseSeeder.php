<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $permisos=[
            //operaciones roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //operaciones exams
            'ver-exam',
            'crear-exam',
            'editar-exam',
            'borrar-exam',

            //operaciones students
            'ver-students',
            'crear-students',
            'editar-students',
            'borrar-students',

        ];
        \App\Models\User::factory(10)->create();
       // foreach($permisos as $permiso){
           // Permission::create(['name' => $permiso]);
       // }
    }
}

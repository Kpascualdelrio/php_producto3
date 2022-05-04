<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permisos = [

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

        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
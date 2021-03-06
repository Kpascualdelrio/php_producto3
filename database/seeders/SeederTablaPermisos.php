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
            //operaciones teachers
            'ver-teachers',
            'crear-teachers',
            'editar-teachers',
            'borrar-teachers',
            //tabla courses
            'ver-courses',
            'crear-courses',
            'editar-courses',
            'borrar-courses',
            //tabla enrollments
            'ver-enrollments',
            'crear-enrollments',
            'editar-enrollments',
            'borrar-enrollments',
            // tabla students
            'ver-students',
            'crear-students',
            'editar-students',
            'borrar-students',
            //tabla notifications
            'ver-notificacions',
            'crear-notificacions',
            'editar-notificacions',
            'borrar-notificacions',
            // tabla schedule
            'ver-schedule',
            'crear-schedule',
            'editar-schedule',
            'borrar-schedule',

        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}

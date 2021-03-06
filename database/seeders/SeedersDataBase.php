<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeedersDataBase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'SuperAdmin',
            'guard_name' => 'web'
        ]);
  
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Student',
            'guard_name' => 'web'
        ]);

        DB::table('users')->insert([
            'id' => 1,
            'name'=> 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'role' => 'SuperAdmin',
            'password' => Hash::make('password'),

        ]);
      
        DB::table('users')->insert([
            'id' => 2,
            'name'=> 'Student2',
            'email' => 'student@gmail.com',
            'role' => 'Student',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name'=> 'Student3',
            'email' => 'student3@gmail.com',
            'role' => 'Student',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'id' => 4,
            'name'=> 'Student4',
            'email' => 'student4@gmail.com',
            'role' => 'Student',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'id' => 5,
            'name'=> 'Student5',
            'email' => 'student5@gmail.com',
            'role' => 'Student',
            'password' => Hash::make('password'),

        ]);

        //

        DB::table('class')->insert([


        ]);


        // //Seeders que otorgan permisos para modificar Rol Admin
        // DB::table('role_has_permissions')->insert([
        
        //     'permission_id' => 1,
        //     'role_id'=> 1,

        // ]);
        // DB::table('role_has_permissions')->insert([
        
        //     'permission_id' => 2,
        //     'role_id'=> 1,

        // ]);
        // DB::table('role_has_permissions')->insert([
         
        //     'permission_id' => 3,
        //     'role_id'=> 1,

        // ]);
        // DB::table('role_has_permissions')->insert([

        //     'permission_id' => 4,
        //     'role_id'=> 1,

        // ]);


    }
}

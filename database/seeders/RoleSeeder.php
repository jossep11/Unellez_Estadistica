<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = Role::create(['name'=>'admin']);
        $user1 = Role::create(['name'=>'user']);
        $agregar_eliminar = Permission::create(['name'=>'agregar eliminar'])->assignRole($user1);
        
        $user1_admin = User::create([
            'name'=> 'administrador',
            'email'=> 'Admin1@gmail.com',
            'Nombres'=> 'Milagros',
            'password'=> bcrypt('1234567'),

        ]);

        $user2_user = User::create([
            'name'=> 'personal1',
            'email'=> 'VPDS@gmail.com',
            'Nombres'=> 'VPDS',
            'password'=> bcrypt('1234567'),

        ]);
        $user1_admin->assignRole($admin1);
        $user2_user->assignRole($user1);


    }
}

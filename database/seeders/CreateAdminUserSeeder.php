<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Keshav Jootun', 
            'username' => 'Kesh112',
            'email' => 'jootunkeshavgmail.com',
            'password' => bcrypt('123456'),
            'role' => 'administrator',
        ]);
    
        $role = Role::create(['name' => 'admininistrator']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}

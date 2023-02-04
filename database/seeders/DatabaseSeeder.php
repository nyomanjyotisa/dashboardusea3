<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role',
            'user',
            'biota',
            'jenis-biota',
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }

         $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'avatar' => 'zzz'
        ]);
    
        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);

        $user2 = User::create([
            'name' => 'Nelayan', 
            'email' => 'nelayan@gmail.com',
            'password' => bcrypt('123456'),
            'avatar' => 'zzz'
        ]);
        
        $role2 = Role::create(['name' => 'Nelayan']);

        $permissions2 = Permission::where(function ($query) {
                                        $query->where('name', 'biota')
                                        ->orWhere('name', 'jenis-biota');
                                    })->pluck('id','id');

        $role2->syncPermissions($permissions2);

        $user2->assignRole([$role2->id]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Admin::create([
            'name' => 'Super Admin', 
            'mobile' => '9097987654',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$xE9L/cUCC.BWFpcedEaOaeFDMHU2Y.yC2URiYAR5VH0HQ6671k/U6',
            'photo' => 'avatar5.png'
        ]);
    
        // $role = Role::create(['name' => 'Super Admin']);
     
        // $permissions = Permission::pluck('id','id')->all();
   
        // $role->syncPermissions($permissions);
     
        $user->assignRole(1);
    }
}

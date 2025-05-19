<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name'=>'Super Admin']);
        

        $permissions = [
            ['name' => 'User List'],
            ['name' => 'Create User'],
            ['name' => 'edit User'],
            ['name' => 'delete User'],
            ['name' => 'Role List'],
            ['name' => 'Create Role'],
            ['name' => 'edit Role'],
            ['name' => 'delete Role'],
            ['name' => 'Permission List'],
            ['name' => 'Create Permission'],
            ['name' => 'Edit Permission'],
            ['name' => 'Delete Permission'],
            ['name' => 'Can Access School'],
            ['name' => 'Can Access Disipline'],
            ['name' => 'Can Access Course List'],
            ['name' => 'Can Access Add Course'],
            ['name' => 'Can Access Edit Course'],
            ['name' => 'Can Access Delete Course'],
            ['name' => 'Can Access Program List'],
            ['name' => 'Can Access Add Program'],
            ['name' => 'Can Access Edit Program'],
            ['name' => 'Can Access Delete Program'],
        ];

        foreach($permissions as $item){
            Permission::create($item);
        }

        $role->syncPermissions(Permission::all());

        $user = User::first();
        $user->assignRole($role);
    }
}

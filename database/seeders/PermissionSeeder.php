<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1: Admin dashboard access
        $moduleAppDashboard = Module::updateOrCreate(['name'=>'Admin Dashboard']);
        Permission::updateOrCreate([
            'module_id' =>  $moduleAppDashboard->id,
            'name'      => 'Access Dashboard',
            'slug'      => 'admin.dahboard'
        ]);

        // 2: Roles management access
        $moduleAdminRoles = Module::updateOrCreate(['name'=>'Roles Management']);
        Permission::updateOrCreate([
            'module_id' =>  $moduleAdminRoles->id,
            'name'      => 'Access Roles Management',
            'slug'      => 'admin.roles'
        ]);
    }
}

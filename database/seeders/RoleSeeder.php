<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\RoleMaster;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoleMaster::create([
            'roles_id'	=> 1,
            'status_id'	=> 1,
            'name'	=> 'superadmin',
            'lang'	=> 'en',
            'lang_id'	=> 1, 
        ]);
        RoleMaster::create([
            'roles_id'	=> 2,
            'status_id'	=> 1,
            'name'	=> 'admin',
            'lang'	=> 'en',
            'lang_id'	=> 1, 
        ]);
        RoleMaster::create([
            'roles_id'	=> 3,
            'status_id'	=> 1,
            'name'	=> 'manager',
            'lang'	=> 'en',
            'lang_id'	=> 1, 
        ]);
        RoleMaster::create([
            'roles_id'	=> 4,
            'status_id'	=> 1,
            'name'	=> 'supervisor',
            'lang'	=> 'en',
            'lang_id'	=> 1, 
        ]);
        RoleMaster::create([
            'roles_id'	=> 5,
            'status_id'	=> 1,
            'name'	=> 'user',
            'lang'	=> 'en',
            'lang_id'	=> 1, 
        ]);
        RoleMaster::create([
            'roles_id'	=> 6,
            'status_id'	=> 1,
            'name'	=> 'visitor',
            'lang'	=> 'en',
            'lang_id'	=> 1, 
        ]);
        RoleMaster::create([
            'roles_id'	=> 7,
            'status_id'	=> 1,
            'name'	=> 'buyer',
            'lang'	=> 'en',
            'lang_id'	=> 1, 
        ]);
        RoleMaster::create([
            'roles_id'	=> 8,
            'status_id'	=> 1,
            'name'	=> 'customer',
            'lang'	=> 'en',
            'lang_id'	=> 1, 
        ]);
    }
}

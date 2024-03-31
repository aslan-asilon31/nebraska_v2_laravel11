<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\DepartmentMaster;


class DepartmentMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DepartmentMaster::create([
            'status_id'	=> 1,
            'name'	=> 'Executive Leadership Team',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 2,
            'name'	=> 'Administrative Section',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 3,
            'name'	=> 'HR',
            'desc'	=> 'Human Resources',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 4,
            'name'	=> 'Finance and Accounting',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 5,
            'name'	=> 'Operations',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 6,
            'name'	=> 'Marketing',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 7,
            'name'	=> 'Sales',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 8,
            'name'	=> 'IT',
            'desc'	=> 'Information Technology',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 9,
            'name'	=> 'Legal and Compliance',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 10,
            'name'	=> 'R&D',
            'desc'	=> 'Research and Development',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 11,
            'name'	=> 'Customer Success',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 12,
            'name'	=> 'Corporate Communications',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 13,
            'name'	=> 'Strategy and Planning',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 14,
            'name'	=> 'PMO',
            'desc'	=> 'Project Management Office',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 15,
            'name'	=> 'Quality Assurance and Compliance',
            'desc'	=> '',
        ]);
        DepartmentMaster::create([
            'status_id'	=> 16,
            'name'	=> 'CSR',
            'desc'	=> 'Corporate Social Responsibility',
        ]);
    }
}

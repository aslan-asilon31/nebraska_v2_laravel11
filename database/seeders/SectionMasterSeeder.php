<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\SectionMaster;


class SectionMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionMaster::create([
            'department_id'	=> 1,
            'status_id'	=> 1,
            'name'	=> 'CEO ',
            'desc'	=> 'Chief Executive Officer',
        ]);
        SectionMaster::create([
            'department_id'	=> 1,
            'status_id'	=> 1,
            'name'	=> 'COO',
            'desc'	=> 'Chief Operating Officer',
        ]);
        SectionMaster::create([
            'department_id'	=> 1,
            'status_id'	=> 1,
            'name'	=> 'CFO ',
            'desc'	=> 'Chief Financial Officer',
        ]);
        SectionMaster::create([
            'department_id'	=> 1,
            'status_id'	=> 1,
            'name'	=> 'CTO ',
            'desc'	=> 'Chief Technology Officer',
        ]);
        SectionMaster::create([
            'department_id'	=> 1,
            'status_id'	=> 1,
            'name'	=> 'CMO ',
            'desc'	=> 'Chief Marketing Officer',
        ]);
        SectionMaster::create([
            'department_id'	=> 1,
            'status_id'	=> 1,
            'name'	=> 'CHRO ',
            'desc'	=> 'Chief Human Resources Officer',
        ]);
        SectionMaster::create([
            'department_id'	=> 1,
            'status_id'	=> 1,
            'name'	=> 'CIO ',
            'desc'	=> 'Chief Information Officer',
        ]);


        // ============ department 2 Administrative
        SectionMaster::create([
            'department_id'	=> 2,
            'status_id'	=> 1,
            'name'	=> 'Administrative Assistant/Secretary ',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 2,
            'status_id'	=> 1,
            'name'	=> 'Office Management',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 2,
            'status_id'	=> 1,
            'name'	=> 'Receptionist/ Front Desk',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 2,
            'status_id'	=> 1,
            'name'	=> 'Mailroom/Post Services ',
            'desc'	=> '',
        ]);

        

        // ============ department 3 Human Resource
        SectionMaster::create([
            'department_id'	=> 3,
            'status_id'	=> 1,
            'name'	=> 'HR Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 3,
            'status_id'	=> 1,
            'name'	=> 'Talent Acquisition/Recruitment',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 3,
            'status_id'	=> 1,
            'name'	=> 'Employee Relations',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 3,
            'status_id'	=> 1,
            'name'	=> 'Training and Development',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 3,
            'status_id'	=> 1,
            'name'	=> 'Compensation and Benefits',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 3,
            'status_id'	=> 1,
            'name'	=> 'HR Information Systems',
            'desc'	=> '',
        ]);
                

        // ============ department 4 Finance and Accounting
        SectionMaster::create([
            'department_id'	=> 4,
            'status_id'	=> 1,
            'name'	=> 'Finance Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 4,
            'status_id'	=> 1,
            'name'	=> 'Accounting Team',
            'desc'	=> 'Accounts Payable, Accounts Receivable, General Ledger',
        ]);
        SectionMaster::create([
            'department_id'	=> 4,
            'status_id'	=> 1,
            'name'	=> 'Financial Planning and Analysis',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 4,
            'status_id'	=> 1,
            'name'	=> 'Taxation',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 4,
            'status_id'	=> 1,
            'name'	=> 'Audit',
            'desc'	=> '',
        ]);

                        

        // ============ department 5 Operations
        SectionMaster::create([
            'department_id'	=> 5,
            'status_id'	=> 1,
            'name'	=> 'Operations Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 5,
            'status_id'	=> 1,
            'name'	=> 'Production/Manufacturing',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 5,
            'status_id'	=> 1,
            'name'	=> 'Supply Chain and Logistics',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 5,
            'status_id'	=> 1,
            'name'	=> 'Quality Assurance/Control',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 5,
            'status_id'	=> 1,
            'name'	=> 'Facilities Management',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 5,
            'status_id'	=> 1,
            'name'	=> 'Health and Safety',
            'desc'	=> '',
        ]);

        
                        

        // ============ department 6 Marketing
        SectionMaster::create([
            'department_id'	=> 6,
            'status_id'	=> 1,
            'name'	=> 'Marketing Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 6,
            'status_id'	=> 1,
            'name'	=> 'Brand Management',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 6,
            'status_id'	=> 1,
            'name'	=> 'Digital Marketing',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 6,
            'status_id'	=> 1,
            'name'	=> 'Public Relations',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 6,
            'status_id'	=> 1,
            'name'	=> 'Market Research',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 6,
            'status_id'	=> 1,
            'name'	=> 'Advertising',
            'desc'	=> '',
        ]);

                
                        

        // ============ department 7 Sales
        SectionMaster::create([
            'department_id'	=> 7,
            'status_id'	=> 1,
            'name'	=> 'Sales Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 7,
            'status_id'	=> 1,
            'name'	=> 'Inside Sales',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 7,
            'status_id'	=> 1,
            'name'	=> 'Outside Sales/Field Sales',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 7,
            'status_id'	=> 1,
            'name'	=> 'Sales Operations',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 7,
            'status_id'	=> 1,
            'name'	=> 'Customer Service/Support',
            'desc'	=> '',
        ]);

                
                        

        // ============ department 8 Information Technology (IT)
        SectionMaster::create([
            'department_id'	=> 8,
            'status_id'	=> 1,
            'name'	=> 'IT Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 8,
            'status_id'	=> 1,
            'name'	=> 'Network Administration',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 8,
            'status_id'	=> 1,
            'name'	=> 'Systems Administration',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 8,
            'status_id'	=> 1,
            'name'	=> 'Helpdesk/Technical Support',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 8,
            'status_id'	=> 1,
            'name'	=> 'Cybersecurity',
            'desc'	=> '',
        ]);

        
                
                        

        // ============ department 9 Legal and Compliance
        SectionMaster::create([
            'department_id'	=> 9,
            'status_id'	=> 1,
            'name'	=> 'General Counsel',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 9,
            'status_id'	=> 1,
            'name'	=> 'Compliance Officer',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 9,
            'status_id'	=> 1,
            'name'	=> 'Contracts Management',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 9,
            'status_id'	=> 1,
            'name'	=> 'Intellectual Property',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 9,
            'status_id'	=> 1,
            'name'	=> 'Regulatory Affairs',
            'desc'	=> '',
        ]);
        
        
                
                        

        // ============ department 10 Research and Development (R&D)
        SectionMaster::create([
            'department_id'	=> 10,
            'status_id'	=> 1,
            'name'	=> 'R&D Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 10,
            'status_id'	=> 1,
            'name'	=> 'Product Development',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 10,
            'status_id'	=> 1,
            'name'	=> 'Innovation',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 10,
            'status_id'	=> 1,
            'name'	=> 'Research Scientists/Engineers',
            'desc'	=> '',
        ]);
                
        
                
                        

        // ============ department 11 Customer Success
        SectionMaster::create([
            'department_id'	=> 11,
            'status_id'	=> 1,
            'name'	=> 'Customer Success Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 11,
            'status_id'	=> 1,
            'name'	=> 'Client Services',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 11,
            'status_id'	=> 1,
            'name'	=> 'Customer Experience',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 11,
            'status_id'	=> 1,
            'name'	=> 'Account Management',
            'desc'	=> '',
        ]);
                        
        
                
                        

        // ============ department 12 Corporate Communications
        SectionMaster::create([
            'department_id'	=> 12,
            'status_id'	=> 1,
            'name'	=> 'Communications Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 12,
            'status_id'	=> 1,
            'name'	=> 'Internal Communications',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 12,
            'status_id'	=> 1,
            'name'	=> 'External Communications',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 12,
            'status_id'	=> 1,
            'name'	=> 'Investor Relations',
            'desc'	=> '',
        ]);

                        
        
                
                        

        // ============ department 13 Strategy and Planning
        SectionMaster::create([
            'department_id'	=> 13,
            'status_id'	=> 1,
            'name'	=> 'Strategy Manager/Director',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 13,
            'status_id'	=> 1,
            'name'	=> 'Business Development',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 13,
            'status_id'	=> 1,
            'name'	=> 'Corporate Development',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 13,
            'status_id'	=> 1,
            'name'	=> 'Strategic Planning',
            'desc'	=> '',
        ]);
        
                        
        
                
                        

        // ============ department 14 Project Management Office (PMO)
        SectionMaster::create([
            'department_id'	=> 14,
            'status_id'	=> 1,
            'name'	=> 'PMO Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 14,
            'status_id'	=> 1,
            'name'	=> 'Project Managers',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 14,
            'status_id'	=> 1,
            'name'	=> 'Project Coordinators',
            'desc'	=> '',
        ]);

                
                        
        
                
                        

        // ============ department 15 Quality Assurance and Compliance
        SectionMaster::create([
            'department_id'	=> 15,
            'status_id'	=> 1,
            'name'	=> 'Quality Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 15,
            'status_id'	=> 1,
            'name'	=> 'Compliance Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 15,
            'status_id'	=> 1,
            'name'	=> 'Quality Assurance Team',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 15,
            'status_id'	=> 1,
            'name'	=> 'Regulatory Compliance',
            'desc'	=> '',
        ]);
        
                
                        
        
                
                        

        // ============ department 16 Corporate Social Responsibility (CSR)
        SectionMaster::create([
            'department_id'	=> 16,
            'status_id'	=> 1,
            'name'	=> 'CSR Manager',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 16,
            'status_id'	=> 1,
            'name'	=> 'Sustainability Initiatives',
            'desc'	=> '',
        ]);
        SectionMaster::create([
            'department_id'	=> 16,
            'status_id'	=> 1,
            'name'	=> 'Community Relations',
            'desc'	=> '',
        ]);


    }
}

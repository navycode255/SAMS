<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create(['role_name' => 'Administrator']);
        Roles::create(['role_name' => 'Manager']);
        Roles::create(['role_name' => 'Accountant']);
        Roles::create(['role_name' => 'Clerk']);
        Roles::create(['role_name' => 'Loan Officer']);
        Roles::create(['role_name' => 'Loan Commitee Member']);
        Roles::create(['role_name' => 'Supervisory Commitee Member']);
    }
}

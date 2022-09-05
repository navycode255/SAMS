<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['dept_name' => 'Accounts']);
        Department::create(['dept_name' => 'Loans']);
        Department::create(['dept_name' => 'Management']);
    }
}

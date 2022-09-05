<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SaccosRegistrationStatus;

class SaccosStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SaccosRegistrationStatus::create(['status_name' => 'Registerd']);
        SaccosRegistrationStatus::create(['status_name' => 'Pending']);
        SaccosRegistrationStatus::create(['status_name' => 'Expired']);
        SaccosRegistrationStatus::create(['status_name' => 'Rejected']);
    }
}

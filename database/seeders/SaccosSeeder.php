<?php

namespace Database\Seeders;

use App\Models\Saccos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaccosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Saccos::create(['saccos_name' => 'Umoja Saccos','status' => 1]);
        Saccos::create(['saccos_name' => 'Utumishi Saccos', 'status' => 1]);
        Saccos::create(['saccos_name' => 'Fanikiwa Saccos', 'status' => 1]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\AcademicTraining;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicTraining::factory(500)->create();
    }
}

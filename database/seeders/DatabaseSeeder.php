<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(JobOffersSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(RequirementsSeeder::class);

        $this->call(PersonSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(CurriculumSeeder::class);
        $this->call(AcademicTrainingSeeder::class);

    }
}

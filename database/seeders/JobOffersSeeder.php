<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobOffer;

class JobOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\JobOffer::factory(50)->create();
        /* $user = JobOffer::create([
            'title'=> 'admin',
            'type_job' => 'admin',
            'modality' => 'admin',
            'salary' => 'admin',
            'description'=> 'admin',
            'company_id'=> 'admin',
            'requirement_id'=> 'admin',
            'benefit_id'=> 'admin',
        ]); */
     
    }
}

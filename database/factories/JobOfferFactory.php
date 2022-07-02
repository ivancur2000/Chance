<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JobOffer;
use App\Models\Benefit;
use App\Models\Profession;
use App\Models\Company;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobOffer>
 */
class JobOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    

    public function definition()
    {
        
        return [
            'title' => $this->faker->name(),
            'type_job' => $this->faker->word(),
            'modality' => $this->faker->word(),
            'salary'=> $this->faker->numberBetween(100,6000),
            'description'=> $this->faker->word(),
            'company_id'=> Company::all()->random()->id,
            'benefit_id'=> Benefit::all()->random()->id,
            'profession_id'=> Profession::all()->random()->id,
        ];
    }
}

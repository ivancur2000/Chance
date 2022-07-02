<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profession;
use App\models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->word(),
            'web_site' => $this->faker->word(),
            'facebook'=> $this->faker->word(),
            'linkedin' => $this->faker->name(),
            'twitter' => $this->faker->word(),
            'employes' => $this->faker->numberBetween(0,100),
            'user_id'=> User::all()->random()->id,
           
        ];
    }
}

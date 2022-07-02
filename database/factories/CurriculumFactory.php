<?php

namespace Database\Factories;

use App\Models\Profession;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curriculum>
 */
class CurriculumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(150),
            'salary_aspiration' => $this->faker->numberBetween(2000, 10000),
            'modality' => $this->faker->word(),
            'type_job' => $this->faker->word(),
            'profession_id' => Profession::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'created_at' => now()
        ];
    }
}

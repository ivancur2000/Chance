<?php

namespace Database\Factories;

use App\Models\Curriculum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcademicTraining>
 */
class AcademicTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'institution' => $this->faker->word(),
            'academic_level' => $this->faker->text(12),
            'start_date' => date_create('15-02-2019'),
            'end_date' => now(),
            'tesis' => $this->faker->word(),
            'curriculum_id' => Curriculum::all()->random()->id
        ];
    }
}

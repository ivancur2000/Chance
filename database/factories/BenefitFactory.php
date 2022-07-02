<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BenefitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vacations' => $this->faker->numberBetween(0,1),
            'vacation_bonus' => $this->faker->numberBetween(0,1),
            'social_insurance' => $this->faker->numberBetween(0,1),
            'life_insurance'=>$this->faker->numberBetween(0,1),
            'major_expenses_insurance'=> $this->faker->numberBetween(0,1),
            'bonus' => $this->faker->numberBetween(0,1),
            'food_vouchers' => $this->faker->numberBetween(0,1),
            'transportation' => $this->faker->numberBetween(0,1),
            'saving_funds'=> $this->faker->numberBetween(0,1),
            'loans'=> $this->faker->numberBetween(0,1),
            'dining_room'=>$this->faker->numberBetween(0,1),
            'commissions'=> $this->faker->numberBetween(0,1),
            

        ];
    }
}

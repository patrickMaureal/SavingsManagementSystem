<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'user_id' => \App\Models\User::factory(), // Associate a user
			'name' => $this->faker->sentence,
			'target_amount' => $this->faker->randomFloat(2, 50, 1000),
			'start_date' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
			'end_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
		];
	}
}

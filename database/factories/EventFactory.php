<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph(),
            'date' => $this->faker->dateTimeBetween('-1 month', '+3 month'),
            'quota' => $this->faker->numberBetween(100, 500),
            'location' => $this->faker->address(),
//            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}

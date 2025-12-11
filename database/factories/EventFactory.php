<?php

namespace Database\Factories;

use App\Models\Organizer;
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
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'type' => $this->faker->randomElement(['Concert', 'Seminar', 'Art']),
//            'date' => $this->faker->date(),
            'date' => $this->faker->dateTimeBetween('now')->format('Y-m-d'),
            'organizer_id' => Organizer::query()->inRandomOrder()->first()->id,
        ];
    }
}

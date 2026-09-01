<?php

namespace Database\Factories;

use App\Models\Meter;
use App\Models\Reading;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reading>
 */
class ReadingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meter_id' => Meter::factory(),
            'value' => $this->faker->randomFloat(3, 0, 5000),
            'noted_at' => $this->faker->dateTimeBetween('-60 days', 'now'),
            'notes' => $this->faker->optional(0.3)->sentence(),
        ];
    }
}

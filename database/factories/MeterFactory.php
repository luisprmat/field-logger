<?php

namespace Database\Factories;

use App\Models\Meter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Meter>
 */
class MeterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => strtoupper(Str::random(6)),
            'name' => $this->faker->company.' Meter',
            'location_lat' => $this->faker->latitude(30, 40),
            'location_lng' => $this->faker->longitude(-105, -95),
            'unit' => $this->faker->randomElement(['bbl', 'mcf']),
        ];
    }
}

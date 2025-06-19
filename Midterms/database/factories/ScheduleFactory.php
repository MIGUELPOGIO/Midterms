<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day_of_the_week' => $this->faker->dayOfWeek(),
            'time_slot' => $this->faker->dateTime(),
            'room' => $this->faker->numberBetween(100, 400),
            'term' => $this->faker->numberBetween(1, 3),
        ];
    }
}

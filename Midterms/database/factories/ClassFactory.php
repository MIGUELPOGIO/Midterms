<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => $this->faker->text(50),
            'course_code' => $this->faker->text(10),
            'credits' => $this->faker->numberBetween(1, 4),
            'description' => $this->faker->sentence(),
        ];
    }
}

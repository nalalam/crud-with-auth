<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'title' => $this->faker->name,
            'path' => $this->faker->imageUrl(640,480),
            'alt' => $this->faker->sentence(),
            'caption' => $this->faker->sentence(),
            'created_by' => $this->faker->email(),
            'updated_by' => $this->faker->email()
        ];
    }
}

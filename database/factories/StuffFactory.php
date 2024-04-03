<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stuff>
 */
class StuffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fake = fake('id_ID');

        return [
            'id' => $fake->unique()->numerify('S0##'),
            'name' => $fake->name(),
            'price' => $fake->numerify('###00'),
            'unit' => $fake->randomElement(['Box', 'Sachet', 'Buah']),
            'status' => $fake->randomElement([0 , 1]),
            'id_category' => 0,
        ];
    }
}

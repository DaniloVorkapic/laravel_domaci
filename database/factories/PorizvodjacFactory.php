<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Porizvodjac>
 */
class PorizvodjacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv'=>$this->faker->word(),
           'drzava'=>$this->faker->word(),
           
        ];
    }
}

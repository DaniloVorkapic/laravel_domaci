<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Porizvodjac;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skije>
 */
class SkijeFactory extends Factory
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
            'godina_proizvodnje'=>$this->faker->numberBetween(2007,2022),
            'visina'=>$this->faker->numberBetween(100,185),
            'user_id'=>User::factory(),
            'proizvodjac_id'=>Porizvodjac::factory(),
            'kategorija_id'=>$this->faker->numberBetween(1,4),
            
        ];
    }
}

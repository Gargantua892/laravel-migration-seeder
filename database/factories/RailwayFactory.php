<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Railway>
 */
class RailwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> company(),
            'stazione_di_partenza' => fake() -> city(),
            'stazione_di_arrivo' => fake() -> city(),
            'orario_di_partenza' => fake() -> dateTimeBetween('-2 day', '-1 day'),
            'orario_di_arrivo' => fake() -> dateTimeBetween('-1 day', '0 day'),
            'codice_treno' => fake() -> unique() -> numerify('##########'),
            'numero_carrozze' => fake() -> numberBetween(1, 20),
            'in_time' => fake() -> boolean(),
            'deleted' => fake() -> boolean()
        ];
    }
}

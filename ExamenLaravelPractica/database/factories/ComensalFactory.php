<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comensal>
 */
class ComensalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'email' => $this->faker->email,
            'telefono' => $this->faker->phoneNumber,
            'fecha' => $this->faker->dateTimeInInterval('+7 days', '+1 days', null),
            //Reserves a un màxim de 7 dies
            'mesa_id' => \App\Models\Mesa::factory() //Encara que mesa_id s'omplirà al seeder ComensalSeeder, aquest camp l'hem de definir així, no el podem deixar buit perquè recycle() funcioni
        ];
    }
}

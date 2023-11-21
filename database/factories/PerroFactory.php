<?php

namespace Database\Factories;

use App\Models\Perro;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perro>
 */
class PerroFactory extends Factory
{
    protected $perro = Perro::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $prefijos = (["El vicio", "Tanis", "Max", "Body", "Milaneso", "Boby", "Chocolate", "Frijol", "Palamo"]);

        //for ($i = 0; $i < 10; $i++) {
          //  $nombresPersonalizados = $prefijos[array_rand($prefijos)];
        //}
        $nombresperro = $this->faker->randomElement($prefijos);
        //->unique()->randomElement($prefijos);
        
        return [
        'nombre' => $nombresperro,
        'dueño_id' => Usuario::inRandomOrder()->first()->id
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\TypeContracts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TypeContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            TypeContracts::factory()->make([
                'name' => 'OPS'
            ]);
            TypeContracts::factory()->make([
                'name' => 'Labor'
            ]);
            TypeContracts::factory()->make([
                'name' => 'Termino Fijo'
            ]);
            TypeContracts::factory()->make([
                'name' => 'Termino Indefinido'
            ]);
            TypeContracts::factory()->make([
                'name' => 'Aprendizaje'
            ]);
            TypeContracts::factory()->make([
                'name' => 'Ocacional'
            ]);
    }
}

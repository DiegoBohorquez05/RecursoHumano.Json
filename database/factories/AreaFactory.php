<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \app\Models\Area;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        Area::factory()->make([
            'name'=>'Administracion',
            'description' => 'abcd'
        ]);
        Area::factory()->make([
            'name'=>'Desarrollo',
            'description' => 'efgh'
        ]);
        Area::factory()->make([
            'name'=>'RRHH',
            'description' => 'ijkl'
        ]);
        Area::factory()->make([
            'name'=>'DeOps',
            'description' => 'mnop'
        ]);
    }
}

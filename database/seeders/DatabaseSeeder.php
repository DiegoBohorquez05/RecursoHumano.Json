<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\TypeContracts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Area::factory(4)->create();
        \Database\Factories\TypeContratoFactory::factory(6)->create();
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Usuario1',
        //     'email' => 'test@example.com',
        //     'password' => 'password1'	
        // ]);
    }
}

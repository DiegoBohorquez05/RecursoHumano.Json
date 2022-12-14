<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\TypeContract;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Area::factory(4)->create();
        TypeContract::factory()->create();
        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Usuario1',
        //     'email' => 'test@example.com',
        //     'password' => 'password1'	
        // ]);
    }
}

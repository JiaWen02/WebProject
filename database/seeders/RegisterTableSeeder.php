<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Register::factory()->count(10)->create(); 
    }
}

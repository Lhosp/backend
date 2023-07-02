<?php

namespace Database\Seeders;

class UserSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        \App\Models\User::factory()->count(10)->create();
    }
}

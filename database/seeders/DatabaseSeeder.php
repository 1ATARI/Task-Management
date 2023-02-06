<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
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
        // \App\Models\User::factory(10)->create();

        Task::factory(10000)->create();
        \App\Models\User::factory()->create([
            'name' => 'super admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('11111111'),
        ]);
    }
}

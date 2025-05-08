<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\School::factory(100)->create();


        // \App\Models\Watchers::factory(500)->create();

         \App\Models\VotingTransaction::factory(250)->create();

        // \App\Models\User::factory()->create([
        //     'username' => 'Luke Garcia',
        //     'email' => 'luke@gmail.com',
        //     'Watchers_id' => '3',
        // ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Reaction::factory(300)->create();

    }
}

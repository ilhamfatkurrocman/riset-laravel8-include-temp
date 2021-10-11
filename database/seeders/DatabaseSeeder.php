<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // php artisan db:seed
    // ATAU
    // php artisan migrate:fresh --seed
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\UsersDetail::factory(10)->create();
    }
}

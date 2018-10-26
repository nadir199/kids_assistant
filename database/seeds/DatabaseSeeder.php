<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(EnfantsTableSeeder::class);
        $this->call(PropositionsTableSeeder::class);
        $this->call(CentresTableSeeder::class);
        $this->call(ActivitesTableSeeder::class);
    }
}

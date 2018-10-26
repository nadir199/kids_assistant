<?php

use Illuminate\Database\Seeder;
use App\Centre;

class CentresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('centres')->delete();
        Centre::create([
        	'designation' => 'Literature',
        ]);
        Centre::create([
        	'designation' => 'Sport',
        ]);
        Centre::create([
        	'designation' => 'Education',
        ]);
    }
}

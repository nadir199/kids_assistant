<?php

use Illuminate\Database\Seeder;
use App\Proposition;

class PropositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('propositions')->delete();
        Proposition::create([
        	'nom' => 'Lecture',
        	'description' => 'Lire quelques pages d\'un livre',
        	'categorie' => 'Literature',
        ]);
        Proposition::create([
        	'nom' => 'Match',
        	'description' => 'Jouer à un match de foot',
        	'categorie' => 'Sports',
        ]);
        Proposition::create([
        	'nom' => 'Exercice',
        	'description' => 'Faire ces exercices scolaires',
        	'categorie' => 'Education',
        ]);
    }
}

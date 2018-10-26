<?php

use Illuminate\Database\Seeder;
use App\Activite;

class ActivitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('activites')->delete();
        Activite::create([
        	'nom' => 'Lecture',
        	'description' => 'Lire 10 pages de son livre préféré',
        	'categorie' => 'Literature',
            'dateDebut' => date("2018-10-28 20:00:00"),
            'dateFin' => date("2018-10-28 21:00:00"),
            'enfant_id' => 1,
            'proposition_id' => 1,
        ]);
        Activite::create([
        	'nom' => 'Jeux',
        	'description' => 'Jouer une partie de jeu d\'echec',
        	'categorie' => 'Divertissement',
            'dateDebut' => date("2018-10-28 19:00:00"),
            'dateFin' => date("2018-10-28 20:00:00"),
            'enfant_id' => 2,
            'proposition_id' => 2,
        ]);
    }
}

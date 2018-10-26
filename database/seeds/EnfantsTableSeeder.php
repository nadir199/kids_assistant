<?php

use Illuminate\Database\Seeder;
use App\Enfant;

class EnfantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('enfants')->delete();
        Enfant::create([
        	'nom' => 'BENMANSOUR',
        	'prenom' => 'Khalil',
            'dateDeNaissance' => date("2012-12-09 12:00:00"),
            'sexe' => 'masculin',
            'taille' => 155,
            'poids' => 30,
            'user_id' => 1,
        ]);
        Enfant::create([
        	'nom' => 'BENMANSOUR',
        	'prenom' => 'Habib',
            'dateDeNaissance' => date("2009-08-02 12:00:00"),
            'sexe' => 'masculin',
            'taille' => 165,
            'poids' => 35,
            'user_id' => 1,
        ]);
        Enfant::create([
        	'nom' => 'BENMANSOUR',
        	'prenom' => 'Amel',
            'dateDeNaissance' => date("2011-01-02 12:00:00"),
            'sexe' => 'feminin',
            'taille' => 165,
            'poids' => 33,
            'user_id' => 1,
        ]);
        Enfant::create([
        	'nom' => 'KERRIS',
        	'prenom' => 'Nadia',
            'dateDeNaissance' => date("2011-05-12 12:00:00"),
            'sexe' => 'feminin',
            'taille' => 165,
            'poids' => 35,
            'user_id' => 2,
        ]);
    }
}

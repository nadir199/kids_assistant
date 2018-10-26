<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        User::create([
        	'name' => 'BENMANSOUR',
        	'prenom' => 'Lotfi',
        	'email' => 'lotfi@gmail.com',
        	'password' => Hash::make('password'),
            'dateDeNaissance' => date("1983-10-09 12:00:00"),
        	'remember_token' => str_random(10),
        ]);
        User::create([
        	'name' => 'KERRIS',
        	'prenom' => 'Abdelhak',
        	'email' => 'abdelhak@gmail.com',
        	'password' => Hash::make('password'),
            'dateDeNaissance' => date("1974-02-15 12:00:00"),
        	'remember_token' => str_random(10),
        ]);
        User::create([
        	'name' => 'BENMAHDI',
        	'prenom' => 'Karim',
        	'email' => 'Karim@hotmail.fr',
        	'password' => Hash::make('password'),
            'dateDeNaissance' => date("1980-03-10 12:00:00"),
        	'remember_token' => str_random(10),
        ]);
    }
}

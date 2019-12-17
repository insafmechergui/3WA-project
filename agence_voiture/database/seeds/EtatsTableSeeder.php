<?php

use Illuminate\Database\Seeder;
use App\Modules\Voiture\Models\Etat;

class EtatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Etat::create([
        	'etat'=>'Neuve',
        ]);

        Etat::create([
        	'etat'=>'Ancienne',
        ]);
        Etat::create([
        	'etat'=>'En panne',
        ]);
    }
    
}

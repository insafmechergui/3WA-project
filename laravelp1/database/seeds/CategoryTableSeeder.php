<?php

use Illuminate\Database\Seeder;
use App\Modules\Annonce\Models\Categorie;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
			'name'=>'Maison',
			'photo'=>'maison.jpeg'
	         
		]);
		Categorie::create([
			'name'=>'Appartement',
			'photo'=>'appartement.jpeg'
	         
		]);
		Categorie::create([
			'name'=>'Terrain',
			'photo'=>'terrain.jpeg'
	         
		]);
		Categorie::create([
			'name'=>'Local commercial',
			'photo'=>'local.jpeg'
	         
		]);
		
    }

}

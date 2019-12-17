<?php

use Illuminate\Database\Seeder;
use App\Modules\Voiture\Models\Type;


class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Type::create([
        	'type'=>'Tourisme',
        ]);

        Type::create([
        	'type'=>'Utilitaire',
        ]);

        Type::create([
        	'type'=>'Professionnel',
        ]);
       
        Type::create([
        	'type'=>'compacts',
        ]);
        
        Type::create([
        	'type'=>'spacieux',
        ]);
        
        Type::create([
        	'type'=>'4x4',
        ]);
        
        Type::create([
        	'type'=>'d\'occasion',
        ]);
  
    }
}

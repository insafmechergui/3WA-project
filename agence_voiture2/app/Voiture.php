<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    //
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'marque','prix', 'color' , 'nb_place', 'nb_porte', 'puissance', 'etat_id', 'type_id', 'boite_vitesse', 'consommation', 'valise',
    ];

    public function etats(){
       return $this->hasOne('App\Etat');

   }
    
    public function types(){
       return $this->hasOne('App\Type');

   }

}

<?php

namespace App\Modules\Voiture\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model {

    //
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'marque','prix', 'color' , 'nb_place', 'nb_porte', 'puissance', 'etat_id', 'type_id',
    ];

   public function types(){
       return $this->hasOne('App\Modules\Voiture\Models\Voiture', 'id', 'type_id');

   }
    
    public function etats(){
       return $this->hasOne('App\Modules\Voiture\Models\Voiture', 'id', 'etat_id');

   }
    public function medias()
       {
           return $this->hasMany('App\Modules\Voiture\Models\Media','id','voiture_id');
       }

}

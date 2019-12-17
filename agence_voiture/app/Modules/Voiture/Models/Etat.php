<?php

namespace App\Modules\Voiture\Models;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    //
     //
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'etat', 
    ];
public function voiture()
       {
           return $this->hasMany('App\Modules\Voiture\Models\Etat','etat_id','id');
       }
}
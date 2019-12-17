<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
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
           return $this->belongsTo('App\Voiture');
       }

}

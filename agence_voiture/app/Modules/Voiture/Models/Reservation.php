<?php

namespace App\Modules\Voiture\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
     //
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_location', 'date_retour', 'voiture_id', 'user_id', 
    ];

}

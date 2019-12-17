<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    //
     protected $fillable = [
        'num_permis', 'num_cin','reservation_id','validation', 
    ];
}

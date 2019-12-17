<?php

namespace App\Modules\Voiture\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
     //
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'num_permis', 'num_cin','user_id','validation', 
    ];


 }

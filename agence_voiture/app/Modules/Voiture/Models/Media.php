<?php

namespace App\Modules\Voiture\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
     //
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'voiture_id',
    ];
 public function voiture(){
       return $this->belongsTo('App\Modules\Voiture\Models\Voiture');

   }
}

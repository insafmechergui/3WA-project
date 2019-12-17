<?php

namespace App\Modules\Voiture\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
     //
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 
    ];
 public function voiture(){
       return $this->hasMany('App\Modules\Voiture\Models\Type','type_id','id');

   }
}
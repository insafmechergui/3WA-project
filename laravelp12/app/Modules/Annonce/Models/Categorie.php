<?php

namespace App\Modules\Annonce\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      
        'name',
        'photo'
     ];


     public function annonce()
       {
           return $this->hasMany('App\Modules\Annonce\Models\Annonce','category_id','id');
       }

    
}

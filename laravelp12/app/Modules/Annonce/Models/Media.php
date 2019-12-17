<?php

namespace App\Modules\Annonce\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

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
    protected $table = 'media'; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'annonce_id'
     ];

     public function annonces()
       {
           return $this->hasOne('App\Modules\Annonce\Models\Annonce', 'id', 'annonce_id');
       }

}
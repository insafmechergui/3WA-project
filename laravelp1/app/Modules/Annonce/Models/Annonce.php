<?php

namespace App\Modules\Annonce\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model {

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
        'titre',
        'prix',
        'category',
        'description',
        'etat',
        'telephone',
        'type',
        'status',
        'time_limit',
        'category_id',
        'user_id'
     ];

     public function medias()
       {
           return $this->hasMany('App\Modules\Annonce\Models\Media');
       }

    public function user()
       {
           return $this->hasOne('App\Modules\User\Models\User', 'user_id', 'id');
       }

    public function category()
       {
           return $this->hasOne('App\Modules\Annonce\Models\Categorie','id','category_id');
       }
}

<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

          /**
     * The attributes that are mass assignable.
     *

     * @var array
     */
        protected $table = 'contact'; 

    protected $fillable = [
        'name', 'email','titre', 'content',
    ];

    
   

}

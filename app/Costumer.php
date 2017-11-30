<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    //
    protected $table = "costumer";



   	protected $fillable = [
        'id_costumer','username',
    ];

    public function user(){
    	return $this->belongsTo('App\User','username');
    }


   
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //public $timestamps=false;
    //protected $fillable=['mensaje','user_id'];

    public function user(){
                
    return $this->belongsTo('App\User');
        
    } 
}

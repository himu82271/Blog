<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $table='blogs';
     protected $fillable=['title','description','image'];
     
     public function users(){
          return $this->belongsTo('App\User');
  
      }


}
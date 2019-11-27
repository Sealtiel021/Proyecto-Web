<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkDetail extends Model
{
  protected $fillable = ['date','image','state'];
    //
    public function work(){
       return $this->hasOne('App\Work');
     }
}

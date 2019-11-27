<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','provider_id'];

    public function provider(){
       return $this->belongsTo('App\Provider');
     }
    public function invoices(){
          return $this->belongsToMany('App\Invoice', 'invoice_product','id_invoice','id_product');

    }



}

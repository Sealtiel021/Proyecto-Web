<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['amount','dateInvoice','socialReason','reason','rfc'];

    public function products(){
          return $this->belongsToMany('App\Product', 'invoice_product','id_product','id_invoice');
    }
    public function works(){
          return $this->belongsToMany('App\Work','invoice_work','id_work','id_invoice');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
  protected $fillable = ['name','state','description','dateStart','dateReal','dateProjected','type','resourceOrigin','totalCost','publicPorcent','privatePorcent','locate','lat','lng','work_detail_id'];
  public function detail(){
     return $this->belongsTo('App\WorkDetail','work_detail_id');
   }
   public function invoices(){
      return $this->belongsToMany('App\Invoice','invoice_work','id_invoice','id_work');

    }

    //
}

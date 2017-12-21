<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_buy extends Model
{
    //
    protected $table ='detail_buy';
	protected $guarded =[];

	 public function oders()
    {
        return $this->belongsTo('App\Buy_product','idBuy');
    }

    public function products()
    {
        return $this->hasOne('App\Products','idPro');
    }
}

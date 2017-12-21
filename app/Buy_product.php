<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy_product extends Model
{
	protected $table ='buy_product';
    //
    public function supplier()
	{
		return $this->belongsTo('App\Supplier','idSup');
	}
	public function admin()
	{
		return $this->belongsTo('App\Admin_users','idUser');
	}
}

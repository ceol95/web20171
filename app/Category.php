<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='category';
	protected $guarded =[];
	
	public function products()
	{
		return $this->hasMany('App\Products','cat_id');
	}
	public function news()
	{
		return $this->hasMany('App\News','cat_id');
	}

	public function parent(){
		return $this->hasOne('App\Category','id','parent_id');
	}
	public function children(){
		return $this->hasMany('App\Category','parent_id','id');
	}
	public static function tree(){
		return static::with(implode('.',array_fill(0, 4, 'children')))->where('parent_id','=',0)->get();
	}
}

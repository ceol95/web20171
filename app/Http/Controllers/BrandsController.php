<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Brands;
use App\Http\Requests\AddBrandRequest;
use DateTime;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
   public function getlist()
   {
		$data = Brands::all();
		return View ('back-ends.brands.listBrand',['data'=> json_encode($data)]);
   }
   public function getaddall()
   {
      $data = Brands::all();
      return $data;


   }
   
   public function findlist()
   {

      $search = "%".Input::get('txtFind')."%";
      $data = DB::table('brands')
                ->where('name', 'like', $search)
                ->paginate(10);
      return View ('back-end.brands.list',['data'=> $data]);
   }
   
   
   public function getadd()
   {	
		
		return View ('back-end.brands.add',['data'=>null]);
   }
   public function postadd()
   {
		$brand = new Brands();
      $brand->name= Input::get('name');
      $brand->created_at = new DateTime;
      if ($brand->save()) $mgs = "OK";
      else $mgs = "Error";
      return $mgs;
      
   }

   public function getedit($id)   {
      $data = Brands::findOrFail($id)->toArray();
      return View ('back-end.brands.edit',['data'=>$data]);
   }
   public function postedit()
   {

      
      $brand = Brands::find(Input::get('id'));
      $brand->name = Input::get('name');
      $brand->updated_at = new DateTime;
      if ($brand->save()) $mgs = "OK";
      else $mgs = "Error";
      
      return $mgs;

   }
   public function getdel()
   {
     $array_id = explode(",", Input::get('id'));
      $kq = true;
      foreach ($array_id as $value)
      {
            $cat = Brands::find($value);
            if ($cat->delete()) $mgs = "OK";
            else{
               $mgs = "Error";
               break; 
            } 

      }
      return ($mgs);
   }
}

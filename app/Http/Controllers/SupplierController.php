<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Supplier;
use App\Http\Requests\AddCategoryRequest;
use DateTime;
use Illuminate\Support\Facades\Input;
class SupplierController extends Controller
{
   public function getlist()
   {
		$data = Supplier::all();
		return View ('back-ends.supplier.sup-list',['data'=> json_encode($data)]);
   }
   public function getlistall()
   {
      $data = Supplier::all();
      return $data;

   }
   public function getadd()
   {	
		$data = Supplier::all();
		//return View ('back-ends.supplier.add',['data'=>$data]);
   }
   public function postadd()
   {
      
		$cat = new Supplier();
      $cat->name= Input::get('name');
      $cat->location= Input::get('location');
      $cat->supply= Input::get('supply');
      $cat->phone= Input::get('phone');
      $cat->codeTax= Input::get('codeTax');
      $cat->email= Input::get('email');
      if ($cat->save()) $mgs = "OK";
      else $mgs = "Error";
      return $mgs;
         
   }
   public function getedit($id)   {
      $cat = Category::all();
      $data = Category::findOrFail($id)->toArray();
      //return View ('back-end.category.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit()
   {
      $cat = Supplier::find(Input::get('id'));
      $cat->name= Input::get('name');
      $cat->location= Input::get('location');
      $cat->supply= Input::get('supply');
      $cat->phone= Input::get('phone');
      $cat->codeTax= Input::get('codeTax');
      $cat->email= Input::get('email');
      
      if ($cat->save()) $mgs = "OK";
      else $mgs = "Error";
      return $mgs;

   }
   public function getdel()
   {
      $array_id = explode(",", Input::get('id'));
      $kq = true;
      foreach ($array_id as $value)
      {
            $cat = Supplier::find($value);
            if ($cat->delete()) $mgs = "OK";
            else{
               $mgs = "Error";
               break; 
            } 

      }
      return ($mgs);

   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Input;
use DateTime;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
   public function getlist()
   {
   		$data = User::all();
    	return view('back-ends.user.list-user',['data'=>$data]);
   }
   public function getedit($id)
   {
   		$data = User::where('id',$id)->first();
   		return view('back-end.users.edit',['data'=>$data]);
   }
   public function getAll(){
      $data = User::all();
      return $data;
   }
   public function postedit(){
      $user = User::find(Input::get('id'));
      $user->name = Input::get('name');
      $user->email = Input::get('email');
      $user->phone = Input::get('phone');
      $user->address = Input::get('address');
      $user->status = Input::get('status');
      $user->updated_at = new DateTime;
      if ($user->save()) $mgs = "OK";
      else $mgs = "Error";
      
      return $mgs;
      
   }
   public function getdel()
   {
     $array_id = explode(",", Input::get('id'));
      $kq = true;
      foreach ($array_id as $value)
      {
            $user = User::find($value);
            if ($user->delete()) $mgs = "OK";
            else{
               $mgs = "Error";
               break; 
            } 

      }
      return ($mgs);
   }
}

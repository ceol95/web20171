<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin_users;
use Illuminate\Support\Facades\Input;
use DateTime;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Admin_usersController extends Controller
{
    public function getlist()
   {
   		$data = Admin_users::all();
    	return view('back-ends.employee.list-em',['data'=>$data]);
   }

   public function loadAll(){
      $data = Admin_users::all();
      return $data;
   }
   public function postedit(){
      $user = Admin_users::find(Input::get('id'));
      $user->name = Input::get('name');
      $user->password = bcrypt(Input::get('phone'));
      $user->email = Input::get('email');
      $user->phone = Input::get('phone');
      $user->level = Input::get('level');
      $user->status = Input::get('status');
      $user->updated_at = new DateTime;
      if ($user->save()) $mgs = "OK";
      else $mgs = "Error";
      
      return $mgs;
      
   }
   public function postadd(){
      $user = new Admin_users();
      $user->name = Input::get('name');
      $user->password = bcrypt(Input::get('phone'));
      $user->email = Input::get('email');
      $user->phone = Input::get('phone');
      $user->level = Input::get('level');
      $user->status = Input::get('status');
      $user->updated_at = new DateTime;
      $user->created_at = new DateTime;
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
            $user = Admin_users::find($value);
            if ($user->delete()) $mgs = "OK";
            else{
               $mgs = "Error";
               break; 
            } 

      }
      return ($mgs);
   }
}

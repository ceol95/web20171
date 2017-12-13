<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    public function addToTable($var , $route)
   {
	 	if ($var->save())
	      {
	         return redirect()->route($route)
	         ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
	      }
	      else
	      {
	         return redirect()->route($route)
	         ->with(['flash_error'=>'error_msg','flash_massage'=>' Thêm không thành công !']);
	      }
   }
   public function updateToTable($var , $route)
   {
	 	if ($var->save())
	      {
	         return redirect()->route($route)
	         ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
	      }
	      else
	      {
	         return redirect()->route($route)
	         ->with(['flash_error'=>'error_msg','flash_massage'=>' Sửa không thành công !']);
	      }
   }
   public function delToTable($var , $route, $table)
   {
	 	if ($var->delete())
	      {
	         return redirect()->route($route)
	         ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã xóa thành công !']);
	      }
	      else
	      {
	         return redirect()->route($route)
	         ->with(['flash_error'=>'error_msg','flash_massage'=>' Xóa không thành công! Xem ràng buộc ở '.$table]);
	      }
   }
}

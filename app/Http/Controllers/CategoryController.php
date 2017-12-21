<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Http\Requests\AddCategoryRequest;
use DateTime;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
   public function getlist()
   {
		$data = Category::all();
		return View ('back-ends.category.cat-list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = Category::all();
		return View ('back-ends.category.add',['data'=>$data]);
   }
   public function postadd(AddCategoryRequest $rq)
   {
		$cat = new Category();
      $parent = Category::find($rq->sltCate);
      if($rq->sltCate == '0'){
         if (Input::get('txtCat'))
            $cat->cat .= Input::get('txtCat');
         if (Input::get('txtMenu')&&$cat->cat!=null)
            $cat->cat .= ' ,'.Input::get('txtMenu');
         else 
            $cat->cat .= Input::get('txtMenu');
      }
      else $cat->cat = $parent->cat; 
      $cat->parent_id= $rq->sltCate;
      $cat->name= $rq->txtCateName;
      $cat->slug = str_slug($rq->txtCateName,'-');
      
      $cat->created_at = new DateTime;
      return Controller::addToTable($cat,'getcat');
     
   }
   public function getedit($id)   {
      $cat = Category::all();
      $data = Category::findOrFail($id)->toArray();
      return View ('back-ends.category.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id,AddCategoryRequest $request)
   {
      $cat = category::find($id);
      $parent =  category::find($request->sltCate);
      $cat->cat ="";
      if($request->sltCate == '0'){
         if (Input::get('txtCat'))
            $cat->cat .= Input::get('txtCat');
         if (Input::get('txtMenu')&&$cat->cat!=null)
            $cat->cat .= ' ,'.Input::get('txtMenu');
         else 
            $cat->cat .= Input::get('txtMenu');
      }
      else $cat->cat = $parent->cat;
      $cat->name = $request->txtCateName;
      $cat->slug = str_slug($request->txtCateName,'-');
      $cat->parent_id = $request->sltCate;
      $cat->updated_at = new DateTime;
      
     
      $cat->save();
      return Controller::updateToTable($cat,'getcat');

   }
   public function getdel($id)
   {
      $parent_id = category::where('parent_id',$id)->count();
      if ($parent_id==0) {
         $category = category::find($id);
         $category->delete();
         return redirect()->route('getcat')
         ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
      } else{
         echo '<script type="text/javascript">
                  alert("Không thể xóa danh mục này !");                
                window.location = "';
                echo route('getcat');
            echo '";
         </script>';
      }
   }
}

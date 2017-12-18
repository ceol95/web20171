<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddNewsRequest;
use App\Http\Requests\EditNewsRequest;

use App\Http\Requests;
use App\News;
use App\Category;
use Auth;
use DateTime,File,Input,DB;

class NewsController extends Controller
{
    public function getlist()
    {
    	$data = News::all();
        foreach ($data as $row) {
            $row->cat_id = $row->category->name;
        }
    	return view('back-ends.news.list-new',['data'=>$data]);
    }
    public function getAllnews(){
        $data = News::all();
        foreach ($data as $row) {
            $row->cat_id = $row->category->name;
        }
        return $data;
    }
    public function getadd()
    {    	
		$cat= Category::where('parent_id',13)->get();

    	return view('back-ends.news.add',['cat'=>$cat]);
    }

    public function postadd(AddNewsRequest $rq)
    {
    	$n = new News();
    	$n->title = $rq->txtTitle;
    	$n->slug = str_slug($rq->txtTitle,'-');
    	$n->author = $rq->txtAuth;
    	$n->tag = $rq->txttag;
    	$n->status = $rq->slstatus;
    	$n->source = $rq->txtSource;
    	$n->intro = $rq->txtIntro;
    	$n->full = $rq->txtFull;
    	$n->cat_id = $rq->sltCate;
    	$n->user_id = Auth::guard('admin')->user()->id;
    	$n->created_at = new datetime;

    	$f = $rq->file('txtimg')->getClientOriginalName();
    	$filename = time().'_'.$f;
    	$n->images = $filename;    	
    	$rq->file('txtimg')->move('public/uploads/news/',$filename);

    	$n->save();
    	return redirect('admin/news')
      	->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);    	
    }
    public function getedit($id)
    {	$cat= Category::where('parent_id',13)->get();
    	$n = News::where('id',$id)->first();
    	return view('back-ends.news.edit',['data'=>$n,'cat'=>$cat]);
    }
    public function postedit(EditNewsRequest $rq,$id)
    {
    	$n = News::find($id);
    	$n->title = $rq->txtTitle;
    	$n->slug = str_slug($rq->txtTitle,'-');
    	$n->author = $rq->txtAuth;
    	$n->tag = $rq->txttag;
    	$n->status = $rq->slstatus;
    	$n->source = $rq->txtSource;
    	$n->intro = $rq->txtIntro;
    	$n->full = $rq->txtFull;
    	$n->cat_id = $rq->sltCate;
    	$n->user_id = Auth::guard('admin')->user()->id;
    	$n->created_at = new datetime;

    	$file_path = public_path('public/uploads/news/').$n->images;
    	 if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            
            $f = $rq->file('txtimg')->getClientOriginalName();
            $filename = time().'_'.$f;
            $n->images = $filename;       
            $rq->file('txtimg')->move('public/uploads/news/',$filename);
        }

    	$n->save();
    	return redirect('admin/news')
      	->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
    }
    public function getdel($id)
    {
       
        $pro = News::find($id);
        $pro->delete();
        return redirect('admin/news')
         ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
    }

    public function getdellist()
   {
     $array_id = explode(",", Input::get('id'));
      $kq = true;
      foreach ($array_id as $value)
      {
            $cat = News::find($value);
            if ($cat->delete()) $mgs = "OK";
            else{
               $mgs = "Error";
               break; 
            } 

      }
      return ($mgs);
   }
}

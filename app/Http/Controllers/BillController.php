<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddNewsRequest;
use App\Http\Requests\EditNewsRequest;

use App\Http\Requests;
use App\Buy_Product;
use App\Detail_buy;
use App\Supplier;
use App\Products;
use Auth;
use DateTime,File,DB;
use Illuminate\Support\Facades\Input;

class BillController extends Controller
{
    public function getlist()
    {
    	$data = Buy_Product::all();
        foreach ($data as $row) {
            $row->idSup = $row->supplier->name;
            $row->idUser = $row->admin->name;
        }
    	return view('back-ends.bill.list',['data'=>$data]);
    }
    public function getAll(){
        $data = Buy_Product::all();
        foreach ($data as $row) {
            $row->idSup = $row->supplier->name;
            $row->idUser = $row->admin->name;
        }
        return $data;
    }
    public function getadd()
    {    	
		$supp= Supplier::all();
        $pro = Products::all();

    	return view('back-ends.bill.add',['supp'=>$supp,'pro'=>$pro]);
    }

    public function postadd()
    {
    	$bill = new Buy_Product();
        $bill->idSup = Input::get('sltSup');
        $bill->idUser = Auth::guard('admin')->user()->id;
        $bill->created_at = new datetime;
        $bill->updated_at = new datetime;
        
        $bill->maybe_Rec = Input::get('txtMaybeRec');
        $bill->receive_at = Input::get('txtRec');
        $bill->total = Input::get('txtTotal');
        $bill->save();
        $bill_id =$bill->id;

        $ID = Input::get('txtid');
        $SL = Input::get('txtSL');
        $DG = Input::get('txtDG');
        for( $i=0; $i<count($ID); $i++){
            $detail = new Detail_buy();
            $detail->idBuy = $bill_id;
            $detail->idPro = $ID[$i];
            $detail->quantity = $SL[$i];
            $detail->priceOne = $DG[$i];
            $detail->created_at = new datetime;
            $detail->updated_at = new datetime;
            $detail->save();
        }


    	return redirect('admin/muahang')
      	->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);    	
    }
    public function getedit($id)
    {	
        $bill= Buy_Product::where('id',$id)->get();
    	$supp= Supplier::all();
        $pro = Products::all();
        $data = DB::table('detail_buy')
                    ->join('products', 'products.id', '=', 'detail_buy.idPro')
                    ->where('idBuy',$id)
                    ->get();

        return view('back-ends.bill.edit',['supp'=>$supp,'pro'=>$pro,'bill'=>$bill,'data'=>$data]);
    }
    public function postedit($id)
    {
        $idDel = explode(" ", Input::get('txtDel'));
    	$bill = Buy_Product::where('id',$id)->first();
        $bill->idSup = Input::get('sltSup');
        $bill->idUser = Auth::guard('admin')->user()->id;
        $bill->created_at = new datetime;
        $bill->updated_at = new datetime;
        
        $bill->maybe_Rec = Input::get('txtMaybeRec');
        $bill->receive_at = Input::get('txtRec');
        $bill->total = Input::get('txtTotal');
        $bill->save();
        $bill_id =$bill->id;

        
        //print_r($idDel);
        for ($i=1;$i<count($idDel);$i++){
            $detail = Detail_buy::where('idBuy',$id)->where('idPro',$idDel[$i])->first();
            $detail->delete();
        }


        $ID = Input::get('txtidOld');
        $SL = Input::get('txtSLOld');
        $DG = Input::get('txtDGOld');
        for( $i=0; $i<count($ID); $i++){

            $detail = Detail_buy::where('idBuy',$id)->where('idPro',$ID[$i])->first();
            print_r($detail);
            $detail->quantity = $SL[$i];
            $detail->priceOne = $DG[$i];
            $detail->updated_at = new datetime;
            $detail->save();
        }

        $ID = Input::get('txtid');
        $SL = Input::get('txtSL');
        $DG = Input::get('txtDG');
        for( $i=0; $i<count($ID); $i++){
            $detail = new Detail_buy();
            $detail->idBuy = $bill_id;
            $detail->idPro = $ID[$i];
            $detail->quantity = $SL[$i];
            $detail->priceOne = $DG[$i];
            $detail->created_at = new datetime;
            $detail->updated_at = new datetime;
            $detail->save();
        }

        return redirect('admin/muahang')
        ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);   
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

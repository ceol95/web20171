@extends('front-end.layouts.list')
@section('content')
<div class="breadcrumbs">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{ url('/') }}">Trang chủ</a></li>
      <li class="active">Giỏ hàng</li>
    </ul>
  </div>
</div>

<div class="main">
  <div class="container">
    <div class="cart">
      
        <div class="table-responsive">
          <table class="table custom-table">
            <thead>
              <tr class="first last">
                <th>ID</th>
                <th>Ảnh</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
              </tr>
            </thead>
            <tbody>
              @foreach(Cart::content() as $row)
              <tr>
                <td class="text-center">{!!$row->id!!}</td>
                <td class="text-center"><img src="{!!url('public/uploads/products/'.$row->options->img)!!}" alt="dell" width="80" height="50"></td>
                <td class="text-center">{!!$row->name!!}</td>
                <td class="qty">
                  <div class="input-group">
                    @if (($row->qty) >1)
                    <span class="input-group-btn">
                    <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-down')!!}" class="btn">-</a> 
                    </span>
                    @endif
                    <input type="text" class="qty text-cente form-control" value=" {!!$row->qty!!}" style=" font-weight:bold; font-size:15px; color:blue;" readonly="readonly"> 
                    @if (($row->qty)< 100)
                    <span class="input-group-btn">
                    <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-up')!!}" class="btn">+</a>
                    </span>
                    @endif
                  </div><!-- /input-group -->
                </td>
                <td class="subtotal">{!! number_format($row->price) !!} Vnd</td>
                <td class="grandtotal">{!! number_format($row->qty * $row->price) !!} Vnd</td>
                <td class="text-center"><a href="{!!url('gio-hang/delete/'.$row->rowId)!!}" onclick="return xacnhan('Xóa sản phẩm này ?')" ><span class="glyphicon glyphicon-remove" style="padding:5px; font-size:18px; color:red;"></span></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-sm-4 pull-right">
            <table class="table table-cart-total">
              <tr>
                <td>Tổng sản phẩm:</td>
                <td class="text-right">{!!Cart::count()!!}</td>
              </tr>
              <tr>
                <td>Tổng tiền:</td>
                <td class="text-right">{!!Cart::subtotal()!!} Vnd</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 no-paddng">
              @if(Cart::count() !=0)
                @if (Auth::guest())
                  <div class="input-group">
                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                        <option value="cod">COD (thanh toán khi nhận hàng)</option>
                        <option value="paypal">Paypal (Thanh toán qua Paypal)</option>                      
                      </select>
                    </div>
                  <a class="btn btn-large btn-warning pull-right" href="{!!url('/login')!!}" >Tiến hàng thanh toán</a>
                @else
                  <form action="{!!url('/dat-hang')!!}" method="get" accept-charset="utf-8">                    
                    <div class="input-group">
                    <label for="paymethod">Chọn phương thức thanh toán</label>
                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                        <option value="">Hãy chọn phương thức thanh toán</option> 
                        <option value="paypal">Thanh toán trực tuyến ( Paypal )</option> 
                        <option value="cod"> Thanh toán khi nhận hàng ( COD )</option>
                      </select>
                    </div>
                    <hr>
                      <div class="text-right">

                        <a href="{!!url('/')!!}" class="btn btn-default btn-md">Tiếp tục mua hàng</a>
                        <button type="submit" class="btn btn-danger btn-md">Tiến hành thanh toán</button>
                      </div>
                  </form>
                @endif
              @endif
              </div>

    </div>
  </div>
</div><!-- /.main -->
@endsection


<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo e(url('/')); ?>">Trang chủ</a></li>
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
              <?php foreach(Cart::content() as $row): ?>
              <tr>
                <td class="text-center"><?php echo $row->id; ?></td>
                <td class="text-center"><img src="<?php echo url('public/uploads/products/'.$row->options->img); ?>" alt="dell" width="80" height="50"></td>
                <td class="text-center"><?php echo $row->name; ?></td>
                <td class="qty">
                  <div class="input-group">
                    <?php if(($row->qty) >1): ?>
                    <span class="input-group-btn">
                    <a href="<?php echo url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-down'); ?>" class="btn">-</a> 
                    </span>
                    <?php endif; ?>
                    <input type="text" class="qty text-cente form-control" value=" <?php echo $row->qty; ?>" style=" font-weight:bold; font-size:15px; color:blue;" readonly="readonly"> 
                    <?php if(($row->qty)< 100): ?>
                    <span class="input-group-btn">
                    <a href="<?php echo url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-up'); ?>" class="btn">+</a>
                    </span>
                    <?php endif; ?>
                  </div><!-- /input-group -->
                </td>
                <td class="subtotal"><?php echo number_format($row->price); ?> Vnd</td>
                <td class="grandtotal"><?php echo number_format($row->qty * $row->price); ?> Vnd</td>
                <td class="text-center"><a href="<?php echo url('gio-hang/delete/'.$row->rowId); ?>" onclick="return xacnhan('Xóa sản phẩm này ?')" ><span class="glyphicon glyphicon-remove" style="padding:5px; font-size:18px; color:red;"></span></a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-sm-4 pull-right">
            <table class="table table-cart-total">
              <tr>
                <td>Tổng sản phẩm:</td>
                <td class="text-right"><?php echo Cart::count(); ?></td>
              </tr>
              <tr>
                <td>Tổng tiền:</td>
                <td class="text-right"><?php echo Cart::subtotal(); ?> Vnd</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 no-paddng">
              <?php if(Cart::count() !=0): ?>
                <?php if(Auth::guest()): ?>
                  <div class="input-group">
                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                        <option value="cod">COD (thanh toán khi nhận hàng)</option>
                        <option value="paypal">Paypal (Thanh toán qua Paypal)</option>                      
                      </select>
                    </div>
                  <a class="btn btn-large btn-warning pull-right" href="<?php echo url('/login'); ?>" >Tiến hàng thanh toán</a>
                <?php else: ?>
                  <form action="<?php echo url('/dat-hang'); ?>" method="get" accept-charset="utf-8">                    
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

                        <a href="<?php echo url('/'); ?>" class="btn btn-default btn-md">Tiếp tục mua hàng</a>
                        <button type="submit" class="btn btn-danger btn-md">Tiến hành thanh toán</button>
                      </div>
                  </form>
                <?php endif; ?>
              <?php endif; ?>
              </div>

    </div>
  </div>
</div><!-- /.main -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front-end.layouts.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
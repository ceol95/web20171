 <!-- main menu  navbar -->
    <nav class="navbar navbar-default navbar-top" role="navigation" id="main-Nav" style="background-color: #16a085;margin-bottom: 5px;font-size: 13px;">
      <div class="container">  
        <div class="row">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
             <span  class="visible-xs pull-left" style="font-size:30px;cursor:pointer; padding-left: 10px; color: #ecf0f1;" onclick="openNav()">&#9776; </span> 
             <span  class="visible-xs pull-right" style="font-size:20px;cursor:pointer; padding-right: 10px; padding-top: 8px; color: #FFFFFF;" >      
              <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <a class="top-a" href="<?php echo e(url('/')); ?>" > Home </a>  &nbsp;
                    <a href="#" data-toggle="modal" data-target="#login-modal" style="color:#e67e22;"> Đăng nhập </a>
                    <?php /* <a class="top-a" href="<?php echo e(url('/login')); ?>">Login</a> */ ?>
                <?php else: ?>  
                    <a class="top-a" href="<?php echo e(url('/user')); ?>" style="color:#c0392b;"><strong><?php echo Auth::user()->name; ?></strong></a>
                    <a class="top-a" href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i><small>Thoát</small></a>
                <?php endif; ?> 
                </span>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main-mav-top">
            <ul class="nav navbar-nav">
              <li> <a href="<?php echo url(''); ?>" title="" style="color: #FFFFFF;background-color: #2c3e50;"><b class="glyphicon glyphicon-home"></b> Trang chủ </a> </li>
              <li>
                <a href="<?php echo url('mobile'); ?>" >Điện Thoại </a>                          
              </li>                                                  
              <li >
                <a href="<?php echo url('laptop'); ?>" > Laptop </a>                
              </li>    
              <li>
                <a href="<?php echo url('pc'); ?>" > Máy Tính </a>                
              </li>                                          
              <li>
               <a href="<?php echo url('tin-tuc'); ?>" > Tin Tức - Khuyễn Mãi </a>                    
              </li>                                            
            </ul>
             <ul class="nav navbar-nav pull-right">
              <?php /* <li><a href="<?php echo e(url('/admin/home')); ?>">Vào trang quản trị</a></li> */ ?>
              <li class="dropdown">
                <a  class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-shopping-cart"><span class="badge"><?php echo Cart::count();; ?></span></span> Giỏ Hàng <b class="caret"></b></a>
                <ul class="dropdown-menu" style="right:0; left: auto; min-width: 350px;">
                <?php if(Cart::count() !=0): ?>
                  <div class="table-responsive">
                     <table class="table table-hover" >
                      <thead>
                      <tr>
                        <th>Ảnh</th>
                        <th>LS</th>
                        <th>Tên <SPAN></SPAN></th>
                        <th>Giá</th>
                      </tr>
                    </thead>
                       <tbody>                       
                      <?php foreach(Cart::content() as $row): ?>
                         <tr>
                           <td> <?php echo $row->images; ?> <img class="card-img img-circle" src="<?php echo url('public/uploads/products/'.$row->options->img); ?>" alt="dell"></td>
                           <td><?php echo $row->qty; ?></td>
                           <td><?php echo $row->name; ?></td>                           
                           <td><?php echo $row->price; ?> Vnd</td>
                         </tr>                         
                        <?php endforeach; ?>                           
                       </tbody>                       
                     </table> 
                     <a href="<?php echo url('/gio-hang/'); ?>" type="button" class="btn btn-success"> Chi Tiết Giỏ Hàng </a>
                     <a href="<?php echo url('/gio-hang/xoa'); ?>" type="button" class="btn btn-danger pull-right"> Xóa </a>
                  </div>
                  <?php else: ?>
                    <div class="table-responsive">
                     <table class="table table-hover" >
                      <thead>
                      <tr>
                        <th>Ảnh</th>
                        <th>LS</th>
                        <th>Tên <SPAN></SPAN></th>
                        <th>Giá</th>
                      </tr>
                    </thead>
                       <tbody>                       
                        <td colspan="3">Hện đang trống</td>                        
                       </tbody>                       
                     </table> 
                  </div>
                  <?php endif; ?>
                </ul>
              </li> 
              <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Đăng nhập</a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('/user')); ?>">Thông tin cá nhân</a></li>
                            <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div> <!-- /row -->
      </div><!-- /container -->
    </nav>    <!-- /main nav -->

  <!-- left slider bar nav -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; Đóng</a>
    <a href="<?php echo url('mobile'); ?>">Điện Thoại</a>
    <a href="<?php echo url('laptop'); ?>">Laptop</a>
    <a href="<?php echo url('pc'); ?>">Máy Tính</a>
    <a href="<?php echo url('tin-tuc'); ?>">Tin Tức</a>
    <a href="<?php echo url('gio-hang'); ?>"> <span class="glyphicon glyphicon-shopping-cart"><span class="badge"><?php echo Cart::count(); ?></span></span> Giỏ Hàng </a>     
  </div>
  <!-- /left slider bar nav -->

  <?php /* loginform */ ?>
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
      <div class="loginmodal-container">
        <h1>Đăng nhập</h1><br>
        <form class="form-horizontal" role="form" method="POST" id="login-form" action="<?php echo e(url('/login')); ?>">
          <?php echo e(csrf_field()); ?>

          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <input id="email" type="email" class="form-control" name="email" placeholder="Nhập địa chỉ Email" value="<?php echo e(old('email')); ?>">
            <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
          </div>
          <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <input id="password" type="password" name="password" class="form-control" placeholder="Nhập mật khẩu"> 
             <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>        
          </div>
          <div class="form-group">
            <div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Ghi nhớ
                    </label>
                </div>
            </div>
        </div>       
          <input type="submit" name="login" class="btn btn-primary" value="Đăng nhập">
        </form>      
        <div class="login-help">
          <a class="btn btn-link" href="<?php echo url('/register'); ?>"> <strong style="color:red;"> Đăng ký </strong> </a> - <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Bạn đã quên mật khẩu?</a>
        </div>
      </div>
    </div>
  </div>
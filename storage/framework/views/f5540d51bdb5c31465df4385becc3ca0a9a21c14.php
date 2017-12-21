
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#">

    <title>Galio</title>
    <link href="<?php echo url('public/front-end/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('public/front-end/css/nivo-slider.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('public/front-end/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('public/front-end/css/owl.carousel.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('public/front-end/css/jquery.bxslider.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('public/front-end/css/cloud-zoom.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('public/front-end/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo url('public/front-end/css/responsive.css'); ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

    <div class="header">
        <div class="topbar">
            <div class="container">
                <div class="topbar-left">
                    <ul class="topbar-nav clearfix">
                        <li><span class="phone">0(123) 456 789</span></li>
                        <li><span class="email">ElecShops@gmail.com</span></li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul class="topbar-nav clearfix">
                        <?php if(Auth::guest()): ?>
                            <a class="top-a" href="<?php echo e(url('/')); ?>" > Home </a>  &nbsp;
                            <li><a href="<?php echo e(url('/login')); ?>" class="login">Đăng nhập</a></li>
                            
                        <?php else: ?>  
                            <li class="dropdown">
                                <a href="#" class="account dropdown-toggle" data-toggle="dropdown"><?php echo Auth::user()->name; ?></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a title="My Account" href="<?php echo e(url('/user')); ?>">Tài khoản</a></li>
                                    <li><a title="My Wishlist" href="<?php echo e(url('/logout')); ?>">Đăng xuất</a></li>
                                   
                                </ul>
                            </li>
                           
                        <?php endif; ?> 
                        
                            <!--<li class="dropdown">
                                <a href="#" class="account dropdown-toggle" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a title="My Account" href="account.html">My Account</a></li>
                                    <li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>
                                    <li><a title="My Cart" href="cart.html">My Cart</a></li>
                                    <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                                    <li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>
                                </ul>
                            </li>-->
                            
                            
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?php echo e(url('/')); ?>" class="logo"><img src="<?php echo url('public/uploads/logo1.png'); ?>" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <div class="support-client">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="box-container time">
                                            <div class="box-inner">
                                                <h2>Làm việc</h2>
                                                <p>T2- CN: 8:00 - 18:00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>Miễn phí ship</h2>
                                                <p>đơn hàng >2,000,000đ</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>Hoàn 100%</h2>
                                                <p>với lỗi nhà sản suất</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->
                            <form class="form-search" method="POST" action="<?php echo e(url('/search')); ?>">
                                <input type="text" class="input-text" name="txtSearch" id="idTxtSearch" placeholder="Sản phẩm...">
                                <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                            </form>
                            <div class="mini-cart">
                                <div class="top-cart-title">
                                    <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown">
                                        Giỏ hàng
                                        <span class="price"><?php echo Cart::total();; ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">

                                        <div class="cart-listing">
                                            <?php if(Cart::count() !=0): ?>

                                            <?php foreach(Cart::content() as $row): ?>

                                            <div class="media">
                                                <div class="media-left"><a href="#"><img src="<?php echo url('public/uploads/products/'.$row->options->img); ?>" alt="" class="img-responsive"></a></div>
                                                <div class="media-body">
                                                    <h4><?php echo $row->name; ?></h4>
                                                    <div class="mini-cart-qty">Số lượng: <?php echo $row->qty; ?></div>
                                                    <div class="mini-cart-price"><?php echo $row->price; ?> Vnd</div>
                                                </div>
                                            </div>


                                            <?php endforeach; ?>                           

                                            <?php else: ?>
                                            <div class="media">
                                                <h4>Giỏ hàng hiện đang trống</h4>
                                            </div>
                                            <?php endif; ?>
                                            
                                            

                                            <div class="mini-cart-subtotal">Total: <span class="price"><?php echo Cart::total();; ?> VNĐ</span></div>
                                            <div class="checkout-btn">
                                                <a href="<?php echo url('/gio-hang/'); ?>" class="btn btn-default btn-md fwb">Giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3>Danh mục</h3></div>
                                    <div class="mega-menu-category">
                                        <ul class="nav" id="menuleft">
                                            <?php 
                                                use App\Category;
                                                use App\Brands;
                                                $menu = Category::tree();
                                                $brand = Brands::all();
                                            ?>
                                            <?php foreach($menu as $row): ?>
                                            <?php if(sizeof($row['children'])==0): ?>
                                            <li class="nosub liMenu" id='liMenu<?php echo $row->id; ?>' value="<?php echo $row->id; ?>"><a href="<?php echo url('/cat/'.$row->id); ?>" class="liMenuLink"><?php echo $row->name; ?></a></li>
                                            <?php else: ?>
                                            <li>
                                                <a href="<?php echo url('/cat/'.$row->id); ?>"><?php echo $row->name; ?></a>
                                                <div class="wrap-popup column1">
                                                    <div class="popup">
                                                        
                                                        <ul class="nav">
                                                           <?php foreach($row['children'] as $child): ?>
                                                           <li><a href="<?php echo url('/cat/'.$child->id); ?>"><?php echo $child->name; ?></a></li>
                                                           <?php endforeach; ?>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </li>
                                           <?php endif; ?>
                                           <?php endforeach; ?>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-9">
                        <ul class="menu clearfix visible-lg visible-md">
                            <?php foreach($brand as $row): ?>
                            <li><a href="<?php echo url('brand/'.$row->id); ?>"><?php echo $row->name; ?></a></li>
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h2 class="navbar-brand visible-xs">Menu</h2>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?php foreach($menu as $row): ?>
                            <?php if(sizeof($row['children'])==0): ?>
                            <li class="nosub liMenu" id='liMenu<?php echo $row->id; ?>' value="<?php echo $row->id; ?>"><a href="<?php echo url('/cat/'.$row->id); ?>" class="liMenuLink"><?php echo $row->name; ?></a></li>
                            <?php else: ?>
                            <li class="dropdown">
                                <a href="<?php echo url('/cat/'.$row->id); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $row->name; ?> <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                   <?php foreach($row['children'] as $child): ?>
                                   <li><a href="<?php echo url('/cat/'.$child->id); ?>"><?php echo $child->name; ?></a></li>
                                   <?php endforeach; ?>
                               </ul>
                           </li>
                           
                           <?php endif; ?>
                           <?php endforeach; ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </div><!-- /.header-bottom -->
    </div><!-- /.header -->

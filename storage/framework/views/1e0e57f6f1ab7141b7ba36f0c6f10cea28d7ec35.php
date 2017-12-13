<?php $__env->startSection('content'); ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">   
        <!-- danh muc dien thoai -->
        <?php foreach($mobile as $row): ?>        
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
            <div class="thumbnail mobile">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="<?php echo url('public/uploads/products/'.$row->images); ?>" alt="img responsive">
                </div>
                <div class="intro pull-right">
                  <h1><small class="title-mobile"><?php echo $row->name; ?></small></h1>
                  <li><?php echo $row->intro; ?></li>
                  <span class="label label-info">Khuyễn mãi</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo1; ?></li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo2; ?></li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo3; ?></li> 
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct">
                <a href="<?php echo url('mobile/'.$row->id.'-'.$row->slug); ?>" title="Xem chi tiết">
                  <span class="label label-info">Ưu đãi khi mua</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo1; ?></li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo2; ?></li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo3; ?></li>
                  <span class="label label-warning">Cấu Hình Nổi bật</span> 
                  <li><strong>CPU</strong> : <i> <?php echo $row->cpu; ?></i></li>
                  <li><strong>Màn Hình</strong> : <i><?php echo $row->screen; ?> </i></li> 
                  <li><strong>Camera</strong> : Trước  <i><?php echo $row->cam1; ?></i> Sau <i><?php echo $row->cam2; ?> </i></li> 
                  <li><strong>HĐH</strong> :<i> <?php echo $row->os; ?> </i> <strong> Bộ nhớ trong</strong> :<i> <?php echo $row->storage; ?> </i></li> 
                  <li><strong>Pin</strong> :<i> <?php echo $row->pin; ?></i></li>
                </a>
              </div>
                <span class="btn label-warning"><strong><?php echo $row->price; ?></strong> Đ </span>
                <a href="<?php echo url('gio-hang/addcart/'.$row->id); ?>" class="btn btn-success pull-right add">Thêm vào giỏ </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 -->
          <?php endforeach; ?>
          <!-- danh muc dien thoai -->
       
          <div class="clearfix">            
          </div>

        <!--========================== phan danh muc laptop   =========================================  -->
          <div id="laptop"></div>
          <?php foreach($laptop as $row): ?>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding" >
            <div class="thumbnail">          
              <div class="hienthi">
                <img class="img-responsive" src="<?php echo url('public/uploads/products/'.$row->images); ?>" alt="img responsive">
                <div class="caption">
                  <h1><small><strong class="title-pro"><?php echo $row->name; ?></strong></small></h1>
                  <p>    
                      <li><i><?php echo $row->intro; ?></i></li>             
                      <span class="label label-info ">Ưu đãi khi mua</span>
                      <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo1; ?></li> 
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo2; ?></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo3; ?></li>
                  </p>
                  <p>
                    <span class="btn label-warning">Giá : <strong><?php echo $row->price; ?></strong> Đ </span>
                  </p>
                </div>
              </div>
              <div class="tomtat">
                <div class="thongtin">
                  <a href="<?php echo url('laptop/'.$row->id.'-'.$row->slug); ?>" title="Xem chi tiết">
                    <span class="label label-info ">Ưu đãi khi mua</span>   
                    <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo1; ?></li> 
                    <li><span class="glyphicon glyphicon-hand-right"></span> T<?php echo $row->promo2; ?></li> 
                    <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo3; ?></li>
                    <span class="label label-warning">Cấu Hình Nổi bật</span> 
                    <li><strong>CPU</strong> : <i><?php echo $row->cpu; ?></i></li>
                    <li><strong>RAM </strong> : <i><?php echo $row->ram; ?></i></li>
                    <li><strong>Lưu Trữ</strong> : <i> <?php echo $row->storage; ?></i></li>
                    <li><strong>Màn Hình</strong> : <i> <?php echo $row->screen; ?> </i></li> 
                    <li><strong>VGA</strong> : <i> <?php echo $row->vga; ?></i></li> 
                    <li><strong>HĐH</strong> :<i> <?php echo $row->os; ?></i></li> 
                    <li><strong>Pin</strong> :<i> <?php echo $row->pin; ?></i></li>
                  </a>
                </div>                
                  <div class="price">  
                    <span class="btn btn-info btn-block ">Giá : <strong><?php echo $row->price; ?></strong> Đ</span>   
                    <a href="<?php echo url('gio-hang/addcart/'.$row->id); ?>" class="btn btn-success btn-block">Thêm vào giỏ</a> 
                  </div>                  
              </div> 
            </div>
          </div>
        <?php endforeach; ?>
        <div class="clearfix">
          
        </div>
          <a href="http://api.hostinger.vn/redir/1309904" target="_blank"> 
            <img src="public/images/slides/thumbs/qc1.png" alt="Hosting Miễn Phí" border="0" width="100%" height="250" />
          </a>
<!-- =============== danh muc may tinh ===================================== -->
        <div id="pc"></div>
        <?php foreach($pc as $row): ?>
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
            <div class="thumbnail pc">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="<?php echo url('public/uploads/products/'.$row->images); ?>" alt="img responsive">
                </div>
                <div class="intro pull-right">
                  <h1><small class="title-pc"><?php echo $row->name; ?></small></h1>
                  <li> CPU: <?php echo $row->cpu; ?></li>
                  <li> RAM :<?php echo $row->ram; ?></li>
                  <li>HDD : <?php echo $row->storage; ?> </li>
                  <span class="label label-info">Khuyễn mãi</span>   
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo1; ?></li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo2; ?> </li> 
                  <li><span class="glyphicon glyphicon-hand-right"></span> <?php echo $row->promo3; ?> </li> 
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct">
                <a href="<?php echo url('pc/'.$row->id.'-'.$row->slug); ?>" title="Xem chi tiết">                   
                  <span class="label label-warning">Cấu hình chi tiết</span> 
                  <li><strong>CPU</strong> : <i>  <?php echo $row->cpu; ?></i></li>
                  <li><strong>HDD</strong> : T<i> <?php echo $row->storage; ?></i></li> 
                  <li><strong>HĐH</strong> :<i<?php echo $row->os; ?>  </i> - <strong>RAM </strong> :<i><?php echo $row->ram; ?></i></li> 
                  <li><strong>VGA - DVD</strong> :<i> <?php echo $row->vga; ?></i></li>
                  <li><strong>Kết nối</strong> : <i> <?php echo $row->connect; ?></i></li> 
                </a>
              </div>
                <span class="btn label-warning">Giá : <strong><?php echo $row->price; ?></strong> Đ </span>
                <a href="<?php echo url('gio-hang/addcart/'.$row->id); ?>" class="btn btn-success pull-right add">Thêm vào giỏ </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 item products -->
        <?php endforeach; ?>      

        </div> <!-- /col 12 -->     
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <!-- ====================================== /loc ket qua theo lua chon================================= -->
        <!--================================= phan danh muc laptop   =========================================  -->        
          <div id="laptop"></div>
        <?php foreach($data as $row): ?>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding" >
            <div class="thumbnail">          
              <div class="hienthi">
                <img class="img-responsive" src="<?php echo url('uploads/products/'.$row->images); ?>" alt="<?php echo $row->name; ?>">
                <div class="caption">
                  <h1><small><strong class="title-pro"><?php echo $row->name; ?></strong></small></h1>
                  <p>    
                      <li><i><?php echo $row->intro; ?></i></li>     
                      <?php /* <li><i><?php echo $row->cpu; ?></i></li>          */ ?>
                      <span class="label label-info ">Ưu đãi khi mua</span>
                      <?php if($row->promo1!=''): ?>
                        <li><span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo1; ?></li>
                      <?php elseif($row->promo2!=''): ?>
                        <li><span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo2; ?></li>
                      <?php elseif($row->promo3!=''): ?>
                        <li><span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo3; ?></li>
                      <?php endif; ?> 
                        <li><span class="glyphicon glyphicon-ok-sign"></span>Cài đặt phần miềm, tải nhạc - ứng dụng miến phí</li>                                                            
                  </p>
                  <p>
                    <span class="btn label-warning"><strong><?php echo number_format($row->price); ?> Vnd</strong> </span>
                  </p>
                </div>
              </div>
              <div class="tomtat">
                <div class="thongtin">
                  <a href="<?php echo url('laptop/'.$row->id.'-'.$row->slug); ?>" title="">
                  <span class="label label-info ">Ưu đãi khi mua</span>   
                  <?php if($row->promo1!=''): ?>
                    <li><span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo1; ?></li>
                  <?php elseif($row->promo2!=''): ?>
                    <li><span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo2; ?></li>
                  <?php elseif($row->promo3!=''): ?>
                    <li><span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo3; ?></li>
                  <?php endif; ?> 
                    <li><span class="glyphicon glyphicon-ok-sign"></span>Cài đặt phần miềm, tải nhạc - ứng dụng miến phí</li>
                  <span class="label label-warning">Cấu Hình Nổi bật</span> 
                  <li><strong>CPU</strong> : <i><?php echo $row->cpu; ?></i></li>
                  <li><strong>RAM </strong> : <i><?php echo $row->ram; ?></i></li>
                  <li><strong>Lưu Trữ</strong> : <i><?php echo $row->storage; ?></i></li>
                  <li><strong>Màn Hình</strong> : <i><?php echo $row->screen; ?> </i></li> 
                  <li><strong>VGA</strong> : <i><?php echo $row->vga; ?></i></li> 
                  <li><strong>HĐH</strong> :<i> <?php echo $row->os; ?></i></li> 
                  <li><strong>Pin</strong> :<i> <?php echo $row->pin; ?></i></li>
                  </a>
                </div>                
                  <div class="price">  
                    <span class="btn btn-info btn-block "><strong><?php echo number_format($row->price); ?></strong> Vnd</span>   
                    <a href="<?php echo url('gio-hang/addcart/'.$row->id); ?>" class="btn btn-success btn-block">Thêm vào giỏ</a>                  
                  </div>                  
              </div> 
            </div>
          </div>
        <?php endforeach; ?>
        <div class="clearfix">
          
        </div>
          <!--==================================================/products ============================== -->
        <?php echo $data->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.new-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
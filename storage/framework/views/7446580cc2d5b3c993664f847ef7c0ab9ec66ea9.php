<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li class="active">Danh sách</li>
                </ul>
            </div>
        </div>
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-left">
                        <div class="block block-layered-nav">
                            <div class="block-title">
                                <strong><span>Sắp xếp</span></strong>
                            </div>
                            <form id="frmSort">
                            	
                            
                            <div class="block-content">
                                <div id="narrow-by-list">
                                    <div class="layered layered-Category">
                                        <h2>Danh mục</h2>
                                        <select name="stlCat" id="stllCat" class="form-control">
                                        	<option value="0">-----Chọn------</option>
                                        	<?php foreach($cat as $row): ?>
                                        		<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                        	<?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="layered layered-Manufacturer">
                                        <h2>Nhãn hàng</h2>
                                        <div class="content-shopby">
                                            <select name="stlBrand" id="stllBrand" class="form-control">
                                            	<option value="0">-----Chọn------</option>
                                        	<?php foreach($brand as $row): ?>
                                        		<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                        	<?php endforeach; ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="layered layered-price">
                                        <h2>Giá</h2>
                                        <div class="content-shopby">
                                            <div id="slider-range"></div>
                                            <div id="search_pr">
                                                <input type="text" name="first_price" class="form-control">
                                                <input type="text" name="last_price" class="form-control">
                                                <button id="search_price" name="search_price" type="submit" class="btn btn-default">SHOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layered layered-Manufacturer">
                                        <h2>Sắp xếp theo</h2>
                                        <div class="content-shopby">
                                            <select name="stlRate" id="stllRate" class="form-control">
                                            	<option value="0">-----Chọn------</option>
                                            	<option value="1">Giá từ thấp đến cao</option>
                                            	<option value="2">Giá từ cao đến thấp</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div><!-- /sort -->
                        
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <div class="page-title">
                            <h1>Danh sách</h1>
                        </div>
                        
                        <div class="row products">
                            <?php if(count($data)==0): ?>
                            <div class="col-md-12 col-sm-12">
                            <b>Không tìm thấy kết quả nào</b>
                            </div>
                            <?php else: ?>
                            <?php foreach($data as $row): ?>
                            <div class="col-md-4 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <?php if($row->seo==3): ?>
                                                <div class='new-icon'><span>new</span></div>
                                                <?php elseif($row->promotionPrice>0): ?>
                                                <div class="sale-icon"><span>sale</span></div>
                                                <?php endif; ?>
                                            </div>

                                            <a href="<?php echo url('pro/'.$row->id.'-'.$row->slug); ?>" title="<?php echo $row->name; ?>" class="product-image">
                                                <img src="<?php echo url('public/uploads/products/'.$row->images); ?>" alt="" width="250px;" height="300px;" />
                                            </a>
                                            <div class="box-hover" style="background-color: white;    width: 247px;">
                                                <ul class="add-to-links">
                                                    <li>
                                                        <?php echo $row->r_intro; ?>


                                                    </li>
                                                    <li>
                                                        <?php if($row->promo1!=''): ?>
                                                            <span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo1; ?>

                                                          <?php elseif($row->promo2!=''): ?>
                                                            <span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo2; ?>

                                                          <?php elseif($row->promo3!=''): ?>
                                                            <span class="glyphicon glyphicon-ok-sign"></span><?php echo $row->promo3; ?>

                                                          <?php endif; ?> 

                                                    </li>
                                                    <li><a href="<?php echo url('gio-hang/addcart/'.$row->id); ?>" class="link-cart">Thêm vào giỏ</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title=""><?php echo $row->name; ?></a></h2>
                                            <div class="price-box">
                                                <?php if($row->promotionPrice>0): ?>
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price"><?php echo number_format($row->promotionPrice); ?></span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price"><?php echo number_format($row->price); ?></span>
                                                </p>
                                                <?php else: ?>
                                                 <p class="special-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price"><?php echo number_format($row->price); ?></span>
                                                </p>
                                                <?php endif; ?>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            
                        </div><!-- /.product -->
                        <?php echo $data->render(); ?>

                        <?php endif; ?>
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
$( document ).ready(function() {
    $('.mega-menu-category').css('display','none');
    $
    
});           
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
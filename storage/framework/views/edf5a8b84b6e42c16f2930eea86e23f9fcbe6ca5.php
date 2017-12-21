<?php $__env->startSection('content'); ?>
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Thêm mới sản phẩm: <?php echo $loai; ?></small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
					<?php if(count($errors) > 0): ?>
				    	<div class="alert alert-danger">
					        <ul>
					            <?php foreach($errors->all() as $error): ?>
					                <li><?php echo e($error); ?></li>
					            <?php endforeach; ?>
					        </ul>
				    </div>
				    <?php elseif(Session()->has('flash_level')): ?>
				    	<div class="alert alert-success">
					        <ul>
					            <?php echo Session::get('flash_massage'); ?>	
					        </ul>
					    </div>
					<?php endif; ?>
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		<?php echo e(csrf_field()); ?>

				      		<div class="form-group">
					      		<label for="input-id">Chọn danh mục</label>
					      		<select name="sltCate" id="inputSltCate" required class="form-control">
					      			<option value="">--Chọn thương hiệu--</option>
					      			<?php foreach($cat as $dt): ?>
					      				<option value="<?php echo $dt->id; ?>" ><?php echo '--|--|'.$dt->name; ?></option> 	
					      			<?php endforeach; ?>	
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên sản phẩm</label>
				      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="<?php echo e(old('txtname')); ?>"  >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Điểm nổi bật</label>
				      			<input type="text" name="txtintro" id="inputTxtintro" class="form-control" value="<?php echo e(old('txtintro')); ?>" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Gồm có : </label>
				      			<input type="text" name="txtpacket" id="inputtxtpacket" value="<?php echo e(old('txtpacket')); ?>" class="form-control" >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Khuyễn mãi (tối đa 3 mục)</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				khuyễn mại 1 : <input type="text" name="txtpromo1" id="inputtxtpromo1" value="<?php echo e(old('txtpromo1')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				khuyễn mại 2 : <input type="text" name="txtpromo2" id="inputtxtpromo2" value="<?php echo e(old('txtpromo2')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				khuyễn mại 3 : <input type="text" name="txtpromo3" id="inputtxtpromo3" value="<?php echo e(old('txtpromo3')); ?>" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Hình ảnh : <input type="file" name="txtimg" accept="image/png" id="inputtxtimg" value="<?php echo e(old('txtimg')); ?>" class="form-control" required="required">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Giá bán : <input type="number" name="txtprice" id="inputtxtprice" class="form-control" value="<?php echo e(old('txtprice')); ?>" required="required">
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tag : <input type="text" name="txttag" id="inputtag" value="<?php echo e(old('txttag')); ?>" class="form-control">
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id"> Chi tiết cấu hình sản phẩm</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Cpu : <input type="text" name="txtCpu" id="inputtxtCpu" value="<?php echo e(old('txtCpu')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				RAM : <input type="text" name="txtRam" id="inputtxtRam" value="<?php echo e(old('txtRam')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
					      				Bộ nhớ trong (HDD) : <input type="text" name="txtStorage" id="inputtxtStorage" value="<?php echo e(old('txtStorage')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1" style="padding-left: 0;">	
					      				Thẻ nhớ	<input type="text" name="txtExtend" id="inputtxtExtend" value="<?php echo e(old('txtExtend')); ?>" class="form-control">
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Màn hình : <input type="text" name="txtScreen" id="inputtxtscreen" value="<?php echo e(old('txtScreen')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				VGA : <input type="text" name="txtVga" id="inputtxtVga" value="<?php echo e(old('txtVga')); ?>" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Webcam - Cam sau <input type="text" name="txtCam1" id="inputtxtCam1" value="<?php echo e(old('txtCam1')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Cammera trước <input type="text" name="txtCam2" id="inputtxtCam2" value="<?php echo e(old('txtCam2')); ?>" class="form-control" >
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				SIM hỗ trợ : <input type="text" name="txtSIM" id="inputtxtSIM" value="<?php echo e(old('txtSIM')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Kết nối : <input type="text" name="txtConnect" id="inputtxtConnect" value="<?php echo e(old('txtConnect')); ?>" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				PIN : <input type="text" name="txtPin" id="inputtxtPin" value="<?php echo e(old('txtPin')); ?>" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Hệ điều hành : <input type="text" name="txtOs" id="inputtxtOs" value="<?php echo e(old('txtOs')); ?>" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">
					      			<?php for( $i=1; $i<=12; $i++): ?>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Hình ảnh <?php echo $i; ?> : <input type="file" name="txtdetail_img[]" value="<?php echo e(old('txtdetail_img[]')); ?>" accept="image/png" id="inputtxtdetail_img" class="form-control">
					      			</div>
					      			<?php endfor; ?>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Tóm tắt đánh giá</label>
					      				<textarea name="txtre_Intro" id="inputTxtre_Intro" class="form-control" value="<?php echo e(old('txtre_Intro')); ?>" rows="2" required="required"></textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtre_Intro',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Bài đánh giá chi tiết</label>
					      				<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="4" value="<?php echo e(old('txtReview')); ?>" required="required"></textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtReview',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      		</div>				      			
				      		</div>		      				      		

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm sản phẩm" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
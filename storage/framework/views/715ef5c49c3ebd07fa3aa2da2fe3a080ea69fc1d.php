<?php $__env->startSection('content'); ?>
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Khách hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa thông tin khách hàng</small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body">
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
						<form action="" method="POST" role="form">
				      		<?php echo e(csrf_field()); ?>

				      		<div class="form-group">
					      		<label for="input-id"> Chọn Quyền </label>
					      		<select name="sltCate" id="inputSltCate" class="form-control">
					      			<option value="1">- Quản trị --</option> 	
					      			<option value="2">- Nhân viên --</option> 		
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên Khách hàng</label>
				      			<input type="text" name="txtName" id="inputTxtName" class="form-control" value="<?php echo old('txtCateName', isset($data['name']) ? $data['name'] : null); ?>" required="required">
				      		</div>
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm danh mục" class="button" />
				      	</form>					      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
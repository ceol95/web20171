<?php $__env->startSection('content'); ?>
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Nhãn hiệu</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Thêm nhãn hiệu</small></h1>
			</div>
		</div><!--/.row-->	

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body">
						<?php echo $__env->make('back-end.modules.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<form action="" method="POST" role="form">
				      		<?php echo e(csrf_field()); ?>

				      		
				      		<div class="form-group">
				      			<label for="input-id">Tên nhãn hiệu</label>
				      			<input type="text" name="txtBrandName" id="inputTxtBrandName" class="form-control" value="" required="required">
				      		</div>
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm nhãn hiệu" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->	




		<!-- =====================================main content - noi dung chinh trong chu -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
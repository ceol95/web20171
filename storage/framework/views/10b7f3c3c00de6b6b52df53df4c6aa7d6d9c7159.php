<!-- main content - noi dung chinh trong chu -->

<?php $__env->startSection('content'); ?>
<!-- main content - noi dung chinh trong chu -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Danh mục</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<a href="<?php echo url('admin/danhmuc/add'); ?>" title=""><button type="button" class="btn btn-primary pull-left btn-add"><i class="fa fa-plus" aria-hidden="true"></i>Thêm Mới</button></a>
						<!--
							<div class="" style="margin: auto">
								<form method="POST" action="<?php echo url('admin/nhanhieu/find/'); ?>" role="form">
									<?php echo e(csrf_field()); ?>


									<input type="search" name="txtFind" id="txtFind" class="form-control form-find" style="float: left;max-width: 40%;" value="" placeholder="Tìm kiếm..." required="required" title="">
									<button type="submit" class="btn btn-default btn-find" ><i class="fa fa-search" aria-hidden="true"></i></button> 
								</form>
							</div>
						-->
					</div>



				</div>

			</div>
			<?php echo $__env->make('back-end.modules.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover table-list">
						<thead>
							<tr>										

								<th>ID</th>										
								<th>Tên danh mục</th>										
								<th>Loại</th>	
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<?php listcate ($data,$id_cha =0,$str=""); ?> 
							</tr>									
						</tbody>
					</table>
				</div>
			</div>
		</div> 
	</div>
</div>
</div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Xác nhận xóa</h4>
			</div>
			<div class="modal-body">
				<p>Chắc chắn xóa mục này?</p>
			</div>
			<div class="modal-footer">
				<a href="<?php echo url('admin/danhmuc/del/'); ?>" class="btn btn-primary btn-Del">Xóa</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

			</div>
		</div>

	</div>
</div>


<!-- =====================================main content - noi dung chinh trong chu -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptModal'); ?>
<script type="text/javascript">
	var hrefDef = $('.btn-Del').attr('href');
	function openModal(id)
	{
		var href = hrefDef + '/'+id;
		$('.btn-Del').attr('href', href);
	}

</script>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('back-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
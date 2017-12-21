
<!-- main content - noi dung chinh trong chu -->
@extends('back-ends.layouts.master')
@section('pageContent')
<!-- main content - noi dung chinh trong chu -->
<div class="page-header">
	<h1>
		Danh mục
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Sửa
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<a href="{!!url('admin/danhmuc/add')!!}" title=""><button type="button" class="btn btn-primary pull-left btn-add"><i class="fa fa-plus" aria-hidden="true"></i>Thêm Mới</button></a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		@include('back-ends.modules.alert')
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
				<a href="{!!url('admin/danhmuc/del/')!!}" class="btn btn-primary btn-Del">Xóa</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

			</div>
		</div>

	</div>
</div>


<!-- =====================================main content - noi dung chinh trong chu -->
@endsection
@section('scriptModal')
<script type="text/javascript">
	var hrefDef = $('.btn-Del').attr('href');
	function openModal(id)
	{
		var href = hrefDef + '/'+id;
		$('.btn-Del').attr('href', href);
	}

</script>
@endsection








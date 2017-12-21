@extends('back-ends.layouts.master')
@section('pageContent')
<!-- main content - noi dung chinh trong chu -->
<div class="page-header">
	<h1>
		Đơn đặt hàng
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Chi tiết
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		@include('back-ends.modules.alert')
		<form action="" method="POST" role="form">	
					<input type="hidden" name="_token" value="{{ csrf_token() }}">				
					<div class="panel panel-default">
						@include('back-ends.modules.alert')
							<div class="">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th> Họ-tên khách hàng</th>
											<th>Địa chỉ</th>
											<th>Điện thoại</th>
											<th>Ngày đặt</th>
											<th>Tổng tiền</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{!!$oder->id!!}</td>
											<td>{!!$oder->user->name!!}</td>
											<td>{!!$oder->user->address!!}</td>
											<td>{!!$oder->user->phone!!}</td>
											<td>{!!$oder->created_at!!}</td>
											<td>{!! number_format($oder->total) !!} Vnđ</td>
										</tr>
									</tbody>
								</table>
							</div>
						<div class="panel-heading">						 
							Chi tiết sản phẩm trong đơn đặt hàng
						</div>
						<div class="panel-body" style="font-size: 12px;">
							<div class="">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>										
											<th>ID</th>										
											<th>Hình ảnh</th>
											<th>Tên sản phẩm</th>
											<th>Tóm tắt chức năng</th>
											<th> Số lượng </th>
											<th>Giá bán</th>
											<th>Trạng thái</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data as $row)
											<tr>
												<td>{!!$row->id!!}</td>
												<td> <img src="{!!url('public/uploads/products/'.$row->images)!!}" alt="iphone" width="50" height="40"></td>
												<td>{!!$row->name!!}</td>
												<td>{!!$row->intro!!}</td>
												<td>{!!$row->qty!!} </td>
												<td>{!! number_format($row->price) !!} Vnđ</td>
												<td>
													@if($row->status ==1)
														<span style="color:blue;">Còn hàng</span>
													@else
														<span style="color:#27ae60;"> Tạm hết</span>
													@endif
												</td>
												<td>
												    <a href="{!!url('')!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">remove</span> </a>
												</td>
											</tr>
										@endforeach								
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<button type="submit" onclick="return xacnhan('Xác nhận đơn hàng này ?')"  class="btn btn-danger"> Xác nhận đơn hàng </button>
				</form>
	</div><!-- /.col -->
</div><!-- /.row -->



<!-- =====================================main content - noi dung chinh trong chu -->
@endsection
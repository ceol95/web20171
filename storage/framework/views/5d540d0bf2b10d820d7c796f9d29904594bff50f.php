<?php $__env->startSection('pageContent'); ?>
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
		<?php echo $__env->make('back-ends.modules.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="" method="POST" role="form">	
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">				
					<div class="panel panel-default">
						<?php echo $__env->make('back-ends.modules.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
											<td><?php echo $oder->id; ?></td>
											<td><?php echo $oder->user->name; ?></td>
											<td><?php echo $oder->user->address; ?></td>
											<td><?php echo $oder->user->phone; ?></td>
											<td><?php echo $oder->created_at; ?></td>
											<td><?php echo number_format($oder->total); ?> Vnđ</td>
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
										<?php foreach($data as $row): ?>
											<tr>
												<td><?php echo $row->id; ?></td>
												<td> <img src="<?php echo url('public/uploads/products/'.$row->images); ?>" alt="iphone" width="50" height="40"></td>
												<td><?php echo $row->name; ?></td>
												<td><?php echo $row->intro; ?></td>
												<td><?php echo $row->qty; ?> </td>
												<td><?php echo number_format($row->price); ?> Vnđ</td>
												<td>
													<?php if($row->status ==1): ?>
														<span style="color:blue;">Còn hàng</span>
													<?php else: ?>
														<span style="color:#27ae60;"> Tạm hết</span>
													<?php endif; ?>
												</td>
												<td>
												    <a href="<?php echo url(''); ?>"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">remove</span> </a>
												</td>
											</tr>
										<?php endforeach; ?>								
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-ends.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
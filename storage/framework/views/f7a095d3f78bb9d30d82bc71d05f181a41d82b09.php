<?php $__env->startSection('content'); ?>
	<div class="container">
	<hr>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr><h1>Lịch sử mua hàng </h1></tr>
						<tr>
							<th> ID</th>										
							<th> Mã đơn hàng</th>										
							<th> Ngày đặt hàng</th>										
							<th> Tổng tiền</th>										
						</tr>
					</thead>
					<tbody>
					<?php  $stt=0;?>
						<?php foreach($data as $row): ?>
							<?php $stt++;?>
							<tr>
								<td><?php echo $stt; ?></td>
								<td><?php echo $row->id; ?></td>
								<td><?php echo $row->created_at; ?></td>
								<td><?php echo number_format($row->total); ?> Vnđ</td>
							</tr>
						<?php endforeach; ?>							
					</tbody>
				</table>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
						<thead>
							<tr>
								<th colspan="2"> Thông tin khách hàng : <?php echo Auth::user()->name; ?></th>										
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Họ tên</td>
								<td><?php echo Auth::user()->name; ?></td>
							</tr>
							<tr>
								<td>Địa chỉ E-mail</td>
								<td><?php echo Auth::user()->email; ?></td>
							</tr>
							<tr>
								<td>Điện thoại</td>
								<td><?php echo Auth::user()->phone; ?></td>
							</tr>
							<tr>
								<td>Địa chỉ Khách hàng</td>
								<td><?php echo Auth::user()->address; ?></td>
							</tr>
							<tr>
								<td>Ngày đăng ký</td>
								<td><?php echo Auth::user()->created_at; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dơn đặt hàng</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Danh sách đơn đặt hàng						
				</div>
				<div class="panel panel-default">					
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
					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Tên khách hàng</th>
										<th>Địa chỉ</th>
										<th>Điện thoại</th>
										<th>Email</th>										
										<th>Ngày đặt</th>
										<th>Thành tiền</th>
										<th>Trạng thái</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($data as $row): ?>
										<tr>
											<td><?php echo $row->id; ?></td>
											<td><?php echo $row->user->name; ?></td>
											<td><?php echo $row->user->address; ?></td>
											<td><?php echo $row->user->phone; ?></td>
											<td><?php echo $row->user->email; ?></td>											
											<td><?php echo $row->created_at; ?></td>
											<td><?php echo $row->total; ?> Vnd</td>
											<td>
												<?php if($row->status ==0): ?>
													<span style="color:#d35400;">Chưa xác nhận</span>
												<?php else: ?>
													<span style="color:#27ae60;"> Đã xác nhận</span>
												<?php endif; ?>
											</td>
											<td>
											    <a href="<?php echo url('admin/donhang/detail/'.$row->id); ?>" title="Chi tiết">Chi tiết  </a> &nbsp;
											    <a href="<?php echo url('admin/donhang/del/'.$row->id); ?>"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"> Hủy bỏ</a>
											</td>
										</tr>
									<?php endforeach; ?>								
								</tbody>
							</table>
						</div>
						<?php echo $data->render(); ?>

					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
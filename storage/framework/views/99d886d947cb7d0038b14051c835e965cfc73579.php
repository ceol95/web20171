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
					Danh sách nhân viên			
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
										<th>Tên nhân viên</th>
										<th>Email</th>
										<th>Quyền</th>
										<th>Ngày đăng ký</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($data as $row): ?>
										<tr>
											<td><?php echo $row->id; ?></td>
											<td><?php echo $row->name; ?></td>
											<td><?php echo $row->email; ?></td>
											<td>
												<?php if($row->level ==100): ?>
													<span style="color:#d35400;">Quản trị hệ thống</span>
												<?php else: ?>
													<span style="color:#27ae60;">Quản trị viên</span>
												<?php endif; ?>
											</td>										
											<td><?php echo $row->created_at; ?></td>											
											<td>
											    <a href="<?php echo url('admin/nhanvien/edit/'.$row->id); ?>" title="Chi tiết"> Cập nhật</a> &nbsp;
											    <?php if($row->level !=100): ?>
											    	<a href="<?php echo url('admin/nhanvien/del/'.$row->id); ?>"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')">Xóa bỏ</a>
											    <?php endif; ?>
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
<?php $__env->startSection('content'); ?>
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo (url('/admin/home')); ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tin tức</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách tin bản tin
						<a href="<?php echo url('admin/news/add'); ?>" title=""><button type="button" class="btn btn-primary pull-right">Thêm tin mới</button></a>
					</div>
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
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>image</th>										
										<th>Tiêu đề bản tin</th>										
										<th>Tóm tắt</th>										
										<th>Trạng thái</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($data as $row): ?>
									<tr>
										<td><?php echo $row->id; ?></td>
										<td> <img src="<?php echo url('uploads/news/'.$row->images); ?>" alt="" width="40" height="40"> </td>
										<td><?php echo $row->title; ?></td>
										<td><small><?php echo $row->intro; ?></small></td>
										<td style="width: 90px;">
											<?php if($row->status==1): ?>
											Hiển thị
											<?php else: ?>
											Tạm ẩn
											<?php endif; ?>
										</td>
										<td style="width: 120px;">
										    <a href="<?php echo url('admin/news/edit/'.$row->id); ?>" title="Sửa"><span class="glyphicon glyphicon-edit">edit</span> </a>
										    <a href="<?php echo url('admin/news/del/'.$row->id); ?>"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">remove</span> </a>
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
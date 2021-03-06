<?php $__env->startSection('content'); ?>
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10"><div class="form-group">
								<label for="inputLoai" class="col-sm-3 control-label"><strong> Chọn sản phẩm </strong></label>
								<div class="col-md-6">
									<select name="sltCate" id="inputLoai" class="form-control">
						      			<option value="0">- CHỌN MỘT THƯƠNG HIỆU --</option>
						      			<?php MenuMulti($cat,0,$str='---| ',$loai); ?>   		
						      		</select>
									<script>
									    document.getElementById("inputLoai").onchange = function() {
									        if (this.selectedIndex!==0) {
									            window.location.href = this.value;
									        }        
									    };
									</script>
								</div>
								<div class="col-md-3">
									<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm sản phẩm..." required="required" title="">
								</div>
								
							</div>
								
								
							</div>
							<div class="col-md-2">
								<?php if($loai !='all'): ?>
									<a href="<?php echo url('admin/sanpham/'.$loai.'/add'); ?>" title=""><button type="button" class="btn btn-primary pull-right">Thêm Mới Sản Phẩm</button></a>
								<?php endif; ?>
							</div>
						</div> 
						
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
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table 
								data-toggle="table"
								data-show-refresh="false" 
								data-show-toggle="true" 
								data-show-columns="true" 
								data-search="false" 
								data-select-item-name="toolbar1" 
								data-pagination="false" 
								data-sort-name="name" 
								data-sort-order="desc" 
								data-show-export="true"
								>
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th>Tóm tắt chức năng</th>
										<th>Thương hiệu</th>
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
											<td><?php echo $row->category->name; ?></td>
											<td><?php echo $row->price; ?> đ</td>
											<td>
												<?php if($row->status ==1): ?>
													<span style="color:blue;">Còn hàng</span>
												<?php else: ?>
													Tạm hết hàng
												<?php endif; ?>
											</td>
											<td>
											    <a href="<?php echo url('admin/sanpham/mobile/edit/'.$row->id); ?>" title="Sửa"><span class="glyphicon glyphicon-edit">edit</span> </a>
											    <a href="<?php echo url('admin/sanpham/del/'.$row->id); ?>"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">remove</span> </a>
											</td>
										</tr>
									<?php endforeach; ?>								
								</tbody>
							</table>
						</div>
						<div class="pull-left">
							chonj
						</div>
						<div class="pull-right">
							<?php echo $data->render(); ?>

						</div>
						
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
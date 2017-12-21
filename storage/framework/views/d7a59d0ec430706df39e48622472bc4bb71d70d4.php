<?php $__env->startSection('css'); ?>
<style type="text/css">
body{
	font-family: 'Roboto', sans-serif;
}
.form-horizontal .form-group{
	margin-left: 0px;
	margin-right: 0px;
}
label{
	font-weight: 700;
}
.img-detail{
width:200px;height:100px;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageContent'); ?>
<div class="page-header">
	<h1>
		Sản phẩm
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Sửa
		</small>
	</h1>
</div><!-- /.page-header -->
<?php echo $__env->make('back-ends.modules.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data" onsubmit="return validate()">
	<?php echo e(csrf_field()); ?>

	<div class="row">
		<div class="col-md-2">
			<h4>Thông tin cơ bản</h4>
			<p>Nhập tiêu đề và thông tin cơ bản</p>
		</div>
		<div class="col-md-10">
			<div class="col-md-5">
				<div align="center" >
					<img id="daiDien" src="<?php echo url('public/uploads/products/'.$pro->images); ?>" style=" width:320px;height:200px;" /> <br />
					<input type="file" name="txtimg" accept="image/*" id="inputtxtimg" value="<?php echo url('public/uploads/products/'.$pro->images); ?>" class="form-control"  onchange="file_change(this)"  style="display: none">
				</div>
				<div align="center" style="padding-top:5px"> <input type="button" class="btn btn-primary" class="text" value="Chọn ảnh" onclick="document.getElementById('inputtxtimg').click()" /></div><br />	
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="form-group col-md-12">
						<label for="input-id">Tên sản phẩm</label>
						<input type="text" name="txtname" required id="inputtxtname" class="form-control" value="<?php echo old('txtname',isset($pro['name']) ? $pro['name'] : null); ?>"  >
					</div>	
					<div class="form-group col-md-6">
						<label for="input-id">Chọn danh mục</label>
						<select name="sltCate" id="inputSltCate" required class="form-control" value="<?php echo old('sltCate',isset($pro['cat_id']) ? $pro['cat_id'] : null); ?>">
							<option value="">--Chọn danh mục--</option>
							<?php MenuMulti($cat,0,$str='---| ',old('sltCate')); ?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="input-id">Chọn nhãn hiệu</label>
						<select name="sltBrand" id="inputsltBrand" required class="form-control" value="<?php echo old('sltBrand',isset($pro['brand_id']) ? $pro['brand_id'] : null); ?>">
							<option value="">--Chọn nhãn hiệu--</option>
							<?php foreach($brand as $row): ?>
							<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="input-id">Chọn loại</label>
						<select name="sltType" id="inputSltType" required class="form-control">
							<option value="0">--Chọn loại--</option>
							<option value="1">Hàng đề cử</option>
							<option value="2">Hàng bán chạy</option>
							<option value="3">Hàng mới</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="input-id">Trạng thái</label>
						<select name="sltStatus" id="inputSltStatus" required class="form-control">
							<option value="1">Hiện</option>
							<option value="0">Tạm khóa</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6" >
						<label for="input-id">Điểm nổi bật :</label> 
						<input type="text" name="txtintro" id="inputtxtintro" class="form-control" value="<?php echo old('txtintro',isset($pro['intro']) ? $pro['intro'] : null); ?>" required="required">
					</div>
					<div class="form-group col-md-6" >
						<label for="input-id">Gồm có :</label>  
						<input type="text" name="txtpacket" id="inputtxtpacket" class="form-control" value="<?php echo old('txtpacket',isset($pro['packet']) ? $pro['packet'] : null); ?>" required="required">
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-12" >
						<label for="input-id">Tag :</label>  
						<input type="text" name="txttag" id="inputtag" value="<?php echo old('txttag',isset($pro['tag']) ? $pro['tag'] : null); ?>" class="form-control">
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<h4>Giá bán</h4>
			<p>Nhập giá bán, khuyến mãi(tối đa 3 mục)</p>
		</div>
		<div class="col-md-10">
			
			<div class="col-md-12">
				<div class="row">
					<div class="form-group col-md-12">
						<label for="input-id">Giá bán</label>
						<input type="number" name="txtprice" id="inputtxtprice" class="form-control" value="<?php echo old('txtprice',isset($pro['price']) ? $pro['price'] : null); ?>" required="required">
					</div>	
					<div class="form-group col-md-12">
						<label for="input-id">Giá khuyến mãi</label>
						<input type="number" name="txtPromo" id="inputtxtPromo" class="form-control" value="<?php echo old('txtPromo',isset($pro['promotionPrice']) ? $pro['promotionPrice'] : null); ?>"  >
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-12" >
						<label for="input-id">Khuyến mãi 1 :</label> 
						<input type="text" name="txtpromo1" id="inputtxtpromo1" value="<?php echo old('txtpromo1',isset($pro['promo1']) ? $pro['promo1'] : null); ?>" class="form-control" >
					</div>
					<div class="form-group col-md-12" >
						<label for="input-id">Khuyến mãi 2 :</label>  
						<input type="text" name="txtpromo2" id="inputtxtpromo2" value="<?php echo old('txtpromo2',isset($pro['promo2']) ? $pro['promo2'] : null); ?>" class="form-control" >
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-12" >
						<label for="input-id">Khuyến mãi 3 :</label>  
						<input type="text" name="txtpromo3" id="inputtxtpromo3" value="<?php echo old('txtpromo3',isset($pro['promo3']) ? $pro['promo3'] : null); ?>" class="form-control" >
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<h4>Hình ảnh chi tiết</h4>
			<p>Thêm hình ảnh giới thiệu sản phẩm(Tối đa 9 mục)</p>
		</div>
		<div class="col-md-10">
			<div class="widget-box collapsed">
				<div class="widget-header">
					<h4 class="widget-title">Hình ảnh</h4>

					<div class="widget-toolbar">
						<a href="#" data-action="collapse">
							<i class="ace-icon fa fa-chevron-down"></i>
						</a>
					</div>
				</div>

				<div class="widget-body" style="display: none;">
					
					<div class="col-md-12">
						
						<div class="row" style="padding-top: 10px;">
							<?php for( $i=0; $i<9; $i++): ?>
							<div class="form-group col-md-4">

								<div align="center" >
									 <br />
									<input type="file" name="txtdetail_img[]" accept="image/*" id="inputtxtimg<?php echo $i; ?>" value="<?php echo e(old('txtdetail_img[]')); ?>" class="form-control"  onchange="img_change(this,<?php echo $i; ?>)"  style="display: none">
								</div>
								<a value="Chọn ảnh" onclick="document.getElementById('inputtxtimg'+<?php echo $i; ?>).click()" >
									<?php if($i<count($pro->detail_img)): ?>
									<img id="chitiet<?php echo $i; ?>" src="<?php echo url('public/uploads/products/details/'.$pro->detail_img[$i]->images_url); ?>"  class="img-detail"/>
									<?php else: ?>
									<img id="chitiet<?php echo $i; ?>" src="<?php echo url('public/uploads/image.png'); ?>"  class="img-detail"/>
									<?php endif; ?>
								</a>
							</div>	

							<?php endfor; ?>
						</div>
					</div>
				</div>
				</div>
			</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<h4>Chi tiết cấu hình</h4>
			<p>Cấu hình sản phẩm</p>
		</div>
		<div class="col-md-10">
			<div class="col-md-12">
				<div class="row">
					<div class="form-group">
							<input type="button" class="btn btn-default pull-right" onclick="addRow()" value="Thêm trường"/>
							<table id="cauhinh" style="width: 80%" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Tên trường</th>
										<th>Thông số</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php echo $pro->detail_up; ?>

									
								</tbody>
							</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			<h4>Đánh giá sản phẩm</h4>
			<p>Nhập nội dung đánh giá</p>
		</div>
		<div class="col-md-10">
			<div class="col-md-12">
				<div class="row">
					<div class="form-group">
						<label for="input-id">Tóm tắt </label>
						<textarea name="txtre_Intro" id="inputTxtre_Intro" class="form-control" value="<?php echo e(old('txtre_Intro')); ?>" rows="2" required="required"><?php echo old('txtre_Intro',isset($pro->r_intro) ? $pro->r_intro : null); ?></textarea>
						
					</div>
					<div class="form-group">
						<label for="input-id">Bài viết chi tiết</label>
						<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="4" value="<?php echo e(old('txtReview')); ?>" required="required"><?php echo old('txtReview',isset($pro->review) ? $pro->review : null); ?></textarea>
						<script type="text/javascript">
							var editor = CKEDITOR.replace('txtReview',{
								language:'vi',
								filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
								filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
								filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<input type="submit" name="btnCateAdd" class="btn btn-primary pull-right" value="Sửa sản phẩm"  />
</form>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scriptModal'); ?>
<script type="text/javascript">
	$( document ).ready(function() {
    	$('#inputsltBrand option[value="'+<?php echo old('sltBrand',isset($pro['brand_id']) ? $pro['brand_id'] : null); ?>+'"]').attr('selected', 'selected');
    	$('#inputSltCate option[value="'+<?php echo old('sltCate',isset($pro['cat_id']) ? $pro['cat_id'] : null); ?>+'"]').attr('selected', 'selected');
    	$('#inputSltType option[value="'+<?php echo old('sltType',isset($pro['seo']) ? $pro['seo'] : null); ?>+'"]').attr('selected', 'selected');
    	$('#inputSltStatus option[value="'+<?php echo old('sltStatus',isset($pro['status']) ? $pro['status'] : null); ?>+'"]').attr('selected', 'selected');
    	$('#cauhinh').on('click', 'input[type="button"]', function(e){
			$(this).closest('tr').remove()
		})
	});
	function validate(){
		
			return true;

	}
	function file_change(f)
	{
		
		var reader = new FileReader();

		reader.onload = function (e) {

			var img = document.getElementById("daiDien");

			img.src = e.target.result;

			img.style.display = "inline";

		};

		reader.readAsDataURL(f.files[0]);
	}
	function img_change(f,id)
	{
		
		var reader = new FileReader();

		reader.onload = function (e) {

			var img = document.getElementById("chitiet"+id);

			img.src = e.target.result;

			img.style.display = "inline";

		};

		reader.readAsDataURL(f.files[0]);
	}
	function addRow(){
		var html = '<tr>'
				+'<td><input type="text" name="txtTruong[]" class="form-control"></td>'
				+'<td><input type="text" name="txtThongSo[]" class="form-control"></td>'
				+'<td><input type="button" class="btn-default btn" value="x" ></td>'
				+'</tr>';
		$("#cauhinh tbody").append(html);
		
	}



</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('back-ends.layouts.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
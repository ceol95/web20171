@extends('back-ends.layouts.form')
@section('css')
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
@endsection
@section('pageContent')
<div class="page-header">
	<h1>
		Sản phẩm
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Thêm mới
		</small>
	</h1>
</div><!-- /.page-header -->
@include('back-ends.modules.alert')
<form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data" onsubmit="return validate()">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-md-2">
			<h4>Thông tin cơ bản</h4>
			<p>Nhập tiêu đề và thông tin cơ bản</p>
		</div>
		<div class="col-md-10">
			<div class="col-md-5">
				<div align="center" >
					<img id="daiDien" src="{!!url('public/uploads/image.png')!!}" style=" width:320px;height:200px;" /> <br />
					<input type="file" name="txtimg" accept="image/*" id="inputtxtimg" value="{{ old('txtimg') }}" class="form-control"  onchange="file_change(this)"  style="display: none">
				</div>
				<div align="center" style="padding-top:5px"> <input type="button" class="btn btn-primary" class="text" value="Chọn ảnh" onclick="document.getElementById('inputtxtimg').click()" /></div><br />	
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="form-group col-md-12">
						<label for="input-id">Tên sản phẩm</label>
						<input type="text" name="txtname" required id="inputtxtname" class="form-control" value="{{ old('txtTitle') }}"  >
					</div>	
					<div class="form-group col-md-6">
						<label for="input-id">Chọn danh mục</label>
						<select name="sltCate" id="inputSltCate" required class="form-control">
							<option value="">--Chọn danh mục--</option>
							<?php MenuMulti($cat,0,$str='---| ',old('sltCate')); ?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="input-id">Chọn nhãn hiệu</label>
						<select name="sltBrand" id="inputsltBrand" required class="form-control">
							<option value="">--Chọn nhãn hiệu--</option>
							@foreach($brand as $row)
							<option value="{!!$row->id!!}">{!!$row->name!!}</option>
							@endforeach
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
						<input type="text" name="txtintro" id="inputtxtintro" class="form-control" value="{{ old('txtAuth') }}" required="required">
					</div>
					<div class="form-group col-md-6" >
						<label for="input-id">Gồm có :</label>  
						<input type="text" name="txtpacket" id="inputtxtpacket" class="form-control" value="{{ old('txtAuth') }}" required="required">
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-12" >
						<label for="input-id">Tag :</label>  
						<input type="text" name="txttag" id="inputtag" value="{{ old('txttag') }}" class="form-control">
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
						<input type="number" name="txtprice" id="inputtxtprice" class="form-control" value="{{ old('txtprice') }}" required="required">
					</div>	
					<div class="form-group col-md-12">
						<label for="input-id">Giá khuyến mãi</label>
						<input type="number" name="txtPromo" id="inputtxtPromo" class="form-control" value="{{ old('txtPromo') }}"  >
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-12" >
						<label for="input-id">Khuyến mãi 1 :</label> 
						<input type="text" name="txtpromo1" id="inputtxtpromo1" value="{{ old('txtpromo1') }}" class="form-control" >
					</div>
					<div class="form-group col-md-12" >
						<label for="input-id">Khuyến mãi 2 :</label>  
						<input type="text" name="txtpromo2" id="inputtxtpromo2" value="{{ old('txtpromo2') }}" class="form-control" >
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-12" >
						<label for="input-id">Khuyến mãi 3 :</label>  
						<input type="text" name="txtpromo3" id="inputtxtpromo3" value="{{ old('txtpromo3') }}" class="form-control" >
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
							@for( $i=0; $i<9; $i++)
							<div class="form-group col-md-4">

								<div align="center" >
									<input type="file" name="txtdetail_img[]" accept="image/*" id="inputtxtimg{!!$i!!}" value="{{ old('txtdetail_img[]') }}" class="form-control"  onchange="img_change(this,{!!$i!!})"  style="display: none">
								</div>
								<a value="Chọn ảnh" onclick="document.getElementById('inputtxtimg'+{!!$i!!}).click()" >
									<img id="chitiet{!!$i!!}" src="{!!url('public/uploads/image.png')!!}"  class="img-detail"/>
								</a>
							</div>	

							@endfor
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
									<tr>
										<td><input type="text" name="txtTruong[]" class="form-control"></td>
										<td><input type="text" name="txtThongSo[]" class="form-control"></td>
										<td><input type="button" class="btn-default btn" value="x" ></td>
									</tr>
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
						<textarea name="txtre_Intro" id="inputTxtre_Intro" class="form-control" value="{{ old('txtre_Intro') }}" rows="2" required="required"></textarea>
						
					</div>
					<div class="form-group">
						<label for="input-id">Bài viết chi tiết</label>
						<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="4" value="{{ old('txtReview') }}" required="required"></textarea>
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
	<input type="submit" name="btnCateAdd" class="btn btn-primary pull-right" value="Thêm sản phẩm"  />
</form>
@endsection



@section('scriptModal')
<script type="text/javascript">
	$( document ).ready(function() {
		$('#cauhinh').on('click', 'input[type="button"]', function(e){
			$(this).closest('tr').remove()
		})
	});



	function validate(){
		var filename = document.getElementById("inputtxtimg").value;	
			var dotpos;
			filename = filename.substring(filename.lastIndexOf("\\")+1,filename.length);
			dotpos=filename.lastIndexOf('.');
			ext=filename.substr(dotpos+1,3);
			ext=ext.toLowerCase();
			if (ext!=""){
				if ((ext!="gif") && (ext!="jpg") && (ext!="png")){
					alert("Bạn chỉ được up ảnh những File định dạng GIF, JPG, PNG.");
					return false;
				}
			}
			else{
				alert("Bạn chưa chọn ảnh.");
					return false;
			}
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
@endsection


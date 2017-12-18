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
</style>
@endsection
@section('pageContent')
<div class="page-header">
	<h1>
		Sản phẩm
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Chỉnh sửa
		</small>
	</h1>
</div><!-- /.page-header -->
@include('back-ends.modules.alert')
<form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-md-2">
			<h4>Thông tin cơ bản</h4>
			<p>Nhập thông tin cơ bản</p>
		</div>
		<div class="col-md-10">
			<div class="col-md-5">
				<div align="center" >
					<img id="daiDien" src="" style=" width:320px;height:200px;" /> <br />
					<input type="file" name="txtimg" accept="image/*" id="inputtxtimg" value="{{ old('txtimg') }}" class="form-control" required="required" onchange="file_change(this)" style="display: none">
				</div>
				<div align="center" style="padding-top:5px"> <input type="button" class="btn btn-primary" class="text" value="Chọn ảnh" onclick="document.getElementById('inputtxtimg').click()" /></div><br />	
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="form-group col-md-12">
						<label for="input-id">Tiêu đề bản tin</label>
						<input type="text" name="txtTitle" id="inputTxtTitle" class="form-control" value="{{ old('txtTitle') }}"  >
					</div>	
					<div class="form-group col-md-12">
						<label for="input-id">Chọn danh mục</label>
						<select name="sltCate" id="inputSltCate" required class="form-control">
							<option value="">--Chọn danh mục--</option>
							@foreach($cat as $dt)
							<option value="{!!$dt->id!!}" >{!!'--|--|'.$dt->name!!}</option> 	
							@endforeach	
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6" >
						<label for="input-id">Tác giả :</label> 
						<input type="text" name="txtAuth" id="inputTxtAuth" class="form-control" value="{{ old('txtAuth') }}" required="required">
					</div>
					<div class="form-group col-md-6" >
						<label for="input-id">Trạng thái :</label>  
						<select name="slstatus" id="inputSlstatus" class="form-control" required="required">
							<option value="1" selected>Hiển thị</option>
							<option value="0">Tạm ẩn</option>
						</select>
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-6" >
						<label for="input-id">Nguồn tin :</label> 
						<input type="text" name="txtSource" id="inputtxtSource" value="{{ old('txtSource') }}" class="form-control">
					</div>
					<div class="form-group col-md-6" >
						<label for="input-id">Tag :</label>  
						<input type="text" name="txttag" id="inputtag" value="{{ old('txttag') }}" class="form-control">
					</div>	
				</div>



				

			</div>
			

		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<h4>Nội dung</h4>
			<p>Nhập tóm tắt và nội dung tin</p>
		</div>
		<div class="col-md-10">
			<div class="col-md-12">
				<div class="row">
					<div class="form-group">
						<label for="input-id">Tóm tắt </label>
						<textarea name="txtIntro" id="inputTxttxtIntro" class="form-control" rows="2" required="required">{{ old('txtIntro') }}</textarea>
						<script type="text/javascript">
							var editor = CKEDITOR.replace('txtIntro',{
								language:'vi',
								filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
								filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
								filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							});
						</script>
					</div>
					<div class="form-group">
						<label for="input-id">Bài viết chi tiết</label>
						<textarea name="txtFull" id="inputtxtFull" class="form-control" rows="4" required="required">{{ old('txtFull') }}</textarea>
						<script type="text/javascript">
							var editor = CKEDITOR.replace('txtFull',{
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
	<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm tin tức" class="button pull-right" />
</form>
@endsection



@section('scriptModal')
<script type="text/javascript">
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



</script>
@endsection


@extends('back-ends.layouts.form')
@section('css')
<style type="text/css">
			body{
				font-family: 'Roboto', sans-serif;
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
<form class="form-horizontal" role="form">
	<div class="row">
		<div class="col-md-3">
			<h4>Thông tin cơ bản</h4>
			<p>Nhập tên và thông tin cơ bản của hàng hóa</p>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="form-group col-md-6">
					<label for="input-id">Chọn danh mục</label>
					<select name="sltCate" id="inputSltCate" required class="form-control">
						<option value="">--Chọn Loại--</option>
						<?php MenuMulti($cat,0,$str='---| ',0); ?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="input-id">Chọn nhãn hiệu</label>
					<select name="sltBrand" id="inputSltBrand" required class="form-control">
						<option value="">--Chọn nhãn hiệu--</option>
						@foreach ($brand as $row)
						<option value="{!!$row->id!!}">{!!$row->name!!}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
</form>


<div class="row">
	<div class="col-xs-12">





		<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
					@include('back-end.modules.alert')
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		<div class="row">
				      			<div class="form-group col-md-6">
				      				<label for="input-id">Chọn danh mục</label>
				      				<select name="sltCate" id="inputSltCate" required class="form-control">
				      					<option value="">--Chọn Loại--</option>
				      					<?php MenuMulti($cat,0,$str='---| ',0); ?>
				      				</select>
				      			</div>
				      			<div class="form-group col-md-6">
				      				<label for="input-id">Chọn nhãn hiệu</label>
				      				<select name="sltBrand" id="inputSltBrand" required class="form-control">
				      					<option value="">--Chọn nhãn hiệu--</option>
				      					@foreach ($brand as $row)
							                <option value="{!!$row->id!!}">{!!$row->name!!}</option>
							            @endforeach
				      				</select>
				      			</div>
				      		</div>
				      		
				      		<div class="form-group">
				      			<label for="input-id">Tên sản phẩm</label>
				      			<input type="text" name="txtname" id="inputTxtname" required class="form-control" value="{{ old('txtname') }}"  >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Điểm nổi bật</label>
				      			<input type="text" name="txtintro" id="inputTxtintro" class="form-control" value="{{ old('txtintro') }}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Gồm có : </label>
				      			<input type="text" name="txtpacket" id="inputtxtpacket" value="{{ old('txtpacket') }}" class="form-control" >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Khuyễn mãi (tối đa 3 mục)</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				khuyễn mại 1 : <input type="text" name="txtpromo1" id="inputtxtpromo1" value="{{ old('txtpromo1') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				khuyễn mại 2 : <input type="text" name="txtpromo2" id="inputtxtpromo2" value="{{ old('txtpromo2') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				khuyễn mại 3 : <input type="text" name="txtpromo3" id="inputtxtpromo3" value="{{ old('txtpromo3') }}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Hình ảnh : <input type="file" name="txtimg" accept="image/png" id="inputtxtimg" value="{{ old('txtimg') }}" class="form-control" required="required">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Giá bán : <input type="number" name="txtprice" id="inputtxtprice" class="form-control" value="{{ old('txtprice') }}" required="required">
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tag : <input type="text" name="txttag" id="inputtag" value="{{ old('txttag') }}" class="form-control">
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id"> Chi tiết cấu hình sản phẩm</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Cpu : <input type="text" name="txtCpu" id="inputtxtCpu" value="{{ old('txtCpu') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				RAM : <input type="text" name="txtRam" id="inputtxtRam" value="{{ old('txtRam') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
					      				Bộ nhớ trong (HDD) : <input type="text" name="txtStorage" id="inputtxtStorage" value="{{ old('txtStorage') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1" style="padding-left: 0;">	
					      				Thẻ nhớ	<input type="text" name="txtExtend" id="inputtxtExtend" value="{{ old('txtExtend') }}" class="form-control">
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Màn hình : <input type="text" name="txtScreen" id="inputtxtscreen" value="{{ old('txtScreen') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				VGA : <input type="text" name="txtVga" id="inputtxtVga" value="{{ old('txtVga') }}" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Webcam - Cam sau <input type="text" name="txtCam1" id="inputtxtCam1" value="{{ old('txtCam1') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Cammera trước <input type="text" name="txtCam2" id="inputtxtCam2" value="{{ old('txtCam2') }}" class="form-control" >
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				SIM hỗ trợ : <input type="text" name="txtSIM" id="inputtxtSIM" value="{{ old('txtSIM') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Kết nối : <input type="text" name="txtConnect" id="inputtxtConnect" value="{{ old('txtConnect') }}" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				PIN : <input type="text" name="txtPin" id="inputtxtPin" value="{{ old('txtPin') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Hệ điều hành : <input type="text" name="txtOs" id="inputtxtOs" value="{{ old('txtOs') }}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">
					      			@for( $i=1; $i<=12; $i++)
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Hình ảnh {!!$i!!} : <input type="file" name="txtdetail_img[]" value="{{ old('txtdetail_img[]') }}" accept="image/png" id="inputtxtdetail_img" class="form-control">
					      			</div>
					      			@endfor
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Tóm tắt đánh giá</label>
					      				<textarea name="txtre_Intro" id="inputTxtre_Intro" class="form-control" value="{{ old('txtre_Intro') }}" rows="2" required="required"></textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtre_Intro',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Bài đánh giá chi tiết</label>
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

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm sản phẩm" class="button" />
				      	</form>			      	
					</div>
				</div>
	</div>
</div>
@endsection
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
		Tin tức 
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Thêm mới
		</small>
	</h1>
</div><!-- /.page-header -->
@include('back-end.modules.alert')
<form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-md-2">
			<h4>Thông tin cơ bản</h4>
			<p>Nhập tiêu đề và thông tin cơ bản</p>
		</div>
		<div class="col-md-10">
			<div class="col-md-5">
				<div align="center" >
					<img id="daiDien" src="{!!url('public/uploads/news/'.$data->images)!!}" style=" width:320px;height:200px;" /> <br />
					<input type="file" name="txtimg" accept="image" id="inputtxtimg" value="{!! old('txtimg',isset($data["images"]) ? $data["images"] : null) !!}" class="form-control" onchange="file_change(this)" style="display: none">
				</div>
				<div align="center" style="padding-top:5px"> <input type="button" class="btn btn-primary" class="text" value="Chọn ảnh" onclick="document.getElementById('inputtxtimg').click()" /></div><br />	
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="form-group col-md-12">
						<label for="input-id">Tiêu đề bản tin</label>
						<input type="text" name="txtTitle" id="inputTxtTitle" class="form-control" value="{!! old('txtTitle',isset($data->title) ? $data->title : null) !!}"  >
					</div>	
					<div class="form-group col-md-12">
						<label for="input-id">Chọn danh mục</label>
						<select name="sltCate" id="inputSltCate" required class="form-control">
							<option value="">--Chọn danh mục--</option>
							@foreach($cat as $dt)
							@if($dt->id == $data->cat_id)
							<option value="{!!$dt->id!!}" selected >{!!'--|--|'.$dt->name!!}</option> 	
							@else
							<option value="{!!$dt->id!!} " >{!!'--|--|'.$dt->name!!}</option> 	
							@endif
							@endforeach	
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6" >
						<label for="input-id">Tác giả :</label> 
						<input type="text" name="txtAuth" id="inputTxtAuth" class="form-control" value="{!! old('txtAuth',isset($data["author"]) ? $data["author"] : null) !!}" required="required">
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
						<input type="text" name="txtSource" id="inputtxtSource" value="{!! old('txtSource',isset($data["source"]) ? $data["source"] : null) !!}" class="form-control">
					</div>
					<div class="form-group col-md-6" >
						<label for="input-id">Tag :</label>  
						<input type="text" name="txttag" id="inputtag" value="{!! old('txttag',isset($data["tag"]) ? $data["tag"] : null) !!}" class="form-control">
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
						<textarea name="txtIntro" id="inputTxttxtIntro" class="form-control" rows="2" required="required">{!! old('txtIntro',isset($data["intro"]) ? $data["intro"] : null) !!}</textarea>
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
						<textarea name="txtFull" id="inputtxtFull" class="form-control" rows="4" required="required">{!! old('txtFull',isset($data["full"]) ? $data["full"] : null) !!}</textarea>
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

@extends('back-ends.layouts.master')
@section('pageContent')
<!-- main content - noi dung chinh trong chu -->
<div class="page-header">
	<h1>
		Danh mục
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Thêm mới
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-8">
		@include('back-ends.modules.alert')
		<form action="" method="POST" role="form">
			{{ csrf_field() }}
			<div class="row">
				<div class="form-group col-md-6">
					<label for="input-id">Danh mục cha</label>
					<select name="sltCate" id="inputSltCate" class="form-control">
						<option value="0">-ROOT --</option>
						<?php MenuMulti($data,0,$str='---| ',old('sltCate')); ?>   			
					</select>
				</div>
				<div class="form-group col-md-6" id="groupCate">
					<label  for="input-id">Loại:</label>
					<div style="padding-left: 48px;">
						<input type="checkbox" name="txtCat" id="inputTxtCat"  value="category" >
						<span >Danh mục hàng</span><br>

						<input type="checkbox" name="txtMenu" id="inputTxtMenu"  value="menu" ">
						<span >Hiển thị menu</span>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="form-group col-md-12">
					<label for="input-id">Tên danh mục</label>
					<input type="text" name="txtCateName" id="inputTxtCateName" class="form-control" value="" required="required">
				</div>

			</div>




			<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm mới danh mục" class="button" />
		</form>					      	
	</div>
</div>

<!-- =====================================main content - noi dung chinh trong chu -->
@endsection
@section('scriptModal')
<script type="text/javascript">
	$(document).ready(function () {
    // Setup - add a text input to each footer cell
    //list check
    $('#inputSltCate').change(function () {
        // when the selection of some other drop down changes 
        // get the new value
        var value = $(this).val();
        if(value!=0){
        	$("#groupCate").hide();
        }
        else{
        	$("#groupCate").show();
        }
        

    });
})

</script>
@endsection



@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Danh mục</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><small>Sửa danh mục</small></h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">					
				<div class="panel-body">
					@include('back-end.modules.alert')
					<form action="" method="POST" role="form">
						{{ csrf_field() }}
						<div class="row">
							<div class="form-group col-md-6">
								<label for="input-id">Danh mục cha</label>
								<select name="sltCate" id="inputSltCate" class="form-control">
									<option value="0">-ROOT --</option>
									<?php MenuMulti($cat,0,$str='---| ',$data['parent_id']); ?>  		
								</select>
							</div>
							<div class="form-group col-md-6" id="groupCate">
								<label  for="input-id">Loại:</label>
								<div style="padding-left: 48px;">
									<input type="checkbox" name="txtCat" id="inputTxtCat"  value="category" 
									<?php if (($data['cat']!=null && strpos($data['cat'], 'category'))) echo 'checked'; ?> >
									<span >Danh mục hàng</span><br>
									<input type="checkbox" name="txtMenu" id="inputTxtMenu"  value="menu" 
									<?php if (($data['cat']!=null && strpos($data['cat'], 'menu'))) echo 'checked'; ?> >
									<span >Hiển thị menu</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<label for="input-id">Tên danh mục</label>
								<input type="text" name="txtCateName" id="inputTxtCateName" class="form-control" value="{!! old('txtCateName', isset($data['name']) ? $data['name'] : null)!!}" required="required">
							</div>
						</div>
						<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Sửa danh mục" class="button" />
					</form>					      	
				</div>
			</div>
		</div>
	</div><!--/.row-->		
</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection
@section('scriptModal')
<script type="text/javascript">
	$(document).ready(function () {
    // Setup - add a text input to each footer cell
    //list check
    var value = $('#inputSltCate').val();
    if(value!=0){
        	$("#groupCate").hide();
        }
        else{
        	$("#groupCate").show();
        }
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
@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Nhãn hiệu</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><small>Sửa nhãn hiệu</small></h1>
		</div>
	</div><!--/.row-->	

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">					
				<div class="panel-body">
					@include('back-end.modules.alert')
					<form action="" method="POST" role="form">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="input-id">Tên nhãn hiệu</label>
							<input type="text" name="txtBrandName" id="inputTxtBrandName" class="form-control" required="required" value="{!!old('txtBrandName',isset($data['name']) ? $data['name'] : null)!!}">
						</div>
						<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Sửa nhãn hiệu" class="button" />
					</form>			      	
				</div>
			</div>
		</div>
	</div><!--/.row-->	

</div>
	<!-- =====================================main content - noi dung chinh trong chu -->
	@endsection
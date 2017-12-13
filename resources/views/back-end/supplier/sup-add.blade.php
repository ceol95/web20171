@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Nhà cung cấp</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><small>Thêm mới</small></h1>
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
								
							</div>
							

						</div>
						
						<input type="submit" name="btnSuppAdd" class="btn btn-primary" value="Thêm mới nhà cung cấp" class="button" />
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
   
})

</script>
@endsection



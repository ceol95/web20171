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
.btn-remove{
	padding: 1px;
}
.head{
	color: #00c5ff;
	font-weight: 800;
	font-size: 18pt;
}
</style>
@endsection
@section('pageContent')
<div class="page-header">
	<h1>
		Nhập hàng
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Sửa hóa đơn
		</small>
	</h1>
</div><!-- /.page-header -->
@include('back-ends.modules.alert')
<form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="row">
		
		<div class="col-md-7">
			<div class="head">Chi tiết phiếu</div>
			<div class="col-md-12" style="padding-bottom: 20px; ">
				<label>Lựa chọn sản phẩm</label>
				<select id="sltPro" class="chosen form-control" data-placeholder="Chọn sản phẩm để thêm">
					@foreach($pro as $row)
					<option value="{!!$row->id!!}">{!!$row->name!!}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-12"> 
				<input type="hidden" name="txtDel" id="idDelete" value="">
				<table id="chitiet" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Sản phẩm</th>
							<th>Số lượng</th>
							<th>Đơn giá</th>
							<th>Thành tiền</th>
							<th></th>
						</tr>
					</thead>
					<tbody id="body">
						@foreach($data as $row)
							<tr>
							<td><input type="hidden" name="txtidOld[]" value="{!!$row->idPro!!}">{!!$row->idPro!!}</td>
							<td>{!!$row->name!!}</td>
							<td><input type="number" name="txtSLOld[]" id="SL{!!$row->idPro!!}" value="{!!$row->quantity!!}" class="{!!$row->idPro!!} SL"></td>
							<td><input type="number" name="txtDGOld[]" id="DG{!!$row->idPro!!}" value="{!!$row->priceOne!!}" class="{!!$row->idPro!!} DG"></td>
							<td><input type="text" disabled  id="TT{!!$row->idPro!!}" value="{!!$row->quantity * $row->priceOne!!}" class="money"></td>
							<td><input type="button" class="btn btn-default btn-remove {!!$row->idPro!!}" value="x"></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<div class="form-group pull-right">
					<label>Tổng tiền</label>
					<input type="number" name="txtTotal" id="inputTotal" readonly="readonly" value="0">
				</div>
			</div>
			
		</div>
		<div class="col-md-5">
			<div class="head">Thông tin phiếu</div>
			<div class="form-group">
				<label>Nhà cung cấp</label>
				<select name="sltSup" class="form-control">
					@foreach($supp as $row)
					<option value="{!!$row->id!!}">{!!$row->name!!}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Ngày có thể nhận</label>
				<div class="input-group">
					<input class="form-control date-picker" id="inputMaybeRec" name="txtMaybeRec" type="text" data-date-format="dd-mm-yyyy" value="{!! old('txtMaybeRec',isset($bill['maybe_Rec']) ? $bill['maybe_Rec'] : null) !!}" />
					<span class="input-group-addon">
						<i class="fa fa-calendar bigger-110"></i>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label>Ngày nhận</label>
				<div class="input-group">
					<input class="form-control date-picker" id="inputRec" name="txtRec" type="text" data-date-format="dd-mm-yyyy" value="{!! old('txtRec',isset($bill['receive_at']) ? $bill['receive_at'] : null) !!}"/>
					<span class="input-group-addon">
						<i class="fa fa-calendar bigger-110"></i>
					</span>
				</div>
			</div>
			
		</div>
	</div>
	
	<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Sửa nhập hàng" class="button pull-right" />
</form>
@endsection



@section('scriptModal')
<script type="text/javascript">
	$( document ).ready(function() {
		//$('#sltSup option[value="'+{!! old('sltSup',isset($bill['idSup']) ? $bill['idSup'] : null) !!}+'"]').attr('selected', 'selected');
		$TongTien = 0;
		$(".money").each(function () {
                    $TongTien = parseInt($(this).val()) + $TongTien;
                    $("#inputTotal").val($TongTien);
                });
		$('.chosen').chosen();
		$('#sltPro').change(function () {
	        var value = $(this).val();
	        var text = $("#sltPro option:selected").text();
	        
	        $html = '<tr>'
							+'<td><input type="hidden" name="txtid[]" value="'+value+'">'+value+'</td>'
							+'<td>'+text+'</td>'
							+'<td><input type="number" name="txtSL[]" id="SL'+value+'" value="0" class="'+value+' SL"></td>'
							+'<td><input type="number" name="txtDG[]" id="DG'+value+'" value="0" class="'+value+' DG"></td>'
							+'<td><input type="text" disabled  id="TT'+value+'" value="0" class="money"></td>'
							+'<td><input type="button" class="btn btn-default btn-remove" value="x"></td>'
						+'</tr>'
			
			$("#chitiet tbody").append($html);

			
    	});
    	function total(id){
    		var money = $('#SL'+id).val() * $('#DG'+id).val();

			$('#TT'+id).val(money);
			$TongTien = 0;
			$(".money").each(function () {
                    $TongTien = parseInt($(this).val()) + $TongTien;
                    $("#inputTotal").val($TongTien);
                });
    	}

    	

		$('#chitiet tbody').on('change', 'input[type="number"]', function () {
            var classList = this.className.split(/\s+/);
			var id = classList[0];
			total(id);
            });

		

    	$('#chitiet').on('click', 'input[type="button"]', function(e){
    		var classList = this.className.split(/\s+/);
    		if (classList.length == 4) {
                    var idString = $("#idDelete").val();
                    $("#idDelete").val(idString + " " + classList[3]);
                }
			$(this).closest('tr').remove();
		});
		$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true,
					dateFormat: "yyyy-mm-dd"
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});

		});
		
</script>
@endsection
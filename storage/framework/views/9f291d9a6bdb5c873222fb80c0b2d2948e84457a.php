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
.btn-remove{
	padding: 1px;
}
.head{
	color: #00c5ff;
	font-weight: 800;
	font-size: 18pt;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageContent'); ?>
<div class="page-header">
	<h1>
		Nhập hàng
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Thêm mới
		</small>
	</h1>
</div><!-- /.page-header -->
<?php echo $__env->make('back-ends.modules.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<div class="row">
		
		<div class="col-md-7">
			<div class="head">Chi tiết phiếu</div>
			<div class="col-md-12" style="padding-bottom: 20px; ">
				<label>Lựa chọn sản phẩm</label>
				<select id="sltPro" class="chosen form-control" data-placeholder="Chọn sản phẩm để thêm">
					<?php foreach($pro as $row): ?>
					<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="col-md-12"> 
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
					<?php foreach($supp as $row): ?>
					<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Ngày có thể nhận</label>
				<div class="input-group">
					<input class="form-control date-picker" id="inputMaybeRec" name="txtMaybeRec" type="text" data-date-format="dd-mm-yyyy" />
					<span class="input-group-addon">
						<i class="fa fa-calendar bigger-110"></i>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label>Ngày nhận</label>
				<div class="input-group">
					<input class="form-control date-picker" id="inputRec" name="txtRec" type="text" data-date-format="dd-mm-yyyy" />
					<span class="input-group-addon">
						<i class="fa fa-calendar bigger-110"></i>
					</span>
				</div>
			</div>
			
		</div>
	</div>
	
	<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm nhập hàng" class="button pull-right" />
</form>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scriptModal'); ?>
<script type="text/javascript">
	$( document ).ready(function() {
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
			$(this).closest('tr').remove()
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-ends.layouts.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
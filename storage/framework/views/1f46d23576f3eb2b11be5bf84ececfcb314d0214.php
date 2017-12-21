<?php $__env->startSection('pageContent'); ?>
<!-- main content - noi dung chinh trong chu -->
<div class="page-header">
	<h1>
		Danh mục
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Sửa
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-8">
		<?php echo $__env->make('back-ends.modules.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="" method="POST" role="form">
			<?php echo e(csrf_field()); ?>

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
					<input type="text" name="txtCateName" id="inputTxtCateName" class="form-control" value="<?php echo old('txtCateName', isset($data['name']) ? $data['name'] : null); ?>" required="required">
				</div>
			</div>
			<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Sửa danh mục" class="button" />
		</form>	
	</div>
</div>

<!-- =====================================main content - noi dung chinh trong chu -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptModal'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-ends.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
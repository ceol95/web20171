<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/css/jquery-ui.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/css/bootstrap-datepicker3.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/css/ui.jqgrid.min.css')); ?>" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('public/back-end/ace-master/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/back-end/ace-master/assets/js/jquery.jqGrid.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/back-end/ace-master/assets/js/grid.locale-vi.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-ends.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
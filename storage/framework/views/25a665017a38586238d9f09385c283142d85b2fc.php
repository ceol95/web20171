<?php $__env->startSection('cssPlugin'); ?>
		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/jquery-ui.custom.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/jquery.gritter.min.css'); ?>" />

		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/chosen.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/bootstrap-datepicker3.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/bootstrap-timepicker.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/daterangepicker.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/bootstrap-datetimepicker.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/bootstrap-colorpicker.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo url('public/back-end/ace-master/assets/css/chosen.min.css'); ?>"/>
		<script src="<?php echo url('public/plugin/ckeditor/ckeditor.js'); ?>"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsPlugin'); ?>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/jquery-ui.custom.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/jquery.ui.touch-punch.min.js'); ?>"></script>

		<script src="<?php echo url('public/back-end/ace-master/assets/js/chosen.jquery.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/spinbox.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/bootstrap-datepicker.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/bootstrap-timepicker.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/moment.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/daterangepicker.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/bootstrap-datetimepicker.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/bootstrap-colorpicker.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/jquery.knob.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/autosize.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/jquery.inputlimiter.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/jquery.maskedinput.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/bootstrap-tag.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/bootstrap-markdown.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/jquery.hotkeys.index.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/bootstrap-wysiwyg.min.js'); ?>"></script>
		<script src="<?php echo url('public/back-end/ace-master/assets/js/chosen.jquery.min.js'); ?>"></script>

		
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-ends.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
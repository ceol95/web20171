<?php echo $__env->make('back-end.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
<?php echo $__env->make('back-end.modules.top-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('back-end.modules.left-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('back-end.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
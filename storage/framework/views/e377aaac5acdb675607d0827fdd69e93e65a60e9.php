<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('modules.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">     
	  	<div class="row">   
			<?php echo $__env->yieldContent('content'); ?>
			<?php echo $__env->make('modules.gioithieu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  	</div>       <!-- /row -->
	</div> <!-- /container -->
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
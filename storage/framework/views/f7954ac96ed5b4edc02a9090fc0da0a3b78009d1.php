<?php echo $__env->make('back-ends.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<body class="no-skin">
		<?php echo $__env->make('back-ends.modules.top-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php echo $__env->make('back-ends.modules.left-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			<div class="main-content">
				<div class="main-content-inner">
					<!--<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul>

						
					</div>-->
					<div class="page-content">
						<?php echo $__env->make('back-ends.modules.set-ui', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						
						<?php echo $__env->yieldContent('pageContent'); ?>
					</div>
					
				</div>
			</div><!-- /.main-content -->


<?php echo $__env->make('back-ends.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
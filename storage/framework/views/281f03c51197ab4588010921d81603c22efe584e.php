			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo e(asset('public/back-end/ace-master/assets/js/jquery-2.1.4.min.js')); ?>"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo e(asset('public/back-end/ace-master/assets/js/jquery.mobile.custom.min.js')); ?>'>"+"<"+"/script>");
</script>
<script src="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/js/jquery.ui.touch-punch.min.js"></script>

<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/js/excanvas.min.js"></script>
		<![endif]-->
		
		<?php echo $__env->yieldContent('js'); ?>
		<!-- ace scripts -->
		
		
		<script src="<?php echo e(asset('public/back-end/ace-master/assets/js/ace-elements.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/back-end/ace-master/assets/js/ace.min.js')); ?>"></script>


		<!-- inline scripts related to this page -->
		
		<?php echo $__env->yieldContent('scriptAlert'); ?>
		<?php echo $__env->yieldContent('scriptModal'); ?>
	</body>
	</html>
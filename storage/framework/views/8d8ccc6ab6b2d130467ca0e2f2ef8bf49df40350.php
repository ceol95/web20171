
	<script src="<?php echo url('public/back-end/js/jquery-1.11.1.min.js'); ?>"></script>
	<script src="<?php echo url('public/back-end/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo url('public/back-end/js/chart.min.js'); ?>"></script>
	<script src="<?php echo url('public/back-end/js/chart-data.js'); ?>"></script>
	<script src="<?php echo url('public/back-end/js/easypiechart.js'); ?>"></script>
	<script src="<?php echo url('public/back-end/js/easypiechart-data.js'); ?>"></script>
	<script src="<?php echo url('public/back-end/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo url('public/back-end/js/bootstrap-table.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo url('public/js/script.js'); ?>"></script>
	<script type='text/javascript' src="<?php echo url('public/js/validate/jquery.validate.min.js'); ?>"></script> 
	<script>
		$('#calendar').datepicker({
		});
		$(".select2").select2();
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})


	</script>
	<script>
    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>	
	<?php echo $__env->yieldContent('scriptAlert'); ?>
	<?php echo $__env->yieldContent('scriptModal'); ?>
</body>

</html>

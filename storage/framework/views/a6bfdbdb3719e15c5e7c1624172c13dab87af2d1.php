<?php $__env->startSection('js'); ?>
<script type="text/javascript">
$( document ).ready(function() {
    $('.mega-menu-category').css('display','none');
    
});           
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
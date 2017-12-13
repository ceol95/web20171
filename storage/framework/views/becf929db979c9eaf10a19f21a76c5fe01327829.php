<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
    <ul>
        <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php elseif(Session()->has('flash_level')): ?>
<div class="alert bg-success alert-modal AlertBox" role="alert">
    <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg> <?php echo Session::get('flash_massage'); ?> 
    <a href="#" class="pull-right close"><span class="glyphicon glyphicon-remove"></span></a>
</div>

<?php elseif(Session()->has('flash_error')): ?>
<div class="alert bg-danger alert-modal AlertBox" role="alert">
    <svg class="glyph stroked cancel"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-cancel"></use></svg><?php echo Session::get('flash_massage'); ?> <a href="#" class="pull-right close"><span class="glyphicon glyphicon-remove"></span></a>
</div>

<?php endif; ?>
<?php $__env->startSection('scriptAlert'); ?>
<script type="text/javascript">
    $(function () {

        $(".close").on("click", function (e) { $('.alert-modal').hide(); });
        
    });

</script>
<?php $__env->stopSection(); ?>
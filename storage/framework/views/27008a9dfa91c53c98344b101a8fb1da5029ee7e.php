
<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
    <ul>
        <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php elseif(Session()->has('flash_level')): ?>
    <div class="alert alert-success" >
            <button class="close" onclick="closeModal()">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-hand-o-right"></i>
            Xử lý thành công!
        </div>

<?php elseif(Session()->has('flash_error')): ?>
    <div class="alert alert-danger" >
            <button class="close" onclick="closeModal()">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-hand-o-right"></i>
            Xử lý không thành công!
        </div>

<?php endif; ?>
<?php $__env->startSection('scriptAlert'); ?>
<script type="text/javascript">
    $(function () {

        $(".close").on("click", function (e) { $('.alert-modal').hide(); });
        
    });
    function closeModal(){
            $('.alert').hide();
        }

</script>
<?php $__env->stopSection(); ?>


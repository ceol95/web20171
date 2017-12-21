<?php $__env->startSection('content'); ?>

        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Blogs</li>
                </ul>
            </div>
        </div>
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="block block-layered-nav">
                            <div class="block-content">
                                <h2>Danh mục</h2>
                                <ol>
                                    <?php foreach($cat as $row): ?>
                                    <li><a href="<?php echo url('/cat/'.$row->id); ?>"><?php echo $row->name; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>
                        <div class="block">
                            <div class="title-group"><h2>Tags</h2></div>
                            <div class="block-content">
                                <ol class="tags">
                                    <li><a href="<?php echo url('/news/tag/xu-huong'); ?>">xu-huong</a></li>
                                    <li><a href="<?php echo url('/news/tag/cong-nge'); ?>">cong-nge</a></li>
                                    <li><a href="<?php echo url('/news/tag/2017'); ?>">2017</a></li>
                                    <li><a href="<?php echo url('/news/tag/tinh-nang'); ?>">tinh-nang</a></li>
                                    <li><a href="<?php echo url('/news/tag/da-diem'); ?>">da-diem</a></li>
                                    <li><a href="<?php echo url('/news/tag/thoi-trang'); ?>">thoi-trang</a></li>
                                </ol>
                            </div>
                        </div><!-- /.block - Comments -->
                    </div>
                    <div class="col-sm-9">
                        <?php if(count($data)==0): ?>
                            <b>Không có kết quả nào</b>
                        <?php else: ?>
                        <ol id="products-list" class="blog-list">
                        <?php foreach($data as $row): ?>
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="images-container">
                                                <a class="product-image" title="" href="<?php echo url('/tin-tuc/'.$row->id.'-'.$row->slug); ?>" rel="author"><img alt="" src="<?php echo url('public/uploads/news/'.$row->images); ?>"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h2 class="product-name"><a title="" href="<?php echo url('/tin-tuc/'.$row->id.'-'.$row->slug); ?>"><?php echo $row->title; ?></a></h2>
                                            
                                            <div class="blog-attr">
                                                <span>Viết bởi <a href="#"><?php echo $row->author; ?></a></span>
                                                <span class="separator">|</span>
                                                <span>Ngày <?php echo $row->created_at; ?></span>
                                            </div>
                                            <div class="desc">
                                               <?php echo $row->intro; ?>

                                            </div>
                                            <a href="<?php echo url('/tin-tuc/'.$row->id.'-'.$row->slug); ?>" class="btn btn-default btn-readmore">Đọc tiếp</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?> 
                        </ol>
                     <?php echo $data->render(); ?>   
                     <?php endif; ?>
                    </div>
                </div>
            </div>
        </div><!-- /.main -->
        

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
$( document ).ready(function() {
    $('.mega-menu-category').css('display','none');
    $
    
});           
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
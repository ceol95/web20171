@extends('front-end.layouts.master')
@section('content')

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
                                    @foreach($cat as $row)
                                    <li><a href="{!!url('/cat/'.$row->id)!!}">{!!$row->name!!}</a></li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                        <div class="block">
                            <div class="title-group"><h2>Tags</h2></div>
                            <div class="block-content">
                                <ol class="tags">
                                    <li><a href="{!!url('/news/tag/xu-huong')!!}">xu-huong</a></li>
                                    <li><a href="{!!url('/news/tag/cong-nge')!!}">cong-nge</a></li>
                                    <li><a href="{!!url('/news/tag/2017')!!}">2017</a></li>
                                    <li><a href="{!!url('/news/tag/tinh-nang')!!}">tinh-nang</a></li>
                                    <li><a href="{!!url('/news/tag/da-diem')!!}">da-diem</a></li>
                                    <li><a href="{!!url('/news/tag/thoi-trang')!!}">thoi-trang</a></li>
                                </ol>
                            </div>
                        </div><!-- /.block - Comments -->
                    </div>
                    <div class="col-sm-9">
                        @if(count($data)==0)
                            <b>Không có kết quả nào</b>
                        @else
                        <ol id="products-list" class="blog-list">
                        @foreach($data as $row)
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="images-container">
                                                <a class="product-image" title="" href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" rel="author"><img alt="" src="{!!url('public/uploads/news/'.$row->images)!!}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h2 class="product-name"><a title="" href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}">{!!$row->title!!}</a></h2>
                                            
                                            <div class="blog-attr">
                                                <span>Viết bởi <a href="#">{!!$row->author!!}</a></span>
                                                <span class="separator">|</span>
                                                <span>Ngày {!!$row->created_at!!}</span>
                                            </div>
                                            <div class="desc">
                                               {!!$row->intro!!}
                                            </div>
                                            <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" class="btn btn-default btn-readmore">Đọc tiếp</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach 
                        </ol>
                     {!!$data->render()!!}   
                     @endif
                    </div>
                </div>
            </div>
        </div><!-- /.main -->
        

@endsection
@section('js')
<script type="text/javascript">
$( document ).ready(function() {
    $('.mega-menu-category').css('display','none');
    $
    
});           
</script>
@endsection
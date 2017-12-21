@extends('front-end.layouts.list')
@section('content') 
<style type="text/css">
    td{
        padding:10px;
    }
    table{
        border: solid thin;
    }
</style>
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li class="active">Detail Product</li>
                </ul>
            </div>
        </div><!-- /.breadcrumbs -->
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-right">
                        <div class="product-view">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="product-img-box">
                                        <p class="product-image">
                                            <a href="{!!url('public/uploads/products/'.$data->images)!!}" class="cloud-zoom" id="ma-zoom1">
                                                <img src="{!!url('public/uploads/products/'.$data->images)!!}" alt="{!!$data->name!!}" title="{!!$data->name!!}" />
                                            </a>
                                        </p>
                                        <div class="more-views thumbnail-container">
                                            <ul class="bxslider">
                                                @foreach($data->detail_img as $row)
                                                  <li class="thumbnail-item">
                                                    <a href="{!!url('public/uploads/products/details/'.$row->images_url)!!}" class="cloud-zoom-gallery" title="" name="{!!url('public/uploads/products/details/'.$row->images_url)!!}" rel="useZoom: 'ma-zoom1', smallImage: '{!!url('public/uploads/products/details/'.$row->images_url)!!}'">
                                                        <img src="{!!url('public/uploads/products/details/'.$row->images_url)!!}" alt="" />
                                                    </a>
                                                    </li>
                                                @endforeach   
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-shop col-sm-7">
                                    <div class="product-name">
                                        <h1>{!!$data->name!!}</h1>
                                    </div>
                                    
                                    <div class="box-container2"> 
                                        <div class="price-box">
                                             @if($row->promotionPrice>0)
                                                <p class="special-price">
                                                    <span class="price-label">Giá sau</span>
                                                    <span class="price">{!!number_format($data->promotionPrice)!!}</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Giá trước </span>
                                                    <span class="price">{!!number_format($data->price)!!}</span>
                                                </p>
                                                @else
                                                 <p class="special-price">
                                                    <span class="price-label">Giá </span>
                                                    <span class="price">{!!number_format($data->price)!!}</span>
                                                </p>
                                            @endif
                                                
                                        </div>
                                    </div>
                                    <div class="short-description">
                                        <div class="std">{!!$data->r_intro!!}</div>
                                    </div>
                                    <p class="availability in-stock">
                                        Trạng thái: <span>Còn hàng</span>

                                    </p>
                                    <form class="form-horizontal">
                                        
                                        <button type="button" onclick="goToCard('{!!url('gio-hang/addcart/'.$data->id)!!}')" class="btn btn-danger btn-cart">Thêm vào giỏ</button>
                                        
                                    </form>
                                </div><!-- /.product-shop -->
                            </div>
                            <div class="product-tab tab-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#product-desc" data-toggle="tab">Giới thiệu sản phẩm</a></li>
                                    <li><a href="#product-review" data-toggle="tab">Thông số kỹ thuật</a></li>
                                    <li><a href="#product-tags" data-toggle="tab">Khách hàng nhận xét</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-desc">
                                        {!!$data->review!!}
                                    </div>
                                    <div class="tab-pane" id="product-review">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Đặc điểm</th>
                                                    <th>Thông số</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                {!!$data->detail!!}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="product-tags">...</div>
                                </div>
                            </div><!-- /.product-tab -->
                        </div><!-- /.product-view -->
                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>Sản phẩm liên quan</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">
                                    @foreach($same as $row)
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    @if($row->seo==3)
                                                    <div class='new-icon'><span>new</span></div>
                                                    @elseif($row->promotionPrice>0)
                                                    <div class="sale-icon"><span>sale</span></div>
                                                    @endif
                                                </div>
                                                <a href="{!!url('san-pham/'.$row->id.'/'.$row->slug)!!}" title="{!!$row->name!!}" class="product-image">
                                                    <img src="{!!url('public/uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}" width="250px;" height="250px;" />
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li><a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="link-cart">Thêm vào giỏ</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="{!!$row->name!!}">{!!$row->name!!}</a></h2>
                                                <div class="price-box">
                                                    @if($row->promotionPrice>0)
                                                    <p class="special-price">
                                                        <span class="price-label">Khuyến mãi:</span>
                                                        <span class="price">{!!number_format($row->promotionPrice)!!}</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price">{!!number_format($row->price)!!}</span>
                                                    </p>
                                                    @else
                                                     <p class="special-price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price">{!!number_format($row->price)!!}</span>
                                                    </p>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div><!-- /.featuredproductslider-container -->
                    </div><!-- /.col-right -->
                    <div class="col-sm-3 col-left">
                        
                        <div class="banner-left"><a href="#"><img src="http://localhost:8081/ElecShops/public/front-end/images/ads/ads-01.jpg" alt=""></a>
                            <div class="banner-content">
                                <h1>Giảm giá sốc</h1>
                                <h2>20%</h2>
                                <p>với những mặt hàng sau</p>
                                <a href="#">Mua ngay</a>
                            </div>
                        </div>
                    </div><!-- /.col-left -->
                </div>
            </div>
        </div><!-- /.main -->
@endsection
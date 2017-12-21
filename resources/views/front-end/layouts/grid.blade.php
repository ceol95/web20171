@extends('front-end.layouts.master')
@section('content')
<div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Danh sách</li>
                </ul>
            </div>
        </div>
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-left">
                        <div class="block block-layered-nav">
                            <div class="block-title">
                                <strong><span>Sắp xếp</span></strong>
                            </div>
                            <form>
                            	
                            
                            <div class="block-content">
                                <div id="narrow-by-list">
                                    <div class="layered layered-Category">
                                        <h2>Danh mục</h2>
                                        <select name="stlCat" id="stllCat" class="form-control">
                                        	<option value="0">-----Chọn------</option>
                                        	@foreach($cat as $row)
                                        		<option value="{!!$row->id!!}">{!!$row->name!!}</option>
                                        	@endforeach
                                        </select>
                                    </div>
                                    <div class="layered layered-Manufacturer">
                                        <h2>Nhãn hàng</h2>
                                        <div class="content-shopby">
                                            <select name="stlBrand" id="stllBrand" class="form-control">
                                            	<option value="0">-----Chọn------</option>
                                        	@foreach($brand as $row)
                                        		<option value="{!!$row->id!!}">{!!$row->name!!}</option>
                                        	@endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="layered layered-price">
                                        <h2>Giá</h2>
                                        <div class="content-shopby">
                                            <div id="slider-range"></div>
                                            <div id="search_pr">
                                                <input type="text" name="first_price" class="form-control">
                                                <input type="text" name="last_price" class="form-control">
                                                <button id="search_price" name="search_price" type="submit" class="btn btn-default">SHOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layered layered-Manufacturer">
                                        <h2>Sắp xếp theo</h2>
                                        <div class="content-shopby">
                                            <select name="stlRate" id="stllRate" class="form-control">
                                            	<option value="0">-----Chọn------</option>
                                            	<option value="1">Giá từ thấp đến cao</option>
                                            	<option value="2">Giá từ cao đến thấp</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div><!-- /sort -->
                        
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <div class="page-title">
                            <h1>Danh sách</h1>
                        </div>
                        
                        <div class="row products">
                            <div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="images/products/8.jpg" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.product -->
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->

@endsection
@section('js')
<script type="text/javascript">
$( document ).ready(function() {
    $('.mega-menu-category').css('display','none');
    
});           
</script>
@endsection
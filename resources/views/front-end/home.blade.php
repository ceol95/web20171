@extends('front-end.layouts.master')
@section('content')
  <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-3">
                        <div class="flexslider ma-nivoslider">
                            <div class="ma-loading"></div>
                            <div id="ma-inivoslider-banner7" class="slides">
                                <img src="{!!url('public/front-end/images/slider/slide-01.jpg')!!}" class="dn" alt="" title="#banner7-caption1"  />                           
                                <img src="{!!url('public/front-end/images/slider/slide-02.jpg')!!}" class="dn" alt="" title="#banner7-caption2"  />
                            </div>
                            <div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-1">
                                    <div class="title-container">
                                        <h1 class="title1">headphones az12</h1>
                                        <h2 class="title2" >Đẳng cấp nghe nhạc; Sống động từng giây</h2>                                          
                                    </div>
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1>Khuyến mãi!</h1>
                                            <h2>giảm 30%</h2>
                                            <div class="check-box">
                                                <ul class="list-unstyled">
                                                    <li>Với tất cả các mặt hàng</li>
                                                    <li>Combo 1,000,000</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="{!!url('public/front-end/images/slider/img-04.png')!!}" alt="" />                                                                              
                                </div>
                            </div>                      
                            <div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-2">
                                    <div class="title-container">
                                        <h1 class="title1">Samsung s5</h1>
                                        <h2 class="title2" >Typi non habent claritatem insitam; est usus legentis</h2>                                          
                                    </div>
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1>Xả hàng!</h1>
                                            <h2>chỉ còn 50%</h2>
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="{!!url('public/front-end/images/slider/img-05.png')!!}" alt="" />                                                                                  
                                </div>
                            </div>
                        </div><!-- /.flexslider -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="banner-left"><a href="#"><img src="{!!url('public/front-end/images/ads/ads-01.jpg')!!}" alt=""></a>
                            <div class="banner-content">
                                <h1>Giảm giá sốc</h1>
                                <h2>20%</h2>
                                <p>với những mặt hàng sau</p>
                                <a href="#">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="banner banner-double"><a href="#"><img alt="" src="{!!url('public/front-end/images/ads/ads-02.jpg')!!}"></a></div>
                        <div class="banner banner-double"><a href="#"><img alt="" src="{!!url('public/front-end/images/ads/ads-03.jpg')!!}"></a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="banner"><a href="#"><img alt="" src="{!!url('public/front-end/images/ads/ads-04.jpg')!!}"></a></div>
                    </div>
                </div><!-- /advertisement -->
                <div class="row">
                    <div class="col-sm-3 col-left">
                        <div class="timely">
                            <div class="title-group"><h2>hot deals</h2></div>
                            <div id="timely-owl" class="owl-container">
                                <div class="owl">
                                    <div class='timer-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Fusce aliquam" class="product-image"><img src="{!!url('public/front-end/images/products/1.jpg')!!}" alt="Fusce aliquam" /></a>
                                                <div class="box-timer">
                                                    <div class="countbox_1 timer-grid"></div>
                                                </div>
                                            </div>
                                            <div class="content-box">
                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Giá đặc biệt</span>
                                                        <span class="price">1,900,000</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price">2,200,000</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 nhận xét</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='timer-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Quisque in arcu" class="product-image"><img src="{!!url('public/front-end/images/products/2.jpg')!!}" alt="Quisque in arcu" /></a>
                                                <div class="box-timer">
                                                    <div class="countbox_2 timer-grid"></div>
                                                </div>
                                            </div>
                                            <div class="content-box">
                                                <h2 class="product-name"><a href="#" title="Quisque in arcu">Quisque in arcu</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Giá đặc biệt</span>
                                                        <span class="price">2,000,000</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price">2,500,000</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 nhận xét</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='timer-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="pleasure rationally" class="product-image"><img src="{!!url('public/front-end/images/products/20.jpg')!!}" alt="pleasure rationally" /></a>
                                                <div class="box-timer">
                                                    <div class="countbox_3 timer-grid"></div>
                                                </div>
                                            </div>
                                            <div class="content-box">
                                                <h2 class="product-name"><a href="#" title="pleasure rationally">pleasure rationally</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Giá đặc biệt</span>
                                                        <span class="price">990,000</span>
                                                    </p>
                                                    <p class="old-price"><span class="price-label">Giá: </span><span class="price">1,200,000</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 nhận xét</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.timely -->
                       
                        <div class="menu-recent block">
                            <div class="title-group"><h2>Latest News</h2></div>
                            <div id="latest-news" class="owl-container">
                                <div class="owl">
                                    <div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#"> <img alt="" src="{!!url('public/front-end/images/blog/blog-01.jpg')!!}" /> </a>
                                            </div>
                                            <div class="des-container">
                                                <div class="date-comments">
                                                    <div class="time"><span class="date">August 04, 2015</span></div>
                                                </div>
                                                <div class="des">
                                                    <h4><a href="#" class="title-blog"><span>swimwear for women</span></a></h4> 
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#"> <img alt="" src="{!!url('public/front-end/images/blog/blog-02.jpg')!!}" /> </a>
                                            </div>
                                            <div class="des-container">
                                                <div class="date-comments">
                                                    <div class="time"><span class="date">January 05, 2015</span></div>
                                                </div>
                                                <div class="des">
                                                    <h4><a href="#" class="title-blog"><span>Burberry sport for men</span></a></h4>
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#"> <img alt="" src="{!!url('public/front-end/images/blog/blog-01.jpg')!!}" /> </a>
                                            </div>
                                            <div class="des-container">
                                                <div class="date-comments">
                                                    <div class="time"><span class="date">August 04, 2015</span></div>
                                                </div>
                                                <div class="des">
                                                    <h4><a href="#" class="title-blog"><span>swimwear for women</span></a></h4> 
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.block - Latest News -->
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>Featured</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/8.jpg')!!}" alt="Nunc facilisis" />
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/3.jpg')!!}" alt="Nunc facilisis" />
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/21.jpg')!!}" alt="Nunc facilisis" />
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/6.jpg')!!}" alt="Nunc facilisis" />
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/10.jpg')!!}" alt="Nunc facilisis" />
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/14.jpg')!!}" alt="Nunc facilisis" />
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/20.jpg')!!}" alt="Nunc facilisis" />
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
                            </div>
                        </div><!-- /.máy tính -->
                        <div class="banner">
                            <a href="#"><img alt="" src="{!!url('public/front-end/images/ads/ads-05.jpg')!!}"></a>
                        </div>
                        <div class="newproductslider-container"> 
                            <div class="title-group1"><h2>New Arrivals</h2></div>
                            <div id="new-products" class="owl-container">
                                <div class="owl">
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                    <div class="sale-icon"><span>sale</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/1.jpg')!!}" alt="Nunc facilisis" />
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
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                    <div class="sale-icon"><span>sale</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/2.jpg')!!}" alt="Nunc facilisis" />
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
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                    <div class="sale-icon"><span>sale</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/3.jpg')!!}" alt="Nunc facilisis" />
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
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                    <div class="sale-icon"><span>sale</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/4.jpg')!!}" alt="Nunc facilisis" />
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
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                    <div class="sale-icon"><span>sale</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/5.jpg')!!}" alt="Nunc facilisis" />
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
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/6.jpg')!!}" alt="Nunc facilisis" />
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
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="{!!url('public/front-end/images/products/7.jpg')!!}" alt="Nunc facilisis" />
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
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                            </div>
                        </div><!-- /.điện thoại -->
                        <div class="row">
                            <div class="col-smc-7">
                                <div class="banner">
                                    <a href="#"><img alt="" src="{!!url('public/front-end/images/ads/ads-06.jpg')!!}"></a>
                                </div>
                            </div>
                            <div class="col-smc-5">
                                <div class="banner">
                                    <a href="#"><img alt="" src="{!!url('public/front-end/images/ads/ads-07.jpg')!!}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Random</h2></div>
                                <div class="product-list">
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/21.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Accumsan elit </a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/20.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Accumsan elit </a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/19.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Accumsan elit </a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-list -->
                            </div><!--Random-->
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Bestseller</h2></div>
                                <div class="product-list">
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/18.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Demonstraverunt lectores</a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/17.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Demonstraverunt lectores</a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/16.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Demonstraverunt lectores</a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-list -->
                            </div><!--BestSell-->
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Hot sale</h2></div>
                                <div class="product-list">
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/15.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Accumsan elit </a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/14.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Accumsan elit </a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{!!url('public/front-end/images/products/13.jpg')!!}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">Accumsan elit </a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">$189.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-list -->
                            </div><!--Hot-->
                        </div>
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->
        
       
        
        <div class="brands">
            <div class="container">
                <div class="title-group1">
                    <h2>popular brand</h2>
                </div>
                <div id="brands" class="owl-container">
                    <div class="owl">
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="{!!url('public/front-end/images/brand/logo_brand5.png')!!}" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="{!!url('public/front-end/images/brand/logo_brand4.png')!!}" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="{!!url('public/front-end/images/brand/logo_brand3.png')!!}" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="{!!url('public/front-end/images/brand/logo_brand2.png')!!}" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="{!!url('public/front-end/images/brand/logo_brand1.png')!!}" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="{!!url('public/front-end/images/brand/logo_brand3.png')!!}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div><!-- /#brands -->
            </div>
        </div><!-- /.brands -->
@endsection
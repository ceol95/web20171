@extends('front-end.layouts.master')
@section('js')
<script type="text/javascript">
     function goToCard(link){
        window.location.replace(link);        
    }
$( document ).ready(function() {
   
    $('.mega-menu-category').css('display','none');
    /* special-offer slider */
                $("#special-offer .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* featured-products slider */
                $("#featured-products .owl").owlCarousel({
                    autoPlay : false,
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [991,2],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* .thumbnail-container product image slider */
                $('.thumbnail-container .bxslider').bxSlider({
                    slideWidth: 94,
                    slideMargin: 5,
                    minSlides: 4,
                    maxSlides: 4,
                    pager: false,
                    speed: 500,
                    pause: 3000
                });

});           
</script>
@endsection
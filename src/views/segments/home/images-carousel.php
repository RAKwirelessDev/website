<!-- Images Carousel Section -->
<div class="container-fluid">
    <div id="carousel-fullheight" class="js-slick-carousel u-slick gradient-half-warning-v3" data-autoplay="true" data-speed="5000" data-pagi-classes="text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0">


<?php

foreach ($data->carousel as $product_name => $product_info) {
    if (!empty($product_info['slide_class'])) {
        $class = ' '.$product_info['slide_class'];
    }
    echo '<div class="min-height-100vh js-slide bg-img-hero-center'.$class.'">';
    echo '<div class="container space-top-md-3 space-2 mt-5">';
    echo '<div class="row justify-content-md-between">';
    echo '<div class="col-md-6 mb-7 mb-md-0">';
    echo '<div class="js-slick-carousel u-slick" data-infinite="true" data-arrows-classes="u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left" data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right" data-pagi-classes="text-center u-slick__pagination u-slick__pagination--white mt-3 mb-0">';
    foreach ($product_info['images'] as $image_path) {
        echo '<div class="js-slide px-7 my-4">';
        echo '<img class="img-fluid" src="'.$image_path.'" alt="'.$product_name.'">';
        echo '</div>';  
    }  
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<div class="mb-5">';
    echo '<h1 class="text-white font-weight-normal">'.$product_name.'</h1>';
    if (!empty($product_info['tag_line'])) {
        echo '<span class="d-block h5 text-white mb-4">'.$product_info['tag_line'].'</span>';
    }
    echo '<p class="text-white">'.$product_info['description'].'</p>';
    echo '</div>';
    echo '<a class="btn btn-soft-white transition-3d-hover" href="'.$product_info['store_link'].'">';
    echo '<span class="fas fa-cart-arrow-down mr-2"></span> Buy Now';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

?>


    </div>
</div>
<!-- End Images Carousel Section -->
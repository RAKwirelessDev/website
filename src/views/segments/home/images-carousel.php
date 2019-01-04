<!-- Images Carousel Section -->
<div class="container-fluid">
    <div id="carousel-fullheight" class="js-slick-carousel u-slick gradient-half-warning-v3" data-autoplay="true" data-speed="5000" data-pagi-classes="text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0">


<?php

foreach ($data->carousel as $slide_type => $slide_data) {
    if ($slide_type === 'product') {
        echo '<div class="min-height-100vh js-slide bg-img-hero-center gradient-half-warning-v3">';
        echo '<div class="container space-top-md-3 space-2 mt-5">';
        echo '<div class="row justify-content-md-between">';
        echo '<div class="col-md-6 mb-7 mb-md-0">';
        echo '<div class="js-slick-carousel u-slick" data-infinite="true" data-arrows-classes="u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left" data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right" data-pagi-classes="text-center u-slick__pagination u-slick__pagination--white mt-3 mb-0">';
        foreach ($slide_data['images'] as $image_path) {
            //$image_path = Core\Commmons::slugify($image_path);
            echo '<div class="js-slide px-7 my-4">';
            echo '<img class="img-fluid" src="'.$image_path.'" alt="'.$slide_data['name'].'">';
            echo '</div>';  
        }  
        echo '</div>';
        echo '</div>';
        echo '<div class="col-md-6">';
        echo '<div class="mb-5">';
        echo '<h1 class="text-white font-weight-normal">'.$slide_data['name'].'</h1>';
        if (!empty($slide_data['tag_line'])) {
            echo '<span class="d-block h5 text-white mb-4">'.$slide_data['tag_line'].'</span>';
        }
        echo '<p class="text-white">'.$slide_data['description'].'</p>';
        echo '</div>';
        echo '<a class="btn btn-soft-white transition-3d-hover" href="'.$slide_data['store_link'].'">';
        echo '<span class="fas fa-cart-arrow-down mr-2"></span> Buy Now';
        echo '</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

?>


    </div>
</div>
<!-- End Images Carousel Section -->
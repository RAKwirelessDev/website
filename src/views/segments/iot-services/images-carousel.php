<!-- Images Carousel Section -->
<div class="js-slick-carousel u-slick"
     data-autoplay="true"
     data-speed="5000"  
     data-pagi-classes="text-center position-absolute position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--white mb-5"
     >
     <?php
     foreach ($data->carousel as $product_name => $product_info) {
    if (!empty($product_info['slide_class'])) {
        $class = ' '.$product_info['slide_class'];
    }
    
    echo'<div class="js-slide bg-img-hero-center gradient-overlay-half-dark-v2 text-white" style="background-image: url('.$product_info['image_link'].');">';
    echo'<div class="space-5">';
    echo'<h1 class="text-center">';
    echo $product_info['description-title'];
    echo'</h1>';
    echo'<h3 class="text-center">';
    echo $product_info['description'];
    echo'</h3>';
    
    echo'<ul class="text-md-center"style="list-style:none;">';
    foreach ($product_info['sub-image-desc'] as $imagedesc) {
        echo'<li style="display:inline-block;">';
        echo '<img height="100px"class="px-7 my-4" src="'.$imagedesc['image-link'].'" alt="'.$product_name.'">';
        echo '<p class="text-md-center text-white" style="width:90%;">';
        echo ''.$imagedesc['description'];
        echo'</p>';
        echo'</li>';
    }  
    echo'</ul>';
    echo'</div>';
    echo'</div>';
}
  ?>
</div>

    </div>
</div>
<!-- End Images Carousel Section -->


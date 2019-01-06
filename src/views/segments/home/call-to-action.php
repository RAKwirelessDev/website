<!-- CTA Section -->
<div class="text-white position-relative gradient-half-primary-v1 text-center z-index-2 overflow-hidden">
    <div class="container space-1">

<?php

foreach ($data->call_to_action as $segment) {
    if (!empty($segment['title'])) {
        echo '<h3 class="h2 text-info font-weight-semi-bold mb-3">'.$segment['title'].'</h3>';
    }
    if (!empty($segment['tagline'])) {
        echo '<p class="lead text-white mb-5 mt-10">';
        echo $segment['tagline'];
        echo '</p>';
    }
    if (!empty($segment['item_set']) && is_array($segment['item_set'])) {
        echo '<div class="row">';
        $item_total = count($segment['item_set']);
        $item_md = 12/($item_total);
        $item_count = 0;
        foreach ($segment['item_set'] as $item) {
            $item_count += 1;
            echo '<div class="col-md-'.$item_md.' mb-7 mb-md-0">';
            echo '<div class="text-center">';

            if (!empty($item['image'])) {
                echo '<div class="position-relative">';
                echo '<div class="'.($item_total > $item_count ? 'u-indicator-dots ' : '' ).'min-height-155 mb-2">';
                echo '<img src="'.$item['image'].'">';
                echo '</div>';
                echo '</div>';
            }
            if (!empty($item['title'])) {
                echo '<h3 class="h5">';
                echo $item['title'];
                echo '</h3>';
            }
            if (!empty($item['tagline'])) {
                echo '<p class="text-white mb-md-0">';
                echo $item['tagline'];
                echo '</p>';
            }
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
}

?>

    </div>

</div>
<!-- End CTA Section -->
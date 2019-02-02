<!-- CTA Section -->
<div class="text-white position-relative gradient-half-primary-v1 text-center z-index-2 overflow-hidden">
    <div class="container space-1">

        <?php

$segment_total = count($data->call_to_action);
$segment_count = 0;
foreach ($data->call_to_action as $segment) {
    $segment_count += 1;
    if (!empty($segment['title'])) {
        echo '<h1 class="h1 text-info mb-3'.($segment_count > 1 ? ' mt-8' : '').'">'.$segment['title'].'</h1>';
    }
    if (!empty($segment['tagline'])) {
        echo '<p class="lead text-white mb-5'.(!empty($segment['title']) ? ' mt-4' : ' mt-8').'">';
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
                echo '<img src="'.$item['image'].'" '.(!empty($item['title'])?strip_tags($item['title']):'').'>';
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
<!-- Icon Blocks Section -->
<div class="container space-1 space-md-2">
    <h2 class="text-primary mx-auto mw-mc mb-6"><?php echo $data->business_title; ?></h2>
    <div class="row justify-content-md-between">

<?php

$i = 0;
foreach ($data->business_items as $title => $details) {
    $i += 1;
    echo '<div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 mb-9 mb-lg-0">';
    echo '<div class="text-center px-lg-5">';
    echo '<figure id="icon'.$i.'" class="ie-height-72 max-width-10 mx-auto mb-5">';
    echo $details['fa_icon'];
    echo '</figure>';
    echo '<h3 class="h5">'.$title.'</h3>';
    echo '<span>'.$details['tagline'].'</span>';
    echo '</div>';
    echo '</div>';
}

?>

    </div>
</div>
<!-- End Icon Blocks Section -->
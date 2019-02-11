<div class="bg-white">
      <div class="container space-1">
        <div class="row">
          <div id="stickyBlockStartPoint" class="col-md-4 col-lg-3 mb-7 mb-md-0" style="">
            <!-- Nav -->
            <nav class="js-sticky-block card border-0 bg-primary" data-offset-target="#logoAndNav" data-parent="#stickyBlockStartPoint" data-sticky-view="md" data-start-point="#stickyBlockStartPoint" data-end-point="#stickyBlockEndPoint" data-offset-top="24" data-offset-bottom="24" style="">
              <ul class="js-scroll-nav list-group list-group-transparent list-group-white list-group-flush list-group-borderless py-3 px-5">


<?php

foreach ($data->privacy_policy_contents as $category => $content) {
    $category = trim($category);
    $category_cc = Core\Commons::str_to_cc($category);
    echo '<li>';
    echo '<a class="list-group-item list-group-item-action py-3" href="#'.$category_cc.'">'.$category.'</a>';
    echo '</li>';
}

?>

              </ul>
            </nav>
            <!-- End Nav -->
          </div>

          <div class="col-md-8 col-lg-9">
          

          <?php

$c_num = 0;
$c_num_count = count($data->privacy_policy_contents);
foreach ($data->privacy_policy_contents as $category => $content) {
    $category = trim($category);
    $c_num += 1;
    $category_cc = Core\Commons::str_to_cc($category);

    if ($c_num === 1 && $c_num_count !== 1) { // first
        $category_spacing = 'space-bottom-1 ';
    } elseif ($c_num === $c_num_count && $c_num_count !== 1) { //last
        $category_spacing = 'space-top-1 ';
    } elseif ($c_num_count !== 1) {
        $category_spacing = 'space-1 ';
    }

    echo '<div id="'.$category_cc.'" class="'.$category_spacing.'active">';
    echo '<div class="mb-3"><h3 class="text-primary font-weight-semi-bold">'.$category.'</h3></div>';
    echo $content;
    echo '</div>';
    if ($c_num < $c_num_count) {
      echo '<hr class="my-0">';
    }
}

?>
          
          </div>
        </div>
      </div>
    </div>

    <div id="stickyBlockEndPoint"></div>
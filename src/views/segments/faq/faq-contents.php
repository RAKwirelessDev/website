<div class="container space-1 space-md-2">
    <div class="row">
        <div id="stickyBlockStartPoint" class="col-lg-3 mb-7 mb-lg-0">
            <!-- Nav -->
            <nav class="js-sticky-block card border-0 bg-primary" data-offset-target="#logoAndNav" data-parent="#stickyBlockStartPoint"
                data-sticky-view="lg" data-start-point="#stickyBlockStartPoint" data-end-point="#stickyBlockEndPoint"
                data-offset-top="24" data-offset-bottom="24">
                <ul class="js-scroll-nav list-group list-group-transparent list-group-white list-group-flush list-group-borderless py-3 px-5">

                    <?php

foreach ($data->faq_contents as $category => $questions) {
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

        <div class="col-lg-9">

            <?php

$c_num = 0;
$c_num_count = count($data->faq_contents);
foreach ($data->faq_contents as $category => $questions) {
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
  echo '<div id="'.$category_cc.'Accordion">';
  $q_num = 0;
  foreach ($questions as $question => $answer) {
    $question = trim($question);
    $q_num += 1;
    echo '<div class="card mb-3">';
    echo '<div class="card-header card-collapse" id="'.$category_cc.'Heading'.$q_num.'">';
    echo '<h5 class="mb-0">';
    echo '<button class="btn btn-link btn-block d-flex justify-content-between card-btn p-3  collapsed" data-toggle="collapse" data-target="#'.$category_cc.'Collapse'.$q_num.'" aria-expanded="false" aria-controls="'.$category_cc.'Collapse'.$q_num.'">';
    echo $question;
    echo '<span class="card-btn-arrow"><span class="fas fa-arrow-down small"></span></span></button>';
    echo '</h5>';
    echo '</div>';
    echo '<div id="'.$category_cc.'Collapse'.$q_num.'" class="collapse" aria-labelledby="'.$category_cc.'Heading'.$q_num.'" data-parent="#'.$category_cc.'Accordion">';
    echo '<div class="card-body text-body">'.$answer.'</div>';
    echo '</div>';
    echo '</div>';
  }
  echo '</div>';
  echo '</div>';
  if ($c_num < $c_num_count) {
    echo '<hr class="my-0">';
  }
}

?>
        </div>
    </div>
</div>

<div id="stickyBlockEndPoint"></div>
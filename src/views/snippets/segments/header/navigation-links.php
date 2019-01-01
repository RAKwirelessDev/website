
<!-- Navigation -->
<div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
    <ul class="navbar-nav u-header__navbar-nav">


<?php

$url_path = Core\Commons::url_path();
$activate_proceed = ((_ERROR_ === true) ? false : true);

foreach (_NAVS_ as $label => $link) {
    $label_cc = Core\Commons::str_to_cc($label);
    if (is_string($link)) {
        $link = Core\Commons::slugify($link);
        $activator = (($url_path === $link && $activate_proceed) ? ' active' : '');
        echo '<li class="nav-item u-header__nav-item'.$activator.'">';
        echo '<a class="nav-link u-header__nav-link" href="'.$link.'">'.$label.'</a>';
        echo '</li>';
    } elseif (is_array($link)) {
        echo '<li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">';
        echo '<a id="'.$label_cc.'MegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="'.$label_cc.'SubMenu">'.$label.'</a>';
        echo '<ul id="'.$label_cc.'SubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="'.$label_cc.'MegaMenu" style="min-width: 230px;">';
        foreach ($link as $sub_label => $sub_link) {
            $sub_label_cc = Core\Commons::str_to_cc($sub_label);
            $sub_link = Core\Commons::slugify($sub_link);
            $activator = (($url_path === $sub_link && $activate_proceed) ? ' active' : '');
            echo '<li class="hs-has-sub-menu'.$activator.'">';
            echo '<a id="navLink'.$label_cc.$sub_label_cc.'" class="nav-link u-header__sub-menu-nav-link" href="'.$sub_link.'">'.$sub_label.'</a>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</li>';
    }
}


?>


        <!-- Button -->
        <li class="nav-item u-header__nav-last-item">
            <a class="btn btn-sm btn-primary transition-3d-hover" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">
                Buy Now
            </a>
        </li>
        <!-- End Button -->
    </ul>
</div>
<!-- End Navigation -->
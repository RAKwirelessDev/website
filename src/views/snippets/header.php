<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header--abs-top-md u-header--show-hide-md" data-header-fix-moment="500"
    data-header-fix-effect="slide">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="container u-header__hide-content pt-2">
            <div class="d-flex align-items-center">

                <?php Core\ViewsHandler::yield('snippets/segments/header/languages-dropdown.php'); ?>
                <?php Core\ViewsHandler::yield('snippets/segments/header/quick-links.php'); ?>

            </div>
        </div>
        <!-- End Topbar -->

        <?php Core\ViewsHandler::yield('snippets/segments/header/navigation.php'); ?>

    </div>
</header>
<!-- ========== END HEADER ========== -->
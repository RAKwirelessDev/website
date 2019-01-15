<!DOCTYPE html>
<html>

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

    <main id="content" role="main">
        <?php Core\ViewsHandler::yield('segments/about/hero-parallax.php'); ?>

        <?php Core\ViewsHandler::yield('segments/about/about-us.php'); ?>
        <?php Core\ViewsHandler::yield('segments/about/patents-overview.php'); ?>
        <?php Core\ViewsHandler::yield('segments/about/our-partners.php'); ?>
        <?php Core\ViewsHandler::yield('segments/about/main-business.php'); ?>
        <?php Core\ViewsHandler::yield('segments/about/company-philosophy.php'); ?>
        <?php Core\ViewsHandler::yield('segments/about/locations.php'); ?>
        <?php Core\ViewsHandler::yield('segments/about/distributors.php'); ?>

        <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
    </main>

    <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>
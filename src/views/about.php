<!DOCTYPE html>
<html lang="en">

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

    <main id="content" role="main">
        <?php Core\ViewsHandler::yield('segments/company-history/hero-parallax.php'); ?>

        <?php Core\ViewsHandler::yield('segments/company-history/about-us.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-history/patents-overview.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-history/our-partners.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-history/main-business.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-history/company-philosophy.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-history/locations.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-history/distributors.php'); ?>

        <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
    </main>

    <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>
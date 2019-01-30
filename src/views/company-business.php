<!DOCTYPE html>
<html lang="en">

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

    <main id="content" role="main">
        <?php Core\ViewsHandler::yield('segments/company-business/hero-parallax.php'); ?>

        <?php Core\ViewsHandler::yield('segments/company-business/company-philosophy.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-business/main-business.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-business/locations.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-business/our-partners.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-business/distributors.php'); ?>

        <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
    </main>

    <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>
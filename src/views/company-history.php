<!DOCTYPE html>
<html lang="en">

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

    <main id="content" role="main">
        <?php Core\ViewsHandler::yield('segments/company-history/images-carousel.php'); ?>
        <?php Core\ViewsHandler::yield('segments/company-history/body.php'); ?>

        <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
    </main>

    <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>

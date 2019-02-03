<!DOCTYPE html>
<html>

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

        <main id="content" role="main">

            <div>
                <?php Core\ViewsHandler::yield('segments/amazon-aws/images-carousel.php'); ?>
                <?php Core\ViewsHandler::yield('segments/amazon-aws/body.php'); ?>
            </div>

            <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
        </main>

        <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>
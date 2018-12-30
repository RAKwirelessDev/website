<?php

$data->title = "RAK - The Middleware from RAK Enable IoT";

?>
<!DOCTYPE html>
<html>

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

        <main id="content" role="main">
            <?php Core\ViewsHandler::yield('segments/home/images-carousel.php'); ?>
            <?php Core\ViewsHandler::yield('segments/home/call-to-action.php'); ?>
            <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
        </main>

        <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>
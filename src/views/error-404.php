<?php

http_response_code(404);

?>
<!DOCTYPE html>
<html>

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

    <main id="content" role="main">
        <?php Core\ViewsHandler::yield('segments/error-404/hero.php'); ?>
        <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
    </main>

    <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>
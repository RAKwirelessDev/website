<!-- ========== FOOTER ========== -->
<footer class="bg-dark">
    <div class="container space-top-2">
        <div class="row justify-content-lg-between mb-7">

            <?php Core\ViewsHandler::yield('snippets/segments/footer/contacts.php'); ?>

            <div class="col-sm-6 col-md-5 col-lg-3 col-lg-3">

                <?php Core\ViewsHandler::yield('snippets/segments/footer/newsletter-subscribe.php'); ?>

                <?php Core\ViewsHandler::yield('snippets/segments/footer/social-networks.php'); ?>

            </div>

        </div>

        <div class="row justify-content-between align-items-center space-1">

            <div class="col-5">

                <?php Core\ViewsHandler::yield('snippets/segments/logo.php'); ?>

            </div>

            <?php Core\ViewsHandler::yield('snippets/segments/footer/copyright.php'); ?>

        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->
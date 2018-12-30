<!-- ========== FOOTER ========== -->
<footer class="bg-dark">
    <div class="container space-top-2">
        <div class="row justify-content-lg-between mb-7">
            <div class="col-6 col-md-4 col-lg-2 mb-7 mb-lg-0">
                <h4 class="h6 text-white">About</h4>

                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
                    <li><a class="list-group-item list-group-item-action" href="../pages/about-agency.html">About</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../pages/services-agency.html">Services</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../pages/careers-listing.html">Careers</a></li>
                </ul>
                <!-- End List Group -->
            </div>

            <div class="col-6 col-md-4 col-lg-2 mb-7 mb-lg-0">
                <h4 class="h6 text-white">Account</h4>

                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
                    <li><a class="list-group-item list-group-item-action" href="../account/dashboard.html">Account</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../account/my-tasks.html">My tasks</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../account/projects.html">Projects</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../account/invite-friends.html">Invite friends</a></li>
                </ul>
                <!-- End List Group -->
            </div>

            <div class="col-6 col-md-4 col-lg-2 mb-7 mb-lg-0">
                <h4 class="h6 text-white">Contacts</h4>

                <!-- Address -->
                <address class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
          <a class="list-group-item list-group-item-action" href="#">+1 (062) 109-9222</a>
          <a class="list-group-item list-group-item-action" href="mailto:support@htmlstream.com">support@htmlstream.com</a>
          <a class="list-group-item list-group-item-action" href="#">153 Williamson Plaza, Maggieberg, MT 09514</a>
        </address>
                <!-- End Address -->
            </div>

            <div class="col-sm-6 col-md-5 col-lg-3 col-lg-3">
                <div class="mb-4">
                    <h4 class="h6 text-white mb-3">Subscribe</h4>

                    <!-- Subscribe Form -->
                    <form class="js-validate js-form-message">
                        <label class="sr-only" for="subscribeSrEmailExample2">Your email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="subscribeSrEmailExample2" placeholder="Your email" aria-label="Your email" aria-describedby="subscribeButtonExample2" required data-msg="Please enter a valid email address.">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="subscribeButtonExample2">
                                    <span class="fas fa-paper-plane"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- End Subscribe Form -->
                </div>

                <h4 class="h6 text-white-70 mb-3">Stay in touch</h4>

                <!-- Social Networks -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                            <span class="fab fa-facebook-f btn-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                            <span class="fab fa-google btn-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                            <span class="fab fa-twitter btn-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                            <span class="fab fa-github btn-icon__inner"></span>
                        </a>
                    </li>
                </ul>
                <!-- End Social Networks -->
            </div>
        </div>

        <div class="row justify-content-between align-items-center space-1">
            <div class="col-5">
                <?php Core\ViewsHandler::yield('snippets/segments/logo.php'); ?>
            </div>

            <div class="col-6 text-right">
                <p class="small mb-0">&copy; <?=date('Y');?> Shenzhen Rakwireless Technology Co., Ltd.</p>
            </div>
        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->
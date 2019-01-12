<!-- Go to Top -->
<a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
<script src="/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/assets/vendor/appear.js"></script>

<!-- JS Front -->
<script src="/assets/js/theme-custom.js"></script>
<script src="/assets/js/hs.core.js"></script>
<script src="/assets/js/components/hs.header.js"></script>
<script src="/assets/js/components/hs.unfold.js"></script>
<script src="/assets/js/components/hs.svg-injector.js"></script>
<script src="/assets/js/components/hs.slick-carousel.js"></script>
<script src="/assets/js/components/hs.fancybox.js"></script>
<script src="/assets/js/components/hs.datatables.js"></script>
<script src="/assets/js/components/hs.go-to.js"></script>
<script src="/assets/js/components/hs.sticky-block.js"></script>
<script src="/assets/js/components/hs.malihu-scrollbar.js"></script>
<script src="/assets/js/components/hs.show-animation.js"></script>
<script src="/assets/js/components/hs.scroll-nav.js"></script>
<script src="/assets/js/components/hs.onscroll-animation.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(window).on('load', function () {
    // initialization of HSMegaMenu component
    $('.js-mega-menu').HSMegaMenu({
      event: 'hover',
      pageContainer: $('.container'),
      breakpoint: 767.98,
      hideTimeOut: 0
    });
  });

  $(document).on('ready', function () {
    
    // initialization of scroll animation
    $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

    // initialization of header
    $.HSCore.components.HSHeader.init($('#header'));
    
    // initialization of unfold component
    $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

    // initialization of svg injector module
    $.HSCore.components.HSSVGIngector.init('.js-svg-injector');


    // initialization of slick carousel
    $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

    // initialization of popups
    $.HSCore.components.HSFancyBox.init('.js-fancybox');

    // initialization of datatables
    $.HSCore.components.HSDatatables.init('.js-datatable');

    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');

    // initialization of sticky blocks
    $.HSCore.components.HSStickyBlock.init('.js-sticky-block');

    // initialization of show animations
    $.HSCore.components.HSShowAnimation.init('.js-animation-link');

    // initialization of HSScrollNav component
    $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
      duration: 700
    });

  });
</script>
(function($){
  $.fn.fullHeight = function(){
    var self = this;
    var fullHeightReset = function(){
		var elements = self.children();
		for (var i = 0; i < elements.length; i++) {
			$(elements[i]).css({
				'height': 'auto'
			});
		}
		setTimeout(function(){
			for (var i = 0; i < elements.length; i++) {
				$(elements[i]).css({
					'height': self.height()
				});
			}
		}, 500);
    }
	fullHeightReset();
  }
})(jQuery);
$(document).ready(function() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
    $('#carousel-fullheight > .slick-list.draggable > .slick-track').fullHeight();
	$(window).resize(function() {
		if ($(window).width() != windowWidth || $(window).height() != windowHeight) {
			$('#carousel-fullheight > .slick-list.draggable > .slick-track').fullHeight();
			windowWidth = $(window).width();
			windowHeight = $(window).height();
		}
	});
});
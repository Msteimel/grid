// elements animation

$(".stagger-fade-in").children().addClass("stagger-in fade-in");

$(".stagger-fade-up").children().addClass("stagger-up fade-up");

$(".stagger-fade-up-reverse").children().addClass("stagger-up-reverse fade-up");

$(".stagger-fade-down").children().addClass("stagger-down fade-down");

$(".stagger-fade-down-reverse").children().addClass("stagger-down-reverse fade-down");

$(".stagger-fade-left").children().addClass("stagger-left fade-left");

$(".stagger-fade-right").children().addClass("stagger-right fade-right");

var $window = $(window);

function check_if_in_view() {
	var $fade_in = $('.fade-in');
	var $fade_up = $('.fade-up');
	var $fade_down = $('.fade-down');
	var $fade_left = $('.fade-left');
	var $fade_right = $('.fade-right');

	var window_height = $window.height();
	var window_top_position = $window.scrollTop();
	var window_bottom_position = (window_top_position + window_height);

	$.each($fade_in, function () {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
			(element_top_position + 50 <= window_bottom_position)) {
			$element.addClass('in-view');
		}
	});
	$.each($fade_up, function () {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
			(element_top_position + 50 <= window_bottom_position)) {
			$element.addClass('in-view');
		}
	});
	$.each($fade_down, function () {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
			(element_top_position + 50 <= window_bottom_position)) {
			$element.addClass('in-view');
		}
	});
	$.each($fade_left, function () {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
			(element_top_position + 50 <= window_bottom_position)) {
			$element.addClass('in-view');
		}
	});
	$.each($fade_right, function () {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
			(element_top_position + 50 <= window_bottom_position)) {
			$element.addClass('in-view');
		}
	});
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');


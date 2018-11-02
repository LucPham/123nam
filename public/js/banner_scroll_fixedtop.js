$(document).ready(function() {
		var side_left_offs = $('.side-left').offset();
		var side_right_offs = $('.side-right').offset();
		var side_left_pos = side_left_offs.top;
		var side_right_pos = side_right_offs.top;
		$(window).scroll(function() {
			var x_scroll = $(this).scrollTop();
			if (x_scroll >= side_left_pos || x_scroll >= side_right_pos)
			{
				$('.side-left').addClass('side-left-fixed-top');
				$('.side-right').addClass('side-right-fixed-top');
			} else {
				$('.side-left').removeClass('side-left-fixed-top').addClass('sie_left');
				$('.side-right').removeClass('side-right-fixed-top').addClass('side_right');
			}
		})	
	})
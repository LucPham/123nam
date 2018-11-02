$(document).ready(function() {
	$('#navigation li a').on('click', function(e){ 
		e.preventDefault();
		var hrefval = $(this).attr('href');
		if (hrefval == "#about") {
			var distance = $('#mainpage').css('left');
			if (distance == "auto" || distance == "0px") {
				$(this).addClass('open');
				openSidepage();
			} else {
				closeSidepage();
			}
		}
	});
	$('#closebtn').on("click", function(e) {
		e.preventDefault();
		closeSidepage();
	});
	function openSidepage() {
		$("#mainpage").animate({
			left: '390px'
		}, 400, 'easeOutBack');
	}
	function closeSidepage() {
		$('navigation li a').removeClass("open");
		$("#mainpage").animate({
			left: '0px'
		}, 400, 'easeOutBack');
	}
})
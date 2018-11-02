$(document).ready(function() {
	$('img').addClass('img-responsive').css('margin', 'auto');
	$('img').click(function() {
		var href = $(this).attr('src');
		$('div.container_fullscreen').show();
		$('.row_chitiet').css("z-index", "200");
		$('div.image').html('<img style="margin: auto; top: 50%; width: auto; max-height: 100%" class="img-responsive imge" src="'+href+'">');
	});
	$('.close_screen').click(function() {
		$('div.container_fullscreen').hide();
		$('.row_chitiet').css("z-index", "400");
	});
})
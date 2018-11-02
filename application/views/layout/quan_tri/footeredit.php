<script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.12.3.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('public/js/edit.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/jquery.form.js') ?>"></script>

<div class="popup" data-popup="popup-1">
	<div class="popup-inner">
		<div class="delete-feedback">
			<h3>Bạn có chắc chắn muốn xóa bài viết này?</h3>
	        <p><a href="#" data-popup-close="popup-1" id="huy">Hủy</a></p>
	        <p><a href="#" data-popup-yes="#" id="co">Có</a></p>
       </div>
       <a href="#" class="popup-close" data-popup-close="popup-1">X</a>
       <p><img style="display: none" id="imgreload" src="<?php echo base_url('public/icon/reload.gif') ?>"></p>
    </div>
</div>
<!--end /data-pop-up delete tin tuc-->


<!-- data-pop-up EVENTS-->
<div class="popup" data-popup="popup-2">
	<div class="popup-inner">
		<div class="delete-feedback">
			<h3>Bạn có chắc chắn muốn xóa sự kiện này?</h3>
	        <div class="col-md-4 col-sm-4 col-xs-6"><a href="#" data-popup-event-close="popup-2" id="cancel">Hủy</a></div>
	        <div class="col-md-4 col-sm-4 hidden-xs"></div>
	        <div class="col-md-4 col-sm-4 col-xs-6"><a href="#" data-popup-event-yes="#" id="yes">Có</a></div>
       </div>
       <a href="#" class="popup-close" data-popup-close="popup-2">X</a>
       <p><img style="display: none" id="imgreload" src="<?php echo base_url('public/icon/reload.gif') ?>"></p>
    </div>
</div>
<!-- end /data-pop-up EVENTS-->


<!-- data-pop-up ALBUM-->
<div class="popup" data-popup="popup-3">
	<div class="popup-inner">
		<div class="delete-feedback">
			<h3>Bạn có chắc chắn muốn xóa album này?</h3>
	        <div class="col-md-4 col-sm-4 col-xs-6"><a href="#" data-popup-album-close="popup-3" id="cancel2">Hủy</a></div>
	        <div class="col-md-4 col-sm-4 hidden-xs"></div>
	        <div class="col-md-4 col-sm-4 col-xs-6"><a href="#" data-popup-album-yes="#" id="yes2">Có</a></div>
       </div>
       <a href="#" class="popup-close" data-popup-album-close="popup-3">X</a>
       <p><img style="display: none" id="imgreload" src="<?php echo base_url('public/icon/reload.gif') ?>"></p>
    </div>
</div>
<!-- end /data-pop-up /ALBUM-->


<script type="text/javascript">
//javscript for ALBUM
	$(document).ready(function() {
		
		var item2 = 0;
		$('[data-popup-album-open]').on('click', function(e) {
			e.preventDefault();
			var target_popup_class = $(this).attr('data-popup-album-open');
			$('[data-popup="'+target_popup_class+'"]').fadeIn(50);
			item2 = $(this).attr('id');
		});

		$('[data-popup-album-close]').on('click', function(e) {
			e.preventDefault();
			var target_popup_class = $(this).attr('data-popup-album-close');
			$('[data-popup="'+target_popup_class+'"]').fadeOut(50);
		});

		$('a#yes2').on('click', function(e) {
		e.preventDefault();
		if (item2 != 0) {
			$.ajax({
			url: "<?php echo base_url('quan_tri/C_tin_tuc/delete_album'); ?>",
			type: "POST",
			data: {id: item2},
			beforeSend: function() {
				$('#imgreload').show();
			},
			success: function(result) {
				$('.delete-feedback').html(result);
				location.reload();
			}});
		}
	});

// -------End Ajax send --->
	});
// ----------------------->





// javascript EVENTS
$(document).ready(function() {
	var item = 0;
	$('[data-popup-event-open]').on('click', function(e) {
		e.preventDefault();
		var target_popup_class = $(this).attr('data-popup-event-open');
		$('[data-popup="'+target_popup_class+'"]').fadeIn(50);
		item = $(this).attr('id');
	});

	$('[data-popup-event-close]').on('click', function(e) {
		e.preventDefault();
		var target_popup_class = $(this).attr('data-popup-event-close');
		$('[data-popup="'+target_popup_class+'"]').fadeOut(50);
	});

	$('a#yes').on('click', function(e) {
		e.preventDefault();
		if (item != 0) {
			$.ajax({
			url: "<?php echo base_url('quan_tri/C_su_kien/delete'); ?>",
			type: "POST",
			data: {id: item},
			beforeSend: function() {
				$('#imgreload').show();
			},
			success: function(result) {
				$('.delete-feedback').html(result);
				location.reload();
			}});
		}
	});
});
//------------end javscript for /EVENTS-->



//Javascript NEWS
$(document).ready(function() {     
	$('[data-popup-open]').on('click',function(e) {         
		var target_popup_class = $(this).attr('data-popup-open');
		$('[data-popup="'+target_popup_class+'"]').fadeIn(50);
		e.preventDefault();

	});

	$('[data-popup-close]').on('click', function(e) {
		var target_popup_class = $(this).attr('data-popup-close');
		$('[data-popup="'+target_popup_class+'"]').fadeOut(50);
		e.preventDefault();

	});


	//Xoa bai viet
	var id = 0;
	$('[data-popup-open]').on('click', function(e) {
		id = $(this).attr('id');
	});

	$('a#co').click(function() {
		

		$.ajax({
			url: "<?php echo base_url('quan_tri/C_tin_tuc/xoa_bai_viet'); ?>",
			type: "POST",
			data: {ID: id},
			beforeSend: function() {
				$('#imgreload').show();
			},
			success: function(result) {
				$('.delete-feedback').html(result);
				location.reload();
			}});
	});
})
</script>




<!-- data-pop-up su kien-->
	

<!-- end /data-pop-up su kien-->
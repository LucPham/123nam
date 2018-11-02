<script type="text/javascript">
	$(document).ready(function () {
		// BUTTON CREATE CLICK
		$('#evtBtn').on('click', function() {
			var evt_title = $('#evt_title').val();
			var evt_object = $('#evt_object').val();
			var evt_day = $('#evt_day').val();
			var evt_month = $('#evt_month').val();
			var titleCode;
			var objectCode;
			if (evt_title) {
				$('.evt_title_err').hide();
				if (evt_day != 0)
				{
					if (evt_month != 0)
					{	
						titleCode = htmlCode(evt_title);
						objectCode = htmlCode(evt_object);
						$('#titleCode').val(titleCode);
						$('#objectCode').val(objectCode);
						$('.evt_mont_err').hide();
						$(this).attr('type','submit');

					} else $('.evt_mont_err').show();
					$('.evt_day_err').hide();
				} else $('.evt_day_err').show();
			} else $('.evt_title_err').show();
		});
		// LOAD DAY_OF_WEEK
		$('#evt_repeat').on('change', function() {
			var repeat_name = $(this).val();

			if (repeat_name == 0) // KHONG LAP LAI
			{
				$('.htmlDay_of_weekLoad').remove();
				$.ajax({
					url: "<?php echo base_url('su_kien/C_su_kien/remind_of_event_ajaxLoad') ?>",
					type: "post",
					beforeSend: function() {
						$('.remindLoading').show();
					},
					success: function(result) {
						$('.remind_wrapp').html(result);
						$('.remindLoading').hide();
					}
				});
			} else if (repeat_name == 10) // LAP LAI MOI TUAN
			{
				console.log(repeat_name+' hang tuan');
				$.ajax({
					url: "<?php echo base_url('su_kien/C_su_kien/day_of_week_ajaxLoad') ?>",
					type: "post",
					beforeSend: function() {
						$('.loading').show();
						$('.remindLoading').show();
					},
					success: function(result) {
						$('.day_of_week_select').html(result);
						$('.loading').hide();
						$('.remindHtmlLoad').remove();
						$('.remindLoading').hide();
					}
				})	
			} else if (repeat_name == 0001) { // LAP LAI MOI NGAY
				//console.log('moi ngay');
				$('.htmlDay_of_weekLoad').remove();
				$('.remindHtmlLoad').remove();
			} else if (repeat_name == 100) { // LAP LAI MOI THANG
				//console.log(repeat_name);
				$('.htmlDay_of_weekLoad').remove();
				$.ajax({
					url: "<?php echo base_url('su_kien/C_su_kien/remind_of_event_in_month_repeat') ?>",
					type: "post",
					data: {id: repeat_name},
					beforeSend: function() {
						$('.remindLoading').show();
					},
					success: function(result) {
						$('.remind_wrapp').html(result);
						$('.remindLoading').hide();
					}
				});
			} else if (repeat_name == 1000) { // LAP LAI MOI NAM
				$('.htmlDay_of_weekLoad').remove();
				$.ajax({
					url: "<?php echo base_url('su_kien/C_su_kien/remind_of_event_in_month_repeat') ?>",
					type: "post",
					data: {id: repeat_name},
					beforeSend: function() {
						$('.remindLoading').show();
					},
					success: function(result) {
						$('.remind_wrapp').html(result);
						$('.remindLoading').hide();
					}
				});
			}
		});
	}) // END DOCUMENT.READY

	$(document).ready(function() {
		var x_div = $('.menu_option').offset();
		var topDiv = x_div.top;
		//var x_month = ('.text_month_title').offset();
		var arrMonth =  new Array();
		var month_pos;
		for (var i = 1; i<=12; i++)
		{
			var month_offs = $('#month_div'+i).offset();
			if (month_offs) {
				arrMonth[i] = month_offs.top;
			}
		}
		console.log(arrMonth);
		//console.log(arrMonth.length);
		$(window).scroll(function() {
			var x_scroll = $(this).scrollTop();
			//get month text
			// menu fixedtop
			if (x_scroll >= topDiv)
			{
				$('.menu_option').addClass('menu_evt_fixed_top').fadeIn('slow');
			} else {
				$('.menu_option').removeClass('menu_evt_fixed_top');
			}
			//console.log(x_scroll);
		});
	}); // END DOCUMENT.READY

	$(':checkbox').on('change', function() {
		$(':checkbox:checked').each(function(i) {
			$('.checkedId').html(i+1);
		});
	});
	$(document).ready(function() {

		$('#btnPopup').on('click', function(e) {
			e.preventDefault();
			var idArr = new Array();
			// JQUERY SYNTAX: ALL SELECT INPUT CHECKBOX
			$(':checkbox:checked').each(function(i) {
				idArr.push($(this).val());
			});
			if (idArr != '') {
				$('.dialogBeforeSendWrapp').show();
				$('.popupErr').hide();
				$('.verifyDelete').show();
				$('.popupDelete').show();
			} else {
				$('.dialogBeforeSendWrapp').show();
				$('.popupErr').show();
				$('.verifyDelete').hide();
				$('.popupDelete').hide();
			}
		});

		$('.cancel').on('click', function() {
			$('.dialogBeforeSendWrapp').hide();
		});
		$('.deleteEvt').on('click', function(e) {
			e.preventDefault();
			var idArr = new Array();
			// JQUERY SYNTAX: ALL SELECT INPUT CHECKBOX
			$(':checkbox:checked').each(function(i) {
				idArr.push($(this).val());
			});
			if (idArr != '') {
				$.ajax({
					type: "post",
					url: "<?php echo base_url('su_kien/C_su_kien/deleteAjax') ?>",
					data: {id: idArr},
					beforeSend: function() {
						$('.imgLoading').show();
						$('.verifyDelete').hide();
					},
					success: function(result) {
						console.log(result);
						$('.dialogBeforeSendWrapp').hide();
						if (result == 'Ok') {
							// UPDATE DATA WITHOUT RELOAD PAGE
							location.reload();
						} else {
							$('.popupErr').html('<h4>Đã có lỗi!, xóa sự kiện không hoàn thành</h4>').show();
						}	
					}
				}); //and AJAX
			}
		});
	}); // end DOCUMENT.READY


function htmlCode(text) {
		//Exception: &-#-
		//text = text.replace(/\s/g, "&#32");
		text = text.replace(/\!/g, "&#33;");
		text = text.replace(/\"/g, "&#34;");
		text = text.replace(/\$/g, "&#36;");
		text = text.replace(/\%/g, "&#37;");
		text = text.replace(/\'/g, "&#39;");
		text = text.replace(/\(/g, "&#40;");
		text = text.replace(/\)/g, "&#41;");
		text = text.replace(/\*/g, "&#42;");
		text = text.replace(/\+/g, "&#43;");
		text = text.replace(/\,/g, "&#44;");
		text = text.replace(/\-/g, "&#45;");
		text = text.replace(/\./g, "&#46;");
		text = text.replace(/\//g, "&#47;");
		text = text.replace(/\:/g, "&#58;");
		//text = text.replace(/\;/g, "&#59");
		text = text.replace(/\</g, "&#60;");
		text = text.replace(/\=/g, "&#61;");
		text = text.replace(/\>/g, "&#62;");
		text = text.replace(/\?/g, "&#63;");
		text = text.replace(/\@/g, "&#64;");
		text = text.replace(/\[/g, "&#91;");
		text = text.replace(/\\/g, "&#92;");
		text = text.replace(/\]/g, "&#93;");
		text = text.replace(/\^/g, "&#94;");
		text = text.replace(/\_/g, "&#95;");
		text = text.replace(/\`/g, "&#96;");
		text = text.replace(/\{/g, "&#123;");
		text = text.replace(/\|/g, "&#124;");
		text = text.replace(/\}/g, "&#125");
		text = text.replace(/\~/g, "&#126;");
		text = text.replace(/\¡/g, "&#161;");
		text = text.replace(/\¢/g, "&#162;");
		text = text.replace(/\£/g, "&#163;");
		text = text.replace(/\¤/g, "&#164;");
		text = text.replace(/\¥/g, "&#165;");
		text = text.replace(/\¦/g, "&#166;");
		text = text.replace(/\§/g, "&#167;");
		text = text.replace(/\¨/g, "&#168;");
		text = text.replace(/\©/g, "&#169;");
		text = text.replace(/\ª/g, "&#170;");
		text = text.replace(/\«/g, "&#171;");
		text = text.replace(/\¬/g, "&#172;");
		text = text.replace(/\®/g, "&#174;");
		text = text.replace(/\¯/g, "&#175;");
		text = text.replace(/\°/g, "&#176;");
		text = text.replace(/\±/g, "&#177;");
		text = text.replace(/\²/g, "&#178;");
		text = text.replace(/\³/g, "&#179;");
		text = text.replace(/\´/g, "&#180;");
		text = text.replace(/\µ/g, "&#181;");
		text = text.replace(/\¶/g, "&#182;");
		text = text.replace(/\·/g, "&#183;");
		text = text.replace(/\¸/g, "&#184;");
		text = text.replace(/\¹/g, "&#185;");
		text = text.replace(/\º/g, "&#186;");
		text = text.replace(/\»/g, "&#187;");
		text = text.replace(/\¼/g, "&#188;");
		text = text.replace(/\½/g, "&#189;");
		text = text.replace(/\¾/g, "&#190;");
		text = text.replace(/\¿/g, "&#191;");
		text = text.replace(/\Æ/g, "&#198;");
		text = text.replace(/\Ñ/g, "&#209;");
		text = text.replace(/\×/g, "&#215;");
		text = text.replace(/\Ø/g, "&#216;");
		text = text.replace(/\Þ/g, "&#222;");
		text = text.replace(/\ß/g, "&#223;");
		text = text.replace(/\æ/g, "&#230;");
		text = text.replace(/\ë/g, "&#235;");
		text = text.replace(/\ð/g, "&#240;");
		text = text.replace(/\÷/g, "&#247;");
		text = text.replace(/\ø/g, "&#248;");
		text = text.replace(/\ü/g, "&#252;");
		text = text.replace(/\ý/g, "&#253;");
		text = text.replace(/\þ/g, "&#254;");
		text = text.replace(/\ÿ/g, "&#255;");
		text = text.replace(/\Œ/g, "&#338;");
		text = text.replace(/\œ/g, "&#339;");
		text = text.replace(/\Š/g, "&#352;");
		text = text.replace(/\š/g, "&#353;");
		text = text.replace(/\Ÿ/g, "&#376;");
		text = text.replace(/\Ω/g, "&#937;");
		text = text.replace(/\β/g, "&#946;");
		text = text.replace(/\ƒ/g, "&#402;");
		text = text.replace(/\–/g, "&#8211;");
		text = text.replace(/\—/g, "&#8212;");
		text = text.replace(/\‘/g, "&#8216;");
		text = text.replace(/\’/g, "&#8217;");
		text = text.replace(/\‚/g, "&#8218;");
		text = text.replace(/\“/g, "&#8220;");
		text = text.replace(/\”/g, "&#8221;");
		text = text.replace(/\„/g, "&#8222;");
		text = text.replace(/\†/g, "&#8224;");
		text = text.replace(/\‡/g, "&#8225;");
		text = text.replace(/\•/g, "&#8226;");
		text = text.replace(/\…/g, "&#8230;");
		text = text.replace(/\‰/g, "&#8242;");
		text = text.replace(/\€/g, "&#8354;");
		text = text.replace(/\™/g, "&#8482;");
		text = text.replace(/\∞/g, "&#8734;");
		return text;
	}
</script>
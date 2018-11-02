
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script type="text/javascript">

	/*--------------DELETE------------------*/
	



	$(document).on('click', '.delete', function(e) {
		var id = $(this).attr('p');
		var oNo = $(this).attr('oNo');

		$('.sure').attr('p', id);
		$('.sure').attr('oNo', oNo);
		$('.wrapp').show();
		$('.box').show();
	});

	
	$(document).on('click','.sure', function(e) {

		var id = $(this).attr('p');
		var oNo = $(this).attr('oNo');
		
		
		if (id) {
			$.ajax({
				url: "<?php echo base_url('quan_tri/C_thu7/deleteAjax') ?>",
				type: "POST",
				data: {_id: id},
				beforeSubmit: function() {

				},
				success: function(res) {
					if (res == true) {
						$('.tr-cord-'+oNo).remove();
						$('.wrapp').hide();
						$('.box').hide();
					} else alert('Errors!');
				}
			})
		}

	});
	


	$(document).on('click', '.cancel', function(e) {
		$('.wrapp').hide();
		$('.box').hide();
	});
	$('.wrapp').click(function(e) {
		$(this).hide();
		$('.box').hide();
	});


	/*--------------TITLE------------------*/
	$('#places_title').on('change', function() {
		
		var text = $(this).val();
		$('#places_title_hidden').val(htmlCode(text));

	});



















	/*-------------PLACES NAME HANDLE----------*/
	$(document).on('blur', '#places', function(e) {
		var places = $(this).val();
		$('#placesHidden').val(htmlCode(places));
		$('#url').val(bodau(places));
	});
	/*----------------PREVIEW IMAGES----------------*/
	$(document).on('change', '.file-ip', function(e) {
		var src = $(this).attr('src');
		if (src) {
			readURL(this,src);
		}
	});
	function readURL(input,src) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            $('#'+src).attr('src', e.target.result);
	            //alert(reader.image);
	            //console.log(e.target.result);
	        }
	        reader.readAsDataURL(input.files[0]);
	        return true;
	    }
	}
	/*------DATEPICKER PLUGIN------*/
	$(function() {
	   $( "#datepicker" ).datepicker({
	   	dateFormat: "yy-mm-dd"
	   });
	   

	
	});
	/*---------------------------HANDLE TEXT----------------------------*/
	function bodau(text)
	{
		text = text.toLowerCase();

		text = text.replace(/á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ặ|ẵ|â|ấ|ầ|ẩ|ậ|ẫ/g, "a");

		text = text.replace(/ủ|ũ|ù|ú|ụ|ư|ứ|ừ|ử|ữ|ự/g, "u");
		text = text.replace(/ý|ỳ|ỷ|ỹ|ỵ/g, "y");
		text = text.replace(/í|ì|ỉ|ĩ|ị/g, "i");
		text = text.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ợ|ỡ|ở/g, "o");
		text = text.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/g, "e");
		text = text.replace(/đ/g, "d");
		text = text.replace(/\s|\\|\/|\*|\!|\@|\#|\$|\%|\^|\&|\(|\)|\_|\+|\=|\.|\"|\'|\?|\>|\<|\;|\:|\]|\[|\{|\}|\,/g, "-");
		text = text.replace(/\-+/g, "-");

		// Match first character(-) and replace
		if (text.slice(0,1) == '-') 
			text = text.replace(/./, '');
		// Match last character(-) and replace
		if (text.slice(-1) =='-')
			text = text.replace(/.$/, '');
		return text;
		
	}
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
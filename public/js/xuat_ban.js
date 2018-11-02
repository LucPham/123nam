$(document).ready(function() {
	
	$('#tieu_de').blur(function() {
		$('#url').val(bodau($('#tieu_de').val()));
	});

	$('#titleEmega').blur(function() {
		$('#uri').val(bodau($('#titleEmega').val()));
	});

	//show image before upload
	$('#upload_file_button').click(function() {
		$('#hinh').click();
	});
	$(function(){
   	 $("#hinh").change(showPreviewImage_click);
	});
	$(function(){
   	 $("#image").change(showPreviewImage_click);
	});

function showPreviewImage_click(e) {
	$('#loading').html('Đang tải ảnh lên ...');
    var $input = $(this);
    var inputFiles = this.files;
    if(inputFiles == undefined || inputFiles.length == 0) return;
    var inputFile = inputFiles[0];

    var reader = new FileReader();
    reader.onload = function(event) {
        $input.next().attr("src", event.target.result);
        $('#loading').html('');
    };
    reader.onerror = function(event) {
        alert("I AM ERROR: " + event.target.error.code);
    };
    reader.readAsDataURL(inputFile);
}


	//bcssc.jpg split('.') -> bcssc vs jpg; use .pop() -> jpg

	//Kiem tra dieu kien file la hinh
	var image = 0; //Hinh chua thoa dieu kien

	$('#hinh').on('change', function() {
		
		var ext = $(this).val().split('.').pop().toLowerCase();
		
		if($.inArray(ext, ['gif','png','jpg','jpeg']) != -1) {
	    	$('#dvPreview').html('');
	    	image = 1; //Hinh da thoa dieu kien
		}else 
		{
			$('#dvPreview').html('<p style="color: #FC0101">Vui lòng chọn một file ảnh.</p>');
			image = 0;
		}
	});

	$('#image').on('change', function() {
		
		var ext = $(this).val().split('.').pop().toLowerCase();
		
		if($.inArray(ext, ['gif','png','jpg','jpeg']) != -1) {
	    	$('#dvPreview').html('');
	    	image = 1; //Hinh da thoa dieu kien
		}else 
		{
			$('#dvPreview').html('<p style="color: #FC0101">Vui lòng chọn một file ảnh.</p>');
			image = 0;
		}
	});
	//eMegazine
	$(document).on('change','.upload', function(e) {
		var index = $(this).attr('data-href');
		var ext = $(this).val().split('.').pop().toLowerCase();
		
		if($.inArray(ext, ['gif','png','jpg','jpeg']) != -1) {
	    	$('#dvPreview'+index).html('');
	    	image = 1; //Hinh da thoa dieu kien
	    	$('#loading'+index).html('Đang tải ảnh lên ...');
		    var $input = $(this);
		    var inputFiles = this.files;
		    if(inputFiles == undefined || inputFiles.length == 0) return;
		    var inputFile = inputFiles[0];

		    var reader = new FileReader();
		    reader.onload = function(event) {
		        $input.next().attr("src", event.target.result);
		        $('#loading'+index).html('');
		    };
		    reader.onerror = function(event) {
		        alert("I AM ERROR: " + event.target.error.code);
		    };
		    reader.readAsDataURL(inputFile);
		}else 
		{
			$('#blah'+index).attr('src','#');
			$('#dvPreview'+index).html('<p style="color: #FC0101">Vui lòng chọn một file ảnh.</p>');
			image = 0;
		}
	});
	//Xuất bản
	$('#xuatban').click(function() {

		//Lay du lieu
	 	var tieu_de = $('#tieu_de');
	 	var tom_tat = $('textarea#tom_tat');
	 	var hinh = $('input#hinh');
		var danh_muc = $('#danh_muc');
		var link_url = $('#url');
		var noi_dung = CKEDITOR.instances.editor1
	 	//Ket thuc Lay Du Lieu
	 	//Xu Ly Dieu Kien Nhap
	 	if (tieu_de.val() != '')
	 	{
	 		if (tom_tat.val() != '')
	 		{
	 			if (hinh.val() != '')
	 			{
	 				if (danh_muc.val() != 'default')
	 				{
	 					if (link_url.val() != '')
	 					{
	 						if (noi_dung.getData() != '')
	 						{
								if (image == 1) {
									
									$(this).attr('type', 'submit');
								}
								else {
									$('#dvPreview').html('<p style="color: #FC0101">Vui lòng chọn một file ảnh.</p>');
								}
	 						}
	 						else {
	 							noi_dung.focus();
	 						}
	 					}
	 					else
	 					{
	 						link_url.focus();
	 						link_url.css("border", "solid 1px red");
	 						link_url.keyup(function() {
	 						$(this).css("border", "");
	 						})
	 					}
	 				}
	 				else
	 				{
	 					danh_muc.focus();
	 					danh_muc.css("border", "solid 1px red");
	 					danh_muc.change(function() {
	 					$(this).css("border", "");
	 					})
	 				}
	 			}
	 			else
	 			{
	 				hinh.focus();
	 				hinh.css("border", "solid 1px red");
	 				hinh.change(function() {
	 				$(this).css("border", "");
	 				})
	 			}
	 		}
	 		else
	 		{
	 			tom_tat.focus();
	 			tom_tat.css("border", "solid 1px red");
	 			tom_tat.keyup(function() {
	 			$(this).css("border", "");
	 			})
	 		}
	 	} 
	 	else 
	 	{
	 		tieu_de.focus();
	 		tieu_de.css("border", "solid 1px red");
	 		tieu_de.keyup(function() {
	 			$(this).css("border", "");
	 		})
	 	}
	 	//Ket Thuc Xu Ly Dieu Kien Nhap
	}) //End click button "Xuat Ban"



});

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
	if (text.slice(-1) =='-')
		text.slice(-1) = '';
	return text;
}


							

<script type="text/javascript">
$('#albumName').blur(function() {
	$('#url').val(bodau($('#albumName').val()));
});
$('#albumFile').on('change', function() {
			var ext = $(this).val().split('.').pop().toLowerCase();
			var size = this.files[0].size;
			//alert($.inArray(ext, ['gif','png','jpg','peg','jpeg']));
			if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1 || size > 2000000) {
			    alert('Vui lòng chọn một file hình và kích thước nhỏ hơn 2MB');
			    $(this).val('');
			    $('#viewload img').hide();
			  
			} else {
				//readURLAlbum(this);
				readURLAlbum(this);
				
			}
			//alert($.inArray(ext, ['gif','png','jpg','jpeg']));
			
}); //---end albumFile Change

//-----------delete item-->
$('.delete a').click(function(e) {
	e.preventDefault();
	var id = $(this).attr('id');
	$('.wrapper_'+id).remove();
});
//----end /delete item-->
$('.addform').click(function(e) {
	e.preventDefault();
	//var index = $('.file').size(); //so luong file hien tai
	var index = $('.file').eq(-1).attr('index')*1 + 1;
	//var i = $('.file').val();
	//index = index + 1;
	//alert(index);
	var template = '<div class="wrapper_'+index+'">'+
					'<div class="row">'+
					  '<div class="col-sm-12 col-md-12">'+
					    '<div class="thumbnail">'+
					      '<img src="#" id="preview_'+index+'" style="display: none" class="img-responsive">'+
					    '</div>'+
					  '</div>'+
					'</div>'+
					'<span class="feedback_'+index+'" style="display: none">Đang tải ảnh lên ...</span>'+
					'<div class="row">'+
						'<div class="col-md-11 col-sm-11 col-xs-11">'+
							'<input type="file" name="data[]" class="file" id="file_'+index+'" index="'+index+'" placeholder="image">'+
							'<input type="text" name="stt[]" value="'+index+'">'+
						'</div>'+
						'<div class="cool-md-1 col-sm-1 col-xs-1 delete"><a href="#" title="Xóa" id="'+index+'" style="color: #0D0DA1; font-family: fantasy; font-weight: bold">X</a></div>'+
					'</div>'+
					'<br>'+
					'<textarea name="caption[]" class="form-control" id="caption_'+index+'" placeholder="caption"></textarea>'+
		'<br>'+
		'</div>';
		//insert template--->
		$('.button').before(template);
		//end insert template --->
		//-----------delete item-->
			$('.delete a').click(function(e) {
				e.preventDefault();
				var id = $(this).attr('id');
				$('.wrapper_'+id).remove();
			});
		//----end /delete item-->
		$(".file").change(function(){
			var item = $(this).attr('index');
			var size = this.files[0].size;	
			var ext = $(this).val().split('.').pop().toLowerCase();
			if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1 || size > 2000000) {
			   	alert('Vui lòng chọn một file hình và kích thước nhỏ hơn 2MB');
			    $(this).val('').css("border","solid 1px red");
			    //$('#preview_'+item).hide();
			   
			} else {
				readURL(this,item);
				$(this).css("border","none");
			}
			$('.delete a').click(function(e) {
				e.preventDefault();
				var id = $(this).attr('id');
				$('.wrapper_'+id).remove();
			});
		});
});
$(".file").change(function(){
			var size = this.files[0].size;
			var index = $(this).attr('index');
			var ext = $(this).val().split('.').pop().toLowerCase();
			//alert($.inArray(ext, ['gif','png','jpg','jpeg']));
			if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1 || size > 2000000) {
			    alert('Vui lòng chọn một file hình và kích thước nhỏ hơn 2MB');
			    $(this).val('').css("border","solid 1px red");
			    $('.reply'+index).show();
			    //$('#preview_'+index).hide();
			} else {
				readURL(this,index);
				$(this).css("border","none");
				$('.reply'+index).hide();
			}
	});


// ---------------------BUTTON-----------------CLICK
$('#btn').click(function(e) {
	var form = $('.file').size();
	var albumName = $('#albumName');
	var url = $('#urlalbum');
	var loai_tin = $('#loai_tin_album_upload');
	var tom_tat = $('#tom_tat_album_upload');
	var bool = false;
	for (var i = 1; i <= form; i ++)
	{
		if (i > 2)
		{
			bool = true;
			break;
		}
	}
	if (bool == true && albumName.val() != '' && url.val() != '' && loai_tin.val() != 0 && tom_tat.val() != '')
	{
		//code in here
		//$('#form-album-upload').submit();
		$(this).attr('type','submit');
	} else alert('Vui lòng kiểm tra & nhập đầy đủ thông tin!');
	//$(this).attr('type', 'submit');
}); //---end button upload clicj
//---END /BUTTON CLICK---------------










//---------------------FUNCTION------------------>
function readURL(input,index) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#preview_'+index).attr('src', e.target.result).show();
            //alert(reader.image);
        }
        reader.readAsDataURL(input.files[0]);
        return true;
    }
}
function readURLAlbum(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#viewload img').attr('src', e.target.result).show();
            //alert(reader.image);
        }
        reader.readAsDataURL(input.files[0]);
        return true;
    }
}
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
	//if (text[text.length - 1] == '-')
	//{
	

	//}
	//text = text.splice(text.length - 1, 1, 'qua');
	return text;
}
	
</script>
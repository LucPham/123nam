//fefefef


$('document').ready(function() {

	var ten_su_kien = $('#ten_su_kien');
	var sk_ngay = $('.sk_ngay');
	var sk_thang = $('.sk_thang');

 $('input#su_kien_hoan_thanh').click(function() {
 	
 	if (ten_su_kien.val() != '')
 		{
 			if (sk_ngay.val() != 0 && sk_thang.val() !=0)
 				{
 					$(this).attr('type', 'submit')
 				}
 			else
 				{	
 					$('.su_kien_ngay_error').html('Vui lòng chọn ngày và tháng!')
 				}

 		}
 	else
 		{
 			ten_su_kien.focus();
 			$('.su_kien_ten_error').html('Vui lòng nhập tên sự kiện!')
 		}

 })

})//!document
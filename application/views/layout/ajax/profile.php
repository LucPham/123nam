<script type="text/javascript">
	$(document).ready(function() {
		$('#profileUpdateBtn').on('click', function(e) {
			e.preventDefault();
			var lastName = $('#lastName');
			var firstName = $('#firstName');
			var ngay_sinh = $('#ngay_sinh');
			var thang_sinh = $('#thang_sinh');
			var nam_sinh = $('#nam_sinh');
			var submit = 1;
			if (lastName.val() == '')
			{
				$('.lastNameErr').show();
				submit = 0;
			} 
			$('#lastName').keyup(function() {
				$('.lastNameErr').hide();
			});
			
			if (firstName.val() == '')
			{
				$('.firstNameErr').show();
				submit = 0;
			} 
			$('#firstName').keyup(function() {
				$('.firstNameErr').hide();
			});
			if (ngay_sinh.val() == 0)
			{
				$('.ngay_sinhErr').show();
				submit = 0;
			} 
			$('#ngay_sinh').change(function() {
				$('.ngay_sinhErr').hide();
			});

			//thang-sinh
			if (thang_sinh.val() == 0)
			{
				$('.thang_sinhErr').show();
				submit = 0;
			} 
			$('#thang_sinh').change(function() {
				$('.thang_sinhErr').hide();
			});

			//nam-sinh
			if (nam_sinh.val() == 0)
			{
				$('.nam_sinhErr').show();
				submit = 0;
			} 
			$('#nam_sinh').change(function() {
				$('.nam_sinhErr').hide();
			});
			if (submit == 1)
			{
				$('#form1').submit();
			}
		});
	});
</script>
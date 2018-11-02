<script type="text/javascript">



	function readURL(input,index) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#bannerPreview'+index).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

	$(document).on('change','#bannerUpload', function() {
		var id = $(this).attr('index');
		//alert($(this).val());
		var _URL = window.URL || window.webkitURL;
		var imgName = $(this).val();
		var file,img;
		if (file = this.files[0]) {
			img = new Image();
			img.onload = function() {
				$('.imgName'+id).html("<span style='color: red; font-weight: bold'>"+imgName+"</span>");
				$('.size'+id).val(this.width+" x "+this.height);
				$('.width'+id).val(this.width+" px");
				$('.height'+id).val(this.height+" px");

				$('.hidden_size'+id).val(this.width+" x "+this.height);
				$('.hidden_width'+id).val(this.width);
				$('.hidden_height'+id).val(this.height);
			};
		}
		img.src = _URL.createObjectURL(file);
		readURL(this,id);
		//alert(index);
	});
</script>
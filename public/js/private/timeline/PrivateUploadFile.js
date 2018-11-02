

/*
 * Private Upload Multi File
 
*/


// Check that browser support File API

if (window.File && window.FileReader && window.FileList && window.Blob) {

	document.getElementById('files').addEventListener('change', handleFileSelect, false);

} else {
	alert('This browser is not support File API');
}



// Function handle

function handleFileSelect(evt) {

	$('#list').empty();

	var files = evt.target.files; // FileList Object
	var filetypes = ['image/jpeg','image/jpg','image/png','image/gif'];
	var isTrue = 1;
	for (var i=0, f; f = files[i]; i++) {
		if (filetypes.indexOf(files[i].type) == -1) {
			isTrue = 0;
			break;
		} else isTrue = 1;
	}
	if (isTrue == 1)
	{
		for (var i=0, f; f = files[i]; i++)
		{
			var reader = new FileReader();
			reader.onload = function() {
				return function(e) {
					var output = '' +
						'<div class="col-md-1 col-sm-2 col-xs-4" id="preview"><img class="img img-responsive" src="'+e.target.result+'">'+
								 '</div>';
					$('#list').append(output).css("border-top","#3741BD solid 3px");
				}
			}(f);
			reader.readAsDataURL(f);
			console.log(files[i].type);
		}
		$('#submit').show();
	} else {$('div#list').html('<b>Chỉ có thể tải lên file hình1</b>'); $('#submit').hide()}

	//console.log(files);
}

/*Upload button*/
$('#files').hide();
$('#submit').hide();
$(document).on('click','#upload-show', function (e) {
	e.preventDefault();
	$('#files').click();
});
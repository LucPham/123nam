<script type="text/javascript">
	
	// ------------- Delete File ------------

	$(document).ready(function() {
		var dir;
		var key;
		$(document).on('click', '#delfile', function(e) {
			e.preventDefault()
			dir = $(this).attr('path');
			key = $(this).attr('wrappkey');
			$('#wrapp_popbox').show();
			$('#boxauto').show();

			//$('#ok').on('click', function() {
				//alert(dir);
			//	dir = undefined;
			//})


	}); // #delfile click
		

	$('#okDel').on('click', function() {
		if (dir) {
			$.ajax({
				url: "<?php echo base_url('foldersystem/C_foldersystem/deleteFile_Ajax') ?>",
				type: 'post',
				data: {path: dir},
				beforeSend: function() {

				},
				success: function(respone) {
					if (respone == 1) {
						$('#wrapp_popbox').hide();
						$('#boxauto').hide();
						$('.wrapp'+key).remove();
					}
					else 
						aler('File chưa xóa được');				}
			}); //ajax
		}
	})




		$('#wrapp_popbox').on('click', function(e) {
			$(this).hide();
			$('#boxauto').hide();
		});

		$('#no').on('click', function(e) {
			$('#wrapp_popbox').hide();
			$('#boxauto').hide();
		});

		$('#close').on('click', function(e) {
			$('#wrapp_popbox').hide();
			$('#boxauto').hide();
		});



	}); // document



	//------------- Delete Directory ---------------

	$(document).ready(function() {
		var dirPath;
		var folderid;
		$(document).on('click', '#deleteDir', function(e) {
			e.preventDefault();
			dirPath = $(this).attr('path');
			folderid = $(this).attr('folderid');
			//alert(folderid);

			if (dirPath && folderid) {
				$('#wrapp_popbox').show();
				$('#boxauto').show();
			} // /if
		}); // clcik


		$('#okDel').on('click', function() {
			if (dirPath != undefined && folderid != undefined) {
				$.ajax({
					url: "<?php echo base_url('foldersystem/C_foldersystem/deletefolderAjax') ?>",
					type: 'post',
					data: {path: dirPath, Dirid: folderid},
					beforeSend: function() {

					},
					success: function(respone) {
						//alert(respone);
						if (respone == 1) {
							$('#wrapp_popbox').hide();
							$('#boxauto').hide();
							$('#folderid'+folderid).remove();
						}
						else 
							aler('Folder chưa xóa được');				
					}
				}); //ajax
			}
			
		}) // click

	}); // document


	//------------------ Rename Direction-------------------

	$(document).ready(function() {
		var path; 
		var index;
		var newname;
		$(document).on('click','#rename', function(e) {
			e.preventDefault();
			 path = $(this).attr('path');
			 index = $(this).attr('idkey');

			$('#td_foldername'+index).hide();
			$('#input_reaname'+index).show();
			$('#input_reaname'+index+' input').addClass('open').focus().select();

			
		});


		$('td input').on('blur', function() {
			if( $(this).hasClass('open')) {
				newname = $(this).val();
				//alert(newname);
				$('#td_foldername'+index).show();
				$('#input_reaname'+index).hide();
				$(this).removeClass('open');

				$.ajax({
					url: "<?php echo base_url('foldersystem/C_foldersystem/renameFolderAjax') ?>",
					type: 'post',
					data: {url: path, idkey: index, name: newname},
					beforeSend:function() {

					},
					success: function(respone) {
						if (respone == 1)
							location.reload();
					}
				})
			}
		})

	}); //document

	//------------------ Rename File-------------------

	$(document).ready(function() {
		var pathFile;
		var oldnameFile; 
		var indexFile;
		var newnameFile;
		$(document).on('click','#renameBtn', function(e) {
			e.preventDefault();

			 pathFile = $(this).attr('path');

			 oldnameFile = $(this).attr('oldname');

			 indexFile = $(this).attr('idkey');

			$('#filename'+indexFile).hide();
			$('#filenameInp'+indexFile).show();
			$('#filenameInp'+indexFile+' input').addClass('open').focus().select();
			
		});
		// Click

		$('div p input').on('blur', function(e) {
			//alert(oldnameFile);
			if( $(this).hasClass('open')) {

				$('#filename'+indexFile).show();
				$('#filenameInp'+indexFile).hide();
				$(this).removeClass('open');
				newnameFile = $(this).val();
				//alert('Newname: '+newnameFile);
			}
			$.ajax({
					url: "<?php echo base_url('foldersystem/C_foldersystem/renameFileAjax') ?>",
					type: 'post',
					data: {path: pathFile, idkey: indexFile, newname: newnameFile, oldname: oldnameFile},
					beforeSend:function() {

					},
					success: function(respone) {
						if (respone == 1) {
							location.reload();
						}
					}
				})


		})

	})

</script>


<div id="wrapp_popbox"></div> <!--wrapp_popbox-->
<div id="boxauto">
	<div id="panel">
		<div id="textConfirm">Bạn có chắc chắn muốn xóa ?</div>
		<div id="close">X</div>
	</div>
	<div id="body">
		<button class="btn btn-danger" id="no">Cancel</button>
		<button class="btn btn-danger" id="okDel">Ok</button>
	</div>
</div> <!-- /boxauto-->
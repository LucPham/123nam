<div class="row">
	<div class="col-md-12" id="foldertitle"><h2><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;<a href="#">Public</a></h2></div>
</div> 
<!--public-->



<div class="row">
	
		
	<div class="col-md-12" id="subdirectory">
	<table>
		<?php 
			if (isset($readDir) && !empty($readDir)) {
				foreach ($readDir as $key=>$folder) {
					$folderEx = explode("/", $folder);
					$foldername = end($folderEx);
				?>
				<tr id="folderid<?php echo $key; ?>">
					<td><a href="<?php echo base_url('folder?public/'.$foldername) ?>"><span class="glyphicon glyphicon-folder-open"></span></a></td>

					<td id="td_foldername<?php echo $key; ?>"><a href="<?php echo base_url('folder?public/'.$foldername) ?>"><?php echo $foldername ?></a></td>
					<!-- /td_foldername-->	

					<td id="input_reaname<?php echo $key; ?>"  style="display: none;"><input type="text" name="textName" value="<?php echo $foldername ?>"></td>
					<!-- /rename-->	


					<td>
						<div class="dropdown">
						  
						  <span class="glyphicon glyphicon-option-vertical"></span>
						 
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="<?php echo base_url('folder?public/'.$foldername) ?>">Open</a></li>
						    
						    <li><a href="#" path="<?php echo $folder; ?>" folderid="<?php echo $key; ?>" id="deleteDir">Delete</a></li>

						    <li><a href="#" id="rename" path="<?php echo $folder; ?>" idkey="<?php echo $key; ?>">Rename</a></li>
						  </ul>
						</div>
					</td>
				</tr>
					
				<?php 
				} // foreach
			} else echo '<span class="label label-danger">Folder is empty</span>';
		?>
		
	</table>

	</div> 
	<!-- /subdirectory-->



</div>
<!--/row-->
<div class="row">
	<div class="col-md-12" id="foldertitle"><h2><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;<a href="#"><?php if (isset($breadcrumbs)) echo $breadcrumbs; ?></a></h2></div>
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
					<td><a href="<?php echo base_url('folder?'.$breadcrumbs.'/'.$foldername) ?>"><span class="glyphicon glyphicon-folder-open"></span></a></td>

					<td id="td_foldername<?php echo $key; ?>"><a href="<?php echo base_url('folder?'.$breadcrumbs.'/'.$foldername) ?>"><?php echo $foldername ?></a></td>

					<td id="input_reaname<?php echo $key; ?>"  style="display: none;"><input type="text" name="textName" value="<?php echo $foldername ?>"></td>

					<td>
						<div class="dropdown">
						  
						  <span class="glyphicon glyphicon-option-vertical"></span>
						 
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="#">Open</a></li>
						    <li><a href="#" path="<?php echo $folder; ?>" folderid="<?php echo $key; ?>" id="deleteDir">Delete</a></li>
						    <li><a href="#" id="rename" path="<?php echo $folder; ?>" idkey="<?php echo $key; ?>">Rename</a></li>
						  </ul>
						</div>
					</td>
				</tr>
					
				<?php 
				} // foreach
			} else echo '<span class="label label-danger">Not isset folder</span>';
		?>
		
	</table>

	</div> 
	<!-- /subdirectory-->

	<div class="col-md-12" id="fileofdir">
		<?php
			$itemCounter = 0;
			$imagetype = array('png','jpg', 'jpeg', 'gif'); 
			if (isset($readFile) && !empty($readFile)) {
				foreach ($readFile as $key=>$file) {
					$itemCounter = $key;
					$type = explode('.', $file);
					$filetype = end($type);

					if (in_array($filetype, $imagetype)) {
					?>	
					
						<div id="wrapp" class="wrapp<?php echo $key; ?>">
							
								<img src="<?php echo base_url($breadcrumbs.'/'.$file) ?>" class="img-responsive">
								
									<div class="col-md-9 col-sm-9 col-xs-9" id="name">
										<p id="filename<?php echo $key; ?>"><?php echo $file; ?></p>
										
										<p id="filenameInp<?php echo $key; ?>" style="display: none; width: 50%;"><input type="text" name="renameInp" value="<?php echo $type[0]; ?>"></p>			

									</div>

									<div class="col-md-3 col-sm-3 col-xs-3">
										<div class="dropdown">
										  <span class="glyphicon glyphicon-option-horizontal"></span>
										 
										  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										    <li><a href="#">Open</a></li>
										    <li><a id="delfile" href="#" wrappkey ="<?php echo $key; ?>" path="<?php echo $breadcrumbs.'/'.$file; ?>">Delete</a></li>

										    <li><a href="#" id="renameBtn" path="<?php echo $breadcrumbs; ?>" oldname="<?php echo $file; ?>" idkey="<?php echo $key; ?>">Rename</a></li>
										  </ul>
										</div> <!-- /dropdown-->
									</div>
							
						</div>
						<!-- /wrapp-->

					<?php 
					}

				} // foreach 
			}
		?>
		
	</div>
	<!-- /fileofdir-->	
		
	<div class="col-md-12">
		<p><?php echo $itemCounter.' items'; ?></p>
	</div>
</div>
<!--/row-->
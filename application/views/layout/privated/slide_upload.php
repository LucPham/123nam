<h2>Slide Privated Upload</h2>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
		  <div class="panel-body">
		    Info
		  </div>
		  <div class="panel-footer">
		  	<p><strong>Width: 1024px</strong></p>
		  	<p><strong>Height: 720px</strong></p>
			
			<?php if (isset($control) && !empty($control)) { ?>

				<button <?php if ($control['controlvalid'] == '0') echo 'class="btn btn-success"'; else echo 'class="btn btn-default"' ?> id="control" ctrl="off" active="0">OFF</button>

				<button <?php if ($control['controlvalid'] == '1') echo 'class="btn btn-success"'; else echo 'class="btn btn-default"' ?> id="control" ctrl="on" active="1">ON</button>

			<?php } ?>
		  </div>
		</div>
	</div>
</div>
<!-- info -->
<form method="post" enctype="multipart/form-data">
<?php 
	if (isset($data) && !empty($data)) {
		foreach ($data as $key=>$item) { $key += 1;
			?>	
				<div class="row" id="wrapp<?php echo $key; ?>">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<button class="btn btn-warning" id="removeBtn" idt="<?php echo $item['id'] ?>" ikr="<?php echo $key; ?>">Remove</button>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<textarea class="form-control" name="caption[]" placeholder="Caption"><?php if (isset($_POST['caption'][$key-1])) echo $_POST['caption'][$key-1]; else echo $item['caption'] ?></textarea>
				</div>

				<div class="col-md-8 col-sm-8 col-xs-12">
					<input type="file" name="slidefile[]" data-href="<?php echo $key; ?>" id="slidefile">
					<img id="blah<?php echo $key; ?>" src="<?php echo base_url('public/privated/slide_img/'.$item['image']) ?>" alt="image in here"/>
					<div id="dvPreview<?php echo $key; ?>"></div>
					<div id="loading<?php echo $key; ?>"></div>
				</div>
				</div>
			<!--slide 1 -->
			<?php 
		} //foreach
	} else {
		?>
			<div class="row" id="wrapp1">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<button class="btn btn-warning" id="removeBtn" ikr="1">Remove</button>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<textarea class="form-control" name="caption[]" placeholder="Caption"></textarea>
			</div>

			<div class="col-md-8 col-sm-8 col-xs-12">
				<input type="file" name="slidefile[]" data-href="1" id="slidefile">
				<img id="blah1" src="#" alt="image in here"/>
				<div id="dvPreview1"></div>
				<div id="loading1"></div>
			</div>
			</div>
			<!--slide 1 -->
			<br/>

			<div class="row" id="wrapp2">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<button class="btn btn-warning" id="removeBtn" ikr="2">Remove</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<textarea class="form-control" name="caption[]" placeholder="Caption"></textarea>
					</div>

					<div class="col-md-8 col-sm-8 col-xs-12">
						<input type="file" name="slidefile[]" data-href="2" id="slidefile">
						<img id="blah2" src="#" alt="image in here"/>
						<div id="dvPreview2"></div>
						<div id="loading2"></div>
					</div>
			</div>
			<!--slide 2 -->
			<br/>
				
		<?php 
	} // if empty data
	
?>

<button class="btn btn-warning" id="addBtn"><span class="glyphicon glyphicon-plus"></span> Add</button>
			
	<input type="submit" name="btn" id="btn" class="btn btn-danger" value="Submit" style="float: right">
</form>		


<h2>Slide uploaded</h2>
<div class="row">
	
</div>
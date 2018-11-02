<section id="gellary">
	<h2>Gellary</h2>
    <div class="row thumnail-main">
    <?php if (isset($thumbnailData)) {
            foreach ($thumbnailData as $key=>$item) {
        ?>

              <div class="col-xs-6 col-sm-3 col-md-3 thumbnail-card">
                <a href="#" class="thumbnail">
                  <img class="img-responsive" src="<?php echo base_url('public/privated/Timeline/Thumbnail/'.$item['image_name']) ?>" alt="<?php echo $item['date_create'] ?>" title="<?php echo $item['date_create'] ?>">
                </a>
              </div>

    <?php } } ?>
    </div> <!--row-->
	<div class="row">
		<form method="post" enctype="multipart/form-data">


			
		
		<div class="col-md-12" id="output-box">
			<div class="row"><div id="list"></div></div>
		</div>

        <div class="col-md-12" id="btn-box">
            <button class="btn btn-success" id="upload-show">&nbsp;<span class="glyphicon glyphicon-upload">&nbsp;Upload</span>&nbsp;</button> <input type="submit" id="submit" name="uploadBtn" class="btn btn-danger" value="Submit">
            <input type="file" id="files" name="files[]" multiple="multiple">

        </div> <!--col-md-12-->

		</form>		
	</div> <!--row-->


</section>
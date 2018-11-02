<style type="text/css">
	.relate li a {
		color: #575252;
	}	
</style>
<div class="col-md-9 col-sm-9 col-xs-12 row_chitiet">
<?php 
		if (isset($var_chi_tiet_tin))
		{
			?>
	<div class="row"><!--tieu de + tom tat-->
		<div class="detail_title" style="padding-left: 5px"><?php echo $var_chi_tiet_tin['tieu_de']; ?></div>	
		<div class="more" style="padding-left: 5px"><?php echo $var_chi_tiet_tin['created']; ?></div>
		<div class="col-md-12" style="text-align: right; margin: 30px 0">
			<div class="fb-like" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
		</div>
		<div class="overview" style="padding-left: 5px"><?php echo $var_chi_tiet_tin['tom_tat']; ?></div>
	</div>

	<div class="row"><!-- de xuat-->
		<div class="de_xuat" id="ie-dexuat">
			<ul class="relate">
				<?php
					if (isset($RelatedPost) && !empty($RelatedPost))
					{
						foreach ($RelatedPost as $relate) {
							?>
							
							<?php  
								if ($relate['typenews'] == 'photo') {
								?>
				 				<li><a  href="<?php echo site_url('tin-tuc/photo/'.$relate['url'].'/'.$relate['id']) ?>">
				 					<?php echo $relate['tieu_de'] ?>
				 				</a></li>
				 				<?php  
			 					} elseif ($relate['typenews'] == 'emegazine') {
			 						?>
									<li><a  href="<?php echo site_url('emagazine/'.$relate['url'].'/'.$relate['id']) ?>">
					 					<?php echo $relate['tieu_de'] ?>
					 				</a></li>
			 						<?php 
			 					} else {
			 						?>
									<li><a href="<?php echo site_url('tin-tuc/'.$relate['url'].'/'.$relate['id']) ?>">
				 					<?php echo $relate['tieu_de'] ?>
					 				</a></li>
			 						<?php 
			 					}
				 				?>
							<?php
						}
					}
				?> 
			</ul>

		</div>	

	</div>

	<div class="row">
    <div class="col-md-12">
        <div id="lightgallery">
           
            <?php  
                if (isset($arr_album_detail) && !empty($arr_album_detail)) {
                    foreach ($arr_album_detail as $item) {
                        ?>
                        <div data-src="<?php echo base_url('public/album/hinh_noi_dung/'.$item['image']) ?>" data-sub-html="<?php echo $item['caption'] ?>" id="wrapp-img">
                           
                                <img class="img-responsive" src="<?php echo base_url('public/album/hinh_noi_dung/'.$item['image']) ?>" title="<?php echo $item['caption'] ?>" alt="<?php echo $item['caption'] ?>">
                            
                           <div class="col-md-12" id="caption">
                           	<span><?php echo $item['caption'] ?></span>
                           </div>
                        </div>
                        
                        <?php
                    }
                } else echo "-_- Bài viết đã bị xóa hoặc không tồn tại -_-";

            ?>
           
        </div>
    </div>
</div>

	<?php
		} 
	?>


	<div class="row">
		<?php 
			if (isset($surveyCategory) && !empty($surveyCategory))
			{
				$this->load->view('tin_tuc/'.$surveyCategory);
			}
		?>

	</div> <!-- end Row-->
	<div class="row">
		<div id="keyword">
        <div id="tags">
             Tags:
        </div>
       <div id="kw-content">
           <?php 
                if (isset($albumName))
                {
                    if (!empty($albumName['keyword'])) {
                        echo $albumName['keyword'];
                    }
                }
            ?>
       </div>
    </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="fb-like" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
		</div>
	</div><!-- END ROW FACEBOOK LIKE-->

	<!-- FACEBOOOK COMMENT-->
	<div class="row">
		<div class="col-md-12">
		<div class="fb-comments" data-numposts="5"></div>
	</div>
	</div>


</div> <!-- end Row_chitiet-->
<script type="text/javascript">
	$(document).ready(function() {
		$('img').addClass("img-responsive").css("margin", "auto");
	})
</script>

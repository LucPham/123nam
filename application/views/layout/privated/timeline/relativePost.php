<section id="relative-post">

			<div class="col-md-9 col-sm-12 col-xs-12 box-wrapper" style="margin:0; padding: 0">
				<h2>Relative post</h2>


                <?php
                    if (isset($relativePostNews) && !empty($relativePostNews)) {
                        $url = array(
                            'photo'=>base_url('privated/photo/'),
                            'emegazine'=>base_url('privated/emagazine/'),
                            'detail'=>base_url('privated/')
                        );
                        $href = array(
                            'detail'=>base_url('public/hinh_tieu_de/'),
                            'photo'=>base_url('public/hinh_tieu_de/'),
                            'emegazine'=>base_url('public/EmegazineImage/title/')
                        );
                        foreach ($relativePostNews as $item) {

                            $dateEx = explode(",",$item['created']);
                            ?>
                        <div class="row">
                            <div class="post-meta col-md-2 col-sm-2 col-xs-12">
                                <div class="entry-meta">
                                    <time><strong><?php echo $dateEx[0]; ?></strong></time>
                                    <span class="comments_count"><?php echo $dateEx[1];?></></span>
                                </div>
                            </div><!--post-meta-->

                            <div class="post-content col-md-10 col-sm-8 col-xs-12">
                                <div class="header">
                                    <h1><a href="<?php echo $url[$item['typenews']].'/'.$item['url'].'/'.$item['id']; ?>"><?php echo $item['tieu_de']; ?></a></h1>

                                </div>
                                <div class="entry-content">
                                    <p><?php echo $item['tom_tat']; ?></p>

                                    <a href="<?php echo $url[$item['typenews']].'/'.$item['url'].'/'.$item['id']; ?>"><img class="img img-responsive" src="<?php echo $href[$item['typenews']].'/'.$item['hinh']; ?>"></a>
                                </div>
                            </div><!--post-content-->
                        </div><!--row-->
                            <?php
                        }
                    } else echo 'Not available!';
                ?>

                <?php
                    if (isset($relativeAlbum) && !empty($relativeAlbum)) {
                        foreach ($relativeAlbum as $album) {
                            $dateEx = explode(",",$album['created']);
                         ?>
                            <div class="row">
                                <div class="post-meta col-md-2 col-sm-2 col-xs-12">
                                    <div class="entry-meta">
                                        <time><strong><?php echo $dateEx[0]; ?></strong></time>
                                        <span class="comments_count"><?php echo $dateEx[1];?></></span>
                                    </div>
                                </div><!--post-meta-->

                                <div class="post-content col-md-10 col-sm-8 col-xs-12">
                                    <div class="header">
                                        <h1><a href="<?php echo site_url('privated/album/'.$album['url'].'/'.$album['id']) ?>"><?php echo $album['tieu_de']; ?></a></h1>

                                    </div>
                                    <div class="entry-content">
                                        <p><?php echo $album['tom_tat']; ?></p>

                                        <a href="<?php echo site_url('privated/album/'.$album['url'].'/'.$album['id']) ?>"><img class="img img-responsive" src="<?php echo base_url('public/album/hinh_tieu_de/'.$album['hinh']) ?>"></a>
                                    </div>
                                </div><!--post-content-->
                            </div><!--row-->
                         <?php
                        }
                    }

                ?>



			</div>


			<div class="col-md-3 col-sm-12 col-xs-12 rank-wrapper" style="margin:0; padding: 0">
				<?php $this->load->view('layout/privated/timeline/rank') ?>
			</div>





			

</section>
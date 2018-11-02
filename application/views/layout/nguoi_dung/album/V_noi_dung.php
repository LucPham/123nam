<div id="wrapp-post">
        <?php  if (isset($albumName) && !empty($albumName)) { ?>
            <div id="head">
                 <div id="album-title">
                     <?php echo $albumName['tieu_de'] ?>
                 </div>   
                 <div id="overview">
                     <?php echo $albumName['tom_tat'] ?>
                 </div>
                 <div id="wrapp-date-fb">
                     <div id="date">
                         <?php echo $albumName['created'] ?>
                     </div>
                     <div id="fb-api-content">
                         <div class="fb-like" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                     </div>
                 </div> <!-- end #WRAPP-DATE-FB-->
            </div><!-- end #HEAD -->
        <?php  } ?>
    
     <?php  if (isset($arr_album_detail) && !empty($arr_album_detail)) { ?>   
        <div id="body-post">
             <div id="lightgallery">
           
            <?php  
                if (isset($arr_album_detail) && !empty($arr_album_detail)) {
                    foreach ($arr_album_detail as $item) {
                        ?>
                        <div data-src="<?php echo base_url('public/album/hinh_noi_dung/'.$item['image']) ?>" data-sub-html="<?php echo $item['caption'] ?>" id="img-item">
                           
                                <img class="img-responsive" src="<?php echo base_url('public/album/hinh_noi_dung/'.$item['image']) ?>" title="<?php echo $item['caption'] ?>" alt="<?php echo $item['caption'] ?>">
                            
                           <div class="col-md-12" id="caption-item">
                            <span><?php echo $item['caption'] ?></span>
                           </div>
                        </div>
                        
                        <?php
                    }
                } else echo "-_- Bài viết đã bị xóa hoặc không tồn tại -_-";

            ?>
           
        </div>
        </div> <!-- end #BODY-POST-->
    <?php } ?>

    <!-- FACEBOOOK COMMENT-->

    <div id="keyword">
       <div id="tagtitle"><span class="label label-warning">Tags</span></div>
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
        
    <div class="fb-comments" data-numposts="5"></div>
     
   

    <div id="wrapp-latest">
        <div id="topic-title">
            GẦN ĐÂY
        </div> <!-- end #TOPIC-TITLE -->
        <?php if (isset($albumLatest) && !empty($albumLatest)) { ?>
        <div id="body-latest">
            <?php foreach ($albumLatest as $item) { ?>
            <div id="latest-item-img">
            <a href="<?php echo site_url('album/'.$item['url'].'/'.$item['id']) ?>" title="<?php echo $item['tieu_de'] ?>" alt="<?php echo $item['tieu_de'] ?>">
                <img src="<?php echo base_url('public/album/hinh_tieu_de/'.$item['hinh']) ?>" class="img-responsive">
             </a>   
            </div>
            <div id="latest-item">
                <a href="<?php echo site_url('album/'.$item['url'].'/'.$item['id']) ?>" title="<?php echo $item['tieu_de'] ?>" alt="<?php echo $item['tieu_de'] ?>">
                <?php echo $item['tieu_de'] ?>
                <p class="dateText"><?php echo $item['created'] ?></p>    

                </a>
            </div>
            <?php } ?>
        </div>
       <?php } ?> 
    </div>

</div><!-- end WRAPP-POST-->
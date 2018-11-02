<section id="timeline">
	<h1>A flexbox timeline</h1>
	<p class="header">"Cảm ơn đời mỗi sớm mai thức giấc ta có thêm ngày nữa để yêu thương"</p>
	<div class="demo-card-wrapper">

        <?php
            if (isset($timelineData) && !empty($timelineData)) {
                foreach ($timelineData as $key=>$item) {
                    ?>

                <div class="demo-card demo-card--step<?php echo $key+1; ?>">
                    <div class="head">
                        <div class="number-box"><span><?php echo $item['timeline_id']; ?></span></div>
                        <a href="<?php echo site_url('private/timeline/'.$item['url'].'-'.$item['timeline_id']) ?>"><h2><span><?php echo $item['date'] ?></span>
                                <?php echo $item['places_title'] ?></h2></a>
                    </div>

                    <div class="body">
                        <p><?php echo $item['description']; ?></p>
                        <a href="#"><img class="img img-responsive" src="<?php echo base_url('public/privated/Timeline/AvatarImage/'.$item['avatar_img']) ?>"></a>
                    </div>
                </div> <!--step1-->


                <?php
            }} else echo "Not available!";
        ?>
	</div>

    <?php if (isset($isAvailable)) { ?>
    <div id="showmore">
        <img style="display: none;" src="<?php echo base_url('public/icon/reload.gif') ?>" alt=""><br/>
        <button class="btn btn-success" id="tl-showmore" page="2">Show more</button>
    </div>
	<?php } ?>
</section>
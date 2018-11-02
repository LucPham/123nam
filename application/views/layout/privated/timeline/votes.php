<section id="vote">
	<h2>Votes</h2>

    <?php
        $linear = array(
            '0.5' =>'lear-half-point',
            '1'   =>'linear-one-point',
            '1.5' =>'linear-one-half-point',
            '2'   =>'linear-two-point',
            '2.5' =>'linear-two-half-point',
            '3'   =>'linear-three-point',
            '3.5' =>'linear-three-half-point',
            '4'   =>'linear-four-point',
            '4.5' =>'linear-four-half-point',
            '5'   =>'linear-five-point'
        );

    ?>

    <?php if (isset($score) && !empty($score)) { ?>
        <div class="linear <?php echo $linear[$score['total_score']]; ?>" id="linear"></div>
    <?php } ?>
    <form method="post" enctype="multipart/form-data">
        <div class="vote-icon">
                <span class="glyphicon glyphicon-star vote-item one-point star-light" id="1-star" item="1" alt="1 star" title="1 star"></span>
                <span class="glyphicon glyphicon-star vote-item two-point star-light" id="2-star" item="2" alt="2 star" title="2 stars"></span>
                <span class="glyphicon glyphicon-star vote-item three-point star-light" id="3-star" item="3" alt="3 star" title="3 stars"></span>
                <span class="glyphicon glyphicon-star vote-item four-point star-light" id="4-star" item="4" alt="4 star" title="4 stars"></span>
                <span class="glyphicon glyphicon-star vote-item five-point star-light" id="5-star" item="5" alt="5 star" title="5 stars"></span>
        </div>
    </form>
	<div class="score">
		<?php
            if (isset($score) && !empty($score))
		    echo '<h3>'.$score['total_score'].'</h3>';
            else echo '<i>Bạn sẽ là người đầu tiên đánh giá nơi này!</i>';
            ?>
	</div>

    <div class="notify-box">
        <div class="info">
            <strong></strong>
        </div>
    </div>
    <div class="overLoadScreen"></div>
</section>
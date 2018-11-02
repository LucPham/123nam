<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">123 Năm</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      
		      <a class="navbar-brand" href="<?php echo base_url() ?>" title="Home" alt="Home"><img src="<?php echo base_url('public/icon/ava.png') ?>" class="img-responsive"></a>
		     
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo site_url('tin-tuc/news') ?>">TIN TỨC</a></li>

		        <li><a href="<?php echo site_url('album-hinh') ?>">ALBUM HÌNH</a></li>

		       <li class="dropdown">
		          <a href="#" class="dropdown-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SỰ KIỆN</a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo site_url('su-kien/create') ?>"><span class="glyphicon glyphicon-plus"></span>&nbsp; TẠO SỰ KIỆN</a></li>
		            <li><a href="<?php echo site_url('su-kien/su-kien-cua-toi') ?>"> <span class="glyphicon glyphicon-folder-open"></span> &nbsp;SỰ KIỆN CỦA TÔI</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> &nbsp;SẮP TỚI</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-calendar"></span>&nbsp; LÊN LỊCH</a></li>
		            
		            <li><a href="#"><span class="glyphicon glyphicon-time"></span>&nbsp; CÁC SỰ KIỆN TRONG NĂM</a></li>
		          </ul>
		        </li>
				<li><a href="<?php echo site_url('lucpham-profile') ?>" target="_blank" title="LucPham Profile" alt="LucPham Profile">LUC PHAM PROFILE</a></li>

				<?php if (isset($privated) && $privated == true) { ?>

					<li><a href="<?php echo site_url('privated') ?>" target="_blank" title="LucPham Profile" alt="LucPham Profile">PRIVATED</a></li>
					
				<?php } ?>


		        <li>
					<?php 
						if (isset($arr_id_evt_now) && !empty($arr_id_evt_now))
						{	
							if (isset($numEvtNow) && $numEvtNow > 0)
							{
								?>
									 <a href="<?php echo site_url('su-kien/hom-nay?'.http_build_query($arr_id_evt_now,"evt_").'&cnt='.$numEvtNow) ?>"><span class="glyphicon glyphicon-bullhorn"></span> Hôm nay <?php 
		          			echo '<span class="badge">'.$numEvtNow.'</span>';
		          	?></a>
								<?php
							}
						}
					?>
		       </li>
		       
		      </ul>
		      <form class="navbar-form navbar-left" action="<?php echo site_url('tim-kiem') ?>" method="get">
		        <div class="form-group">
		          <input type="text" name="q" id="searchQuery" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><span style="font-weight: bolder;" class="fa fa-angle-double-down" aria-hidden="true"></span></b></a>


		          <ul class="dropdown-menu">

	          	<?php
          		if (isset($username) && !empty($username))
          		{
	          		?>
		          		<li><a href="<?php echo site_url('profile') ?>"><b><?php echo $username['lastName'].' '.$username['firstName'] ?></b></a></li>
						<li><a href="<?php echo site_url('doi-mat-khau') ?>">Đổi mật khẩu </a></li>
						<li><a href="#" class="dang_xuat">Đăng xuất</a></li>
		          		<?php if ($username['adm'] == 1)
		          				echo '<li><a target="_blank" href="'.site_url('Administrator').'">Administrator</a></li>'?>
		          		<?php if ($username['boss'] == 1)
		          				echo '<li><a target="_blank" href="'.site_url('nknx').'">NKNX</a></li>'?>		
		          		<?php

		         }else
		          {
		          	?>
		            <li><a href="#" data-popup-open="popup-login">Đăng nhập</a></li>
		            <li><a target="_blank" href="<?php echo site_url('register') ?>">Đăng ký</a></li>
		            <li><a href="<?php echo site_url('quen-mat-khau') ?>">Quên mật khẩu</a></li>
		          <?php
		      }
		      ?>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
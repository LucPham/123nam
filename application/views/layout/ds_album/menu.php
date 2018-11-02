<nav class="navbar navbar-default" style="margin-bottom: 5px">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      
		      <a style="background-color: #68c62d;color: #ffffff; height: 100%" class="navbar-brand" href="<?php echo base_url() ?>" title="Home" alt="Home"><span class="glyphicon glyphicon-home"></span></a>
		     
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a style="color: #ffffff" href="<?php echo site_url('trang-nhat/top') ?>"><span class="glyphicon glyphicon-chevron-right"></span> Trang nhất <span class="sr-only">(current)</span></a></li>
		        <li><a style="color: #ffffff" href="<?php echo site_url('tin-tuc/news') ?>"><span class="glyphicon glyphicon-chevron-right"></span> Tin tức</a></li>

		        <li><a style="color: #ffffff" href="#"><span class="glyphicon glyphicon-chevron-right"></span> Album hình</a></li>

		       <li class="dropdown">
		          <a href="#" class="dropdown-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-bell"></span> Sự kiện</a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo site_url('su-kien/create') ?>"><span class="glyphicon glyphicon-plus"></span>&nbsp; Tạo sự kiện</a></li>
		            <li><a href="<?php echo site_url('su-kien/su-kien-cua-toi') ?>"> <span class="glyphicon glyphicon-folder-open"></span> &nbsp;Sự kiện của tôi</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> &nbsp;Sắp tới</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-calendar"></span>&nbsp; Lên lịch</a></li>
		            
		            <li><a href="#"><span class="glyphicon glyphicon-time"></span>&nbsp; Các sự kiện trong năm</a></li>
		          </ul>
		        </li>
		        <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Hôm nay <?php 
		          		if (isset($numEvtNow) && $numEvtNow > 0)
		          			echo '<span class="badge">'.$numEvtNow.'</span>';
		          	?></a></li>
		        
		      </ul>
		      <ul class="nav navbar-nav navbar-right">

		      	<li><a class="navbar-brand" href="#" title="<?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?>" alt="<?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?>"><?php  echo '<img class="img-responsive" src="'.$this->session->userdata('picture_url').'" alt="" width="30px" height="30px"/>'; ?></a></li>
		       	

		       	<li><a href="#"><b><?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?></b></a></li>
		        <li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><span class="glyphicon glyphicon-option-horizontal"></span></b></a>
		          <ul class="dropdown-menu">

	          	<?php
          		if (isset($_COOKIE['hoten']) && !empty($_COOKIE['hoten']))
          		{
	          		?>
		          		<li><a href="#"><b><?php echo $_COOKIE['hoten'] ?></b></a></li>
		          		<li><a href="#" class="dang_xuat">Đăng xuất</a></li>

		          		<?php 
		          			if (isset($_COOKIE['adm']) && $_COOKIE['adm'] ==1)
		          				echo '<li><a target="_blank" href="'.site_url('Administrator').'">Administrator</a></li>'

		          		?>
		          		<?php
	          	}
	          		else
	          		{
	          	?>
		            <li><a href="#" data-popup-open="popup-login">Đăng nhập</a></li>
		            <li><a target="_blank" href="<?php echo site_url('register') ?>">Đăng ký</a></li>
		            <li><a href="#">Quên mật khẩu</a></li>
		          <?php
		      }
		      ?>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
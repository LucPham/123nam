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
		      <a class="navbar-brand" href="<?php echo base_url() ?>" title="Home" alt="Home"><span class="glyphicon glyphicon-home"></span></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		      </ul>
		      
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="<?php echo site_url('quan_tri/C_tin_tuc/kiem_tra_ds') ?>">Kiểm tra</a></li>
		        <li><a target="target" href="<?php echo site_url('quan_tri/C_tin_tuc/xuat_ban') ?>">Viết bài</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-horizontal"></span></a>
		          <ul class="dropdown-menu">
	          	<?php
          		if ($this->session->userdata('hoten'))
          		{
	          		?>
		          		<li><a href="#"><b><?php echo $this->session->userdata('hoten') ?></b></a></li>
		          		<li><a href="<?php echo site_url('register') ?>">Đăng ký</a></li>
		          		<li><a href="#" class="dang_xuat">Đăng xuất</a></li>
		          		<?php
	          	}
	          		else
	          		{
	          	?>
		            <li><a href="#" data-popup-open="popup-login">Đăng nhập</a></li>
		            <li><a href="<?php echo site_url('register') ?>">Đăng ký</a></li>
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
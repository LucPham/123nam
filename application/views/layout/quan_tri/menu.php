<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">123nam Administrator System</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" style="color: #ffffff" href="<?php echo site_url('Administrator') ?>"><span class="glyphicon glyphicon-home"></span></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">

		        <!--Album-->
		        <li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Album <span class="caret"></span></a>
		          <ul class="dropdown-menu">
							<li><a href="<?php echo site_url('quan-tri/album/danh-sach-album') ?>"><span class="glyphicon glyphicon-th-list"></span>  Danh sách album</a></li>
							<li><a href="<?php echo site_url('quan-tri/album/tao-album') ?>"><span class="glyphicon glyphicon-upload"></span>  Album Upload</a></li> 
							
		          </ul>
		        </li>
		        



		        <!--end /.album-->
		        <li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sự kiện <span class="caret"></span></a>
		          <ul class="dropdown-menu">
							<li><a href="<?php echo site_url('quan-tri/su-kien/danh-sach-su-kien') ?>"><span class="glyphicon glyphicon-th-list"></span>  Danh sách sự kiện</a></li>
							<li><a href="<?php echo site_url('quan-tri/su-kien/tao-su-kien') ?>"><span class="glyphicon glyphicon-calendar"></span>  Tạo sự kiện</a></li>
							
		          </ul>
		        </li>
		        <!-- end /sukien-->
		        <!-- user-->
		        <li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          <li><a href="<?php echo site_url('quan-tri/user/overview') ?>"><span class="glyphicon glyphicon-th-list"></span> Overview</a></li>
		          <li><a href="<?php echo site_url('quan-tri/register-manage') ?>"><span class="glyphicon glyphicon-th-list"></span> RegisterManage</a>
		          <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> Thống kê</a></li>
		          </ul>
		        </li>
		       <!-- end //user -->

		        <li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh mục tin tức <span class="caret"></span></a>
		          <ul class="dropdown-menu">
					<!-- Danh sach LOAI TIN -->
		           <?php
		          	 $this->load->model('quan_tri/M_tin_tuc_table');
					 $loai_tin = $this->M_tin_tuc_table->ds_loai_tin();  
					if (isset($loai_tin) && !empty($loai_tin))
					{
						foreach ($loai_tin as $item)
						{
							?>
							<li><a href="<?php echo site_url('quan-tri/danh-muc-tin-tuc/'.$item['ma_loai']) ?>"><?php echo $item['loai_tin'] ?></a></li>
							
							<?php
						}
					}

				?>
					<!-- Danh sach LOAI TIN NHAT KY NGAY XANH -->

		          </ul>
		        </li>
		        <li><a style="color: #ffffff" href="<?php echo site_url('quan-tri/banner/banner-manager') ?>">Banner</a></li>
					
				<!-- cho phe duyet -->
				<?php 
					$total_rows_tin_tuc = $this->M_tin_tuc_table->tong_so_cho_phe_duyet('tin_tuc');
					$total_rows_album = $this->M_tin_tuc_table->tong_so_cho_phe_duyet('album');
					$total = $total_rows_tin_tuc + $total_rows_album;
				 ?>
				<li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chờ phê duyệt (<?php echo $total; ?>) <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          <li><a href="<?php echo site_url('quan-tri/cho-phe-duyet') ?>" title="Tin tức - Chờ phê duyệt" alt="Tin tức - Chờ phê duyệt">Tin tức <span>(<?php if (isset($total_rows_tin_tuc)) echo $total_rows_tin_tuc; ?>)</span>
		          	</a></li>
		          <li><a href="<?php echo site_url('quan-tri/album-cho-phe-duyet') ?>" title="Album - Chờ phê duyệt" alt="Album - Chờ phê duyệt">Album <span>(<?php if (isset($total_rows_album)) echo $total_rows_album; ?>)</span></a></li>
		          </ul>
		        </li>
				<!-- end cho phe duyet -->
				<li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Emegazine <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          <li><a href="<?php echo site_url('quan-tri/emegazine/editor') ?>" title="Editor - Emegazine" alt="Editor - Emegazine">Editor</a></li>
		          <li><a href="<?php echo site_url('quan-tri/album-cho-phe-duyet') ?>" title="Album - Chờ phê duyệt" alt="Album - Chờ phê duyệt">Album</a></li>
		          </ul>
		        </li>
				<!-- end Emegazine -->

				<li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Privated <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          <li><a href="#" title="Danh sach tin Privated" alt="Danh sach tin Privated">Privated</a></li>
		          <li><a href="<?php echo site_url('quan-tri/privated/slide-system') ?>" title="Slide - Privated" alt="Slide - Privated">Slide</a></li>
		          </ul>
		        </li>
				<!-- end Privated -->

				<li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          <li><a href="<?php echo base_url('quan-tri/timeline/editor') ?>" title="Thu7 Editor" alt="Thu7 Editor">Editor</a></li>
		          <li><a href="<?php echo base_url('quan-tri/timeline/record-list') ?>" title="Places list" alt="Places list">Places List</a></li>
		          </ul>
		        </li>
				<!-- end Thu7 -->


				<li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Folder System <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          <li><a href="<?php echo site_url('public') ?>" title="Folder" alt="Folder">Folder</a></li>
		          <li><a href="#" title="Slide - Privated" alt="Slide - Privated">Slide</a></li>
		          </ul>
		        </li>
				<!-- end foldersystem -->
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a style="color: #ffffff" href="<?php echo site_url('quan-tri/xuat-ban') ?>">Viết bài</a></li>
		        <li class="dropdown">
		          <a style="color: #ffffff" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-horizontal"></span></a>
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
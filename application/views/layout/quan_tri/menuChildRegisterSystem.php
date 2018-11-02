<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
		        <span class="sr-only">123nam Administrator System</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" style="color: #ffffff" href="<?php echo site_url('quan-tri/register-manage') ?>">Register Manage System</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
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
				<li><a href="#">Today</a></li>
				<li><a href="#">This week</a></li>
				<li><a href="<?php echo base_url('quan-tri/user/list/this-month') ?>">This month</a></li>
				<li><a href="<?php echo base_url('quan-tri/user/list/latest') ?>">Latest</a></li>
				<li><a href="<?php echo base_url('quan-tri/user/list/oldest') ?>">Oldest</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
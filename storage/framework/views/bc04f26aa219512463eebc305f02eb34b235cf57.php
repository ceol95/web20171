<div id="navbar" class="navbar navbar-default ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header pull-left">
			<a href="index.html" class="navbar-brand">
				<small>
					<i class="fa fa-leaf"></i>
					Elecshop Admin
				</small>
			</a>
		</div>

		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				
				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/images/avatars/user.jpg" alt="Jason's Photo" />
						<span class="user-info">
							<small>xin chào,</small>
							<?php if(isset(Auth::guard('admin')->user()->name) ): ?>
							<?php echo Auth::guard('admin')->user()->name; ?>

							<?php endif; ?>
						</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="<?php echo e(url('admin/password')); ?>">
								<i class="ace-icon fa fa-cog"></i>
								Mật khẩu
							</a>
						</li>

						<li>
							<a href="<?php echo e(url('admin/cat')); ?>">
								<i class="ace-icon fa fa-user"></i>
								Thông tin
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="<?php echo e(url('admin/logout')); ?>">
								<i class="ace-icon fa fa-power-off"></i>
								Đăng xuất
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->
</div>
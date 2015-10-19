<nav class="navbar navbar-default" role="navigation" style="margin-bottom:0;border-radius: 0px;">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url('admin'); ?>"><?php echo CLIENT_NAME ?></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div id="my-navbar" class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden-sm hidden-md hidden-lg"><a href="<?php echo site_url('admin/list_news'); ?>">News</a></li>
				<li class="hidden-sm hidden-md hidden-lg"><a href="<?php echo site_url('admin/list_products'); ?>">Products</a></li>
				<?php if ($this->router->fetch_class() == 'admin'): ?>
					<li><a href="<?php echo site_url() ?>">The Site</a></li>
				<?php else: ?>
					<li><a href="<?php echo site_url('admin') ?>">Admin Panel</a></li>
				<?php endif ?>
				<li><a href="<?php echo site_url('auth/logout') ?>">Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
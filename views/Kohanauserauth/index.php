<div class="page-header">
	<div class="row">
		<div class="col-xs-6">
			<h1><?php echo user::get()->name; ?></h1>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6">
		Tilmeldt siden <?php echo user::get()->created(); ?>.
	</div>
	<div class="col-xs-6 text-right">
		<a href="<?php echo user::url('logout'); ?>" title="Log ud" class="btn btn-danger">
			<span class="glyphicon glyphicon-off"></span>
		</a>
	</div>
</div>

<p>
	<?php if(user::logged('admin')): ?>
		<a href="<?php echo URL::site('cms'); ?>" class="btn btn-primary">
			<span class="glyphicon glyphicon-list"></span>
			CMS
		</a>
	<?php endif; ?>
</p>

<h1><?php echo __('Reset your password'); ?></h1>

<p>
	<?php echo __('Enter the e-mail address you signed up with, and we\'ll send you an e-mail which will help you reset your password.'); ?>
</p>

<form action="<?php echo URL::site(user::path('help')); ?>" method="post" role="form" class="form-search">
	<div class="form-group">
		<label for="email" class="control-label"><?php echo __('Your e-mail address:') ?></label>
		<input type="text" placeholder="<?php echo __('Your e-mail..') ?>" name="email" class="form-control" id="email" />
	</div>
	<input type="submit" value="<?php echo __('Reset password'); ?>" class="btn btn-primary" />
</form>

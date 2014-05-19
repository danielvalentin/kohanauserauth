<h1><?php echo __('Log in'); ?></h1>
<?php
if($errors)
{
	echo '<div class="alert alert-danger">';
	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
	echo '<h4>'.__('Error').'</h4>';
	echo __('Wrong e-mail or password');
	echo '</div>';
}
?>
<form action="<?php echo URL::site(user::path('login')); ?>" method="post" role="form">
	<div class="login">
		<div class="form-group">
			<label for="email"><?php echo __('E-mail:') ?></label>
			<input type="text" class="form-control" name="email" placeholder="<?php echo __('Your e-mail...'); ?>" id="email" value="<?php echo arr::get($_POST, 'email', ''); ?>" />
		</div>
		<div class="form-group">
			<label for="password"><?php echo __('Password:'); ?></label>
			<input type="password" class="form-control" name="password" id="password" placeholder="<?php echo __('Your password...') ?>" />
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary"><?php echo __('Log in'); ?></button> - <a href="<?php echo URL::site(user::path('signup')); ?>" title="<?php echo __('Signup') ?>"><?php echo __('New user') ?></a>?
		</div>
		<a href="<?php echo URL::site(user::path('help')); ?>" title="<?php echo __('Reset your password') ?>"><?php echo __('Forgot password?') ?></a>
	</div>
</form>

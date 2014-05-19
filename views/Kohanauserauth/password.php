<h1><?php echo __('Update password'); ?></h1>

<p><?php echo __('Enter your new password') ?></p>

<form action="<?php echo user::url('password/' . $token->token); ?>" method="post">
	<fieldset>
		<div class="control-group<?php echo (arr::get($errors, 'password', false)?' error':'') ?>">
			<label class="control-label" for="password"><?php echo __('New password:') ?></label>
			<div class="controls">
				<input type="password" class="form-control" name="password" id="password" />
				<?php if(arr::get($errors, 'password', false)): ?>
					<p class="help-inline">
						<?php echo arr::get($errors, 'password'); ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
		<div class="control-group<?php echo (arr::get($errors, 'password_confirm', false)?' error':'') ?>">
			<label class="control-label" for="password_confirm"><?php echo __('Confirm new password:'); ?></label>
			<div class="Controls">
				<input type="password" class="form-control" name="password_confirm" id="password_confirm" />
				<?php if(arr::get($errors, 'password_confirm', false)): ?>
					<p class="help-inline">
						<?php echo arr::get($errors, 'password_confirm'); ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
		
		<input type="submit" value="<?php echo __('Update password'); ?>" class="btn btn-primary" />
		
	</fieldset>
</form>

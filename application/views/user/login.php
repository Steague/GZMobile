<div data-role="page" id="login" data-theme="a">

	<div data-role="header">
		<h1>Generation Z</h1>
		<?php echo HTML::anchor('/user/register', 'Register', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-user"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<?php if ($message) : ?>
			<h3 class="message">
				<?php echo $message; ?>
			</h3>
		<?php endif; ?>
		<?php if (Arr::path($errors, 'login.error')) : ?>
			<h3 class="error">
				<?php echo Arr::path($errors, 'login.error'); ?>
			</h3>
		<?php endif; ?>

		<?php echo Form::open('/user/login'); ?>
			<div data-role="fieldcontain">
				<?php echo Form::label('username_login', 'Username'); ?>
				<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username')), array("id"=>"username_login","placeholder"=>"Username")); ?>
				<?php echo Form::label('username_login', Arr::get($errors, 'username'), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('password_login', 'Password'); ?>
				<?php echo Form::password('password', null, array("id"=>"password_login","placeholder"=>"Password")); ?>
				<?php echo Form::label('password_login', Arr::path($errors, '_external.password'), array('class'=>"error")); ?>
			</div>
			<label>
				<?php echo Form::checkbox('remember'); ?> Remember
			</label>
			<?php echo Form::submit('login', 'Login'); ?>
		<?php echo Form::close(); ?>
	</div><!-- /content -->

</div><!-- /page -->

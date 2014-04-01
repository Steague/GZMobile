<div data-role="page" id="register" data-theme="a">

	<div data-role="header">
		<?php echo HTML::anchor('/', 'Cancel', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-arrow-l"), null, false); ?>
		<h1>Create a New User</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<?php if ($message) : ?>
			<h3 class="message">
				<?php echo $message; ?>
			</h3>
		<?php endif; ?>

		<?php echo Form::open('/user/register'); ?>
			<div data-role="fieldcontain">
				<?php echo Form::label('username_register', 'Username'); ?>
				<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username')), array("id"=>"username_register")); ?>
				<?php echo Form::label('username_register', Arr::get($errors, 'username'), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('password_register', 'Password'); ?>
				<?php echo Form::password('password', null, array("id"=>"password_register")); ?>
				<?php echo Form::label('password_register', Arr::path($errors, '_external.password'), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('password_confirm_register', 'Confirm Password'); ?>
				<?php echo Form::password('password_confirm', null, array("id"=>"password_confirm_register")); ?>
				<?php echo Form::label('password_confirm_register', Arr::path($errors, '_external.password_confirm'), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('email_register', 'Email Address'); ?>
				<?php echo Form::input('email', HTML::chars(Arr::get($_POST, 'email')), array("id"=>"email_register")); ?>
				<?php echo Form::label('email_register', Arr::get($errors, 'email'), array('class'=>"error")); ?>
			</div>
			<?php echo Form::submit('create', 'Create User'); ?>
		<?php echo Form::close(); ?>

		<p>Or <?php echo HTML::anchor('/', 'login', null, null, false); ?> if you have an account already.</p>
	</div><!-- /content -->

</div><!-- /page -->
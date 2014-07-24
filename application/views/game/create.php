<div data-role="page" id="login" data-theme="a">

	<div data-role="header" data-position="fixed">
		<?php echo HTML::anchor('/', 'Cancel', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-arrow-l"), null, false); ?>
		<h1>Create New Game</h1>
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<?php if ($message) : ?>
			<h3 class="message">
				<?php echo $message; ?>
			</h3>
		<?php endif; ?>
		<?php if ($errors) : ?>
			<?php foreach ($errors as $error) : ?>
				<h3 class="error">
					<?php echo $error; ?>
				</h3>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php echo Form::open('/game/create'); ?>
			<div data-role="fieldcontain">
				<?php echo Form::label('game_name', 'Name'); ?>
				<?php echo Form::input('name', HTML::chars(Arr::get($_POST, 'name')), array("id"=>"game_name")); ?>
				<?php echo Form::label('game_name', Arr::get($errors, 'name'), array('class'=>"error")); ?>
			</div>
			<?php echo Form::submit('create', 'Create'); ?>
		<?php echo Form::close(); ?>
	</div><!-- /content -->

</div><!-- /page -->
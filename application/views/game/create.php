<div data-role="page" id="new_game" data-theme="a">

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

		<?php $help_link = HTML::anchor('#help_panel', 'No text', array('class'=>'ui-btn ui-icon-info ui-btn-icon-notext ui-corner-all ui-btn-inline'), null, false); ?>

		<?php echo Form::open('/game/create'); ?>
			<div data-role="fieldcontain">
				<?php echo Form::label('game_name', 'Game Title'.$help_link, array("data-title"=>"Game Title")); ?>
				<?php echo Form::input('name', HTML::chars(Arr::get($_POST, 'name')), array("id"=>"game_name")); ?>
				<?php echo Form::label('game_name', Arr::get($errors, 'name'), array('class'=>"error")); ?>
			</div>
			<div class="ui-field-contain">
                <?php echo Form::label('starting_points', 'Starting Points'.$help_link, array("data-title"=>"Starting Points")); ?>
                <?php echo Form::input('starting_points', HTML::chars(Arr::get($_POST, 'starting_points', 3)), array("id"=>"starting_points", "class"=>"new_player_slider", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>23)); ?>
                <?php echo Form::label('starting_points', Arr::get($errors, 'starting_points'), array('class'=>"error")); ?>
            </div>
			<?php echo Form::submit('create', 'Create'); ?>
		<?php echo Form::close(); ?>
	</div><!-- /content -->

</div><!-- /page -->
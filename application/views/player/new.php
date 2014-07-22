<div data-role="page" id="login" data-theme="a">

	<div data-role="header">
		<?php echo HTML::anchor('/game/view/'.$game->id, 'Return', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-arrow-l"), null, false); ?>
		<h1>Join Game: <?php echo $game->title; ?></h1>
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content">

		<?php if ($message) : ?>
			<h3 class="message">
				<?php echo $message; ?>
			</h3>
		<?php endif; ?>

		<?php echo Form::open('/player/register/'.$game->id); ?>
			<div data-role="fieldcontain">
				<?php echo Form::label('', ''); ?>
				<?php echo Form::input('', HTML::chars(Arr::get($_POST, '')), array("id"=>"")); ?>
				<?php echo Form::label('', Arr::get($errors, ''), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('', ''); ?>
				<?php echo Form::input('', HTML::chars(Arr::get($_POST, '')), array("id"=>"")); ?>
				<?php echo Form::label('', Arr::get($errors, ''), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('health_slider', 'Health'); ?>
				<?php echo Form::input('health', HTML::chars(Arr::get($_POST, 'health', 1)), array("id"=>"health_slider", "type"=>"range", "data-highlight"=>"true", "min"=>1, "max"=>5)); ?>
				<?php echo Form::label('health_slider', Arr::get($errors, 'health'), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('sanity_slider', 'Sanity'); ?>
				<?php echo Form::input('sanity', HTML::chars(Arr::get($_POST, 'sanity', 0)), array("id"=>"sanity_slider", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>5)); ?>
				<?php echo Form::label('sanity_slider', Arr::get($errors, 'sanity'), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('fighting_slider', 'Fighting'); ?>
				<?php echo Form::input('fighting', HTML::chars(Arr::get($_POST, 'fighting', 0)), array("id"=>"fighting_slider", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>5)); ?>
				<?php echo Form::label('fighting_slider', Arr::get($errors, 'fighting'), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('social_slider', 'Social'); ?>
				<?php echo Form::input('social', HTML::chars(Arr::get($_POST, 'social', 0)), array("id"=>"social_slider", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>5)); ?>
				<?php echo Form::label('social_slider', Arr::get($errors, 'social'), array('class'=>"error")); ?>
			</div>
			<div data-role="fieldcontain">
				<?php echo Form::label('survival_slider', 'Survival'); ?>
				<?php echo Form::input('survival', HTML::chars(Arr::get($_POST, 'survival', 0)), array("id"=>"survival_slider", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>5)); ?>
				<?php echo Form::label('survival_slider', Arr::get($errors, 'survival'), array('class'=>"error")); ?>
			</div>
			
			<?php echo Form::submit('create', 'Create Player'); ?>
		<?php echo Form::close(); ?>

	</div><!-- /content -->

</div><!-- /page -->
<div data-role="page" id="login" data-theme="a">

	<div data-role="header">
		<?php echo HTML::anchor('/', 'Return', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-arrow-l"), null, false); ?>
		<h1>Game: <?php echo $game->title; ?></h1>
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content">

		<?php if (count($game->get_all_players()) == 0): ?>
			No players currently.
		<?php else: ?>
			<?php foreach ($game->get_all_players() as $k => $player): ?>
				# code...
			<?php endforeach; ?>
		<?php endif; ?>

		<?php if ($game->is_gm == true && $game->is_player() === false): ?>
			Join own game?
		<?php endif; ?>

		<?php
			// $c = base_convert(60466175, 10, 36);
			// echo $c;
			// echo "<br />";
			// echo base_convert($c, 36, 10);
		?>

	</div><!-- /content -->

</div><!-- /page -->
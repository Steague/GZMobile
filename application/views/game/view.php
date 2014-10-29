<div data-role="page" id="login" data-theme="a">

	<div data-role="header" data-position="fixed">
		<?php echo HTML::anchor('/game/viewall', 'My Games', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-bars"), null, false); ?>
		<h1>Game: <?php echo $game->title; ?></h1>
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content">

		<?php if (count($game->get_all_players()) == 0): ?>
			No players currently.
		<?php else: ?>
			<div data-role="collapsible" data-collapsed="true">
				<h3>Players (<?php echo count($game->players); ?>)</h3>
				<table data-role="table" id="<?php echo $game->id; ?>-my-table" data-mode="reflow" class="ui-responsive table-stroke">
					<thead>
						<tr>
							<th data-priority="persist">Name</th>
							<th data-priority="1">Health</th>
							<th data-priority="2">Sanity</th>
							<th data-priority="3">Fighting</th>
							<th data-priority="4">Social</th>
							<th data-priority="5">Survival</th>
							<th data-priority="6">XP</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($game->players as $player): ?>
						<tr>
							<th><?php echo $player->name; ?><?php echo ($game->is_player() ? " (You) [Leave game]" : ""); ?></th>
							<td><?php echo $player->health; ?></td>
							<td><?php echo $player->sanity; ?></td>
							<td><?php echo $player->fighting; ?></td>
							<td><?php echo $player->social; ?></td>
							<td><?php echo $player->survival; ?></td>
							<td><?php echo ($player->health + $player->sanity + $player->fighting + $player->social + $player->survival); ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		<?php endif; ?>

		<?php if ($game->is_gm == true && $game->is_player() === false): ?>
			<?php echo HTML::anchor('/player/new/'.$game->id, 'Join your own game?', array("class"=>"ui-shadow ui-btn ui-corner-all ui-btn-icon-right ui-icon-check"), null, false); ?>
		<?php endif; ?>

		<?php
			// $c = base_convert(60466175, 10, 36);
			// echo $c;
			// echo "<br />";
			// echo base_convert($c, 36, 10);
			// $t = Twilio::instance()->send_sms(array("To"=>"415-378-9465","Body"=>"The user, \"Sean,\" has asked to be a member of your Generation Z game."));
			// echo "<pre>";
			// var_dump($t);
			// echo "</pre>";
		?>

	</div><!-- /content -->

</div><!-- /page -->
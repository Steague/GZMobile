<div data-role="page" id="game-view" data-theme="a" data-dom-cache="false">

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
				<?php $active = array_filter($game->players, function($player) { return ($player->active == true && strlen($player->playername) > 0); }); ?>
				
				<h3>Active Players (<?php echo count($active); ?>)</h3>
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
							<th data-priority="7">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($game->players as $player): ?>
							<?php if ($player->active == true && strlen($player->playername) > 0): ?>
								<tr>
									<th><?php echo $player->playername; ?><?php echo ($game->is_me($player) ? " (You)" : ""); ?></th>
									<td><?php echo $player->health; ?></td>
									<td><?php echo $player->sanity; ?></td>
									<td><?php echo $player->fighting; ?></td>
									<td><?php echo $player->social; ?></td>
									<td><?php echo $player->survival; ?></td>
									<td><?php echo $player->xp; ?></td>
									<td>
										<?php if ($game->is_me($player)): ?>
											<div data-role="controlgroup" data-type="horizontal" data-mini="true">
												<a href="/game/leave/<?php echo $game->id; ?>?player=<?php echo $player->id; ?>" data-role="button" id="leave-game">Leave Game</a>
												<?php if ($player->xp > 0): ?>
													<a href="/player/level/<?php echo $game->id; ?>?player=<?php echo $player->id; ?>" data-role="button">Spend XP</a>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									</td>
								</tr>
							<?php endif; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<?php if ($game->is_gm == true): ?>
				<div data-role="collapsible" data-collapsed="true">
					<h3>Pending Players (<?php echo (count($game->players) - count($active)); ?>)</h3>
					<?php if ((count($game->players) - count($active)) == 0): ?>
						No pending players.
					<?php else: ?>
						<table data-role="table" id="<?php echo $game->id; ?>-my-table" data-mode="reflow" class="ui-responsive table-stroke">
							<thead>
								<tr>
									<th data-priority="persist">Username</th>
									<th>Admit?</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($game->players as $player): ?>
									<?php if ($player->active == false || ($player->active == true && strlen($player->playername) <= 0)): ?>
										<tr>
											<th><?php echo $player->user->username; ?></th>
											<td>
												<?php if ($player->active == true && strlen($player->playername) <= 0): ?>
													Player already admitted.
												<? endif; ?>
												<div data-role="controlgroup" data-type="horizontal" data-mini="true">
													<?php if ($player->active == false): ?>
														<a href="/game/admit/<?php echo $game->id; ?>?player=<?php echo $player->id; ?>" data-role="button">Admit</a>
													<? endif; ?>
													<a href="/game/decline/<?php echo $game->id; ?>?player=<?php echo $player->id; ?>" data-role="button">Decline</a>
												</div>
											</td>
										</tr>
									<?php endif; ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					<?php endif; ?>
				</div>
			<?php endif; ?>
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
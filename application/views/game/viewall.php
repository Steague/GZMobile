<div data-role="page" id="login" data-theme="a">

	<div data-role="header" data-position="fixed">
		<?php echo HTML::anchor('/', 'Home', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-arrow-l"), null, false); ?>
		<h1>Active Games: (<?php echo count($games); ?>)</h1>
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content">
	
		<div data-role="collapsible-set" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">

			<?php foreach ($games as $game) { ?>
			<div data-role="collapsible" data-collapsed="true">
				<h3><?php echo $game->title; ?> (Short ID: <?php echo Game::get_short_id($game->id); ?>)</h3>
				<p>
					<div data-role="collapsible" data-collapsed="true">
						<h3>Players (<?php echo $game->player_count; ?>)</h3>
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
								<?php foreach ($game->players as $player) { ?>
								<tr>
									<th><?php echo $player->name; ?></th>
									<td><?php echo $player->health; ?></td>
									<td><?php echo $player->sanity; ?></td>
									<td><?php echo $player->fighting; ?></td>
									<td><?php echo $player->social; ?></td>
									<td><?php echo $player->survival; ?></td>
									<td><?php echo ($player->health + $player->sanity + $player->fighting + $player->social + $player->survival); ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</p>
			</div>
			<?php } ?>
			
		</div>

	</div><!-- /content -->

</div><!-- /page -->
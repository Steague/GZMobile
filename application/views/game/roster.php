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
				<th><?php echo $player->playername; ?><?php echo ($game->is_player() ? " (You) [Leave game]" : ""); ?></th>
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
<div data-role="page" id="login" data-theme="a" data-dom-cache="false">

	<div data-role="header" data-position="fixed">
		<?php echo HTML::anchor('/', 'Home', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-arrow-l"), null, false); ?>
		<h1>Active Games: (<?php echo count($games); ?>)</h1>
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content">
	
		<ul data-role="listview">

			<?php foreach ($games as $game): ?>
				<li><?php echo HTML::anchor("/game/view/".$game->id, $game->title."(Game ID: ".Game::get_short_id($game->id).")", null, null, false); ?></li>
			<?php endforeach; ?>
			
		</ul>

	</div><!-- /content -->

</div><!-- /page -->
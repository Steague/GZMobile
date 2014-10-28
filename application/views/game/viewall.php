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
				<?php
				echo (string) View::factory('game/roster')
					->bind('message', $message)
					->bind('errors', $errors)
					->bind('game', $game);
				?>
			</div>
			<?php } ?>
			
		</div>

	</div><!-- /content -->

</div><!-- /page -->
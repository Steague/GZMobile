<div data-role="page" id="info" data-theme="a">

	<div data-role="header">
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
		<h1>Generation Z</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<?php if ($message) : ?>
			<h3 class="message">
				<?php echo $message; ?>
			</h3>
		<?php endif; ?>

		<h2>Info for  user "<?php echo $user->username; ?>"</h2>

		<ul>
			<li>Email: <?php echo $user->email; ?></li>
			<li>Number of logins: <?php echo $user->logins; ?></li>
			<li>Last Login: <?php echo Date::fuzzy_span($user->last_login); ?></li>
		</ul>

	</div><!-- /content -->

	<div data-role="footer">
		<div data-role="navbar">
			<ul>
				<li><a href="/game/create" data-icon="carat-r">Create Game</a></li>
				<li><a href="#" data-icon="plus">Join Game</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->

</div><!-- /page -->

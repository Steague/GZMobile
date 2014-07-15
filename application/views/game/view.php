<div data-role="page" id="login" data-theme="a">

	<div data-role="header">
		<h1>The Game</h1>
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<?php if ($id) : ?>
			<h3 class="message">
				<?php echo $id; ?>
			</h3>
		<?php endif; ?>

		<?php
			$c = base_convert(2176782335, 10, 36);
			echo $c;
			echo "<br />";
			echo base_convert($c, 36, 10);
		?>

	</div><!-- /content -->

</div><!-- /page -->
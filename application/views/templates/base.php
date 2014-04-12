<?php defined('SYSPATH') OR die('No direct access allowed.'); ?><!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title; ?></title>

		<?php

		foreach ($links as $link):
			echo HTML::link($link['href'], $link['rel'], $link['type'], FALSE);
		endforeach;

		foreach ($stylesheets as $stylesheet):
			echo (isset($stylesheet['ie_only'])) ? "<!--[if IE]>\n\t\t" : '';
			echo HTML::style($stylesheet['href'], array('media' => $stylesheet['media']), FALSE);
			echo (isset($stylesheet['ie_only'])) ? "<![endif]-->\n\t\t" : '';
		endforeach;

		foreach ($javascripts as $javascript):
			echo HTML::script($javascript, NULL, FALSE)."\t\t";
		endforeach;
		?>

		<script type="text/javascript">

			<?php echo $js_custom; ?>

		</script>

	</head>

	<body>

		<?php echo $layout; ?>

	</body>

</html>

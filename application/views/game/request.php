<div data-role="page" id="login" data-theme="a">

	<div data-role="panel" data-theme="b" data-position-fixed="true" data-display="overlay" id="help_panel">
        <div class="ui-panel-inner">
            <div id="help_panel_content"></div>

            <?php echo HTML::anchor('#', 'Close', array("data-rel"=>"close", "class"=>"close-panel ui-btn ui-icon-arrow-l ui-btn-icon-notext ui-corner-all ui-btn-inline"), null, false); ?>
        </div>
    </div><!-- /panel -->

	<div data-role="header" data-position="fixed">
		<?php echo HTML::anchor('/', 'Home', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-arrow-l"), null, false); ?>
		<h1>Join Game Request</h1>
		<?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
	</div><!-- /header -->

	<div role="main" class="ui-content" id="gameRequestPage">

		<?php if ($message) : ?>
            <h3 class="message">
                <?php echo $message; ?>
            </h3>
        <?php endif; ?>

        <?php $help_link = HTML::anchor('#help_panel', 'No text', array("data-title"=>"GameID", 'class'=>'ui-btn ui-icon-info ui-btn-icon-notext ui-corner-all ui-btn-inline'), null, false); ?>

        <?php echo Form::open('/game/request', array("id"=>"joinRequestForm")); ?>
            <div class="ui-field-contain">
                <?php echo Form::label('game', 'Game ID'.$help_link, array("data-title"=>"game")); ?>
                <?php echo Form::input('game', HTML::chars(Arr::get($_POST, 'game')), array("id"=>"game", "placeholder"=>"Game ID")); ?>
                <?php echo Form::label('game', Arr::get($errors, 'game'), array('class'=>"error")); ?>
            </div>
            
            <?php echo Form::submit('request', 'Request to Join Game'); ?>
        <?php echo Form::close(); ?>

    </div><!-- /content -->

    <div data-role="footer" data-position="fixed">
        <h4>Generation Z</h4>
    </div>

</div><!-- /page -->

<div data-role="page" id="requestSuccess">
	<div data-role="header">
		<h2>Dialog</h2>
	</div>
	<div role="main" class="ui-content">
		<p>I am a dialog</p>
	</div>
</div>
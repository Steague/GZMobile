<div data-role="page" id="login" data-theme="a">

    <div data-role="panel" data-theme="b" data-position-fixed="true" data-display="overlay" id="help_panel">
        <div class="ui-panel-inner">
            <div id="help_panel_content"></div>

            <?php echo HTML::anchor('#', 'Close', array("data-rel"=>"close", "class"=>"close-panel ui-btn ui-icon-arrow-l ui-btn-icon-notext ui-corner-all ui-btn-inline"), null, false); ?>
        </div>
    </div><!-- /panel -->

    <div data-role="header" data-position="fixed">
        <?php echo HTML::anchor('/game/view/'.$game->id, 'Return', array("class"=>"ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-arrow-l"), null, false); ?>
        <h1>Join Game: <?php echo $game->title; ?></h1>
        <?php echo HTML::anchor('/user/logout', 'Logout', array("class"=>"ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-power"), null, false); ?>
    </div><!-- /header -->

    <div role="main" class="ui-content">

        <?php if ($message) : ?>
            <h3 class="message">
                <?php echo $message; ?>
            </h3>
        <?php endif; ?>

        <?php $help_link = HTML::anchor('#help_panel', 'No text', array("data-title"=>"Health", 'class'=>'ui-btn ui-icon-info ui-btn-icon-notext ui-corner-all ui-btn-inline'), null, false); ?>

        <?php echo Form::open('/player/register/'.$game->id); ?>
            <div class="ui-field-contain">
                <?php echo Form::label('name', 'Name'.$help_link, array("data-title"=>"Name")); ?>
                <?php echo Form::input('name', HTML::chars(Arr::get($_POST, 'name')), array("id"=>"name", "placeholder"=>"Name")); ?>
                <?php echo Form::label('name', Arr::get($errors, 'name'), array('class'=>"error")); ?>
            </div>
<!--             <div class="ui-field-contain">
                <?php echo Form::label('archetype', 'Archetype'.$help_link, array("data-title"=>"Archtype")); ?>
                <?php echo Form::input('archetype', HTML::chars(Arr::get($_POST, 'archetype')), array("id"=>"archetype", "placeholder"=>"Archetype")); ?>
                <?php echo Form::label('archetype', Arr::get($errors, 'archetype'), array('class'=>"error")); ?>
            </div> -->
            <?php echo Form::label('points_remaining', 'Starting Points Remaining'); ?>
            <?php echo Form::input('points_remaining', HTML::chars(Arr::get($_POST, 'points_remaining', $game->starting_points)), array("id"=>"points_remaining", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>$game->starting_points, "disabled"=>"disabled")); ?>
            <div class="ui-field-contain">
                <?php echo Form::label('health_slider', 'Health'.$help_link, array("data-title"=>"Health")); ?>
                <?php echo Form::input('health', HTML::chars(Arr::get($_POST, 'health', 1)), array("id"=>"health_slider", "class"=>"new_player_slider", "type"=>"range", "data-highlight"=>"true", "min"=>1, "max"=>5)); ?>
                <?php echo Form::label('health_slider', Arr::get($errors, 'health'), array('class'=>"error")); ?>
            </div>
            <div class="ui-field-contain">
                <?php echo Form::label('sanity_slider', 'Sanity'.$help_link, array("data-title"=>"Sanity")); ?>
                <?php echo Form::input('sanity', HTML::chars(Arr::get($_POST, 'sanity', 1)), array("id"=>"sanity_slider", "class"=>"new_player_slider", "type"=>"range", "data-highlight"=>"true", "min"=>1, "max"=>5)); ?>
                <?php echo Form::label('sanity_slider', Arr::get($errors, 'sanity'), array('class'=>"error")); ?>
            </div>
            <div class="ui-field-contain">
                <?php echo Form::label('fighting_slider', 'Fighting'.$help_link, array("data-title"=>"Fighting")); ?>
                <?php echo Form::input('fighting', HTML::chars(Arr::get($_POST, 'fighting', 0)), array("id"=>"fighting_slider", "class"=>"new_player_slider", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>5)); ?>
                <?php echo Form::label('fighting_slider', Arr::get($errors, 'fighting'), array('class'=>"error")); ?>
            </div>
            <div class="ui-field-contain">
                <?php echo Form::label('social_slider', 'Social'.$help_link, array("data-title"=>"Social")); ?>
                <?php echo Form::input('social', HTML::chars(Arr::get($_POST, 'social', 0)), array("id"=>"social_slider", "class"=>"new_player_slider", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>5)); ?>
                <?php echo Form::label('social_slider', Arr::get($errors, 'social'), array('class'=>"error")); ?>
            </div>
            <div class="ui-field-contain">
                <?php echo Form::label('survival_slider', 'Survival'.$help_link); ?>
                <?php echo Form::input('survival', HTML::chars(Arr::get($_POST, 'survival', 0)), array("id"=>"survival_slider", "class"=>"new_player_slider", "type"=>"range", "data-highlight"=>"true", "min"=>0, "max"=>5)); ?>
                <?php echo Form::label('survival_slider', Arr::get($errors, 'survival'), array('class'=>"error")); ?>
            </div>
            
            <?php echo Form::submit('create', 'Create Player'); ?>
        <?php echo Form::close(); ?>

    </div><!-- /content -->

    <div data-role="footer" data-position="fixed">
        <h4>Generation Z</h4>
    </div>

</div><!-- /page -->
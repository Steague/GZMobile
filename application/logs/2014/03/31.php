<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-31 01:03:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-31 01:03:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 03:36:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH\classes\Controller\Game.php [ 73 ] in D:\Projects\generationzgame.com\application\classes\Controller\Game.php:73
2014-03-31 03:36:45 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\Game.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Projects\gen...', 73, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Game->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\Game.php:73
2014-03-31 03:37:23 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Game.php [ 70 ] in D:\Projects\generationzgame.com\application\classes\Controller\Game.php:70
2014-03-31 03:37:23 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\Game.php(70): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\Projects\gen...', 70, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Game->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\Game.php:70
2014-03-31 05:16:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_players' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-31 05:16:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 05:17:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_players' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-31 05:17:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 05:17:32 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':id, game.gm_id AS game:gm_id, game.name AS game:name, game.started AS game:star' at line 1 [ SELECT game.id AS game:id, game.gm_id AS game:gm_id, game.name AS game:name, game.started AS game:started, player.id AS id, player.game_id AS game_id, player.player_id AS player_id, player.name AS name, player.health AS health, player.sanity AS sanity, player.fighting AS fighting, player.social AS social, player.survival AS survival, player.active AS active, player.dead AS dead, player.bitten AS bitten FROM players AS player LEFT JOIN games AS game ON (game.id = player.game_id) ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\Projects\generationzgame.com\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 05:17:32 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT game.id ...', 'Model_Player', Array)
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\Projects\generationzgame.com\application\classes\Controller\Game.php(73): Kohana_ORM->find_all()
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Game->action_view()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#10 {main} in D:\Projects\generationzgame.com\modules\database\classes\Kohana\Database\Query.php:251
2014-03-31 05:58:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\Game.php [ 76 ] in file:line
2014-03-31 05:58:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-31 05:58:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: players ~ APPPATH\classes\Controller\Game.php [ 79 ] in D:\Projects\generationzgame.com\application\classes\Controller\Game.php:79
2014-03-31 05:58:53 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\Game.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Projects\gen...', 79, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Game->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\Game.php:79
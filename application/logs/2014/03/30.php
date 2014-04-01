<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-30 23:20:30 --- CRITICAL: View_Exception [ 0 ]: The requested view game/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-30 23:20:30 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('game/create')
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('game/create', NULL)
#2 D:\Projects\generationzgame.com\application\classes\Controller\Game.php(16): Kohana_View::factory('game/create')
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Game->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
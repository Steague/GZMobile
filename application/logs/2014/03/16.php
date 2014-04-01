<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-16 04:25:03 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 04:25:03 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\Projects\generationzgame.com\application\classes\Controller\Main.php(15): Kohana_ORM::factory('user')
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#12 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 04:28:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\auth.php [ 8 ] in file:line
2014-03-16 04:28:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 04:28:34 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 04:28:34 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\Projects\generationzgame.com\application\classes\Controller\Main.php(25): Kohana_ORM::factory('role')
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#12 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 04:29:24 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1302
2014-03-16 04:29:24 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\Projects\generationzgame.com\application\classes\Controller\Main.php(22): Kohana_ORM->save()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1302
2014-03-16 04:29:39 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1302
2014-03-16 04:29:39 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\Projects\generationzgame.com\application\classes\Controller\Main.php(22): Kohana_ORM->save()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1302
2014-03-16 04:43:02 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\Main.php [ 31 ] in file:line
2014-03-16 04:43:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 04:45:03 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1302
2014-03-16 04:45:03 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\Projects\generationzgame.com\application\classes\Controller\User.php(20): Kohana_ORM->save()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1302
2014-03-16 04:48:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\User.php [ 15 ] in D:\Projects\generationzgame.com\application\classes\Controller\User.php:15
2014-03-16 04:48:16 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\User.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Projects\gen...', 15, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\User.php:15
2014-03-16 05:17:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\User.php [ 15 ] in D:\Projects\generationzgame.com\application\classes\Controller\User.php:15
2014-03-16 05:17:38 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\User.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Projects\gen...', 15, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\User.php:15
2014-03-16 06:40:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\User.php [ 15 ] in D:\Projects\generationzgame.com\application\classes\Controller\User.php:15
2014-03-16 06:40:10 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\User.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Projects\gen...', 15, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\User.php:15
2014-03-16 06:43:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\User.php [ 15 ] in D:\Projects\generationzgame.com\application\classes\Controller\User.php:15
2014-03-16 06:43:17 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\User.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Projects\gen...', 15, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\User.php:15
2014-03-16 07:08:21 --- CRITICAL: View_Exception [ 0 ]: The requested view user/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-16 07:08:21 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/register')
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/register', NULL)
#2 D:\Projects\generationzgame.com\application\classes\Controller\User.php(33): Kohana_View::factory('user/register')
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-16 07:08:33 --- CRITICAL: View_Exception [ 0 ]: The requested view user/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-16 07:08:33 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/register')
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/register', NULL)
#2 D:\Projects\generationzgame.com\application\classes\Controller\User.php(33): Kohana_View::factory('user/register')
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-16 07:15:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\layouts\empty.php [ 32 ] in D:\Projects\generationzgame.com\application\views\layouts\empty.php:32
2014-03-16 07:15:00 --- DEBUG: #0 D:\Projects\generationzgame.com\application\views\layouts\empty.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Projects\gen...', 32, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#2 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#3 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\Projects\generationzgame.com\application\views\templates\base.php(38): Kohana_View->__toString()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#6 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#14 {main} in D:\Projects\generationzgame.com\application\views\layouts\empty.php:32
2014-03-16 07:25:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\layouts\empty.php [ 9 ] in D:\Projects\generationzgame.com\application\views\layouts\empty.php:9
2014-03-16 07:25:45 --- DEBUG: #0 D:\Projects\generationzgame.com\application\views\layouts\empty.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Projects\gen...', 9, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#2 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#3 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\Projects\generationzgame.com\application\views\templates\base.php(38): Kohana_View->__toString()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#6 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#14 {main} in D:\Projects\generationzgame.com\application\views\layouts\empty.php:9
2014-03-16 07:26:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Template\Base.php [ 32 ] in file:line
2014-03-16 07:26:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 07:28:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\layouts\empty.php [ 20 ] in D:\Projects\generationzgame.com\application\views\layouts\empty.php:20
2014-03-16 07:28:18 --- DEBUG: #0 D:\Projects\generationzgame.com\application\views\layouts\empty.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Projects\gen...', 20, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#2 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#3 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\Projects\generationzgame.com\application\views\templates\base.php(38): Kohana_View->__toString()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#6 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#14 {main} in D:\Projects\generationzgame.com\application\views\layouts\empty.php:20
2014-03-16 08:17:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 42 ] in file:line
2014-03-16 08:17:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 08:20:56 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: / ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in D:\Projects\generationzgame.com\application\classes\Controller\User.php:42
2014-03-16 08:20:56 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\User.php(42): Kohana_Route::get('/')
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\User.php:42
2014-03-16 08:33:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_once() on a non-object ~ APPPATH\classes\Controller\Template\Base.php [ 35 ] in file:line
2014-03-16 08:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 09:32:51 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 09:32:51 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('user_tokens')
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\Projects\generationzgame.com\modules\orm\classes\Model\Auth\User\Token.php(29): Kohana_ORM->__construct(NULL)
#5 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(46): Model_Auth_User_Token->__construct(NULL)
#6 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\Auth\ORM.php(102): Kohana_ORM::factory('User_Token')
#7 D:\Projects\generationzgame.com\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('VooDooMoN', 'F3ia49VD', true)
#8 D:\Projects\generationzgame.com\application\classes\Controller\User.php(16): Kohana_Auth->login('VooDooMoN', 'F3ia49VD', true)
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#15 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 09:34:07 --- CRITICAL: View_Exception [ 0 ]: The requested view user/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-16 09:34:07 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/login')
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/login', NULL)
#2 D:\Projects\generationzgame.com\application\classes\Controller\User.php(12): Kohana_View::factory('user/login')
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-16 09:35:06 --- CRITICAL: View_Exception [ 0 ]: The requested view user/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-16 09:35:06 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/login')
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/login', NULL)
#2 D:\Projects\generationzgame.com\application\classes\Controller\User.php(12): Kohana_View::factory('user/login')
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#9 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\View.php:137
2014-03-16 09:36:44 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 09:36:44 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('user_tokens')
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\Projects\generationzgame.com\modules\orm\classes\Model\Auth\User\Token.php(29): Kohana_ORM->__construct(NULL)
#5 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(46): Model_Auth_User_Token->__construct(NULL)
#6 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\Auth\ORM.php(102): Kohana_ORM::factory('User_Token')
#7 D:\Projects\generationzgame.com\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('VooDooMoN', 'F3ia49VD', true)
#8 D:\Projects\generationzgame.com\application\classes\Controller\User.php(19): Kohana_Auth->login('VooDooMoN', 'F3ia49VD', true)
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#15 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 09:37:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\login.php [ 19 ] in D:\Projects\generationzgame.com\application\views\user\login.php:19
2014-03-16 09:37:30 --- DEBUG: #0 D:\Projects\generationzgame.com\application\views\user\login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Projects\gen...', 19, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#2 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#3 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\Projects\generationzgame.com\application\views\templates\base.php(38): Kohana_View->__toString()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#6 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#14 {main} in D:\Projects\generationzgame.com\application\views\user\login.php:19
2014-03-16 09:37:58 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 09:37:58 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('user_tokens')
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\Projects\generationzgame.com\modules\orm\classes\Model\Auth\User\Token.php(29): Kohana_ORM->__construct(NULL)
#5 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(46): Model_Auth_User_Token->__construct(NULL)
#6 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\Auth\ORM.php(102): Kohana_ORM::factory('User_Token')
#7 D:\Projects\generationzgame.com\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('VooDooMoN', 'F3ia49VD', true)
#8 D:\Projects\generationzgame.com\application\classes\Controller\User.php(19): Kohana_Auth->login('VooDooMoN', 'F3ia49VD', true)
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#15 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 09:43:31 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 79 ] in file:line
2014-03-16 09:43:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 09:46:07 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 79 ] in file:line
2014-03-16 09:46:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 09:47:27 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 79 ] in file:line
2014-03-16 09:47:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 09:48:28 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 79 ] in file:line
2014-03-16 09:48:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 09:53:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\user\login.php [ 19 ] in D:\Projects\generationzgame.com\application\views\user\login.php:19
2014-03-16 09:53:36 --- DEBUG: #0 D:\Projects\generationzgame.com\application\views\user\login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Projects\gen...', 19, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#2 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#3 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\Projects\generationzgame.com\application\views\templates\base.php(38): Kohana_View->__toString()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#6 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#14 {main} in D:\Projects\generationzgame.com\application\views\user\login.php:19
2014-03-16 09:54:34 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 79 ] in file:line
2014-03-16 09:54:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 09:56:52 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 47 ] in file:line
2014-03-16 09:56:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 09:58:23 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Projects\generationzgame.com\system\classes\Kohana\Session.php:125
2014-03-16 09:58:23 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Projects\generationzgame.com\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\Projects\generationzgame.com\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\Projects\generationzgame.com\application\classes\Controller\Template\Base.php(35): Kohana_Session::instance()
#4 D:\Projects\generationzgame.com\application\classes\Controller\User.php(7): Controller_Template_Base->before()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(69): Controller_User->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#11 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\Session.php:125
2014-03-16 09:58:44 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Projects\generationzgame.com\system\classes\Kohana\Session.php:125
2014-03-16 09:58:44 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Projects\generationzgame.com\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\Projects\generationzgame.com\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\Projects\generationzgame.com\application\classes\Controller\Template\Base.php(35): Kohana_Session::instance()
#4 D:\Projects\generationzgame.com\application\classes\Controller\User.php(7): Controller_Template_Base->before()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(69): Controller_User->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#11 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\Session.php:125
2014-03-16 10:01:55 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Projects\generationzgame.com\system\classes\Kohana\Session.php:125
2014-03-16 10:01:55 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Projects\generationzgame.com\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\Projects\generationzgame.com\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\Projects\generationzgame.com\application\classes\Controller\Template\Base.php(35): Kohana_Session::instance()
#4 D:\Projects\generationzgame.com\application\classes\Controller\Main.php(7): Controller_Template_Base->before()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#11 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\Session.php:125
2014-03-16 10:02:36 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\Projects\generationzgame.com\system\classes\Kohana\Session.php:125
2014-03-16 10:02:36 --- DEBUG: #0 D:\Projects\generationzgame.com\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\Projects\generationzgame.com\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\Projects\generationzgame.com\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\Projects\generationzgame.com\application\classes\Controller\Template\Base.php(35): Kohana_Session::instance()
#4 D:\Projects\generationzgame.com\application\classes\Controller\Main.php(7): Controller_Template_Base->before()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#11 {main} in D:\Projects\generationzgame.com\system\classes\Kohana\Session.php:125
2014-03-16 10:05:55 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 10:05:55 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('user_tokens')
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\Projects\generationzgame.com\modules\orm\classes\Model\Auth\User\Token.php(29): Kohana_ORM->__construct(NULL)
#5 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(46): Model_Auth_User_Token->__construct(NULL)
#6 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\Auth\ORM.php(102): Kohana_ORM::factory('User_Token')
#7 D:\Projects\generationzgame.com\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('VooDooMoN', 'F3ia49VD', true)
#8 D:\Projects\generationzgame.com\application\classes\Controller\User.php(20): Kohana_Auth->login('VooDooMoN', 'F3ia49VD', true)
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#15 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 10:06:10 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 10:06:10 --- DEBUG: #0 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('user_tokens')
#1 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\Projects\generationzgame.com\modules\orm\classes\Model\Auth\User\Token.php(29): Kohana_ORM->__construct(NULL)
#5 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php(46): Model_Auth_User_Token->__construct(NULL)
#6 D:\Projects\generationzgame.com\modules\orm\classes\Kohana\Auth\ORM.php(102): Kohana_ORM::factory('User_Token')
#7 D:\Projects\generationzgame.com\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('VooDooMoN', 'F3ia49VD', true)
#8 D:\Projects\generationzgame.com\application\classes\Controller\User.php(20): Kohana_Auth->login('VooDooMoN', 'F3ia49VD', true)
#9 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#15 {main} in D:\Projects\generationzgame.com\modules\orm\classes\Kohana\ORM.php:1668
2014-03-16 10:07:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 25 ] in file:line
2014-03-16 10:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 10:18:51 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: user/index ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in D:\Projects\generationzgame.com\application\classes\Controller\User.php:43
2014-03-16 10:18:51 --- DEBUG: #0 D:\Projects\generationzgame.com\application\classes\Controller\User.php(43): Kohana_Route::get('user/index')
#1 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#7 {main} in D:\Projects\generationzgame.com\application\classes\Controller\User.php:43
2014-03-16 10:21:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\user\info.php [ 9 ] in D:\Projects\generationzgame.com\application\views\user\info.php:9
2014-03-16 10:21:17 --- DEBUG: #0 D:\Projects\generationzgame.com\application\views\user\info.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Projects\gen...', 9, Array)
#1 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#2 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#3 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\Projects\generationzgame.com\application\views\templates\base.php(38): Kohana_View->__toString()
#5 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(61): include('D:\Projects\gen...')
#6 D:\Projects\generationzgame.com\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Projects\gen...', Array)
#7 D:\Projects\generationzgame.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\Projects\generationzgame.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 D:\Projects\generationzgame.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Projects\generationzgame.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\Projects\generationzgame.com\index.php(118): Kohana_Request->execute()
#14 {main} in D:\Projects\generationzgame.com\application\views\user\info.php:9
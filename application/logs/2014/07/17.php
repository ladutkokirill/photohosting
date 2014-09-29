<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-17 10:08:43 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/public/picture/ixRQHGI9Iew.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 49 ] in file:line
2014-07-17 10:08:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\work\test\ko...', 49, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(49): move_uploaded_file('C:\Windows\Temp...', '/public/picture...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-07-17 11:16:49 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/picture/ixRQHGI9Iew.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 50 ] in file:line
2014-07-17 11:16:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\work\test\ko...', 50, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(50): move_uploaded_file('C:\Windows\Temp...', '/picture/ixRQHG...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-07-17 11:18:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 65 ] in file:line
2014-07-17 11:18:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-17 11:19:31 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/picture/ixRQHGI9Iew.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 50 ] in file:line
2014-07-17 11:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\work\test\ko...', 50, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(50): move_uploaded_file('C:\Windows\Temp...', '/picture/ixRQHG...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-07-17 11:26:15 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/picture/BMW-74.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 50 ] in file:line
2014-07-17 11:26:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\work\test\ko...', 50, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(50): move_uploaded_file('C:\Windows\Temp...', '/picture/BMW-74...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-07-17 11:43:39 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` (`way`) VALUES ('') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-17 11:43:39 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\classes\Controller\picture.php(55): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-17 12:55:27 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:55:27 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:56:15 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:56:15 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:56:15 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:56:15 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:56:16 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:56:16 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:56:16 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:56:16 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:57:10 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:57:10 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:57:12 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:57:12 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:57:18 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:57:18 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:57:35 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-17 12:57:35 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 D:\work\test\kohana\application\classes\Controller\files.php(32): Kohana_View::factory('files')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Files->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137
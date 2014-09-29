<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-15 11:05:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 11:05:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:06:02 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-15 11:06:02 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('image', '1111')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(90): Kohana_ORM->__set('image', '1111')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_putimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-15 11:09:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:09:53 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:17 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:18 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:18 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:18 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:10:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:12:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:12:05 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:12:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:12:41 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:13:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 11:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:18:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 81 ] in file:line
2014-07-15 11:18:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:20:48 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:20:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:21:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:21:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:21:30 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:21:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:21:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:23:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:23:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:24:03 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:24:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:24:19 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-07-15 11:24:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\work\test\ko...', 33, Array)
#1 D:\work\test\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #5, 'picturename')
#2 D:\work\test\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('picturename')
#3 D:\work\test\kohana\application\views\picture\look.php(7): Kohana_Database_Result->offsetGet('picturename')
#4 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#6 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#8 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#9 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#10 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#17 {main} in file:line
2014-07-15 11:24:41 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:24:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:26:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:26:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:28:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 11:28:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:28:36 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:28:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:29:49 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-07-15 11:29:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\work\test\ko...', 33, Array)
#1 D:\work\test\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #5, 'picturename')
#2 D:\work\test\kohana\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('picturename')
#3 D:\work\test\kohana\application\views\picture\look.php(7): Kohana_Database_Result->offsetGet('picturename')
#4 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#6 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#8 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#9 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#10 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#17 {main} in file:line
2014-07-15 11:38:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 75 ] in file:line
2014-07-15 11:38:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:38:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:38:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:39:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:39:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:39:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:39:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:39:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:41:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:41:12 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:23 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:23 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:42:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:43:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 11:43:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:43:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:43:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:44:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:44:13 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-15 11:44:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:44:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:46:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:46:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:52:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:52:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 11:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:52:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:52:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 11:52:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:53:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 11:53:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:53:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:53:28 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-07-15 11:53:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_allpp() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 11:53:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:54:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:54:59 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:54:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:55:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 7 ] in D:\work\test\kohana\application\views\picture\look.php:7
2014-07-15 11:55:19 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 7, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:7
2014-07-15 11:56:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\photo.php [ 24 ] in file:line
2014-07-15 11:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:56:20 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:56:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:56:55 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 7 ] in file:line
2014-07-15 11:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:02:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:02:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:02:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:02:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:04:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:04:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:04:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:04:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:04:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:10:29 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-15 12:10:29 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#8 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#11 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-15 12:11:01 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-15 12:11:01 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#8 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#11 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-15 12:12:47 --- CRITICAL: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:339
2014-07-15 12:12:47 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(339): Kohana_View->set_filename(true)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_View->render(true)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:339
2014-07-15 12:27:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:27:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:28:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:28:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:30:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:30:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:30:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:30:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:32:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:32:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:32:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:32:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:33:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:33:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:33:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:33:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:33:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:33:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:33:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:33:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:38:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:38:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:38:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:38:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:38:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:38:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:38:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:38:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:38:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:38:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:38:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:38:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:39:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:39:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:42:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:42:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:42:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:42:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:42:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:42:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:42:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 12:42:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:47:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 12:47:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:48:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\views\picture\look.php [ 60 ] in file:line
2014-07-15 12:48:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:48:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\views\picture\look.php [ 60 ] in file:line
2014-07-15 12:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:48:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\views\picture\look.php [ 60 ] in file:line
2014-07-15 12:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:48:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\views\picture\look.php [ 60 ] in file:line
2014-07-15 12:48:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:49:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:49:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:49:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\views\picture\look.php [ 60 ] in file:line
2014-07-15 12:49:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:51:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::bind() ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-07-15 12:51:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:52:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:52:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:53:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:53:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:53:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:53:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:53:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:54:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:54:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:54:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:55:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:55:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:57:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:57:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:57:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 62 ] in file:line
2014-07-15 12:57:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:59:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-07-15 12:59:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:59:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-07-15 12:59:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:59:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-07-15 12:59:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:59:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-07-15 12:59:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:59:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-07-15 12:59:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:02:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 13:02:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:02:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 13:02:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:02:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 13:02:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:02:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 13:02:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:02:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 13:02:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:02:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 13:02:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:02:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 13:02:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:02:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-07-15 13:02:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:41:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-07-15 14:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:41:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\views\picture\look.php [ 60 ] in file:line
2014-07-15 14:41:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:48:26 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-15 14:48:26 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(35): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-15 14:48:56 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\views\picture\look.php [ 6 ] in file:line
2014-07-15 14:48:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:54:15 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-15 14:54:15 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('image', '1111')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(97): Kohana_ORM->__set('image', '1111')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_putimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
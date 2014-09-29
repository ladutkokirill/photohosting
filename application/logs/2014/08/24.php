<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-24 20:35:44 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-24 20:35:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 20:39:59 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-24 20:39:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 20:45:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-08-24 20:45:18 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-08-24 20:45:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-08-24 20:45:34 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-08-24 20:45:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function reArrayFiles() ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-08-24 20:45:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-24 20:56:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"', expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-08-24 20:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-24 21:03:30 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-24 21:03:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 21:07:12 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-08-24 21:07:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(60): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 21:10:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\views\picture\top.php [ 4 ] in D:\work\test\kohana\application\views\picture\top.php:4
2014-08-24 21:10:31 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\top.php:4
2014-08-24 21:10:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\views\picture\top.php [ 4 ] in D:\work\test\kohana\application\views\picture\top.php:4
2014-08-24 21:10:58 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\top.php:4
2014-08-24 21:14:05 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 60 ] in file:line
2014-08-24 21:14:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(60): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 21:14:19 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\picture.php [ 60 ] in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-08-24 21:14:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(60): Kohana_Core::error_handler(8, 'Array to string...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:60
2014-08-24 21:16:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\picture.php [ 81 ] in file:line
2014-08-24 21:16:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-24 21:17:33 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-24 21:17:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 21:17:53 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-24 21:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 21:22:22 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-24 21:22:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 21:22:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 98 ] in file:line
2014-08-24 21:22:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-24 21:23:06 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-24 21:23:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-24 21:23:54 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-24 21:23:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-27 11:40:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photos ~ APPPATH\classes\Controller\picture.php [ 133 ] in D:\work\test\kohana\application\classes\Controller\picture.php:133
2014-08-27 11:40:38 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(133): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 133, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:133
2014-08-27 11:42:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 133 ] in D:\work\test\kohana\application\classes\Controller\picture.php:133
2014-08-27 11:42:14 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(133): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 133, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:133
2014-08-27 12:34:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\picture\looking.php [ 1 ] in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 12:34:53 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\looking.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 1, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 12:35:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\picture\looking.php [ 1 ] in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 12:35:01 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\looking.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 1, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 13:05:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\picture\looking.php [ 1 ] in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 13:05:20 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\looking.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 1, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 13:32:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\picture\looking.php [ 1 ] in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 13:32:49 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\looking.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 1, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 14:48:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\picture\looking.php [ 1 ] in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 14:48:51 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\looking.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 1, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 14:51:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\picture\looking.php [ 1 ] in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 14:51:35 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\looking.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 1, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 14:52:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\picture\looking.php [ 1 ] in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 14:52:06 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\looking.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 1, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 14:53:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\views\picture\looking.php [ 1 ] in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 14:53:32 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\looking.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 1, Array)
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
#14 {main} in D:\work\test\kohana\application\views\picture\looking.php:1
2014-08-27 15:29:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\picture.php [ 42 ] in file:line
2014-08-27 15:29:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-27 15:29:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\picture.php [ 42 ] in file:line
2014-08-27 15:29:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-27 17:21:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\picture.php [ 42 ] in file:line
2014-08-27 17:21:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-27 17:21:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: rating ~ APPPATH\classes\Controller\picture.php [ 47 ] in D:\work\test\kohana\application\classes\Controller\picture.php:47
2014-08-27 17:21:53 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 47, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:47
2014-08-27 17:22:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: new_view ~ APPPATH\classes\Controller\picture.php [ 47 ] in D:\work\test\kohana\application\classes\Controller\picture.php:47
2014-08-27 17:22:18 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 47, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:47
2014-08-27 17:24:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: rating ~ APPPATH\classes\Controller\picture.php [ 47 ] in D:\work\test\kohana\application\classes\Controller\picture.php:47
2014-08-27 17:24:07 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 47, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:47
2014-08-27 17:24:41 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\picture.php [ 41 ] in file:line
2014-08-27 17:24:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-27 17:44:56 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\picture.php [ 41 ] in file:line
2014-08-27 17:44:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-27 18:18:14 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\picture.php [ 41 ] in file:line
2014-08-27 18:18:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-27 18:18:24 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\picture.php [ 41 ] in file:line
2014-08-27 18:18:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-27 18:18:27 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\picture.php [ 41 ] in file:line
2014-08-27 18:18:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
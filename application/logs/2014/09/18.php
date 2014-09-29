<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-18 12:00:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\classes\Controller\picture.php [ 160 ] in D:\work\test\kohana\application\classes\Controller\picture.php:160
2014-09-18 12:00:01 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 160, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:160
2014-09-18 12:00:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\picture.php [ 189 ] in file:line
2014-09-18 12:00:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 12:01:00 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-18 12:01:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 12:01:28 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-18 12:01:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 12:01:33 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-18 12:01:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 12:01:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 206 ] in file:line
2014-09-18 12:01:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 12:02:28 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-18 12:02:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 12:04:24 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-18 12:04:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 12:05:02 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-18 12:05:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 12:05:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 203 ] in file:line
2014-09-18 12:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 12:26:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:26:26 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:28:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:28:40 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:28:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:28:59 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:29:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:29:54 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:33:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:33:09 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:10 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:12 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:13 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:13 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:13 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:13 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:14 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:14 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:14 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:34:14 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:35:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:35:26 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:35:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: src ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:35:37 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:36:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:36:48 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:37:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 134 ] in D:\work\test\kohana\application\classes\Controller\picture.php:134
2014-09-18 12:37:15 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(134): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 134, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:134
2014-09-18 12:37:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 135 ] in D:\work\test\kohana\application\classes\Controller\picture.php:135
2014-09-18 12:37:53 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(135): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 135, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:135
2014-09-18 12:38:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Controller\picture.php [ 137 ] in D:\work\test\kohana\application\classes\Controller\picture.php:137
2014-09-18 12:38:11 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(137): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 137, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:137
2014-09-18 12:38:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:38:55 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:39:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dest ~ APPPATH\views\picture\loadkomp.php [ 53 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:39:50 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:53
2014-09-18 12:41:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\picture.php [ 220 ] in file:line
2014-09-18 12:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 12:41:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH\classes\Controller\picture.php [ 195 ] in D:\work\test\kohana\application\classes\Controller\picture.php:195
2014-09-18 12:41:32 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(195): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 195, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:195
2014-09-18 12:42:10 --- CRITICAL: ErrorException [ 2 ]: imagejpeg(): Filename cannot be empty ~ APPPATH\classes\Controller\picture.php [ 196 ] in file:line
2014-09-18 12:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagejpeg(): Fi...', 'D:\work\test\ko...', 196, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(196): imagejpeg(Resource id #9, '', 100)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 12:49:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 212 ] in file:line
2014-09-18 12:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 13:34:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH\classes\Controller\picture.php [ 176 ] in file:line
2014-09-18 13:34:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 13:34:36 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 163 ] in file:line
2014-09-18 13:34:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 163, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(163): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 13:34:49 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 163 ] in file:line
2014-09-18 13:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 163, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(163): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 13:47:18 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$453 ~ APPPATH\classes\Controller\picture.php [ 178 ] in D:\work\test\kohana\application\classes\Controller\picture.php:178
2014-09-18 13:47:18 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(178): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 178, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:178
2014-09-18 13:59:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$453 ~ APPPATH\classes\Controller\picture.php [ 178 ] in D:\work\test\kohana\application\classes\Controller\picture.php:178
2014-09-18 13:59:47 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(178): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 178, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:178
2014-09-18 13:59:52 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$453 ~ APPPATH\classes\Controller\picture.php [ 178 ] in D:\work\test\kohana\application\classes\Controller\picture.php:178
2014-09-18 13:59:52 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(178): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 178, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:178
2014-09-18 14:07:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\classes\Controller\picture.php [ 199 ] in D:\work\test\kohana\application\classes\Controller\picture.php:199
2014-09-18 14:07:54 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(199): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 199, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(159): Controller_Picture->resizeToWidth()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:199
2014-09-18 14:08:31 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$453 ~ APPPATH\classes\Controller\picture.php [ 178 ] in D:\work\test\kohana\application\classes\Controller\picture.php:178
2014-09-18 14:08:31 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(178): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 178, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:178
2014-09-18 14:16:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$photo' (T_VARIABLE) ~ APPPATH\classes\Controller\picture.php [ 183 ] in file:line
2014-09-18 14:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 14:17:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function D:\work\test\kohana\public\..//public/picture/24VKa3TOHZs.jpg() ~ APPPATH\classes\Controller\picture.php [ 177 ] in file:line
2014-09-18 14:17:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 14:17:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::way() ~ APPPATH\classes\Controller\picture.php [ 177 ] in file:line
2014-09-18 14:17:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 14:18:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::way() ~ APPPATH\classes\Controller\picture.php [ 177 ] in file:line
2014-09-18 14:18:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 14:18:29 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\picture.php [ 177 ] in file:line
2014-09-18 14:18:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 15:10:54 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 163 ] in file:line
2014-09-18 15:10:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 163, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(163): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 15:11:14 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 163 ] in file:line
2014-09-18 15:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 163, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(163): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 15:18:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function resizeToWidth() on a non-object ~ APPPATH\classes\Controller\picture.php [ 180 ] in file:line
2014-09-18 15:18:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 15:19:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function resizeToWidth() on a non-object ~ APPPATH\classes\Controller\picture.php [ 180 ] in file:line
2014-09-18 15:19:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 15:19:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: src ~ APPPATH\classes\Model\photo.php [ 42 ] in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:19:17 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 42, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(50): Model_Photo->getWidth()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(180): Model_Photo->resizeToWidth('150')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:19:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Picture::resizeToWidth() ~ APPPATH\classes\Controller\picture.php [ 180 ] in file:line
2014-09-18 15:19:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 15:20:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: src ~ APPPATH\classes\Model\photo.php [ 42 ] in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:20:00 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 42, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(50): Model_Photo->getWidth()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(180): Model_Photo->resizeToWidth('150')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:20:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: src ~ APPPATH\classes\Model\photo.php [ 42 ] in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:20:14 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 42, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(50): Model_Photo->getWidth()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(180): Model_Photo->resizeToWidth('150')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:23:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\classes\Model\photo.php [ 42 ] in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:23:02 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 42, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(53): Model_Photo->getWidth()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(180): Model_Photo->resizeToWidth('150')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:27:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: src ~ APPPATH\classes\Model\photo.php [ 43 ] in D:\work\test\kohana\application\classes\Model\photo.php:43
2014-09-18 15:27:17 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 43, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(52): Model_Photo->getWidth()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(180): Model_Photo->resizeToWidth('150')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:43
2014-09-18 15:50:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\classes\Model\photo.php [ 42 ] in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:50:09 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 42, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(53): Model_Photo->getWidth()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(180): Model_Photo->resizeToWidth('150')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:50:33 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Model\photo.php [ 42 ] in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:50:33 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(42): Kohana_Core::error_handler(8, 'Array to string...', 'D:\work\test\ko...', 42, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(53): Model_Photo->getWidth()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(180): Model_Photo->resizeToWidth('150')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:50:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\classes\Model\photo.php [ 42 ] in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:50:43 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 42, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(53): Model_Photo->getWidth()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(180): Model_Photo->resizeToWidth('150')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:42
2014-09-18 15:55:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\picture.php [ 179 ] in file:line
2014-09-18 15:55:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 15:56:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\picture.php [ 179 ] in file:line
2014-09-18 15:56:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 15:56:18 --- CRITICAL: Kohana_Exception [ 0 ]: The Resource id #9 property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-18 15:56:18 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Resource id #9')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(179): Kohana_ORM->__get('Resource id #9')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-18 16:06:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\picture.php [ 181 ] in file:line
2014-09-18 16:06:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 16:35:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\picture.php [ 182 ] in file:line
2014-09-18 16:35:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 16:35:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\picture.php [ 180 ] in file:line
2014-09-18 16:35:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 17:39:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 250 ] in file:line
2014-09-18 17:39:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 18:04:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: turn ~ APPPATH\classes\Controller\picture.php [ 184 ] in D:\work\test\kohana\application\classes\Controller\picture.php:184
2014-09-18 18:04:43 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(184): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 184, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:184
2014-09-18 18:05:47 --- CRITICAL: ErrorException [ 2 ]: imagejpeg(D:\work\test\kohana\public\..//public/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 186 ] in file:line
2014-09-18 18:05:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagejpeg(D:\wo...', 'D:\work\test\ko...', 186, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(186): imagejpeg(Resource id #12, 'D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-18 18:19:47 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant imagecopyresized - assumed 'imagecopyresized' ~ APPPATH\classes\Controller\picture.php [ 183 ] in D:\work\test\kohana\application\classes\Controller\picture.php:183
2014-09-18 18:19:47 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(183): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 183, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:183
2014-09-18 18:36:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Picture::save() ~ APPPATH\classes\Controller\picture.php [ 182 ] in file:line
2014-09-18 18:36:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
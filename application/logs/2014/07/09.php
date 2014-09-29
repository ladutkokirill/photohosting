<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-09 10:26:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: textfield ~ APPPATH\views\picture\top.php [ 85 ] in D:\work\test\kohana\application\views\picture\top.php:85
2014-07-09 10:26:16 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(85): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 85, Array)
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
#13 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\top.php:85
2014-07-09 10:26:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: textfield ~ APPPATH\views\picture\top.php [ 85 ] in D:\work\test\kohana\application\views\picture\top.php:85
2014-07-09 10:26:28 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(85): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 85, Array)
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
#13 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\top.php:85
2014-07-09 10:41:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 25 ] in file:line
2014-07-09 10:41:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 11:16:34 --- CRITICAL: ErrorException [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ APPPATH\views\picture\loadkomp.php [ 13 ] in file:line
2014-07-09 11:16:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_connect()...', 'D:\work\test\ko...', 13, Array)
#1 D:\work\test\kohana\application\views\picture\loadkomp.php(13): mysql_connect()
#2 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#3 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#4 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#6 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#7 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#8 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#12 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-07-09 11:25:08 --- CRITICAL: ErrorException [ 2 ]: include(bd.php): failed to open stream: No such file or directory ~ APPPATH\views\picture\loadkomp.php [ 15 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:15
2014-07-09 11:25:08 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(15): Kohana_Core::error_handler(2, 'include(bd.php)...', 'D:\work\test\ko...', 15, Array)
#1 D:\work\test\kohana\application\views\picture\loadkomp.php(15): include()
#2 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#3 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#4 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#6 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#7 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#8 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#12 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:15
2014-07-09 11:25:26 --- CRITICAL: ErrorException [ 2 ]: include(database.php): failed to open stream: No such file or directory ~ APPPATH\views\picture\loadkomp.php [ 15 ] in D:\work\test\kohana\application\views\picture\loadkomp.php:15
2014-07-09 11:25:26 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\loadkomp.php(15): Kohana_Core::error_handler(2, 'include(databas...', 'D:\work\test\ko...', 15, Array)
#1 D:\work\test\kohana\application\views\picture\loadkomp.php(15): include()
#2 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#3 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#4 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#6 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#7 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#8 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#12 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\application\views\picture\loadkomp.php:15
2014-07-09 11:35:39 --- CRITICAL: ErrorException [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ APPPATH\views\picture\loadkomp.php [ 13 ] in file:line
2014-07-09 11:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_connect()...', 'D:\work\test\ko...', 13, Array)
#1 D:\work\test\kohana\application\views\picture\loadkomp.php(13): mysql_connect()
#2 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#3 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#4 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#6 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#7 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#8 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#12 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-07-09 11:36:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$localhost' (T_VARIABLE), expecting ']' ~ APPPATH\views\picture\loadkomp.php [ 13 ] in file:line
2014-07-09 11:36:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 11:37:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$root' (T_VARIABLE), expecting ']' ~ APPPATH\views\picture\loadkomp.php [ 13 ] in file:line
2014-07-09 11:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 11:55:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 11:55:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 11:56:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\views\picture\look.php [ 10 ] in D:\work\test\kohana\application\views\picture\look.php:10
2014-07-09 11:56:13 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 10, Array)
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
#13 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:10
2014-07-09 11:56:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'src' (T_STRING), expecting ',' or ';' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 11:56:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 11:56:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'src' (T_STRING), expecting ',' or ';' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 11:56:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 11:58:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'src' (T_STRING), expecting ',' or ';' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 11:58:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 11:58:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'src' (T_STRING), expecting ',' or ';' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 11:58:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 11:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\views\picture\look.php [ 10 ] in D:\work\test\kohana\application\views\picture\look.php:10
2014-07-09 11:59:22 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 10, Array)
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
#13 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:10
2014-07-09 11:59:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 11:59:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:00:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '']; ?>' (T_ENCAPSED_AND_WHITESPACE), expecting ']' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:00:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:01:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\views\picture\look.php [ 10 ] in D:\work\test\kohana\application\views\picture\look.php:10
2014-07-09 12:01:21 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 10, Array)
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
#13 D:\work\test\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:10
2014-07-09 12:02:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'src' (T_STRING), expecting ',' or ';' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:03:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:03:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:03:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:03:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:03:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:03:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:03:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:03:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:09:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 12:10:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\picture\look.php [ 10 ] in file:line
2014-07-09 12:10:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-09 14:12:25 --- CRITICAL: Database_Exception [ 1146 ]: Table 'photohosting.articles' doesn't exist [ SELECT * FROM articles ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-09 14:12:25 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\work\test\kohana\application\classes\Model\article.php(16): Kohana_Database_Query->execute()
#2 D:\work\test\kohana\application\classes\Controller\news.php(21): Model_Article->get_all()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_News->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
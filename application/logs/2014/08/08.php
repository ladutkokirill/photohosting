<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-08 11:47:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\views\picture\top.php [ 4 ] in D:\work\test\kohana\application\views\picture\top.php:4
2014-08-08 11:47:23 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
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
2014-08-08 11:54:52 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(uploads/-9bRAvgAybM.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\static.php [ 44 ] in file:line
2014-08-08 11:54:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\work\test\ko...', 44, Array)
#1 D:\work\test\kohana\application\classes\Controller\static.php(44): move_uploaded_file('C:\Windows\Temp...', 'uploads/-9bRAvg...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Static->action_help()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-11 12:09:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 58 ] in D:\work\test\kohana\application\classes\Controller\picture.php:58
2014-08-11 12:09:11 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(58): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 58, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:58
2014-08-11 12:13:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 59 ] in D:\work\test\kohana\application\classes\Controller\picture.php:59
2014-08-11 12:13:14 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:59
2014-08-11 12:13:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photos[] ~ APPPATH\classes\Controller\picture.php [ 59 ] in D:\work\test\kohana\application\classes\Controller\picture.php:59
2014-08-11 12:13:37 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:59
2014-08-11 12:25:57 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-11 12:25:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-11 12:48:25 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-11 12:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-11 12:49:42 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-11 12:49:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-08-11 16:52:48 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-08-11 16:52:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'D:\work\test\ko...', 59, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(59): is_uploaded_file(Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
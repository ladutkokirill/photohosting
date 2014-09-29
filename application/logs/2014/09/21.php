<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-21 21:51:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\Controller\picture.php [ 218 ] in D:\work\test\kohana\application\classes\Controller\picture.php:218
2014-09-21 21:51:17 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 218, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:218
2014-09-21 21:55:37 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\picture.php [ 171 ] in D:\work\test\kohana\application\classes\Controller\picture.php:171
2014-09-21 21:55:37 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(171): Kohana_Core::error_handler(2, 'Division by zer...', 'D:\work\test\ko...', 171, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:171
2014-09-21 21:58:04 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\picture.php [ 171 ] in D:\work\test\kohana\application\classes\Controller\picture.php:171
2014-09-21 21:58:04 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(171): Kohana_Core::error_handler(2, 'Division by zer...', 'D:\work\test\ko...', 171, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:171
2014-09-21 22:28:08 --- CRITICAL: ErrorException [ 2 ]: imagesx() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 166 ] in file:line
2014-09-21 22:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesx() expec...', 'D:\work\test\ko...', 166, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(166): imagesx('/picture/3CYZZe...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-21 22:29:49 --- CRITICAL: ErrorException [ 2 ]: imagesx() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 166 ] in file:line
2014-09-21 22:29:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesx() expec...', 'D:\work\test\ko...', 166, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(166): imagesx('/picture/3CYZZe...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-21 22:30:28 --- CRITICAL: ErrorException [ 2 ]: imagesx() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 166 ] in file:line
2014-09-21 22:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesx() expec...', 'D:\work\test\ko...', 166, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(166): imagesx('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-21 22:35:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: src ~ APPPATH\classes\Controller\picture.php [ 184 ] in D:\work\test\kohana\application\classes\Controller\picture.php:184
2014-09-21 22:35:28 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(184): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 184, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:184
2014-09-21 22:46:08 --- CRITICAL: ErrorException [ 2 ]: getimagesize(D:\work\test\kohana\public\..//public/picture/thumbs/3CYZZevKODA.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 203 ] in file:line
2014-09-21 22:46:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize(D:...', 'D:\work\test\ko...', 203, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(203): getimagesize('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-21 22:46:51 --- CRITICAL: ErrorException [ 2 ]: getimagesize(D:\work\test\kohana\public\..//public/picture/thumbs/3CYZZevKODA.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 203 ] in file:line
2014-09-21 22:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize(D:...', 'D:\work\test\ko...', 203, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(203): getimagesize('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
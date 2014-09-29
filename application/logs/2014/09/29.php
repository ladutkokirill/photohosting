<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-29 12:02:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 310 ] in file:line
2014-09-29 12:02:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-29 12:03:03 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant path_creation - assumed 'path_creation' ~ APPPATH\classes\Controller\picture.php [ 141 ] in D:\work\test\kohana\application\classes\Controller\picture.php:141
2014-09-29 12:03:03 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(141): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 141, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:141
2014-09-29 12:04:04 --- CRITICAL: ErrorException [ 2 ]: include(/entity/path_creation.php): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 141 ] in D:\work\test\kohana\application\classes\Controller\picture.php:141
2014-09-29 12:04:04 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(141): Kohana_Core::error_handler(2, 'include(/entity...', 'D:\work\test\ko...', 141, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(141): Controller_Picture::action_loadkomp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:141
2014-09-29 12:04:39 --- CRITICAL: ErrorException [ 2 ]: include(/application/entity/path_creation.php): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 141 ] in D:\work\test\kohana\application\classes\Controller\picture.php:141
2014-09-29 12:04:39 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(141): Kohana_Core::error_handler(2, 'include(/applic...', 'D:\work\test\ko...', 141, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(141): Controller_Picture::action_loadkomp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:141
2014-09-29 12:05:48 --- CRITICAL: ErrorException [ 2 ]: include(/entity/path_creation.php): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 141 ] in D:\work\test\kohana\application\classes\Controller\picture.php:141
2014-09-29 12:05:48 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(141): Kohana_Core::error_handler(2, 'include(/entity...', 'D:\work\test\ko...', 141, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(141): Controller_Picture::action_loadkomp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:141
2014-09-29 12:06:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: FILES_URL ~ APPPATH\classes\Controller\picture.php [ 144 ] in D:\work\test\kohana\application\classes\Controller\picture.php:144
2014-09-29 12:06:00 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(144): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 144, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:144
2014-09-29 12:06:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: FILES_URL ~ APPPATH\classes\Controller\picture.php [ 144 ] in D:\work\test\kohana\application\classes\Controller\picture.php:144
2014-09-29 12:06:02 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(144): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 144, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:144
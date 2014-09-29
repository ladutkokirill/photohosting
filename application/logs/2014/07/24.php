<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-24 11:22:39 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Photo as array ~ APPPATH\classes\Controller\picture.php [ 56 ] in file:line
2014-07-24 11:22:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 11:24:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:24:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:25:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:25:11 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:25:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:25:20 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:27:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:27:06 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:28:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:28:09 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:33:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 11:33:59 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:12:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:12:37 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:13:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:13:59 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:20:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:20:56 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:37:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:37:04 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:53:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 12:53:05 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 13:09:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 13:09:55 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 15:11:53 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$DOCROOT ~ APPPATH\classes\Controller\picture.php [ 57 ] in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 15:11:53 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 57, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:57
2014-07-24 15:25:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 64 ] in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:25:08 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 64, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:26:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\picture.php [ 64 ] in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:26:23 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 64, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:26:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 64 ] in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:26:42 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 64, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:38:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'string' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\picture.php [ 44 ] in file:line
2014-07-24 15:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 15:38:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 64 ] in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:38:59 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 64, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:39:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\picture.php [ 64 ] in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:39:13 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 64, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:40:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 64 ] in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:40:08 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 64, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:40:41 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'picturename' ~ APPPATH\classes\Controller\picture.php [ 64 ] in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:40:41 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(64): Kohana_Core::error_handler(2, 'Illegal string ...', 'D:\work\test\ko...', 64, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:64
2014-07-24 15:45:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: ipuser ~ APPPATH\classes\Controller\picture.php [ 67 ] in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 15:45:45 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(67): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 67, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 15:46:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: ipuser ~ APPPATH\classes\Controller\picture.php [ 67 ] in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 15:46:11 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(67): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 67, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 15:47:52 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ipuser - assumed 'ipuser' ~ APPPATH\classes\Controller\picture.php [ 68 ] in D:\work\test\kohana\application\classes\Controller\picture.php:68
2014-07-24 15:47:52 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(68): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 68, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:68
2014-07-24 15:49:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: client_ip ~ APPPATH\classes\Controller\picture.php [ 68 ] in D:\work\test\kohana\application\classes\Controller\picture.php:68
2014-07-24 15:49:53 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 68, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:68
2014-07-24 15:50:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: client_ip ~ APPPATH\classes\Controller\picture.php [ 68 ] in D:\work\test\kohana\application\classes\Controller\picture.php:68
2014-07-24 15:50:12 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 68, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:68
2014-07-24 15:58:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: client_ip ~ APPPATH\classes\Controller\picture.php [ 67 ] in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 15:58:43 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 67, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 15:59:59 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant client_ip - assumed 'client_ip' ~ APPPATH\classes\Controller\picture.php [ 67 ] in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 15:59:59 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(67): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 67, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 16:00:25 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant client_ip - assumed 'client_ip' ~ APPPATH\classes\Controller\picture.php [ 67 ] in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 16:00:25 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(67): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 67, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:67
2014-07-24 16:02:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:02:55 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:04:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:04:04 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:04:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:04:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:05:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:05:01 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:07:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:07:03 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:08:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:08:01 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:08:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:08:20 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:09:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:09:33 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:10:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:10:29 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:10:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:10:53 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:11:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\classes\Controller\picture.php [ 65 ] in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:11:57 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:65
2014-07-24 16:39:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\views\picture\top.php [ 4 ] in D:\work\test\kohana\application\views\picture\top.php:4
2014-07-24 16:39:40 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
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
2014-07-24 17:22:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 108 ] in file:line
2014-07-24 17:22:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 17:29:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 93 ] in D:\work\test\kohana\application\classes\Controller\picture.php:93
2014-07-24 17:29:46 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(93): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 93, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:93
2014-07-24 17:33:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 94 ] in D:\work\test\kohana\application\classes\Controller\picture.php:94
2014-07-24 17:33:43 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 94, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:94
2014-07-24 17:34:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 94 ] in D:\work\test\kohana\application\classes\Controller\picture.php:94
2014-07-24 17:34:15 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 94, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:94
2014-07-24 17:35:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 94 ] in D:\work\test\kohana\application\classes\Controller\picture.php:94
2014-07-24 17:35:31 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 94, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:94
2014-07-24 17:36:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 94 ] in D:\work\test\kohana\application\classes\Controller\picture.php:94
2014-07-24 17:36:29 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 94, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:94
2014-07-24 17:37:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 114 ] in file:line
2014-07-24 17:37:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 17:37:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 97 ] in D:\work\test\kohana\application\classes\Controller\picture.php:97
2014-07-24 17:37:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(97): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 97, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:97
2014-07-24 17:37:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: way ~ APPPATH\classes\Controller\picture.php [ 100 ] in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-07-24 17:37:45 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 100, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadlink()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:100
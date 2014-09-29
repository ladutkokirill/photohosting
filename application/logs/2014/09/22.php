<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-22 00:06:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\classes\Controller\picture.php [ 327 ] in file:line
2014-09-22 00:06:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 00:06:28 --- CRITICAL: ErrorException [ 2 ]: imagepsloadfont(): Font file not found (font.pfm) ~ APPPATH\classes\Controller\picture.php [ 239 ] in file:line
2014-09-22 00:06:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepsloadfont...', 'D:\work\test\ko...', 239, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(239): imagepsloadfont('font.pfm')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 00:06:51 --- CRITICAL: ErrorException [ 2 ]: imagepstext() expects parameter 3 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 242 ] in file:line
2014-09-22 00:06:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepstext() e...', 'D:\work\test\ko...', 242, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(242): imagepstext(Resource id #15, '', 'Arial', 12, 0, 16777215, 50, 50)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 00:07:35 --- CRITICAL: ErrorException [ 2 ]: imagepstext() expects parameter 3 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 243 ] in file:line
2014-09-22 00:07:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepstext() e...', 'D:\work\test\ko...', 243, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(243): imagepstext(Resource id #15, '', 'Arial', 12, 0, 16777215, 50, 50)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 00:07:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: im ~ APPPATH\classes\Controller\picture.php [ 235 ] in D:\work\test\kohana\application\classes\Controller\picture.php:235
2014-09-22 00:07:58 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(235): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 235, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:235
2014-09-22 00:08:11 --- CRITICAL: ErrorException [ 2 ]: imagepstext() expects parameter 3 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 243 ] in file:line
2014-09-22 00:08:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepstext() e...', 'D:\work\test\ko...', 243, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(243): imagepstext(Resource id #15, '', 'Arial', 12, 0, 16777215, 50, 50)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:12:07 --- CRITICAL: ErrorException [ 2 ]: imagepstext() expects parameter 3 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 231 ] in file:line
2014-09-22 11:12:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepstext() e...', 'D:\work\test\ko...', 231, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(231): imagepstext(Resource id #15, '', 'Arial', 12, 0, 16777215, 50, 50)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:12:27 --- CRITICAL: ErrorException [ 2 ]: imagepstext() expects parameter 3 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 231 ] in file:line
2014-09-22 11:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepstext() e...', 'D:\work\test\ko...', 231, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(231): imagepstext(Resource id #15, '', 'Arial', 12, 0, 16777215, 50, 50)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:13:34 --- CRITICAL: ErrorException [ 2 ]: imagepstext() expects parameter 3 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 231 ] in file:line
2014-09-22 11:13:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepstext() e...', 'D:\work\test\ko...', 231, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(231): imagepstext(Resource id #15, '', 'Arial', 12, 0, 16777215, 50, 50)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:14:41 --- CRITICAL: ErrorException [ 2 ]: imagepstext() expects parameter 3 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 231 ] in file:line
2014-09-22 11:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepstext() e...', 'D:\work\test\ko...', 231, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(231): imagepstext(Resource id #15, '', 'Arial', 12, 0, 16777215, 50, 50)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:17:48 --- CRITICAL: ErrorException [ 2 ]: imagepsloadfont(): Font file not found (font.pfm) ~ APPPATH\classes\Controller\picture.php [ 227 ] in file:line
2014-09-22 11:17:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepsloadfont...', 'D:\work\test\ko...', 227, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(227): imagepsloadfont('font.pfm')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:30:04 --- CRITICAL: ErrorException [ 2 ]: Wrong parameter count for imagefttext() ~ APPPATH\classes\Controller\picture.php [ 234 ] in file:line
2014-09-22 11:30:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Wrong parameter...', 'D:\work\test\ko...', 234, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(234): imagefttext(Resource id #15, 13, '0, 255, 0', 0, './arial.ttf', 'VIEW')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:33:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: black ~ APPPATH\classes\Controller\picture.php [ 234 ] in D:\work\test\kohana\application\classes\Controller\picture.php:234
2014-09-22 11:33:42 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(234): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 234, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:234
2014-09-22 11:33:51 --- CRITICAL: ErrorException [ 2 ]: imagefttext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 236 ] in file:line
2014-09-22 11:33:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagefttext() e...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(236): imagefttext('/picture/thumbs...', 12, 0, 0, 0, '0, 255, 0', './arial.ttf', 'VIEW')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:34:30 --- CRITICAL: ErrorException [ 2 ]: imagefttext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 236 ] in file:line
2014-09-22 11:34:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagefttext() e...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(236): imagefttext('/picture/thumbs...', 12, 0, 0, 0, '0, 255, 0', './arial.ttf', 'VIEW')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:35:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: red ~ APPPATH\classes\Controller\picture.php [ 228 ] in D:\work\test\kohana\application\classes\Controller\picture.php:228
2014-09-22 11:35:09 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(228): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 228, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:228
2014-09-22 11:35:20 --- CRITICAL: ErrorException [ 2 ]: imagefilledrectangle() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 228 ] in file:line
2014-09-22 11:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagefilledrect...', 'D:\work\test\ko...', 228, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(228): imagefilledrectangle('/picture/thumbs...', 0, 0, 299, 99, 16711680)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:36:08 --- CRITICAL: ErrorException [ 2 ]: imagefilledrectangle() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 228 ] in file:line
2014-09-22 11:36:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagefilledrect...', 'D:\work\test\ko...', 228, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(228): imagefilledrectangle('/picture/thumbs...', 0, 0, 299, 99, 16711680)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:36:25 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\picture.php [ 236 ] in file:line
2014-09-22 11:36:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(236): imagefttext(Resource id #15, 12, 0, 0, 0, '0, 255, 0', './arial.ttf', 'VIEW')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:38:57 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\picture.php [ 236 ] in file:line
2014-09-22 11:38:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(236): imagefttext(Resource id #15, 12, 45, 0, 0, '0, 255, 0', './arial.ttf', 'VIEW')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:39:08 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\picture.php [ 236 ] in file:line
2014-09-22 11:39:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(236): imagefttext(Resource id #15, 12, 90, 0, 0, '0, 255, 0', './arial.ttf', 'VIEW')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:58:22 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 228 ] in file:line
2014-09-22 11:58:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 228, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(228): imagecolorallocate('/picture/thumbs...', '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 11:59:53 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 228 ] in file:line
2014-09-22 11:59:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 228, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(228): imagecolorallocate('/picture/thumbs...', '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:00:11 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 228 ] in file:line
2014-09-22 12:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 228, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(228): imagecolorallocate('/picture/thumbs...', '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:24:22 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 228 ] in file:line
2014-09-22 12:24:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 228, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(228): imagecolorallocate('/picture/thumbs...', '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:47:30 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 232 ] in file:line
2014-09-22 12:47:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 232, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(232): imagecolorallocate('/picture/thumbs...', '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:47:44 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 232 ] in file:line
2014-09-22 12:47:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 232, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(232): imagecolorallocate('/picture/thumbs...', '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:49:09 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 232 ] in file:line
2014-09-22 12:49:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 232, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(232): imagecolorallocate('/picture/thumbs...', '0', ' 255', ' 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:49:56 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects parameter 1 to be resource, array given ~ APPPATH\classes\Controller\picture.php [ 233 ] in file:line
2014-09-22 12:49:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 233, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(233): imagecolorallocate(Array, '0', ' 255', ' 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:50:11 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 233 ] in file:line
2014-09-22 12:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 233, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(233): imagecolorallocate('/picture/thumbs...', '0', ' 255', ' 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:51:32 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 233 ] in file:line
2014-09-22 12:51:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 233, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(233): imagecolorallocate('D:\work\test\ko...', '0', ' 255', ' 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:52:47 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 233 ] in file:line
2014-09-22 12:52:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 233, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(233): imagecolorallocate('D:\work\test\ko...', '0', ' 255', ' 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:52:58 --- CRITICAL: ErrorException [ 2 ]: imagefilledrectangle() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 236 ] in file:line
2014-09-22 12:52:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagefilledrect...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(236): imagefilledrectangle('/picture/thumbs...', 0, 0, 399, 29, '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:53:07 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\picture.php [ 236 ] in file:line
2014-09-22 12:53:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(236): imagefilledrectangle(Resource id #13, 0, 0, 399, 29, '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:53:40 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 245 ] in file:line
2014-09-22 12:53:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 245, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(245): imagettftext('/picture/thumbs...', 20, 0, 11, 21, '0, 255, 0', 'Gigi.ttf', '')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 12:53:55 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\picture.php [ 245 ] in file:line
2014-09-22 12:53:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\work\test\ko...', 245, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(245): imagettftext(Resource id #13, 20, 0, 11, 21, '0, 255, 0', 'Gigi.ttf', '')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:00:37 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 3 given ~ APPPATH\classes\Controller\picture.php [ 234 ] in file:line
2014-09-22 13:00:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 234, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(234): imagecolorallocate('0', ' 255', ' 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:02:28 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant imagettftext - assumed 'imagettftext' ~ APPPATH\classes\Controller\picture.php [ 248 ] in D:\work\test\kohana\application\classes\Controller\picture.php:248
2014-09-22 13:02:28 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(248): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 248, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:248
2014-09-22 13:02:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: imagettftext ~ APPPATH\classes\Controller\picture.php [ 248 ] in D:\work\test\kohana\application\classes\Controller\picture.php:248
2014-09-22 13:02:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(248): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 248, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:248
2014-09-22 13:02:55 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant image2 - assumed 'image2' ~ APPPATH\classes\Controller\picture.php [ 248 ] in D:\work\test\kohana\application\classes\Controller\picture.php:248
2014-09-22 13:02:55 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(248): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 248, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:248
2014-09-22 13:04:14 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 247 ] in file:line
2014-09-22 13:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 247, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(247): imagettftext('/picture/thumbs...', 12, 0, 10, 20, 16711680, 'Gigi.ttf', 'wdwdesrlgjktrld...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:04:36 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 247 ] in file:line
2014-09-22 13:04:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 247, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(247): imagettftext('/picture/thumbs...', 12, 0, 10, 20, 16711680, 'Gigi.ttf', 'wdwdesrlgjktrld...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:04:55 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 247 ] in file:line
2014-09-22 13:04:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 247, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(247): imagettftext('D:\work\test\ko...', 12, 0, 10, 20, 16711680, 'Gigi.ttf', 'wdwdesrlgjktrld...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:05:56 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\..//public/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:05:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:06:13 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(/public/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('/public/')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:06:39 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(/public/thumbs/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:06:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('/public/thumbs/')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:06:50 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\..//public/thumbs/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:06:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:08:12 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\..//public/piture/thumbs/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:08:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:09:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\picture.php [ 236 ] in D:\work\test\kohana\application\classes\Controller\picture.php:236
2014-09-22 13:09:06 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(236): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:236
2014-09-22 13:09:28 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 236 ] in file:line
2014-09-22 13:09:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 236, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(236): imagecolorallocate('D:\work\test\ko...', '255', '0', '0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:09:49 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 249 ] in file:line
2014-09-22 13:09:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 249, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(249): imagettftext('D:\work\test\ko...', 12, 0, 10, 20, 16711680, 'Gigi.ttf', 'wdwdesrlgjktrld...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:11:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sourse ~ APPPATH\classes\Controller\picture.php [ 261 ] in D:\work\test\kohana\application\classes\Controller\picture.php:261
2014-09-22 13:11:29 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(261): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 261, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:261
2014-09-22 13:13:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\classes\Controller\picture.php [ 255 ] in file:line
2014-09-22 13:13:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 13:15:28 --- CRITICAL: ErrorException [ 2 ]: imagettftext(): Could not find/open font ~ APPPATH\classes\Controller\picture.php [ 249 ] in file:line
2014-09-22 13:15:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext():...', 'D:\work\test\ko...', 249, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(249): imagettftext(Resource id #16, 12, 0, 10, 20, 16711680, 'c:\Windows\Font...', 'wdwdesrlgjktrld...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:19:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: source ~ APPPATH\classes\Controller\picture.php [ 254 ] in D:\work\test\kohana\application\classes\Controller\picture.php:254
2014-09-22 13:19:13 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(254): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 254, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:254
2014-09-22 13:23:04 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\..//public/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:23:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:23:34 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\..//public/picture/thumbs/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:23:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:23:57 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(/public/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:23:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('/public/')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:24:30 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\..//public/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:24:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:24:41 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\../): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:24:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:25:11 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\../): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:25:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:25:22 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\..//public/): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 13:25:47 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(D:\work\test\kohana\public\..//picture/thumbs/new.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 230 ] in file:line
2014-09-22 13:25:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 230, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(230): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 14:29:13 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\picture.php [ 180 ] in D:\work\test\kohana\application\classes\Controller\picture.php:180
2014-09-22 14:29:13 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(180): Kohana_Core::error_handler(2, 'Division by zer...', 'D:\work\test\ko...', 180, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:180
2014-09-22 14:29:26 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\picture.php [ 180 ] in D:\work\test\kohana\application\classes\Controller\picture.php:180
2014-09-22 14:29:26 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(180): Kohana_Core::error_handler(2, 'Division by zer...', 'D:\work\test\ko...', 180, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:180
2014-09-22 14:29:39 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\picture.php [ 180 ] in D:\work\test\kohana\application\classes\Controller\picture.php:180
2014-09-22 14:29:39 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(180): Kohana_Core::error_handler(2, 'Division by zer...', 'D:\work\test\ko...', 180, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:180
2014-09-22 14:29:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 216 ] in D:\work\test\kohana\application\classes\Controller\picture.php:216
2014-09-22 14:29:52 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(216): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 216, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:216
2014-09-22 14:34:27 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 8 to be string, array given ~ APPPATH\classes\Controller\picture.php [ 226 ] in file:line
2014-09-22 14:34:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 226, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(226): imagettftext(Resource id #12, 20, 0, 10, 20, 255, 'D:\work\test\ko...', Array)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 14:59:10 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\picture.php [ 187 ] in D:\work\test\kohana\application\classes\Controller\picture.php:187
2014-09-22 14:59:10 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(187): Kohana_Core::error_handler(8, 'Array to string...', 'D:\work\test\ko...', 187, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:187
2014-09-22 15:06:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 217 ] in D:\work\test\kohana\application\classes\Controller\picture.php:217
2014-09-22 15:06:00 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(217): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 217, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:217
2014-09-22 15:06:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 217 ] in D:\work\test\kohana\application\classes\Controller\picture.php:217
2014-09-22 15:06:56 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(217): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 217, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:217
2014-09-22 15:07:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 218 ] in D:\work\test\kohana\application\classes\Controller\picture.php:218
2014-09-22 15:07:21 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(218): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 218, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:218
2014-09-22 15:07:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 218 ] in D:\work\test\kohana\application\classes\Controller\picture.php:218
2014-09-22 15:07:46 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(218): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 218, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:218
2014-09-22 15:12:03 --- CRITICAL: ErrorException [ 8 ]: getimagesize(): Read error! ~ APPPATH\classes\Controller\picture.php [ 168 ] in file:line
2014-09-22 15:12:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'getimagesize():...', 'D:\work\test\ko...', 168, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(168): getimagesize('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-22 15:17:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 273 ] in file:line
2014-09-22 15:17:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 15:20:28 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\picture.php [ 187 ] in D:\work\test\kohana\application\classes\Controller\picture.php:187
2014-09-22 15:20:28 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(187): Kohana_Core::error_handler(8, 'Array to string...', 'D:\work\test\ko...', 187, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:187
2014-09-22 15:26:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 225 ] in D:\work\test\kohana\application\classes\Controller\picture.php:225
2014-09-22 15:26:29 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(225): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 225, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:225
2014-09-22 15:47:45 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant size - assumed 'size' ~ APPPATH\classes\Controller\picture.php [ 219 ] in D:\work\test\kohana\application\classes\Controller\picture.php:219
2014-09-22 15:47:45 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(219): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 219, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:219
2014-09-22 15:58:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 300 ] in file:line
2014-09-22 15:58:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 17:04:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\static.php [ 62 ] in D:\work\test\kohana\application\classes\Controller\static.php:62
2014-09-22 17:04:25 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\static.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 62, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Static->action_feedback()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\static.php:62
2014-09-22 17:05:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\static.php [ 62 ] in D:\work\test\kohana\application\classes\Controller\static.php:62
2014-09-22 17:05:01 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\static.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 62, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Static->action_feedback()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\static.php:62
2014-09-22 17:06:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\static.php [ 65 ] in file:line
2014-09-22 17:06:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-15 15:57:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\picture.php [ 144 ] in file:line
2014-09-15 15:57:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-15 16:02:09 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 146 ] in file:line
2014-09-15 16:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 146, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(146): imagettftext('/picture/GgPhSW...', 24, 0, 365, 159, 'green', 'Arial', '')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 16:02:55 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 146 ] in file:line
2014-09-15 16:02:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 146, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(146): imagettftext('/picture/GgPhSW...', 24, 0, 365, 159, 'green', 'Arial', '')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 16:03:08 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 146 ] in file:line
2014-09-15 16:03:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 146, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(146): imagettftext('/picture/GgPhSW...', 24, 0, 365, 159, 'green', 'Arial', 'rgregre')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 16:03:32 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 146 ] in file:line
2014-09-15 16:03:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 146, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(146): imagettftext('/picture/GgPhSW...', 24, 0, 365, 159, 'green', 'Arial', 'rgregre')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 16:04:33 --- CRITICAL: ErrorException [ 2 ]: imagettftext() expects parameter 1 to be resource, array given ~ APPPATH\classes\Controller\picture.php [ 146 ] in file:line
2014-09-15 16:04:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagettftext() ...', 'D:\work\test\ko...', 146, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(146): imagettftext(Array, 24, 0, 365, 159, 'green', 'Arial', 'rgregre')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 16:11:28 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 100 ] in file:line
2014-09-15 16:11:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 100, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(100): imagecolorallocate('D:\work\test\ko...', 255, 0, 0)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 16:12:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 100 ] in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:12:22 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 100, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:14:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 100 ] in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:14:58 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 100, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:15:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 100 ] in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:15:00 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 100, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:15:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 100 ] in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:15:07 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 100, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:15:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 100 ] in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:15:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 100, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:15:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: color ~ APPPATH\classes\Controller\picture.php [ 100 ] in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:15:47 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 100, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:100
2014-09-15 16:16:44 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-15 16:16:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecolorallocate('D:\work\test\ko...', '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 16:17:46 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-15 16:17:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecolorallocate('D:\work\test\ko...', '0, 255, 0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 16:18:27 --- CRITICAL: ErrorException [ 2 ]: imagecolorallocate() expects exactly 4 parameters, 2 given ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-15 16:18:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecoloralloc...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecolorallocate('D:\work\test\ko...', '0')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-15 20:49:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:49:10 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:49:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:49:39 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:50:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:50:06 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:50:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:50:14 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:50:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:50:27 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:50:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:50:35 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:51:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:51:33 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:52:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:52:00 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:52:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:52:10 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:52:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:52:18 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:53:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:53:08 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:54:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:54:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:55:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:55:27 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:55:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:55:31 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:55:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'height' in 'field list' [ UPDATE `photo` SET `height` = 300 WHERE `id` = '138' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-09-15 20:55:56 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `photo` ...', false, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(27): Kohana_Database_Query->execute()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-09-15 20:56:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:56:43 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:56:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-15 20:56:56 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(54): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
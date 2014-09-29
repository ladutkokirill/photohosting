<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-17 12:20:26 --- CRITICAL: ErrorException [ 2 ]: getimagesize(image.jpg): failed to open stream: No such file or directory ~ APPPATH\views\picture\loadkomp.php [ 65 ] in file:line
2014-09-17 12:20:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize(im...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\application\views\picture\loadkomp.php(65): getimagesize('image.jpg')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#3 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#4 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\work\test\kohana\application\views\main.php(36): Kohana_View->__toString()
#6 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#7 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#8 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#12 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in file:line
2014-09-17 12:26:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::resizeToWidth() ~ APPPATH\classes\Controller\picture.php [ 163 ] in file:line
2014-09-17 12:26:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 12:27:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: reswidth ~ APPPATH\classes\Controller\picture.php [ 163 ] in D:\work\test\kohana\application\classes\Controller\picture.php:163
2014-09-17 12:27:24 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(163): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 163, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:163
2014-09-17 12:28:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::getWidth() ~ APPPATH\classes\Model\photo.php [ 43 ] in file:line
2014-09-17 12:28:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 12:40:13 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Photo::resizeToHeigth(), called in D:\work\test\kohana\application\classes\Controller\picture.php on line 165 and defined ~ APPPATH\classes\Model\photo.php [ 52 ] in D:\work\test\kohana\application\classes\Model\photo.php:52
2014-09-17 12:40:13 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(52): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\work\test\ko...', 52, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(165): Model_Photo->resizeToHeigth()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:52
2014-09-17 12:41:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: reswidth ~ APPPATH\classes\Controller\picture.php [ 165 ] in D:\work\test\kohana\application\classes\Controller\picture.php:165
2014-09-17 12:41:04 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(165): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 165, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:165
2014-09-17 12:41:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::getHeitgh() ~ APPPATH\classes\Model\photo.php [ 53 ] in file:line
2014-09-17 12:41:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 12:42:19 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Photo::getHeigth(), called in D:\work\test\kohana\application\classes\Controller\picture.php on line 163 and defined ~ APPPATH\classes\Model\photo.php [ 41 ] in D:\work\test\kohana\application\classes\Model\photo.php:41
2014-09-17 12:42:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(41): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\work\test\ko...', 41, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(163): Model_Photo->getHeigth()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:41
2014-09-17 12:42:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: heigth ~ APPPATH\classes\Controller\picture.php [ 163 ] in D:\work\test\kohana\application\classes\Controller\picture.php:163
2014-09-17 12:42:42 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(163): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 163, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:163
2014-09-17 12:42:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: height ~ APPPATH\classes\Controller\picture.php [ 163 ] in D:\work\test\kohana\application\classes\Controller\picture.php:163
2014-09-17 12:42:56 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(163): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 163, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:163
2014-09-17 12:43:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::getHeitgh() ~ APPPATH\classes\Model\photo.php [ 53 ] in file:line
2014-09-17 12:43:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 12:44:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Picture::getHeitgh() ~ APPPATH\classes\Controller\picture.php [ 164 ] in file:line
2014-09-17 12:44:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 12:50:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Controller\picture.php [ 28 ] in D:\work\test\kohana\application\classes\Controller\picture.php:28
2014-09-17 12:50:04 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 28, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:28
2014-09-17 12:50:21 --- CRITICAL: ErrorException [ 2 ]: imagesy() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 31 ] in file:line
2014-09-17 12:50:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesy() expec...', 'D:\work\test\ko...', 31, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(31): imagesy('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 12:52:17 --- CRITICAL: ErrorException [ 2 ]: imagesy() expects parameter 1 to be resource, null given ~ APPPATH\classes\Controller\picture.php [ 31 ] in file:line
2014-09-17 12:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesy() expec...', 'D:\work\test\ko...', 31, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(31): imagesy(NULL)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 13:33:20 --- CRITICAL: ErrorException [ 2 ]: getimagesize(DOCROOT. '/public/'./picture/16Q_i2yXG0s.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 164 ] in file:line
2014-09-17 13:33:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize(DO...', 'D:\work\test\ko...', 164, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(164): getimagesize('DOCROOT. '/publ...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 13:34:57 --- CRITICAL: ErrorException [ 8 ]: getimagesize(): Read error! ~ APPPATH\classes\Controller\picture.php [ 164 ] in file:line
2014-09-17 13:34:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'getimagesize():...', 'D:\work\test\ko...', 164, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(164): getimagesize('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 13:35:19 --- CRITICAL: ErrorException [ 8 ]: getimagesize(): Read error! ~ APPPATH\classes\Controller\picture.php [ 164 ] in file:line
2014-09-17 13:35:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'getimagesize():...', 'D:\work\test\ko...', 164, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(164): getimagesize('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 13:36:15 --- CRITICAL: ErrorException [ 2 ]: getimagesize(/picture/16Q_i2yXG0s.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 164 ] in file:line
2014-09-17 13:36:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize(/p...', 'D:\work\test\ko...', 164, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(164): getimagesize('/picture/16Q_i2...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 13:36:29 --- CRITICAL: ErrorException [ 2 ]: getimagesize(/public//picture/16Q_i2yXG0s.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 164 ] in file:line
2014-09-17 13:36:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize(/p...', 'D:\work\test\ko...', 164, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(164): getimagesize('/public//pictur...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 13:36:44 --- CRITICAL: ErrorException [ 8 ]: getimagesize(): Read error! ~ APPPATH\classes\Controller\picture.php [ 164 ] in file:line
2014-09-17 13:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'getimagesize():...', 'D:\work\test\ko...', 164, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(164): getimagesize('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 13:37:16 --- CRITICAL: ErrorException [ 8 ]: getimagesize(): Read error! ~ APPPATH\classes\Controller\picture.php [ 164 ] in file:line
2014-09-17 13:37:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'getimagesize():...', 'D:\work\test\ko...', 164, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(164): getimagesize('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 13:55:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: reswidth ~ APPPATH\classes\Controller\picture.php [ 159 ] in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 13:55:58 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 159, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 13:56:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _POSTp ~ APPPATH\classes\Controller\picture.php [ 159 ] in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 13:56:41 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 159, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 13:56:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::getHeitgh() ~ APPPATH\classes\Model\photo.php [ 45 ] in file:line
2014-09-17 13:56:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 14:37:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::resizeToHeight() ~ APPPATH\classes\Controller\picture.php [ 159 ] in file:line
2014-09-17 14:37:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 14:37:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: height ~ APPPATH\classes\Controller\picture.php [ 159 ] in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 14:37:41 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 159, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 14:38:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: heigth ~ APPPATH\classes\Controller\picture.php [ 159 ] in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 14:38:02 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 159, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 14:38:15 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Photo::resizeToHeight(), called in D:\work\test\kohana\application\classes\Controller\picture.php on line 159 and defined ~ APPPATH\classes\Model\photo.php [ 49 ] in D:\work\test\kohana\application\classes\Model\photo.php:49
2014-09-17 14:38:15 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(49): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\work\test\ko...', 49, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:49
2014-09-17 14:39:29 --- CRITICAL: ErrorException [ 2 ]: imagesy() expects parameter 1 to be resource, string given ~ APPPATH\classes\Model\photo.php [ 46 ] in file:line
2014-09-17 14:39:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesy() expec...', 'D:\work\test\ko...', 46, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(46): imagesy('/picture/16Q_i2...')
#2 D:\work\test\kohana\application\classes\Model\photo.php(50): Model_Photo->getHeight()
#3 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight('200')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in file:line
2014-09-17 14:43:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Model\photo.php [ 46 ] in D:\work\test\kohana\application\classes\Model\photo.php:46
2014-09-17 14:43:59 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 46, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(50): Model_Photo->getHeight()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight('200')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:46
2014-09-17 14:44:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Model\photo.php [ 46 ] in D:\work\test\kohana\application\classes\Model\photo.php:46
2014-09-17 14:44:21 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 46, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(50): Model_Photo->getHeight()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight('200')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:46
2014-09-17 14:44:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Model\photo.php [ 48 ] in D:\work\test\kohana\application\classes\Model\photo.php:48
2014-09-17 14:44:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 48, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(52): Model_Photo->getHeight()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight('200')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:48
2014-09-17 14:45:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Model\photo.php [ 48 ] in D:\work\test\kohana\application\classes\Model\photo.php:48
2014-09-17 14:45:16 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 48, Array)
#1 D:\work\test\kohana\application\classes\Model\photo.php(52): Model_Photo->getHeight()
#2 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight('200')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\application\classes\Model\photo.php:48
2014-09-17 14:45:32 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 14:45:32 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 D:\work\test\kohana\application\classes\Model\photo.php(48): Kohana_ORM->__get('image')
#2 D:\work\test\kohana\application\classes\Model\photo.php(52): Model_Photo->getHeight()
#3 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight('200')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 14:46:04 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 14:46:04 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 D:\work\test\kohana\application\classes\Model\photo.php(48): Kohana_ORM->__get('image')
#2 D:\work\test\kohana\application\classes\Model\photo.php(52): Model_Photo->getHeight()
#3 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight('200')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:03:13 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:03:13 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 D:\work\test\kohana\application\classes\Model\photo.php(48): Kohana_ORM->__get('image')
#2 D:\work\test\kohana\application\classes\Model\photo.php(52): Model_Photo->getHeight()
#3 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToHeight('200')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:03:45 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:03:45 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 D:\work\test\kohana\application\classes\Model\photo.php(44): Kohana_ORM->__get('image')
#2 D:\work\test\kohana\application\classes\Model\photo.php(58): Model_Photo->getWidth()
#3 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToWidth('200')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:42:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\picture.php [ 147 ] in file:line
2014-09-17 15:42:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 15:42:40 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:42:40 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 D:\work\test\kohana\application\classes\Model\photo.php(44): Kohana_ORM->__get('image')
#2 D:\work\test\kohana\application\classes\Model\photo.php(58): Model_Photo->getWidth()
#3 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToWidth('200')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:42:58 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:42:58 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 D:\work\test\kohana\application\classes\Model\photo.php(44): Kohana_ORM->__get('image')
#2 D:\work\test\kohana\application\classes\Model\photo.php(58): Model_Photo->getWidth()
#3 D:\work\test\kohana\application\classes\Controller\picture.php(159): Model_Photo->resizeToWidth('')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 15:49:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: width ~ APPPATH\classes\Controller\picture.php [ 159 ] in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 15:49:38 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 159, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 15:50:08 --- CRITICAL: ErrorException [ 2 ]: imagecreatetruecolor() expects parameter 1 to be long, string given ~ APPPATH\classes\Controller\picture.php [ 159 ] in file:line
2014-09-17 15:50:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\work\test\ko...', 159, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(159): imagecreatetruecolor('', '')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 15:51:10 --- CRITICAL: ErrorException [ 2 ]: imagecreatetruecolor() expects parameter 1 to be long, string given ~ APPPATH\classes\Controller\picture.php [ 159 ] in file:line
2014-09-17 15:51:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\work\test\ko...', 159, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(159): imagecreatetruecolor('', '')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 15:52:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Controller\picture.php [ 159 ] in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 15:52:48 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(159): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 159, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:159
2014-09-17 15:52:56 --- CRITICAL: ErrorException [ 2 ]: imagecreatetruecolor() expects parameter 1 to be long, string given ~ APPPATH\classes\Controller\picture.php [ 160 ] in file:line
2014-09-17 15:52:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\work\test\ko...', 160, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(160): imagecreatetruecolor('', 200)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 16:02:25 --- CRITICAL: ErrorException [ 2 ]: imagecreatetruecolor() expects exactly 2 parameters, 0 given ~ APPPATH\classes\Controller\picture.php [ 160 ] in file:line
2014-09-17 16:02:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\work\test\ko...', 160, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(160): imagecreatetruecolor()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 16:04:58 --- CRITICAL: ErrorException [ 2 ]: imagesx() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 161 ] in file:line
2014-09-17 16:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesx() expec...', 'D:\work\test\ko...', 161, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(161): imagesx('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 16:05:14 --- CRITICAL: ErrorException [ 2 ]: imagesx() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 161 ] in file:line
2014-09-17 16:05:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesx() expec...', 'D:\work\test\ko...', 161, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(161): imagesx('/picture/OM7G3X...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 16:10:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Picture::getHeight() ~ APPPATH\classes\Controller\picture.php [ 161 ] in file:line
2014-09-17 16:10:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 16:11:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\picture.php [ 160 ] in file:line
2014-09-17 16:11:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 16:12:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\picture.php [ 160 ] in file:line
2014-09-17 16:12:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 16:13:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Picture::getHeight() ~ APPPATH\classes\Controller\picture.php [ 161 ] in file:line
2014-09-17 16:13:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 16:13:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Picture::getHeight() ~ APPPATH\classes\Controller\picture.php [ 161 ] in file:line
2014-09-17 16:13:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 16:14:06 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 16:14:06 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 D:\work\test\kohana\application\classes\Model\photo.php(43): Kohana_ORM->__get('image')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(161): Model_Photo->getHeight()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 16:14:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::Height() ~ APPPATH\classes\Controller\picture.php [ 161 ] in file:line
2014-09-17 16:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 16:14:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::Heigth() ~ APPPATH\classes\Controller\picture.php [ 161 ] in file:line
2014-09-17 16:14:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 16:15:20 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 16:15:20 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('image')
#1 D:\work\test\kohana\application\classes\Model\photo.php(43): Kohana_ORM->__get('image')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(161): Model_Photo->getHeight()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-17 16:15:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Picture::getHeight() ~ APPPATH\classes\Controller\picture.php [ 161 ] in file:line
2014-09-17 16:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 17:24:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\picture.php [ 191 ] in file:line
2014-09-17 17:24:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-17 17:25:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Model\photo.php [ 60 ] in D:\work\test\kohana\application\classes\Model\photo.php:60
2014-09-17 17:25:07 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 60, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(161): Model_Photo->resWidth()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:60
2014-09-17 17:28:32 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(/picture/sq7oXOjzbLM.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 162 ] in file:line
2014-09-17 17:28:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 162, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(162): imagecreatefromjpeg('/picture/sq7oXO...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-17 17:29:13 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\picture.php [ 161 ] in D:\work\test\kohana\application\classes\Controller\picture.php:161
2014-09-17 17:29:13 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(161): Kohana_Core::error_handler(8, 'Array to string...', 'D:\work\test\ko...', 161, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:161
2014-09-17 17:29:25 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\Controller\picture.php [ 161 ] in D:\work\test\kohana\application\classes\Controller\picture.php:161
2014-09-17 17:29:25 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(161): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 161, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:161
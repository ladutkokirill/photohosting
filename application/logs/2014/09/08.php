<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-08 11:32:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Controller\picture.php [ 50 ] in file:line
2014-09-08 11:32:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-08 11:45:55 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant width - assumed 'width' ~ APPPATH\classes\Controller\picture.php [ 47 ] in D:\work\test\kohana\application\classes\Controller\picture.php:47
2014-09-08 11:45:55 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(47): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 47, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:47
2014-09-08 11:52:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: turn ~ APPPATH\classes\Controller\picture.php [ 46 ] in D:\work\test\kohana\application\classes\Controller\picture.php:46
2014-09-08 11:52:53 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 46, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:46
2014-09-08 12:02:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heightload ~ APPPATH\classes\Controller\picture.php [ 131 ] in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:02:30 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 131, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:03:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heightload ~ APPPATH\classes\Controller\picture.php [ 131 ] in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:03:11 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 131, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:03:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heightload ~ APPPATH\classes\Controller\picture.php [ 131 ] in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:03:27 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 131, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:04:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heightload ~ APPPATH\classes\Controller\picture.php [ 131 ] in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:04:35 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 131, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:05:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heightload ~ APPPATH\classes\Controller\picture.php [ 131 ] in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:05:01 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 131, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:06:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heightload ~ APPPATH\classes\Controller\picture.php [ 131 ] in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:06:15 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 131, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:06:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heightload ~ APPPATH\classes\Controller\picture.php [ 131 ] in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:06:27 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 131, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:06:49 --- CRITICAL: Kohana_Exception [ 0 ]: The heigth property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-09-08 12:06:49 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('heigth', '500')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_ORM->__set('heigth', '500')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-09-08 12:07:28 --- CRITICAL: Kohana_Exception [ 0 ]: The heigth property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-09-08 12:07:28 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('heigth', '500')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_ORM->__set('heigth', '500')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-09-08 12:20:16 --- CRITICAL: Kohana_Exception [ 0 ]: The heigth property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-09-08 12:20:16 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('heigth', '500')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_ORM->__set('heigth', '500')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-09-08 12:22:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Controller\picture.php [ 131 ] in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:22:42 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(131): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 131, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:131
2014-09-08 12:28:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\picture\look.php [ 9 ] in file:line
2014-09-08 12:28:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-08 12:30:08 --- CRITICAL: Kohana_Exception [ 0 ]: The heidth property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 12:30:08 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('heidth')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('heidth')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 12:30:27 --- CRITICAL: Kohana_Exception [ 0 ]: The heidht property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 12:30:27 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('heidht')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('heidht')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:08:48 --- CRITICAL: Kohana_Exception [ 0 ]: The height property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:08:48 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('height')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('height')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:14 --- CRITICAL: Kohana_Exception [ 0 ]: The height property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:14 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('height')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('height')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:16 --- CRITICAL: Kohana_Exception [ 0 ]: The height property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:16 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('height')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('height')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:17 --- CRITICAL: Kohana_Exception [ 0 ]: The height property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:17 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('height')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('height')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:17 --- CRITICAL: Kohana_Exception [ 0 ]: The height property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:17 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('height')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('height')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:37 --- CRITICAL: Kohana_Exception [ 0 ]: The height property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:37 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('height')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('height')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:55 --- CRITICAL: Kohana_Exception [ 0 ]: The height property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:09:55 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('height')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('height')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:10:11 --- CRITICAL: Kohana_Exception [ 0 ]: The height property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:10:11 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('height')
#1 D:\work\test\kohana\application\views\picture\look.php(9): Kohana_ORM->__get('height')
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
#14 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#15 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-08 14:16:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Controller\picture.php [ 44 ] in D:\work\test\kohana\application\classes\Controller\picture.php:44
2014-09-08 14:16:28 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 44, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:44
2014-09-08 14:19:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Controller\picture.php [ 44 ] in D:\work\test\kohana\application\classes\Controller\picture.php:44
2014-09-08 14:19:33 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 44, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:44
2014-09-08 14:19:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: height ~ APPPATH\classes\Controller\picture.php [ 51 ] in D:\work\test\kohana\application\classes\Controller\picture.php:51
2014-09-08 14:19:49 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 51, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:51
2014-09-08 14:21:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Controller\picture.php [ 44 ] in D:\work\test\kohana\application\classes\Controller\picture.php:44
2014-09-08 14:21:05 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 44, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:44
2014-09-08 14:22:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Controller\picture.php [ 45 ] in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 14:22:28 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 45, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:10:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Controller\picture.php [ 45 ] in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:10:47 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 45, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:10:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Controller\picture.php [ 45 ] in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:10:57 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 45, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:11:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Controller\picture.php [ 45 ] in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:11:09 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 45, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:11:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Controller\picture.php [ 45 ] in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:11:33 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 45, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:11:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Controller\picture.php [ 45 ] in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:11:43 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 45, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:11:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Controller\picture.php [ 46 ] in D:\work\test\kohana\application\classes\Controller\picture.php:46
2014-09-08 15:11:55 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 46, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:46
2014-09-08 15:49:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: heigth ~ APPPATH\classes\Controller\picture.php [ 53 ] in D:\work\test\kohana\application\classes\Controller\picture.php:53
2014-09-08 15:49:04 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:53
2014-09-08 15:52:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: src ~ APPPATH\classes\Controller\picture.php [ 45 ] in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:52:19 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 45, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:45
2014-09-08 15:57:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Controller\picture.php [ 43 ] in D:\work\test\kohana\application\classes\Controller\picture.php:43
2014-09-08 15:57:32 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 43, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:43
2014-09-08 15:57:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Controller\picture.php [ 50 ] in D:\work\test\kohana\application\classes\Controller\picture.php:50
2014-09-08 15:57:53 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 50, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:50
2014-09-08 15:58:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Controller\picture.php [ 43 ] in D:\work\test\kohana\application\classes\Controller\picture.php:43
2014-09-08 15:58:23 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 43, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:43
2014-09-08 16:07:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: height ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-08 16:07:07 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-08 16:08:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:08:59 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:09:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:09:04 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:09:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:09:10 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->editImageWidth('139')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:09:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:09:33 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->editImageWidth('139')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:10:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:10:05 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->editImageWidth('139')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:10:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:10:17 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->editImageWidth('139')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:11:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:11:51 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:12:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:12:27 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:12:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:12:33 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('139')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:13:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: widht ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:13:37 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('139')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:13:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: widht ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:13:39 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:13:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:13:50 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:14:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:14:14 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:14:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: heigth ~ APPPATH\classes\Model\photo.php [ 25 ] in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-08 16:14:30 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 25, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(47): Model_Photo->editImageHeigth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:25
2014-09-08 16:15:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:15:45 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:31:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:31:40 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:32:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:32:03 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:32:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:32:51 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('140')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:33:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:33:13 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('140')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:37:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:37:10 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('140')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:37:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: width ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 16:37:20 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(46): Model_Photo->editImageWidth('138')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-09-08 17:19:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function editImageTurn() ~ APPPATH\classes\Controller\picture.php [ 48 ] in file:line
2014-09-08 17:19:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-08 17:24:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function editImageTurn() ~ APPPATH\classes\Controller\picture.php [ 48 ] in file:line
2014-09-08 17:24:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-08 17:25:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function editImageTurn() ~ APPPATH\classes\Controller\picture.php [ 48 ] in file:line
2014-09-08 17:25:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-08 17:26:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function editImageTurn() ~ APPPATH\classes\Controller\picture.php [ 48 ] in file:line
2014-09-08 17:26:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-08 17:26:28 --- CRITICAL: ErrorException [ 2 ]: imagerotate() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 52 ] in file:line
2014-09-08 17:26:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagerotate() e...', 'D:\work\test\ko...', 52, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(52): imagerotate('/picture/ay2fA7...', '180', 0)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-09-08 17:29:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::way() ~ APPPATH\classes\Controller\picture.php [ 51 ] in file:line
2014-09-08 17:29:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-08 17:30:46 --- CRITICAL: ErrorException [ 2 ]: imagerotate() expects parameter 1 to be resource, string given ~ APPPATH\classes\Controller\picture.php [ 53 ] in file:line
2014-09-08 17:30:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagerotate() e...', 'D:\work\test\ko...', 53, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(53): imagerotate('/picture/ay2fA7...', '180', 0)
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line